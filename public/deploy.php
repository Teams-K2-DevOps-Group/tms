<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

// require __DIR__ . '/vendor/autoload.php';
require __DIR__.'/../vendor/autoload.php';

use Dotenv\Dotenv;

$logfile = '/tmp/deploy.log';
file_put_contents($logfile, "=== Deployment started ===\n", FILE_APPEND);

try {
    $dotenv = Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    $expectedToken = $_ENV['DEPLOY_WEBHOOK_TOKEN'] ?? '';
    $authHeader = $_SERVER['HTTP_AUTHORIZATION'] ?? '';

    if ($authHeader !== 'Bearer ' . $expectedToken) {
        http_response_code(403);
        echo 'Unauthorized';
        file_put_contents($logfile, "Unauthorized access\n", FILE_APPEND);
        exit;
    }

    $output = [];

    // Pull latest changes from GitHub
    exec('cd /var/www/tms && git reset --hard HEAD && git pull origin main 2>&1', $output);
    file_put_contents($logfile, implode("\n", $output) . "\n", FILE_APPEND);

    // Install dependencies
    exec('cd /var/www/tms && composer install --no-dev --optimize-autoloader 2>&1', $output);
    file_put_contents($logfile, implode("\n", $output) . "\n", FILE_APPEND);

    // Run migrations
    exec('cd /var/www/tms && php artisan migrate --force 2>&1', $output);
    file_put_contents($logfile, implode("\n", $output) . "\n", FILE_APPEND);

    // Clear and cache configs
    exec('cd /var/www/tms && php artisan config:cache 2>&1', $output);
    exec('cd /var/www/tms && php artisan route:cache 2>&1', $output);
    exec('cd /var/www/tms && php artisan view:clear 2>&1', $output);
    file_put_contents($logfile, implode("\n", $output) . "\n", FILE_APPEND);

    // Set correct permissions
    exec('chmod -R 775 /var/www/tms/storage /var/www/tms/bootstrap/cache 2>&1', $output);
    exec('chown -R apache:apache /var/www/tms/storage /var/www/tms/bootstrap/cache 2>&1', $output);

    file_put_contents($logfile, "=== Deployment completed successfully ===\n", FILE_APPEND);
    echo "Deployment successful.";
} catch (Throwable $e) {
    file_put_contents($logfile, "ERROR: " . $e->getMessage() . "\n", FILE_APPEND);
    http_response_code(500);
    echo "Deployment failed.";
}

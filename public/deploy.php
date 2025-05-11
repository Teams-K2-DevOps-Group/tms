<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require __DIR__ . '/vendor/autoload.php';
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
    exec('cd /var/www/tms && git pull origin main && git add . && git commit -m "Deploy from GitHub Actions" && git push origin main', $output);
    file_put_contents($logfile, implode("\n", $output) . "\n", FILE_APPEND);

    exec('composer install --no-dev --optimize-autoloader', $output);
    file_put_contents($logfile, implode("\n", $output) . "\n", FILE_APPEND);

    exec('php artisan migrate --force', $output);
    file_put_contents($logfile, implode("\n", $output) . "\n", FILE_APPEND);

    // Clear and cache the configuration, routes, and views
    exec('php artisan config:cache', $output);
    file_put_contents($logfile, implode("\n", $output) . "\n", FILE_APPEND);

    exec('php artisan route:cache', $output);
    file_put_contents($logfile, implode("\n", $output) . "\n", FILE_APPEND);

    exec('php artisan view:clear', $output);
    file_put_contents($logfile, implode("\n", $output) . "\n", FILE_APPEND);

    exec('chmod -R 775 /var/www/tms/storage /var/www/tms/bootstrap/cache', $output);
    exec('chown -R apache:apache /var/www/tms/storage /var/www/tms/bootstrap/cache', $output);

    file_put_contents($logfile, "=== Deployment completed successfully ===\n", FILE_APPEND);
    echo implode("\n", $output);
} catch (Throwable $e) {
    file_put_contents($logfile, "ERROR: " . $e->getMessage() . "\n", FILE_APPEND);
    http_response_code(500);
    echo "Deployment failed.";
}

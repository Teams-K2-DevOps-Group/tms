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
    exec('cd /var/www/tms && git pull origin main && git add . && git commit -m "Deploy from GitHub Actions" && git push origin main && composer install --no-dev --optimize-autoloader && php artisan migrate --force && php artisan config:cache && php artisan route:cache && php artisan view:clear 2>&1', $output);

    file_put_contents($logfile, implode("\n", $output) . "\n", FILE_APPEND);
    echo implode("\n", $output);
} catch (Throwable $e) {
    file_put_contents($logfile, "ERROR: " . $e->getMessage() . "\n", FILE_APPEND);
    http_response_code(500);
    echo "Deployment failed.";
}

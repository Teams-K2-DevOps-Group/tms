<?php
require __DIR__ . '/vendor/autoload.php';
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$expectedToken = $_ENV['DEPLOY_WEBHOOK_TOKEN'] ?? '';
$authHeader = $_SERVER['HTTP_AUTHORIZATION'] ?? '';

if ($authHeader !== 'Bearer ' . $expectedToken) {
    http_response_code(403);
    echo 'Unauthorized';
    exit;
}

$output = [];
exec('cd /var/www/tms && git pull origin main && composer install --no-dev --optimize-autoloader && php artisan migrate --force && php artisan config:cache && php artisan route:cache && php artisan view:clear', $output);

// Log output
file_put_contents('/tmp/deploy.log', implode("\n", $output));
echo implode("\n", $output);

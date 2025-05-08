<?php
require __DIR__ . '/vendor/autoload.php';
use Dotenv\Dotenv;

// Load environment variables
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Validate token
$expectedToken = $_ENV['DEPLOY_WEBHOOK_TOKEN'] ?? '';
$authHeader = $_SERVER['HTTP_AUTHORIZATION'] ?? '';

if ($authHeader !== 'Bearer ' . $expectedToken) {
    http_response_code(403);
    echo 'Unauthorized';
    exit;
}

// Deployment commands
$output = [];
exec('cd /var/www/tms && git pull origin main && composer install --no-dev --optimize-autoloader && php artisan migrate --force && php artisan config:cache && php artisan route:cache', $output);
echo implode("\n", $output);

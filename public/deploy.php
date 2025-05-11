<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$logfile = '/tmp/deploy.log';
file_put_contents($logfile, "=== Deployment started ===\n", FILE_APPEND);

try {
    file_put_contents($logfile, "[Step 1] Loading Composer Autoloader...\n", FILE_APPEND);
    require __DIR__ . '/../vendor/autoload.php';

    file_put_contents($logfile, "[Step 2] Loading .env file...\n", FILE_APPEND);
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
    $dotenv->load();

    file_put_contents($logfile, "[Step 3] Validating Authorization...\n", FILE_APPEND);
    $expectedToken = $_ENV['DEPLOY_WEBHOOK_TOKEN'] ?? '';
    $authHeader = $_SERVER['HTTP_AUTHORIZATION'] ?? '';

    if ($authHeader !== 'Bearer ' . $expectedToken) {
        http_response_code(403);
        echo 'Unauthorized';
        file_put_contents($logfile, "[ERROR] Unauthorized access. Provided: $authHeader\n", FILE_APPEND);
        exit;
    }

    file_put_contents($logfile, "[Step 4] Authorization OK. Starting deployment...\n", FILE_APPEND);
    $output = [];

    // Pull latest changes from GitHub using safe reset
    exec('cd /var/www/tms && git fetch origin main && git reset --hard origin/main 2>&1', $output);
    file_put_contents($logfile, "[Git Sync Output]\n" . implode("\n", $output) . "\n", FILE_APPEND);

    // Install dependencies
    $output = [];
    exec('cd /var/www/tms && composer install --no-dev --optimize-autoloader 2>&1', $output);
    file_put_contents($logfile, "[Composer Install Output]\n" . implode("\n", $output) . "\n", FILE_APPEND);

    // Run migrations
    $output = [];
    exec('cd /var/www/tms && php artisan migrate --force 2>&1', $output);
    file_put_contents($logfile, "[Migration Output]\n" . implode("\n", $output) . "\n", FILE_APPEND);

    // Clear and cache configs
    $output = [];
    exec('cd /var/www/tms && php artisan config:cache 2>&1', $output);
    exec('cd /var/www/tms && php artisan route:cache 2>&1', $output);
    exec('cd /var/www/tms && php artisan view:clear 2>&1', $output);
    file_put_contents($logfile, "[Cache Commands Output]\n" . implode("\n", $output) . "\n", FILE_APPEND);

    // Set correct permissions
    $output = [];
    exec('chmod -R 775 /var/www/tms/storage /var/www/tms/bootstrap/cache 2>&1', $output);
    exec('chown -R apache:apache /var/www/tms/storage /var/www/tms/bootstrap/cache 2>&1', $output);
    file_put_contents($logfile, "[Permissions Output]\n" . implode("\n", $output) . "\n", FILE_APPEND);

    file_put_contents($logfile, "=== Deployment completed successfully ===\n", FILE_APPEND);
    echo "Deployment successful.";
} catch (Throwable $e) {
    file_put_contents($logfile, "[ERROR] " . $e->getMessage() . "\n", FILE_APPEND);
    http_response_code(500);
    echo "Deployment failed.";
}

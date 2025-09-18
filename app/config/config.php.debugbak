<?php
// Protect direct access
if (basename($_SERVER['PHP_SELF']) == 'config.php') {
    header('HTTP/1.0 403 Forbidden');
    exit('Direct access not allowed.');
}

try {
    // Driver: 'mysql' or 'pgsql'
    if (!defined('DB_DRIVER')) define('DB_DRIVER', getenv('DB_DRIVER') ?: 'pgsql');

    // Connection settings with safe defaults for the Docker setup
    if (!defined('HOST')) define('HOST', getenv('DB_HOST') ?: 'db');
    if (!defined('DBNAME')) define('DBNAME', getenv('DB_NAME') ?: 'farmfresh');
    if (!defined('USER')) define('USER', getenv('DB_USER') ?: 'appuser');
    if (!defined('PASSWORD')) define('PASSWORD', getenv('DB_PASSWORD') ?: 'appuserpassword');
    if (!defined('PORT')) define('PORT', getenv('DB_PORT') ?: (DB_DRIVER === 'pgsql' ? '5432' : '3306'));

    // Build DSN depending on driver
    if (DB_DRIVER === 'pgsql') {
        $dsn = sprintf('pgsql:host=%s;port=%s;dbname=%s', HOST, PORT, DBNAME);
    } else {
        // mysql
        $dsn = sprintf('mysql:host=%s;port=%s;dbname=%s;charset=utf8mb4', HOST, PORT, DBNAME);
    }

    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];

    $conn = new PDO($dsn, USER, PASSWORD, $options);

    // If you mount a CA cert for TLS and need to enable it, handle it outside here (PDO pgsql TLS handled by libpq env vars)
} catch (PDOException $e) {
    // DEV DEBUG: show full PDO error in browser (temporary).
    // IMPORTANT: remove this before production.
    $msg = 'DB error: ' . $e->getMessage();
    error_log($msg);
    // Show the full message in the page so we can see the cause
    header('Content-Type: text/plain; charset=utf-8');
    echo "DEBUG — Database connection error:\n\n";
    echo $msg . "\n\n";
    // Also dump the DSN and env vars we used (sanitized)
    echo "DSN: " . (defined('DB_DRIVER') && DB_DRIVER === 'pgsql' ? sprintf('pgsql:host=%s;port=%s;dbname=%s', HOST, PORT, DBNAME) : sprintf('mysql:host=%s;port=%s;dbname=%s', HOST, PORT, DBNAME)) . "\n";
    echo "DB_USER: " . USER . "\n";
    // do NOT echo PASSWORD in production — but for local debugging you may uncomment the next line if needed:
    // echo "DB_PASSWORD: " . PASSWORD . "\n";
    exit;
}

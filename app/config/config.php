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
    if (!defined('HOST')) define('HOST', getenv('DB_HOST') ?: 'dpg-d36cgbvfte5s73bbdfag-a');
    if (!defined('DBNAME')) define('DBNAME', getenv('DB_NAME') ?: 'init_pg_sql');
    if (!defined('USER')) define('USER', getenv('DB_USER') ?: 'init_pg_sql_user');
    if (!defined('PASSWORD')) define('PASSWORD', getenv('DB_PASSWORD') ?: 'JeNiXronZueAdPWOufzGl2C2So88Eo3x');
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
    error_log('DB error: ' . $e->getMessage());
    // show safe message
    die('Database connection failed. Check container logs for details.');
}

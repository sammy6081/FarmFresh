<?php
// debug-only DB test (remove after use)
try {
    $driver = getenv('DB_DRIVER') ?: 'pgsql';
    $host   = getenv('DB_HOST') ?: 'db';
    $db     = getenv('DB_NAME') ?: 'farmfresh';
    $user   = getenv('DB_USER') ?: 'appuser';
    $pass   = getenv('DB_PASSWORD') ?: 'appuserpassword';
    $port   = getenv('DB_PORT') ?: ($driver === 'pgsql' ? 5432 : 3306);

    if ($driver === 'pgsql') {
        $dsn = "pgsql:host={$host};port={$port};dbname={$db}";
    } else {
        $dsn = "mysql:host={$host};port={$port};dbname={$db};charset=utf8mb4";
    }

    $pdo = new PDO($dsn, $user, $pass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    echo "OK  connected to DB ({$driver})\n\n";
    echo "Database has tables:\n";
    if ($driver === 'pgsql') {
        $rows = $pdo->query("SELECT tablename FROM pg_tables WHERE schemaname='public'")->fetchAll(PDO::FETCH_COLUMN);
        echo implode("\n", $rows);
    } else {
        $rows = $pdo->query("SHOW TABLES")->fetchAll(PDO::FETCH_NUM);
        foreach ($rows as $r) echo $r[0] . "\n";
    }
} catch (Exception $e) {
    echo "ERROR: " . $e->getMessage();
}
?>

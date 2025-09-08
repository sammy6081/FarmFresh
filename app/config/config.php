<?php
if (basename($_SERVER['PHP_SELF']) == 'config.php') {
        header('HTTP/1.0 403 Forbidden');
        exit('Direct access not allowed.');
    }



try {

    //Host
    if(!defined('HOST')) define('HOST', getenv('DB_HOST') ?: 'db');
 
    //Database
    if(!defined('DBNAME')) define('DBNAME', getenv('DB_NAME') ?: 'farmfresh');

    //User
    if(!defined('USER')) define('USER', getenv('DB_USER') ?: 'appuser');

    //Password
    if(!defined('PASSWORD')) define('PASSWORD', getenv('DB_PASSWORD') ?: 'appuserpassword');

    define('PORT', getenv('DB_PORT') ?: '21482');

    $conn = new PDO('mysql:host='.HOST.';dbname='.DBNAME.';port='.PORT, USER, PASSWORD);
    $conn->ssl_set(null, null, '/var/www/html/ca.pem', null, null);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    echo $e->getMessage();
}




?>
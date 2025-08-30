<?php
if (basename($_SERVER['PHP_SELF']) == 'config.php') {
        header('HTTP/1.0 403 Forbidden');
        exit('Direct access not allowed.');
    }



try {

    //Host
    if(!defined('HOST')) define('HOST', 'localhost');
 
    //Database
    if(!defined('DBNAME')) define('DBNAME', 'farmfresh');

    //User
    if(!defined('USER')) define('USER', 'root');

    //Password
    if(!defined('PASSWORD')) define('PASSWORD', '');

    $conn = new PDO('mysql:host='.HOST.';dbname='.DBNAME, USER, PASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    echo $e->getMessage();
}




?>
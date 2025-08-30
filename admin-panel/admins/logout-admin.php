<?php
session_start();
session_unset();
session_destroy();

header('location:http://localhost/Freshcery/admin-panel/admins/login-admins.php');
exit;

?>
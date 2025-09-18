<?php require '../layout/header.php'; ?>
<?php require '../../config/config.php'; ?>

<?php

  if(!isset($_SESSION['admin_name'])) {
    echo "<script> window.location.href='".ADMINURL."admins/login-admins.php'; </script>";
  }

  if(isset($_GET['id'])) {

    $id = $_GET['id'];
    
    // delete product from database
    $delete = $conn->query("DELETE FROM orders WHERE id = $id");
    $delete->execute();
  }

  echo "<script> window.location.href='".ADMINURL."orders-admins/show-orders.php'; </script>";
?>
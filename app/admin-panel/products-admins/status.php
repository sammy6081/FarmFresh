<?php require '../layout/header.php'; ?>
<?php require '../../config/config.php'; ?>
<?php 
  if(!isset($_SESSION['admin_name'])) {
    echo "<script> window.location.href='".ADMINURL."admins/login-admins.php'; </script>";
  }

  // get id and status from url
  if(isset($_GET['id']) AND isset($_GET['status'])) {
    $id = $_GET['id'];
    $status = $_GET['status'];

    // if status is 0 change it to 1, else change it to 0
    if($status == 0) {
      $newStatus = 1;
    } else {
      $newStatus = 0;
    }

    // update status in database
    $updateStatus = $conn->prepare("UPDATE products SET status=:status WHERE id=:id");
    $updateStatus->execute([
      ':status' => $newStatus,
      ':id' => $id
    ]);

    // redirect to show-products.php after update
    if($updateStatus) {
      echo "<script> window.location.href='".ADMINURL."products-admins/show-products.php'; </script>";
    }
  } else {
    echo "<script> window.location.href='".ADMINURL."products-admins/show-products.php'; </script>";
  }
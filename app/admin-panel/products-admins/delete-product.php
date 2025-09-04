<?php require '../layout/header.php'; ?>
<?php require '../../config/config.php'; ?>

<?php

  if(!isset($_SESSION['admin_name'])) {
    echo "<script> window.location.href='".ADMINURL."admins/login-admins.php'; </script>";
  }

  if(isset($_GET['id'])) {

    $id = $_GET['id'];
    $select = $conn->query("SELECT * FROM products WHERE id = $id");
    $select->execute();

    $data = $select->fetch(PDO::FETCH_OBJ);
    unlink("img_product/" . $data->image);
    
    // delete product from database
    $delete = $conn->query("DELETE FROM products WHERE id = $id");
    $delete->execute();
  }

  echo "<script> window.location.href='".ADMINURL."products-admins/show-products.php'; </script>";
?>
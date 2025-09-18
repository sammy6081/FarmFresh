<?php require '../layout/header.php'; ?>
<?php require '../../config/config.php'; ?>

<?php

  if(!isset($_SESSION['admin_name'])) {
    echo "<script> window.location.href='".ADMINURL."admins/login-admins.php'; </script>";
  }

  if(isset($_GET['id'])) {

    $id = $_GET['id'];
    $select = $conn->query("SELECT * FROM categories WHERE id = $id");
    $select->execute();
    $data = $select->fetch(PDO::FETCH_OBJ);

    // delete category image
    unlink("img_category/" . $data->image);

    // delete category from database
    $delete = $conn->query("DELETE FROM categories WHERE id = $id");
    $delete->execute();
  }

  echo "<script> window.location.href='".ADMINURL."categories-admins/show-categories.php'; </script>";
?>
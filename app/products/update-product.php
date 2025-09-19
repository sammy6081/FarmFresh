<?php 

    if (!isset($_SERVER["HTTP_REFERER"])){
        // redirect them to index page
        header('location: http://localhost:8080/');
        exit;
    }

    require "../includes/header.php"; 
    require "../config/config.php"; 

 
?>

<?php 


if (!isset($_SESSION['email'])) {
    header("Location:".APPURL."auth/login.php");
    exit;
}


if(isset($_POST['update'])){
    $id = $_POST['id'];
    $pro_qty = $_POST['pro_qty'];
    $subtotal = $_POST['subtotal'];

    $update = $conn->prepare("UPDATE cart SET pro_qty = '$pro_qty', pro_subtotal = '$subtotal' WHERE id='$id' ");
    $update->execute();
}







?>


<?php require "../includes/footer.php"; ?>
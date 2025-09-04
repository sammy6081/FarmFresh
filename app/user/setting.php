<?php require "../includes/header.php"; ?>
<?php require "../config/config.php"; ?>
<?php
if (!isset($_SESSION['email'])) {
    header("Location:".APPURL."auth/login.php");
    exit;
}
?>
<?php 

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        // Check if the user is trying to access their own settings
        if($id != $_SESSION['user_id']) {
                    
            echo "<script> window.location.href='".APPURL."'; </script>";
    
        }


        // Fetch the user's information 
        $select = $conn->query("SELECT * FROM users WHERE id='$id'");
        $select->execute();

        $users = $select->fetch(PDO::FETCH_OBJ);

        if(isset($_POST['submit'])) {
            $fullname = $_POST['fullname'];
            $address = $_POST['address'];
            $city = $_POST['city'];
            $state = $_POST['state'];
            $post_code = $_POST['post_code'];
            $phone_number = $_POST['phone_number'];

            // Update the user's information
            $update = $conn->prepare("UPDATE users SET fullname='$fullname', address='$address', city='$city', state='$state', post_code='$post_code', phone_number='$phone_number' WHERE id='$id'");
            $update->execute();

            echo "<script> window.location.href='".APPURL."'; </script>";
            exit;
        }
    } else {
        echo "<script> window.location.href='".APPURL."404.php'</script>";
        exit;
    }
?>

    <div id="page-content" class="page-content">
        <div class="banner">
            <div class="jumbotron jumbotron-bg text-center rounded-0" style="background-image: url('<?php echo APPURL; ?>assets/img/bg-header.png');">
                <div class="container">
                    <h1 class="pt-5">
                        Settings
                    </h1>
                    <p class="lead">
                        Update Your Account Info
                    </p>
                </div>
            </div>
        </div>

        <section id="checkout">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xs-12 col-sm-6">
                        <h5 class="mb-3">ACCOUNT DETAILS</h5>
                        <!-- Bill Detail of the Page -->
                        <form action="setting.php?id=<?php echo $users->id; ?>" method="POST" class="bill-detail">
                            <fieldset>
                                <div class="form-group row">
                                    <div class="col">
                                        <input class="form-control" name="fullname" value="<?php echo $users->fullname; ?>" placeholder="Full Name" type="text">
                                    </div>
                                   
                                </div>
                               
                                <div class="form-group">
                                    <textarea class="form-control" name="address" placeholder="Address"><?php echo $users->address; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="city" value="<?php echo $users->city; ?>" placeholder="Town / City" type="text">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="state" value="<?php echo $users->state; ?>" placeholder="State / Country" type="text">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="post_code" value="<?php echo $users->post_code; ?>" placeholder="Postcode / Zip" type="text">
                                </div>
                                <div class="form-group ">
                                    <input class="form-control" name="phone_number" value="<?php echo $users->phone_number; ?>" placeholder="Phone Number" type="tel">
                                </div>
                                <div class="form-group text-right">
                                    <button type="submit" name="submit" class="btn btn-primary">UPDATE</button>
                                    <div class="clearfix">
                                </div>
                            </fieldset>
                        </form>
                        <!-- Bill Detail of the Page end -->
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php require "../includes/footer.php"; ?>

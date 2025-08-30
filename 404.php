<?php 

    if (!isset($_SERVER["HTTP_REFERER"])){
        // redirect them to index page
        header('location: http://localhost/Freshcery/index.php');
        exit;
    }

?>
<?php require "includes/header.php"; ?>
<?php require "config/config.php"; ?>


<div class="banner">
            <div class="jumbotron jumbotron-bg text-center rounded-0" style="background-image: url('<?php echo APPURL; ?>/assets/img/bg-header.png');">
                <div class="container">
                    <h1 class="pt-5">
                        Error 404, we cannot find the page you're looking for.
                    </h1>
                    <a href="<?php echo APPURL; ?>" class=" btn btn-primary text-uppercase">home</a>

                    <!-- <p class="lead">
                        Thank you for your purchase!
                    </p> -->
                </div>
            </div>
        </div>

<?php require "includes/footer.php"; ?>
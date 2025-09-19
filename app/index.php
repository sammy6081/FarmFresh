<?php require "includes/header.php"; ?>
<?php require "config/config.php"; ?>
<?php $categories = $conn->query('SELECT * FROM categories'); 
$categories->execute();
$allCategories = $categories->fetchAll(PDO::FETCH_OBJ);
?>

    <div id="page-content" class="page-content">
        <div class="banner">
            <div class="jumbotron jumbotron-video text-center bg-dark mb-0 rounded-0" >
            <video width="100%" preload="auto" loop autoplay muted>
                <source src='<?php echo APPURL; ?>assets/media/hero-video.mp4' type='video/mp4' />
                <source src='<?php echo APPURL; ?>assets/media/hero-video.webm' type='video/webm' />
            </video>
            <div class="container">
                <h1 class="pt-5">
                    Save your time, leave food market <br>
                    matter for us.
                </h1>
                <p class="lead">
                    Always Fresh Everyday.
                </p>

                <div class="row">
                    <div class="col-md-4">
                        <div class="card border-0 text-center">
                            <div class="card-icon">
                                <div class="card-icon-i">
                                    <i class="fa fa-shopping-basket"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    Buy
                                </h4>
                                <p class="card-text ">
                                    Just click wetin you wan buy, then
                                    finish order sharp sharp.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0 text-center">
                            <div class="card-icon">
                                <div class="card-icon-i">
                                    <i class="fas fa-leaf"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    Harvest
                                </h4>
                                <p class="card-text">
                                    Our team dey make sure say the food fresh well well
                                    and e go reach your hand within 24hrs after dem harvest am.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0 text-center">
                            <div class="card-icon">
                                <div class="card-icon-i">
                                    <i class="fa fa-truck"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    Delivery
                                </h4>
                                <p class="card-text bold">
                                    Farmers dey see your order 2 days before,
                                    so dem go prepare harvest just as you want am – 
                                    no food go waste.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section id="why">
            <h2 class="title">Why FarmFresh</h2>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card border-0 text-center gray-bg">
                            <div class="card-icon">
                                <div class="card-icon-i text-success">
                                    <i class="fas fa-leaf"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    Direct from Farm
                                </h4>
                                <p class="card-text">
                                    We dey carry food direct from farm put for your table
                                    same day – so you sabi say na real fresh harvest you dey chop.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0 text-center gray-bg">
                            <div class="card-icon">
                                <div class="card-icon-i text-success">
                                    <i class="fa fa-question"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    Know Your Farmers
                                </h4>
                                <p class="card-text">
                                    We wan make you sabi who dey grow your food.
                                    You go see farmer profile for each item, 
                                    and you fit even visit farm see how dem take care of am.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-0 text-center gray-bg">
                            <div class="card-icon">
                                <div class="card-icon-i text-success">
                                    <i class="fas fa-smile"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    Better Life for Farmers
                                </h4>
                                <p class="card-text">
                                    Small small, we dey remove middle people for food matter,
                                    so farmers go dey earn better money wey match their hustle.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 mt-5 text-center">
                        <a href="shop.php" class="btn btn-primary btn-lg">SHOP NOW</a>
                    </div>
                </div>
            </div>
        </section>


        <section id="categories" class="pb-0 gray-bg">
            <h2 class="title">Categories</h2>
            <div class="landing-categories owl-carousel">
                <?php foreach($allCategories as $categories) : ?>
                <div class="item">
                    <div class="card rounded-0 border-0 text-center">
                        <img src="<?php echo IMGCATEGORY; ?><?php echo $categories->image; ?>" height="300">
                        <div class="card-img-overlay d-flex align-items-center justify-content-center">
                            <!-- <h4 class="card-title">Vegetables</h4> -->
                            <a href="shop.php" class="btn btn-primary btn-lg"><?php echo $categories->name; ?></a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </section>
    </div>
    
    <?php require "includes/footer.php";?>
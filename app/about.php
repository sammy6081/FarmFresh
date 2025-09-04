<?php require "includes/header.php"; ?>
<?php require "config/config.php"; ?>
<?php
if (!isset($_SESSION['username'])) {
    header("Location:".APPURL."auth/login.php");
    exit;
}
?>
    
    
    <div id="page-content" class="page-content">
    <div class="banner">
        <div class="jumbotron jumbotron-bg text-center rounded-0" style="background: linear-gradient(rgba(255,192,203,0.3), rgba(255,192,203,0.3)), url('assets/img/bg-header.png'); background-size: cover; background-position: center;">
            <div class="container ">
                <h1 class=" pt-5">
                    About Us
                </h1>
                <p class="lead">
                    No stress yourself, FarmFresh go help you buy and deliver your groceries.
                </p>
            </div>
        </div>
    </div>

    <section class="bg-leaf">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center mb-3">
                    <h1 class="title text-uppercase mb-2">FarmFresh</h1>
                    <h5>
                        Your Trusted Foodstuff & Organic Store
                    </h5>
                </div>
                <div class="col-md-10">
                    <p class="text-justify">
                        <strong>FarmFresh</strong> na better platform wey dey help people for Naija buy foodstuff, fresh farm produce
                        and market items without wahala. Instead make you waka go Odo-Oba market, Iluju market, Wazo market, Aarada market, Mile 12, Oyingbo, Balogun market or supermarket
                        like Shoprite, Justrite or Market Square, we get trained Personal Shoppers wey sabi handpick correct things
                        for you. We dey deliver am reach your door-step, so you fit save time and avoid stress of traffic, long queue
                        and market noise. From the moment wey you place order until rider drop am for your hand, we dey make sure say
                        quality dey guaranteed and everything dey handled well.
                    </p>
                </div>
            </div>

            <div class="row justify-content-center align-items-center mt-3">
                <div class="col-md-4">
                    <img src="assets/img/fruits.jpg" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <h5>
                        Straight from the Farm
                    </h5>
                    <p>
                        The idea wey <strong>FarmFresh</strong> dey carry be say food no suppose old before e reach your table.
                        Na why we dey connect direct with farmers for states like Benue, Ogun, Oyo, Kaduna and Plateau
                        so that fresh yam, tomato, pepper, fruit, and vegetables go reach your kitchen the same day or next day
                        after harvest. With this farm-to-table system, you dey sure say na fresh correct food you dey chop.
                    </p>
                    <p>
                        We dey cut off all those middlemen wey dey make food cost high and still old for road 
                        before e reach you. Instead, na direct connection from farm to your pot, so quality dey intact.
                    </p>
                    <p>
                        With <strong>FarmFresh</strong>, na freshness and good health we dey guarantee, so you no go ever worry say
                        food don stale or no dey nutritious again.
                    </p>
                </div>
            </div>

            <div class="row justify-content-center align-items-center text-right mt-3">
                <div class="col-md-6">
                    <h5>
                        Know Your Farmers
                    </h5>
                    <p>
                        One thing wey make us different be say we dey transparent about who dey supply you food. 
                        For every product wey we dey sell, we fit show you farmer profile – whether na maize farmer from Kaduna, 
                        rice farmer from Kebbi or yam farmer from Benue. 
                    </p>
                    <p>
                        We wan make you know say behind every bag of rice, every basket of tomato, every bunch of plantain, 
                        na hardworking Naija farmer dey hustle to put food for your table.
                    </p>
                    <p>
                        If you even wan visit farm to see how dem dey grow your food, you dey welcome – because we believe say 
                        connection between consumer and farmer go help build trust and appreciation for agriculture.
                    </p>
                </div>
                <div class="col-md-4">
                    <img src="assets/img/vegetables.jpg" class="img-fluid">
                </div>
            </div>

            <div class="row justify-content-center align-items-center mt-3">
                <div class="col-md-4">
                    <img src="assets/img/fish.jpg" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <h5>
                        Better Life for Farmers
                    </h5>
                    <p>
                        <strong>FarmFresh</strong> no just dey about customer alone – we dey also fight to make life better for farmers.
                        Normally, supply chain for Naija long well-well: farmer sell give middleman, middleman go sell give
                        another wholesaler, wholesaler go carry go market before e reach final buyer. By that time, farmer no dey
                        see better profit, and consumer go still buy am cost.
                    </p>
                    <p>
                        We dey cut all those unnecessary links, so farmer fit get more money for their sweat and hard work. 
                        This one dey encourage dem to continue farming and also dey motivate younger people to see agriculture as business.
                    </p>
                    <p>
                        Na win-win situation: farmer dey earn better, you dey chop fresh food for affordable price, and the country 
                        dey benefit because agriculture dey grow.
                    </p>
                </div>
            </div>
        </div>
    </section>
</div>


<?php require "includes/footer.php";?>
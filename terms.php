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
                <div class="container">
                    <h1 class="pt-5">
                        Terms &amp; Conditions
                    </h1>
                    <p class="lead">
                        Please Read Carefully
                    </p>
                </div>
            </div>
        </div>

        <section id="faq">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p><strong>1. Wetin be FarmFresh?</strong></p>
                        <p>FarmFresh na service wey go help you buy foodstuff and grocery from store wey you sabi for town, deliver reach your door sharp-sharp – sometimes within one hour! We get trained Personal Shoppers wey sabi select better things for you, then we go deliver am safe to your house.</p>

                        <p><strong>2. Which stores una dey support?</strong></p>
                        <p>We dey work with selected supermarkets and stores for Naija like Shoprite, Justrite, Market Square, Ebeano Supermarket, Next Cash & Carry, Prince Ebeano, Spar, and some other popular local markets like Balogun, Oyingbo, Mile 12 and Ariaria. We still dey add new stores steady, so you fit shop from different place near you.</p>

                        <p><strong>3. Una dey serve my area?</strong></p>
                        <p>For now, we dey serve Lagos (Island & Mainland), Abuja, Ibadan, Port Harcourt, and Benin City. To check if we dey deliver reach your side, download our app or visit our website, type your address, and see stores wey dey available. If your favorite store no dey, you fit suggest am using the “Request New Stores” button for app.</p>

                        <p><strong>4. How fast una dey deliver?</strong></p>
                        <p>We fit deliver for you within one hour, or you fit book any one-hour slot today or within the next 6 days.</p>

                        <p><strong>5. How much delivery dey cost?</strong></p>
                        <p>Delivery fee na ₦1,500 for any slot. But if your order pass ₦30,000, delivery fit free depending on promo wey dey run.</p>

                        <p><strong>6. Which time una dey deliver?</strong></p>
                        <p>We dey deliver based on store opening hours, normally between 9am and 9pm. But you fit place order any time of the day.</p>

                        <p><strong>7. I fit collect loyalty points from supermarket?</strong></p>
                        <p>For now, we no dey support supermarket membership points. But make you dey follow our email and social media for update.</p>

                        <p><strong>8. If item no dey stock nko?</strong></p>
                        <p>We dey update stock every day from stores. If wetin you order no dey, you fit choose make shopper:<br>- Pick replacement for you<br>- Call you<br>- No replace at all</p>

                        <p><strong>9. Price fit different from store own?</strong></p>
                        <p>Sometimes small service charge go dey on top supermarket price. If you see any wrong pricing, abeg reach out.</p>

                        <p><strong>10. How una dey handle non-Halal items?</strong></p>
                        <p>If you wan buy non-Halal items (like pork), we dey separate am well from Halal items during packing and delivery. Different bags dey for dem.</p>

                        <p><strong>11. I go get FarmFresh shopping bag?</strong></p>
                        <p>Yes, as long as bag still dey stock. If you no see am, e mean bag don finish but we go restock within one week.</p>

                        <p><strong>12. Una fit guarantee quality of wetin I buy?</strong></p>
                        <p>Yes na! If you see any item wey no good, call our Customer Service, we go replace am.</p>

                        <p><strong>13. How I go check status of my order?</strong></p>
                        <p>We go notify you when order don pack, dey on the way, or don nearly reach. Make sure your push notification dey on. You fit also check live update for “My Orders” section inside app.</p>

                        <p><strong>14. I fit edit or cancel order?</strong></p>
                        <p>Yes, until shopper never start to pick your items. For “My Orders”, select the order wey you wan edit. You fit:</p>
                        <ul>
                        <li>Add/remove items</li>
                        <li>Change delivery slot</li>
                        <li>Change payment method</li>
                        <li>Change address</li>
                        <li>Cancel order</li>
                        </ul>

                        <p><strong>15. How I go report wahala with my order?</strong></p>
                        <p>Just press “Help” button for app, then select “Contact Us”. We dey quick respond.</p>

                        <p><strong>16. When I go get refund?</strong></p>
                        <p>Refund dey processed within 14 days, money go reflect for your bank account or card.</p>

                        <p><strong>17. How I go see my receipt?</strong></p>
                        <p>We go send you electronic receipt via email after delivery.</p>

                        <p><strong>18. How I go return FarmFresh bags?</strong></p>
                        <p>If bag still dey good condition, just give am back to our rider next time. You fit also reuse am for your own runs.</p>

                        <p><strong>19. How I go return items?</strong></p>
                        <p>If item miss or wrong, reject am when rider deliver. We go only charge you for wetin you collect. Once you don accept item, e no fit return. For now, return policy dey handled directly with store.</p>

                        <p><strong>20. Why una dey charge my card pass my order total?</strong></p>
                        <p>We dey do small temporary hold for your card (like restaurant dey do) – just in case item by weight pass small. Final charge dey update within 3–7 business days. Any difference go reflect for your receipt.</p>

                        <p><strong>21. Who dey select my items?</strong></p>
                        <p>Our trained Personal Shoppers dey handle am, pick only better quality. For some stores, driver fit help too.</p>

                        <p><strong>22. Who go deliver my order?</strong></p>
                        <p>Specially trained riders wey we don screen well.</p>

                        <p><strong>23. If Personal Shoppers too busy nko?</strong></p>
                        <p>If orders too plenty, next available delivery slot fit shift. Just check app to see available time.</p>

                        <p><strong>24. I get more questions!</strong></p>
                        <p>Abeg contact us! We dey available for support.nigeria@farmfresh.com</p>



                    </div>
                </div>
            </div>
        </section>
    </div>
<?php require "includes/footer.php"; ?>

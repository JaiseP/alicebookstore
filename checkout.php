<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://kit.fontawesome.com/854e356633.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
</head>
<body>

<!-- Importing Header Component -->
<?php include './components/header.php'; ?>

    <main>
        <section>
            <div class="container">
                <section id="shopping-cart">
                    <h2>Checkout</h2>
                    <div class="checkout-wrapper">
                        <div class="billing-details">
                            <h3>Billing Details</h3>
                            <div class="input-group__label">
                                <label>Full Name</label>
                                <input class="md-input" type="text" id="full_name">
                                <p class="error-label">Error Label</p>
                            </div>
                            <div class="input-group__label">
                                <label>Email Address</label>
                                <input class="md-input" type="text" id="email_address">
                                <p class="error-label">Error Label</p>
                            </div>
                            <div class="input-row">
                                <div class="input-group__label">
                                    <label>Address</label>
                                    <input type="text" placeholder="Flat No/ House No" id="address">
                                    <p class="error-label">Error Label</p>
                                </div>
                                <div class="input-group__label">
                                    <label>Street</label>
                                    <input type="text" id="street">
                                    <p class="error-label">Error Label</p>
                                </div>
                            </div>
                            <div class="input-row">
                                <div class="input-group__label">
                                    <label>Town / City</label>
                                    <input type="text" id="city">
                                    <p class="error-label">Error Label</p>
                                </div>
                                <div class="input-group__label">
                                    <label>Postcode</label>
                                    <input type="text" id="postcode">
                                    <p class="error-label">Error Label</p>
                                </div>
                            </div>
                            <div class="input-group__label">
                                <label>Phone Number</label>
                                <input class="md-input" type="text" id="phone_number">
                                <p class="error-label">Error Label</p>
                            </div>
                        </div>
                        <div class="checkout-summary">
                            <h3>Your Order</h3>
                            <div class="checkout-summary-wrapper">
                                <div id="checkout-summary-wrapper">
                                    <div class="checkout-item">
                                        <div class="item-name">Product Name (x 2)</div>
                                        <div class="item-value">£19.99</div>
                                    </div>
                                    <div class="checkout-item">
                                        <div class="item-name">Product Name (x 2)</div>
                                        <div class="item-value">£19.99</div>
                                    </div>
                                    <div class="checkout-item">
                                        <div class="item-name">Product Name (x 2)</div>
                                        <div class="item-value">£19.99</div>
                                    </div>
                                    <div class="checkout-item summary">
                                        <div class="item-name info">Subtotal</div>
                                        <div class="item-value info">£58.45</div>
                                    </div>
                                    <div class="checkout-item">
                                        <div class="item-name">Delivery Charges</div>
                                        <div class="item-value">£0.00</div>
                                    </div>
                                    <div class="checkout-item">
                                        <div class="item-name">Discounts Applied</div>
                                        <div class="item-value">- £0.00</div>
                                    </div>
                                    <div class="checkout-item">
                                        <div class="item-name final-amount">Total Amount</div>
                                        <div class="item-value final-amount">£58.45</div>
                                    </div>
                                </div>
                                <div class="payment-type">
                                    <p>Select Payment Type</p>
                                    <div class="input-group">
                                        <input type="radio" id="1" name="payment_type" checked>
                                        <label for="1">Cash on Delivery</label>
                                    </div>
                                    <div class="input-group">
                                        <input type="radio" id="2" name="payment_type">
                                        <label for="2">
                                            <img src="./assets/images/paypal.png" alt="">
                                        </label>
                                    </div>
                                    <button class="button__primary" id="checkout">Place Order</button>
                                </div> 
                            </div>
                            
                            
                        </div>
                    </div>
                </section>
            </div>
        </section>
    </main>
    <!-- FOOTER SECTION -->
    <footer>
        <div class="container footer-wrapper">
            <div class="footer-left">
                <img src="./assets/images/logo.png" alt="Alice Bookstore Logo">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                <div class="social-icons">
                    <img src="./assets/images/facebook.png" alt="Facebook Icon">
                    <img src="./assets/images/instagram.png" alt="Instagram Icon">
                    <img src="./assets/images/linkedin.png" alt="Linkedin Icon">
                    <img src="./assets//images/twitter.png" alt="Twitter Icon">
                </div>
            </div>
            <div class="footer-center">
                <h4>Quick Links</h4>
                <ul class="footer-links">
                    <li>Books</li>
                    <li>Gifts</li>
                    <li>Stationaries</li>
                    <li>Office Items</li>
                    <li>Why Us</li>
                    <li>Reach Us</li>
                </ul>
            </div>
            <div class="footer-right">
                <h4>Customer Service</h4>
                <ul class="footer-links">
                    <li>Terms & Conditions</li>
                    <li>Privacy Policy</li>
                    <li>Accessibility Info</li>
                    <li>Office Items</li>
                    <li>Cookie Policy</li>
                    <li>Report an Issue</li>
                </ul>
            </div>
        </div>
        <div class="footer-credits">
            <p>© Alice Bookstore, 2022. Copyrights Reserved.</p>
        </div>
    </footer>

    
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="./js/main.js"></script>
    <script type="text/javascript" src="./js/cart.js"></script>
    <script type="text/javascript" src="./js/checkout.js"></script>
    <script type="text/javascript">
        $('.banner-slider').slick({
        dots: true,
        infinite: true,
        speed: 300,
        autoplay: true,
        slidesToShow: 1,
        fade: true,
        prevArrow:"<button type='button' class='slick-prev pull-left'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
        nextArrow:"<button type='button' class='slick-next pull-right'><i class='fa fa-angle-right' aria-hidden='true'></i></button>"
        });

        $(window).scroll(function(){
        var sticky = $('.sticky'),
            scroll = $(window).scrollTop();

        if (scroll >= 90) sticky.addClass('fixed');
        else sticky.removeClass('fixed');
        });
    </script>
</body>
</html> 
<?php echo '<script type="text/javascript">renderCheckoutSummary()</script>'; ?>
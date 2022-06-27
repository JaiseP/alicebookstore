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
    
<?php include './components/header.php'; ?>

    <main>
        <section>
            <div class="container">
                <section id="shopping-cart">
                    <h2>Shopping Cart</h2>
                    <div class="cart-wrapper">
                        <div class="cart-items">
                            <div class="cart-heading">
                                <div class="product-title head">Product</div>
                                <div class="price-title head">Price</div>
                                <div class="qty-title head">Quantity</div>
                                <div class="total-title head">Total</div>
                                <div class="remove-title head">Remove</div>
                            </div>
                            <div id="cart-items-container">
                                <div class="cart-product-wrapper">
                                    <div class="product-title item">The Atlas Paradox</div>
                                    <div class="price-title item middle">£19.99</div>
                                    <div class="qty-title item middle">
                                        <div class="cart-button-wrapper">
                                            <div class="counter-wrapper">
                                                <button class="counter counter-minus">-</button>
                                                <div class="counter-qty">1</div>
                                                <button class="counter counter-plus">+</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="total-title item middle">£19.99</div>
                                    <div class="remove-title item middle"><i class="fa-regular fa-trash-can"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="cart-items-phone" id="cart-items-container-mobile">
                            <div class="item-wrapper">
                                <div class="product-name">The Atlas Paradox</div>
                                <div class="product-price">Price: <span>£19.99</span></div>
                                <div class="cart-phone-bottom-wrapper">
                                    <div class="counter-wrapper">
                                        <button class="counter counter-minus">-</button>
                                        <div class="counter-qty">1</div>
                                        <button class="counter counter-plus">+</button>
                                    </div>
                                    <div class="remove-wrapper">
                                        <i class="fa-regular fa-trash-can"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cart-totals">
                            <div class="summary-wrapper">
                                <div class="summary-title">
                                    Subtotal
                                </div>
                                <div class="summary-value" id="subtotal-value">
                                    £19.99
                                </div>
                            </div>
                            <div class="summary-wrapper">
                                <div class="summary-title">
                                    Delivery Charge
                                </div>
                                <div class="summary-value">
                                    Free
                                </div>
                            </div>
                            <div class="summary-wrapper">
                                <div class="summary-title">
                                    Packing Charge
                                </div>
                                <div class="summary-value">
                                    Free
                                </div>
                            </div>
                            <div class="summary-wrapper">
                                <div class="summary-title">
                                    Promotion Discount
                                </div>
                                <div class="summary-value">
                                    £0.00
                                </div>
                            </div>
                            <div class="summary-wrapper">
                                <div class="coupon-input">
                                    <input type="text">
                                </div>
                                <div class="coupon-apply">
                                    Apply Coupon
                                </div>
                            </div>
                            <div class="summary-wrapper" style="margin-top: 3rem;">
                                <div class="summary-title final-price">
                                    Total
                                </div>
                                <div class="summary-value final-value" id="final-price">
                                    £0.00
                                </div>
                            </div>
                            <button class="button__primary" id="continue-checkout" onclick="location.href = './checkout.php'">Proceed to Checkout</button>
                            <button class="button__disabled" id="checkout-disabled">Proceed to Checkout</button>
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

<?php echo '<script type="text/javascript">renderCartProducts()</script>'; ?>
<?php echo '<script type="text/javascript">renderCartSummary()</script>'; ?>
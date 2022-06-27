<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://kit.fontawesome.com/854e356633.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
</head>
<body>

    <!-- Importing Header Component -->
    <?php include './components/header.php'; ?>

    <main>
        <section>
            <div class="container">
                <div class="breadcrumbs">
                    <li><a href="./index.html">Home</a></li><span>></span>
                    <li><a href="./products.html">Books</a></li><span>></span>
                    <li>Product Detals</li>
                </div>
                <div class="details-wrapper">
                    <div class="left" id="product-details">
                        <div class="prod-image">
                            <img src="./assets/images/Books/still_life.jpg" alt="Product Image">
                        </div>
                        <div class="prod-desc">
                            <h2>Still Life - The Sunday Best Times Seller</h2>
                            <p class="sub-line">By Graham Norton</p>
                            <div class="star-rating">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <p>4/5 (10)</p>
                            </div>
                            <div class="price-wrapper">
                                <p>£19.99<span class="original-price">£25.00</span></p>
                                <div class="offer-tag">30% Off</div>
                            </div>
                            <p class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            <div class="cart-button-wrapper">
                                <div class="counter-wrapper">
                                    <button class="counter counter-minus">-</button>
                                    <div class="counter-qty">1</div>
                                    <button class="counter counter-plus">+</button>
                                </div>
                                <button class="button__primary">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="right">
                    <div class="right-features">
                        <div class="feature-wrapper">
                            <div class="feature-item">
                                <img src="./assets/images/delivery-theme.png" alt="Delivery Theme Icon">
                                <div class="feature-description">
                                    <h4>Fast & Free Delivery</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                            </div>
                            <div class="feature-item">
                                <img src="./assets/images/offers-theme.png" alt="Offers Theme Icon">
                                <div class="feature-description">
                                    <h4>Exclusive Offers</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                            </div>
                            <div class="feature-item">
                                <img src="./assets/images/cod-theme.png" alt="COD Theme Icon">
                                <div class="feature-description">
                                    <h4>Cash on Delivery Available</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <section id="related-products">
                    <h3>Related Products</h3>
                    <div class="product-wrapper">
                        <div class="product-card">
                            <i class="fa-regular fa-heart"></i>
                            <p class="offer-tag">30% Off</p>
                            <img src="./assets/images/Books/the_atlas_paradox.jpg" alt="Product Image">
                            <p class="product-title"><a href="./product-details.html">The Atlas Paradox</a></p>
                            <div class="star-rating">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <p>4/5(10)</p>
                            </div>
                            <p class="final-price">£19.99<span class="original-price">£25.00</span></p>
                        </div>
                        <div class="product-card">
                            <i class="fa-solid fa-heart"></i>
                            <p class="offer-tag">30% Off</p>
                            <img src="./assets/images/Office Equipments/desk.jpg" alt="Product Image">
                            <p class="product-title"><a href="./product-details.html">The Atlas Paradox</a></p>
                            <div class="star-rating">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <p>4/5(10)</p>
                            </div>
                            <p class="final-price">£19.99<span class="original-price">£25.00</span></p>
                        </div>
                        <div class="product-card">
                            <i class="fa-regular fa-heart"></i>
                            <p class="offer-tag">30% Off</p>
                            <img src="./assets/images/Gifts/2928377020088.jpg" alt="Product Image">
                            <p class="product-title"><a href="./product-details.html">The Atlas Paradox</a></p>
                            <div class="star-rating">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <p>4/5(10)</p>
                            </div>
                            <p class="final-price">£19.99<span class="original-price">£25.00</span></p>
                        </div>
                        <div class="product-card">
                            <i class="fa-regular fa-heart"></i>
                            <p class="offer-tag">30% Off</p>
                            <img src="./assets/images/Books/still_life.jpg" alt="Product Image">
                            <p class="product-title"><a href="./product-details.html">The Atlas Paradox</a></p>
                            <div class="star-rating">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <p>4/5(10)</p>
                            </div>
                            <p class="final-price">£19.99<span class="original-price">£25.00</span></p>
                        </div>
                        <div class="product-card">
                            <i class="fa-regular fa-heart"></i>
                            <p class="offer-tag">30% Off</p>
                            <img src="./assets/images/Books/still_life.jpg" alt="Product Image">
                            <p class="product-title"><a href="./product-details.html">The Atlas Paradox</a></p>
                            <div class="star-rating">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <p>4/5(10)</p>
                            </div>
                            <p class="final-price">£19.99<span class="original-price">£25.00</span></p>
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
            <div class="right">
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
                        <li><a href="./terms-and-conditions.html">Terms & Conditions</a></li>
                        <li><a href="./privacy-policy.html">Privacy Policy</a></li>
                        <li>Accessibility Info</li>
                        <li>Office Items</li>
                        <li>Cookie Policy</li>
                        <li>Report an Issue</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-credits">
            <p>© Alice Bookstore, 2022. Copyrights Reserved.</p>
        </div>
    </footer>

    
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="./js/main.js"></script>
    <script type="text/javascript" src="./js/products.js"></script>
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

<?php
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    echo '<script type="text/javascript">renderProductDetails("'.$id.'")</script>';
}
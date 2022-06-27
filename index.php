

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

    <?php include './components/header.php'; 
        $query = new Queries;
    ?>

    <!-- Banner Slider -->
    <div class="banner-slider-wrap">
        <div class="banner-slider">
            <div><img src="./assets/images/slide-5.jpg" alt="Slide 1"></div>
            <div><img src="./assets/images/slide-1.jpeg" alt="Slide 1"></div>
            <div><img src="./assets/images/slide-2.jpeg" alt="Slide 2"></div>
            <div><img src="./assets/images/slide-3.jpeg" alt="Slide 3"></div>
        </div>
    </div>

    <main>
    <!-- Shop by Category Section -->
    <section id="categories">
        <div class="container">
            <h2>Shop By Category</h2>
            <div class="cat-wrap">
                <div class="cat-item">
                    <a href="./products.php?id=1">
                        <div class="circle">
                            <img src="./assets/images/books-1.png" alt="Book Category Image">
                            <h3>Books</h3>
                        </div>
                    </a>
                </div>
                <div class="cat-item">
                    <a href="./products.php?id=2">
                        <div class="circle">
                            <img src="./assets/images/gifts-1.png" alt="Gift Category Image">
                            <h3>Gifts</h3>
                        </div>
                    </a>
                </div>
                <div class="cat-item">
                    <a href="./products.php?id=3">
                        <div class="circle">
                            <img src="./assets/images/stationary-1.png" alt="Stationary Category Image">
                            <h3>Stationaries</h3>
                        </div>
                    </a>
                </div>
                <div class="cat-item">
                    <a href="./products.php?id=4">
                        <div class="circle">
                            <img src="./assets/images/Office-1.png" alt="Office Category Image">
                            <h3>Office Items</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Exclusive Offers Section -->
    <section id="offers">
        <div class="container">
            <h2>Exclusive Offers for You</h2>
            <div class="product-wrapper">
                <?php if($query -> crud("SELECT * FROM products WHERE discount_percentage > ? ORDER BY discount_percentage DESC LIMIT 10", [0])) {
                        $result = $query -> getAll();
                        foreach($result as $product) {
                    ?>
                <div class="product-card">
                    <i class="fa-regular fa-heart"></i>
                    <p class="offer-tag"><?php echo $product -> discount_percentage ?>% Off</p>
                    <img src="./assets/images/Products/<?php echo $product -> product_image ?>" alt="Product Image">
                    <p class="product-title"><a href="./product-details.php?id=<?php echo $product -> product_id ?>"><?php echo $product -> product_name ?></a></p>
                    <div class="star-rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <p>4/5(10)</p>
                    </div>
                    <!-- <p class="final-price">£<span class="original-price">£25.00</span></p> -->
                </div>
                <?php } } ?>
               
            </div>
        </div>
    </section>
    <section>
        <div class="container cta-banners">
            <img src="./assets//images/adv-1.png" alt="CTA Banner">
            <img src="./assets//images/adv-2.png" alt="CTA Banner">
        </div>
    </section>
    <section id="why-us">
        <div class="container section-bg-theme">
            <div class="why-us__left">
                <h2>Why Alice Bookstore?</h2>
                <article>
                    <p>Alice Bookstore began in 1982 under the aegis of its founder, John. Over the decades that have followed, we have grown to become an icon of the British cultural landscape, employing over 3000 superb booksellers across over 280 bookshops. As the last surviving national bookshop chain, under the helmsmanship of Managing Director John, we are proud to have fought off the perceived threat of e-readers and online competition to begin a programme of active expansion.</p>
                </article>
            </div>
            <div class="why-us__right">
                <div class="why-us__item">
                    <img src="./assets/images/delivery.png" alt="Why Us Icon">
                    <div class="icon-text">
                        <h4>Fast & Free Delivery</h4>
                        <p>We Offer free and fast delivery across London.</p>
                    </div>
                </div>
                <div class="why-us__item">
                    <img src="./assets/images/discount.png" alt="Why Us Icon">
                    <div class="icon-text">
                        <h4>Exclusive Discounts</h4>
                        <p>You receive exclusive discounts once you registered</p>
                    </div>
                </div>
                <div class="why-us__item">
                    <img src="./assets/images/cash-on-delivery.png" alt="Why Us Icon">
                    <div class="icon-text">
                        <h4>Cash on Delivery Available</h4>
                        <p>We have multiple mode od payments available</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

    <!-- FOOTER SECTION -->
    <footer>
        <div class="container footer-wrapper">
            <div class="footer-left">
                <img src="./assets/images/logo.png" alt="Alice Bookstore Logo">
                <p>Alice Bookstore began in 1982 under the aegis of its founder, John. Over the decades that have followed, we have grown to become an icon of the British cultural landscape, employing over 3000 superb booksellers across over 280 bookshops. As the last surviving national bookshop chain, under the helmsmanship of Managing Director John, we are proud to have fought off the perceived threat of e-readers and online competition to begin a programme of active expansion.</p>
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
                        <li><a href="./terms-and-conditions.php">Terms & Conditions</a></li>
                        <li><a href="./privacy-policy.php">Privacy Policy</a></li>
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

    <div class="tab-nav">
        <div class="tab-item">
            <a href="./index.php">
                <i class="fa-solid fa-house"></i>
                <p>Home</p>
            </a>
        </div>
        <div class="tab-item">
            <a href="./cart.php">
                <i class="fa-solid fa-cart-shopping"></i>
                <p>Cart</p>
            </a>
        </div>
        <div class="tab-item">
            <a href="./login.php">
                <i class="fa-solid fa-user"></i>
                <p>Profile</p>
            </a>
        </div>
        <div class="tab-item">
            <a href="./reach-us.php">
                <i class="fa-solid fa-headset"></i>
                <p>Support</p>
            </a>
        </div>
    </div>

    

    </main>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="./js/main.js"></script>
    <script type="text/javascript" src="./js/cart.js"></script>

    <!-- Script for Slick Slider -->
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
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

    
    <button class="button__primary" id="logout_button">Logout</button>

    

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

    <div class="tab-nav">
        <div class="tab-item">
            <a href="./index.html">
                <i class="fa-solid fa-house"></i>
                <p>Home</p>
            </a>
        </div>
        <div class="tab-item">
            <a href="./cart.html">
                <i class="fa-solid fa-cart-shopping"></i>
                <p>Cart</p>
            </a>
        </div>
        <div class="tab-item">
            <a href="./login.html">
                <i class="fa-solid fa-user"></i>
                <p>Profile</p>
            </a>
        </div>
        <div class="tab-item">
            <a href="./reach-us.html">
                <i class="fa-solid fa-headset"></i>
                <p>Support</p>
            </a>
        </div>
    </div>

    

    </main>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="./js/main.js"></script>
    <script type="text/javascript" src="./js/users.js"></script>
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
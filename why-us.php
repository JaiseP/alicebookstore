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
        <section id="why-us" class="container">
            <div class="left">
                <h1>Why Alice Bookstore?</h1>
                <p>Alice Bookstore began in 1982 under the aegis of its founder, John. Over the decades that have followed, we have grown to become an icon of the British cultural landscape, employing over 3000 superb booksellers across over 280 bookshops.

                As the last surviving national bookshop chain, under the helmsmanship of Managing Director John, we are proud to have fought off the perceived threat of e-readers and online competition to begin a programme of active expansion.</p>
                <p>Perhaps unusually for a national retailer, our branch managers enjoy a high degree of individual autonomy, running their shops to best please their local customers, with only the lightest of central suggested direction. We take enormous pleasure in championing simply good (but sometimes relatively overlooked) books, a principle that began most famously with John Williams’ Stoner, a quiet, intense novel that we turned into a bestseller forty years after its original publication.

Working closely with our bookshops are our efforts online, where at Alice Bookstore.com we are working to bring the very essence of Alice Bookstore to every home and smartphone in Britain. With hugely popular endeavours such as our regular reading update Alice Bookstore Weekly and an ever-increasing offering of exclusive reader offers and signed editions, Alice Bookstore.com is the perfect online companion to our High Street bookshops. </p>
                <div class="logo-grayscale">
                    <img src="./assets/images/logo.png" alt="">
                </div>
                
            </div>
            <div class="right">
                <div class="iframe-container">
                    <div id="player"></div>
                </div>
            </div>
        </section>

        <section id="why-us">
            <div class="container section-bg-theme">
                <div class="why-us__left">
                    <h2>Why Alice Bookstore?</h2>
                    <article>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                    </article>
                </div>
                <div class="why-us__right">
                    <div class="why-us__item">
                        <img src="./assets/images/delivery.png" alt="Why Us Icon">
                        <div class="icon-text">
                            <h4>Fast & Free Delivery</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>
                    <div class="why-us__item">
                        <img src="./assets/images/discount.png" alt="Why Us Icon">
                        <div class="icon-text">
                            <h4>Exclusive Discounts</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>
                    <div class="why-us__item">
                        <img src="./assets/images/cash-on-delivery.png" alt="Why Us Icon">
                        <div class="icon-text">
                            <h4>Cash on Delivery Available</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>
                </div>
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
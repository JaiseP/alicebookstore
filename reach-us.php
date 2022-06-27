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
                <h1>Feel Free to Reach Us</h1>
                <p>If you have any questions or feedback about an order, or our service, please feel free to connect with us.</p>
                <h3 class="call">+44 777 66 46 445</h3>
                <div class="address-wrapper">
                    <div class="address">
                        <p><span>Head Office:</span>Alice Bookstore</p>
                        <p>100 - 111 Middlesex Street</p>
                        <p>E1 7HT, London</p>
                        <p>United Kingdom</p>
                    </div>
                    <div class="address">
                        <p><span>Branch Address:</span>Alice Bookstore</p>
                        <p>438 Ilford Lane</p>
                        <p>IG1 2NF, Ilford</p>
                        <p>United Kingdom</p>
                    </div>
                </div>
                <div class="social-icons">
                    <img src="./assets/images/facebook.png" alt="Facebook Icon">
                    <img src="./assets/images/instagram.png" alt="Instagram Icon">
                    <img src="./assets/images/linkedin.png" alt="Linkedin Icon">
                    <img src="./assets//images/twitter.png" alt="Twitter Icon">
                </div>
            </div>
            
            <!-- Code for Google Map Integration -->
            <div class="right">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.748674037269!2d-0.08009668469120489!3d51.517826717762546!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761cb3a11fde55%3A0x9e5f734778f9e989!2sNorthumbria%20University%20-%20London!5e0!3m2!1sen!2suk!4v1649154873044!5m2!1sen!2suk" 
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

        </section>

        <section id="contact-form" class="section-bg-theme container">
            <form class="form-wrapper">
                <div class="input-group__label">
                    <label>Full Name</label>
                    <input type="text" id="full_name">
                    <p class="error-label">Error Label</p>
                </div>
                <div class="input-group-row">
                    <div class="input-group__label">
                        <label>Email Address</label>
                        <input type="text" class="md" id="email_address">
                        <p class="error-label">Error Label</p>
                    </div>
                    <div class="input-group__label">
                        <label>Phone</label>
                        <input type="text" class="sm" id="phone">
                        <p class="error-label">Error Label</p>
                    </div>
                </div>
                <div>
                    <label>Message</label>
                    <textarea name="" cols="30" rows="10" id="message"></textarea>
                    <p class="error-label">Error Label</p>
                </div>
                <button id="send_message">Send Message</button>
            </form>
            
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
    <script type="text/javascript" src="./js/mail.js"></script>
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
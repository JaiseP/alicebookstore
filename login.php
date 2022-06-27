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
                <div class="login-register">
                    <div class="left">
                        <div class="form-box">
                            <div class="form-title">
                                <h3 class="active" id="login-title">Login</h3>
                                <h3 id="register-title">Register</h3>
                            </div>
                            <div class="form">
                                <!-- Login Form -->
                                <form id="login-form">
                                    <p class="form-label"></p>
                                    <div class="input-group__label">
                                        <label class="label">Email Id</label>
                                        <input type="text" placeholder="Enter email address" id="login_email" name="login_email">
                                        <p class="error-label">Error Label</p>
                                    </div>
                                    <div class="input-group__label">
                                        <label class="label">Password</label>
                                        <input type="password" placeholder="Enter your password" id="login_password" name="login_password">
                                        <p class="error-label">Error Label</p>
                                    </div>
                                    <p class="password-reset">Forgot Password?</p>
                                    <div class="button">
                                        <input type="submit" class="button__primary" id="login_submit" name="login_submit" />
                                    </div>
                                </form>
                                <!-- Register Form -->
                                <form id="register-form">
                                <p class="register-form-label"></p>
                                    <div class="input-group__label">
                                        <label>First Name</label>
                                        <input type="text" placeholder="Enter First Name" id="first_name">
                                        <p class="error-label">Error Label</p>
                                    </div>
                                    <div class="input-group__label">
                                        <label>Last Name</label>
                                        <input type="text" placeholder="Enter Last Name" id="last_name">
                                        <p class="error-label">Error Label</p>
                                    </div>
                                    <div class="input-group__label">
                                        <label for="company-select">Select Your Firm/Institution</label>
                                        <div class="select">
                                        <select id="company-select">
                                            <option value="1">Infosys</option>
                                            <option value="2">Prime Technologies</option>
                                            <option value="3">Experion</option>
                                            <option value="4">Zintech</option>
                                            <option value="5">Causecode Solutions</option>
                                        </select>
                                        <span class="focus"></span>
                                        </div>
                                    </div>
                                    <div class="input-group__label">
                                        <label>Email Id</label>
                                        <input type="text" placeholder="Enter email address" id="email_address">
                                        <p class="error-label">Error Label</p>
                                    </div>
                                    <div class="input-group__label">
                                        <label>Password</label>
                                        <input type="password" placeholder="Enter a password" id="password">
                                        <p class="error-label">Error Label</p>
                                    </div>
                                    <div class="input-group__label">
                                        <label>Repeat Password</label>
                                        <input type="password" placeholder="Repeat your password" id="password_repeat">
                                        <p class="error-label">Error Label</p>
                                    </div>
                                    <div class="button">
                                        <button class="button__primary" id="register_submit">Register</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="right">
                        <h2>Advantages of Becoming a Member</h2>
                        <div class="feature-group">
                            <img src="./assets/images/delivery-theme.png" alt="Delivery Theme Icon">
                            <p>Easily Track Orders, Hassle Free Returns.</p>
                        </div>
                        <div class="feature-group">
                            <img src="./assets/images/offers-theme.png" alt="Offers Theme Icon">
                            <p>Get Exclusive Discounts And Offers.</p>
                        </div>
                        <div class="feature-group">
                            <img src="./assets/images/gifts-theme.png" alt="Gifts Theme Icon">
                            <p>Access To Latest Products And Offers.</p>
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
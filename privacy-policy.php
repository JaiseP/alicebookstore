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
        <section class="container info-page">
                <h1>Privacy Policy</h1>
                <p>We respect the privacy of every person who visits or registers with Alice Bookstore.com or uses the Alice Bookstore mobile application (the "Sites") or the services that we make available from the Sites, over the telephone or in our shops, including but not limited to our customer support service, free in-store wi-fi service and loyalty schemes (our "Services"). We are further committed to ensuring a safe online experience.</p>
                <h3>Purpose of the Policy</h3>
                <p>This privacy policy ('Privacy Policy') explains our approach to any personal information that we might collect from you or which we have obtained about you from a third party and the purposes for which we process your personal information. This Privacy Policy also sets out your rights in respect of our processing of your personal information.

                This Privacy Policy will inform you of the nature of the personal information about you that is processed by us and how you can request that we delete, update, transfer it and/or provide you with access to it.
                
                This Privacy Policy is intended to assist you in making informed decisions when using the Sites and our Services. Please take a moment to read and understand it. Please note that it should be read in conjunction with our Website Terms of Use
                
                Please also note that this Privacy Policy only applies to the use of your personal information obtained by us, it does not apply to your personal information collected during your communications with third parties.</p>
                <h3>Who are we and what do we do?</h3>
                <p>The Sites and our Services are operated by Alice Bookstore Booksellers Limited, ("Alice Bookstore", "we", "us" or "our").

                    Alice Bookstore Booksellers Limited is an English company with registered company number: 00610095 and whose registered office is at 203-206 Piccadilly, London, W1J 9HD.
                    
                    Alice Bookstore Booksellers Limited is the data controller responsible for your personal information and is registered at the UK Information Commissioner's Office with registration number: Z5320847</p>
                <h3>What personal information do we collect and how do we use it?</h3>
                <p>We may collect the following types of personal data from you, all depending on how you interact with us:

                    name and contact information (such as email address, postal address and telephone number)
                    order and payment information
                    Alice Bookstore online account username/display name and password
                    IP address and information about your browsing habits
                    social media handles
                    requests, reviews and opinions
                    preferred shop
                    image recordings on our CCTV systems
                    any other personal data you may submit to us.
                    Our primary goal in collecting personal information from you is to:
                    
                    verify your identity;
                    help us improve our products and services and develop and market new products and services;
                    carry out requests made by you on the Sites;
                    investigate or settle inquiries or disputes;
                    comply with any applicable law, court order, other judicial process, or the requirements of a regulator;
                    enforce our agreements with you;
                    protect the rights, property or safety of us or third parties, including our other customers and users of the Sites and at our shops;
                    provide support for the provision of our Services; and
                    use as otherwise required or permitted by law.</p>
                <h3>How long do we keep your personal information for?</h3>
                <p>We will keep your personal information for the purposes set out in this Privacy Policy and in accordance with the law and relevant regulations. We will never retain your personal information for longer than is necessary.</p>
                <h3>Changes to this Privacy Policy</h3>
                <p>We may make changes to this Privacy Policy from time to time.

                    To ensure that you are always aware of how we use your personal information we will update this Privacy Policy from time to time to reflect any changes to our use of your personal information. We may also make changes as required to comply with changes in applicable law or regulatory requirements. We will notify you by e-mail of any significant changes. However, we encourage you to review this Privacy Policy periodically to be informed of how we use your personal information.</p>
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
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
                <h1>Terms & Conditions</h1>
                <h3>Your Details</h3>
                <p>When you register with the Alice Bookstore website, you will be required to choose a contact email address and password. You are responsible for all sessions and transactions taken under these details. You should keep your password safe and not disclose it to anyone. You should change it immediately if you feel it has been compromised.
                If any of your details change, such as your credit card billing address, you must inform Alice Bookstore as soon as possible. You may update your details by signing into your account on the Alice Bookstore website, and update the relevant section.</p>
                <h3>The Contract Between Us</h3>
                <p>Any contract for purchases made through the website will be with Alice Bookstore Booksellers Limited, whose registered office is situated at Alice Bookstore, 203-206 Piccadilly W1J 9HD, company registration number 610095 (Alice Bookstore).
                    Alice Bookstore must receive payment of the whole of the price for the goods that you order before your order can be accepted, and the contract formed. Payment is not taken until the point of dispatch of the goods to you from our distribution centre. Once payment has been received Alice Bookstore will confirm that your order has been received by sending an email to you at the email address you provide in your registration form. The shipment email will include your name, the order number and the total price. Alice Bookstore acceptance of your order brings into existence a legally binding contract between us on these terms. Any term sought to be imposed by you in your order will not form part of the contract.
                    Alice Bookstore are entitled to withdraw from any contract in the case of obvious errors or inaccuracies regarding the goods appearing on our website. If an error or inaccuracy is discovered with regards to the advertised price of the goods that you have ordered, we will contact you as soon as possible by email. This will be to inform you of the correct price of the goods, and to ask you if you wish to continue with the order at the amended price, or to cancel the order altogether.</p>
                <h3>Disclaimer</h3>
                <p>The nature of Internet communications means that your communications may be susceptible to data corruption, interception and delays. Alice Bookstore shall not be responsible for any detrimental reliance you place on this website or its contents.

                    Alice Bookstore is providing this site and its contents (including any downloadable data or software) on an 'as is' basis and makes no representations or warranties of any kind with respect to this site or its contents and disclaims all such representations and warranties, whether express or implied, to the fullest extent permitted by applicable law. In addition, Alice Bookstore makes no representations or warranties about the accuracy, completeness or suitability for any particular purpose of the information and related graphics published in this site or that any software or the server that makes it available are free of viruses or other harmful components.
                    
                    The information contained in this site may contain technical inaccuracies or typographical errors. All liability of Alice Bookstore howsoever arising for any such inaccuracies or errors is expressly excluded to the fullest extent permitted by applicable law.
                    
                    Neither Alice Bookstore nor any of its Directors, employees or other representatives will be liable for damages arising out of or in connection with the use of this site in any way. This is a comprehensive limitation of liability that applies to all damages of any kind, including (without limitation) compensatory, direct, indirect or consequential damages, loss of data, income or profit, loss of or damage to property and claims of third parties.</p>
                <h3>Copyright Notice</h3>
                <p>All design, text, graphics and the selection or arrangement thereof are the copyright of Alice Bookstore, or of other copyright owners. Permission is granted to electronically copy and print in hard copy portions of this site for the sole purpose of placing an order with Alice Bookstore, or using this site as a shopping resource. Any other use of materials on this site (including reproduction for purposes other than those noted above and modification, distribution, or republication) without the prior written permission of Alice Bookstore is strictly prohibited.</p>
                <h3>Promotional Discount Codes</h3>
                <p>We may occasionally offer discount codes to customers.

                    Discount codes are exclusive of online postage and packaging and can only be used once per person with one discount code to be used per transaction. Discount codes cannot be used with any other voucher, coupon or offer. Discount codes can only be used at time of purchase and not retrospectively. Discount codes can only be used on Alice Bookstore.com and not in Alice Bookstore stores. Discounts do not apply to Gift cards, eGifts or Click & Collect. They also do not apply to any partner sites such as Alice BookstoreGiftCards.com. We reserve the right to withdraw codes at any time.
                    
                    All discount codes are subject to their own Terms and Conditions.</p>
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
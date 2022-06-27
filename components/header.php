<?php include './init.php'; ?>

<!-- Drawer Menu -->
    <div class="drawer-menu">
        <div class="close">
            <i class="fa-solid fa-xmark"></i>
        </div>
        <ul>
            <li><a href="./products.php?id=1">Books</a></li>
            <li><a href="./products.php?id=3">Stationaries</a></li>
            <li><a href="./products.php?id=2">Gifts</a></li>
            <li><a href="./products.php?id=4">Office Equipments</a></li>
            <li><a href="./why-us.php">Why Alice Bookstore?</a></li>
            <li><a href="./reach-us.php">Reach Us</a></li>
        </ul>
    </div>

    <!-- Header Desktop -->
    <div class="header sticky">
        <div class="header__top">
            <p>FREE RETURS, SHIPPING ON ALL ORDERS</p>
            <div class="header__top-contact">
                <div class="header__top-contact-item">
                    <i class="fa-solid fa-phone"></i>
                    <p>+44 7770646445</p>
                </div>
                <div class="header__top-contact-item">
                    <i class="fa-solid fa-envelope"></i>
                    <p>conact@alicebookstore.co.uk</p>
                </div>
            </div>
        </div>
        <div class="header__main">
            <div class="header__main-logo">
                <a href="./index.php"><img src="./assets/images/logo.png" alt="Alice Bookstore Logo"></a>
            </div>
            <div class="header__main-search">
                <div class="header__main-search-input">
                    <input type="text" placeholder="Search Books, Stationaries, Gifts etc">
                </div>
                <div class="header__main-search-icon">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
            </div>
            <div class="header__main-options">
                <div class="header__main-options-item">
                <?php if(isset($_SESSION['login_status']) && $_SESSION['login_status'][0]['status']) { ?>
                    <a href="./profile.php">
                        <i class="fa-regular fa-user"></i>
                        <p>Hey,<br><?php echo $_SESSION['login_status'][0]['first_name']; ?></p>
                    </a>
                <?php } else { ?>
                    <a href="./login.php">
                        <i class="fa-regular fa-user"></i>
                        <p>Login /<br>Register</p>
                    </a>
                <?php } ?>
                </div>
                <div class="header__main-options-item">
                    <a href="./cart.php">
                        <div class="bag">
                            <img src="./assets/images/bag.png" alt="Cart Icon">
                            <p class="cart-count"></p>
                            
                        </div>
                        
                        <p>My <br>Cart</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="header__menu">
            <nav class="header__menu-nav">
                <li><a href="./products.php?id=1">Books</a></li>
                <li><a href="./products.php?id=3">Stationaries</a></li>
                <li><a href="./products.php?id=2">Gifts</a></li>
                <li><a href="./products.php?id=4">Office Equipments</a></li>
                <li><a href="./why-us.php">Why Alice Bookstore?</a></li>
                <li><a href="./reach-us.php">Reach Us</a></li>
            </nav>
        </div>
    </div>

    <!-- Header Mobile -->
    <div class="header-mobile sticky">
        <div class="menu">
            <i class="fa-solid fa-bars"></i>
        </div>
        <div class="logo">
            <a href="./index.php"><img src="./assets/images/logo.png" alt="Alice Bookstore Logo"></a>
        </div>
        <div class="search" id="search-view-open">
            <i class="fa-solid fa-magnifying-glass"></i>
        </div>
    </div>


     <!-- Search Mobile -->
     <div class="search-mobile sticky">

        <div class="head">
            <div class="input-group__label">
                <input type="text" placeholder="Search Books, Stationaries, Gifts etc">
            </div>
        </div>
    </div>


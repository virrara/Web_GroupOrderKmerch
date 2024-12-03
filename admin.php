<?php
session_start();
if($_SESSION['nama']=='')
{
    header("location:login.php");
}
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--=============== FAVICON ===============-->
        <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

        <!--=============== REMIX ICONS ===============-->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="assets/css/styles.css">

        <title>GO by riqueza</title>
    </head>
    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo">
                    <i class="ri-shopping-bag-2-line"></i> GO by riqueza
                </a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="#home" class="nav__link active-link">Home</a>
                        </li>
                        <li class="nav__item">
                            <a href="#note" class="nav__link">Note</a>
                        </li>
                        <li class="nav__item">
                            <a href="#products" class="nav__link">Products</a>
                        </li>
                        <li class="nav__item">
                            <a href="logout.php" class="nav__link">Logout</a>
                        </li>
                    </ul>

                    <div class="nav__close" id="nav-close">
                        <i class="ri-close-line"></i>
                    </div>
                </div>

                <div class="nav__btns">
                    <!-- Theme change button -->
                    <i class="ri-moon-line change-theme" id="theme-button"></i>

                    <div class="nav__toggle" id="nav-toggle">
                        <i class="ri-menu-line"></i>
                    </div>
                </div>
            </nav>
        </header>

        <main class="main">
            <!--==================== HOME ====================-->
            <section class="home" id="home">
                <div class="home__container container grid">
                    <img src="assets/img/home4.png" alt="" class="home__img">

                    <div class="home__data">
                        <h1 class="home__title">
                            <?php echo "Welcome,<br> ".$_SESSION['nama']; ?>!
                        </h1>
                        <p class="home__description">
                            Have a great day!
                        </p>
                        <a href="#about" class="button button--flex">
                            Explore <i class="ri-arrow-right-down-line button__icon"></i>
                        </a>
                    </div>

                    <div class="home__social">
                        <span class="home__social-follow">Follow Us</span>

                        <div class="home__social-links">
                            <a href="https://www.facebook.com/" target="_blank" class="home__social-link">
                                <i class="ri-facebook-fill"></i>
                            </a>
                            <a href="https://www.instagram.com/" target="_blank" class="home__social-link">
                                <i class="ri-instagram-line"></i>
                            </a>
                            <a href="https://twitter.com/" target="_blank" class="home__social-link">
                                <i class="ri-twitter-fill"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== NOTE ====================-->
            <section class="steps section container" id="note">
                <div class="steps__bg">
                    <h2 class="section__title-center steps__title">
                        Note <br> 
                    </h2>

                    <div class="steps__container grid">
                        
                        <div class="steps__card ">
                            <div class="steps__card-number">01</div>
                            <h3 class="steps__card-title">Sharing</h3>
                            <p class="steps__card-description">
                                Sharing stuff etc.
                            </p>
                            <a href="nsharing.php" class="button--link button--flex">
                                See <i class="ri-arrow-right-down-line button__icon"></i>
                            </a>
                        </div>

                        <div class="steps__card ">
                            <div class="steps__card-number">02</div>
                            <h3 class="steps__card-title">Proof CO</h3>
                            <p class="steps__card-description">
                                Proof CO barang.
                            </p>
                            <a href="adm_proof.php" class="button--link button--flex">
                                See <i class="ri-arrow-right-down-line button__icon"></i>
                            </a>
                        </div>

                        <div class="steps__card ">
                            <div class="steps__card-number">03</div>
                            <h3 class="steps__card-title">Track product</h3>
                            <p class="steps__card-description">
                                Track your order here!
                            </p>
                            <a href="adm_track.php" class="button--link button--flex">
                                See <i class="ri-arrow-right-down-line button__icon"></i>
                            </a>
                        </div>

                        <div class="steps__card ">
                            <div class="steps__card-number">04</div>
                            <h3 class="steps__card-title">Tagihan</h3>
                            <p class="steps__card-description">
                                Tagihan DP, Pelunasan etc.
                            </p>
                            <a href="adm_tagihan.php" class="button--link button--flex">
                                See <i class="ri-arrow-right-down-line button__icon"></i>
                            </a>
                        </div>

                        <div class="steps__card ">
                            <div class="steps__card-number">05</div>
                            <h3 class="steps__card-title">Testimoni</h3>
                            <p class="steps__card-description">
                                Thanks for order!
                            </p>
                            <a href="adm_testi.php" class="button--link button--flex">
                                See <i class="ri-arrow-right-down-line button__icon"></i>
                            </a>
                        </div>

                        <div class="steps__card ">
                            <div class="steps__card-number">05</div>
                            <h3 class="steps__card-title">Message</h3>
                            <p class="steps__card-description">
                                Someone need your help!
                            </p>
                            <a href="adm_contactus.php" class="button--link button--flex">
                                See <i class="ri-arrow-right-down-line button__icon"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== PRODUCTS ====================-->
            <section class="product section container" id="products">
                <h2 class="section__title-center">
                    Check out our <br> products
                </h2>

                <p class="product__description">
                    Here are some selected plants from our showroom, all are in excellent 
                    shape and has a long life span. Buy and enjoy best quality.
                </p>

                <div class="product__container grid">
                    <article class="product__card">
                        <div class="product__circle"></div>

                        <img src="assets/img/product1.png" alt="" class="product__img">

                        <h3 class="product__title">Cacti Plant</h3>
                        <span class="product__price">$19.99</span>

                        <button class="button--flex product__button">
                            <i class="ri-shopping-bag-line"></i>
                        </button>
                    </article>

                    <article class="product__card">
                        <div class="product__circle"></div>

                        <img src="assets/img/product2.png" alt="" class="product__img">

                        <h3 class="product__title">Cactus Plant</h3>
                        <span class="product__price">$11.99</span>

                        <button class="button--flex product__button">
                            <i class="ri-shopping-bag-line"></i>
                        </button>
                    </article>

                    <article class="product__card">
                        <div class="product__circle"></div>

                        <img src="assets/img/product3.png" alt="" class="product__img">

                        <h3 class="product__title">Aloe Vera Plant</h3>
                        <span class="product__price">$7.99</span>

                        <button class="button--flex product__button">
                            <i class="ri-shopping-bag-line"></i>
                        </button>
                    </article>

                    <article class="product__card">
                        <div class="product__circle"></div>

                        <img src="assets/img/product4.png" alt="" class="product__img">

                        <h3 class="product__title">Succulent Plant</h3>
                        <span class="product__price">$5.99</span>

                        <button class="button--flex product__button">
                            <i class="ri-shopping-bag-line"></i>
                        </button>
                    </article>

                    <article class="product__card">
                        <div class="product__circle"></div>

                        <img src="assets/img/product5.png" alt="" class="product__img">

                        <h3 class="product__title">Succulent Plant</h3>
                        <span class="product__price">$10.99</span>

                        <button class="button--flex product__button">
                            <i class="ri-shopping-bag-line"></i>
                        </button>
                    </article>

                    <article class="product__card">
                        <div class="product__circle"></div>

                        <img src="assets/img/product6.png" alt="" class="product__img">

                        <h3 class="product__title">Green Plant</h3>
                        <span class="product__price">$8.99</span>

                        <button class="button--flex product__button">
                            <i class="ri-shopping-bag-line"></i>
                        </button>
                    </article>
                </div>
            </section>

        <!--==================== FOOTER ====================-->
        <footer class="footer section">
            <div class="footer__container container grid">
                <div class="footer__content">
                    <a href="#" class="footer__logo">
                        <i class="ri-leaf-line footer__logo-icon"></i> GO by riqueza
                    </a>

                    <h3 class="footer__title">
                        Subscribe to our newsletter <br> to stay update
                    </h3>

                    <div class="footer__subscribe">
                        <input type="email" placeholder="Enter your email" class="footer__input">

                        <button class="button button--flex footer__button">
                            Subscribe
                            <i class="ri-arrow-right-up-line button__icon"></i>
                        </button>
                    </div>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Our Address</h3>

                    <ul class="footer__data">
                        <li class="footer__information">1234 - Tasikmalaya</li>
                        <li class="footer__information">Jawa Barat - Indonesia</li>
                        <li class="footer__information">123-456-789</li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Contact Us</h3>

                    <ul class="footer__data">
                        <li class="footer__information">+999 888 777</li>
                        
                        <div class="footer__social">
                            <a href="https://www.facebook.com/" class="footer__social-link">
                                <i class="ri-facebook-fill"></i>
                            </a>
                            <a href="https://www.instagram.com/" class="footer__social-link">
                                <i class="ri-instagram-line"></i>
                            </a>
                            <a href="https://twitter.com/" class="footer__social-link">
                                <i class="ri-twitter-fill"></i>
                            </a>
                            <a href="https://line.me/R/ti/g/mJRpsNZPri" class="footer__social-link">
                                <i class="ri-line-fill"></i>
                            </a>
                        </div>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">
                        We accept all credit cards
                    </h3>

                    <div class="footer__cards">
                        <img src="assets/img/card1.png" alt="" class="footer__card">
                        <img src="assets/img/card2.png" alt="" class="footer__card">
                        <img src="assets/img/card3.png" alt="" class="footer__card">
                        <img src="assets/img/card4.png" alt="" class="footer__card">
                    </div>
                    <div class="footer__cards">
                        <img src="assets/img/card5.jpg" alt="" class="footer__card">
                        <img src="assets/img/card6.png" alt="" class="footer__card">
                        <img src="assets/img/card7.png" alt="" class="footer__card">
                    </div>
                </div>
            </div>

            <p class="footer__copy"></p>
        </footer>
        
        <!--=============== SCROLL UP ===============-->
        <a href="#" class="scrollup" id="scroll-up"> 
            <i class="ri-arrow-up-fill scrollup__icon"></i>
        </a>

        <!--=============== SCROLL REVEAL ===============-->
        <script src="assets/js/scrollreveal.min.js"></script>
        
        <!--=============== MAIN JS ===============-->
        <script src="assets/js/main.js"></script>
    </body>
</html>

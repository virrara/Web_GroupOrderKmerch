<?php 
include('lib_tagihan.php');
$lib = new Library();
$data_tagihan = $lib->show();
               
if(isset($_GET['hapus_tagihan']))
{
    $tag_batch = $_GET['hapus_tagihan'];
    $status_hapus = $lib->delete($tag_batch);
    if($status_hapus)
    {
        header('Location: tagihan.php');
    }
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
        

        <title>GO by PIR</title>
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
                            <a href="index.php#about" class="nav__link">About</a>
                        </li>
                        <li class="nav__item">
                            <a href="index.php#note" class="nav__link">Note</a>
                        </li>
                        <li class="nav__item">
                            <a href="index.php#products" class="nav__link">Products</a>
                        </li>
                        <li class="nav__item">
                            <a href="index.php#faqs" class="nav__link">FAQs</a>
                        </li>
                        <li class="nav__item">
                            <a href="index.php#contact" class="nav__link">Contact Us</a>
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
                        <img src="img/admbill.svg" alt="" class="home__img">

                        <div class="home__data">
                            <h1 class="home__title">
                                Check Your <br> Bill Here !
                            </h1>
                            <p class="home__description">
                                Please pay the bill on time :)
                            </p>
                            <a href="#note" class="button button--flex">
                                Check now <i class="ri-arrow-right-down-line button__icon"></i>
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
                    <div class="container">
                        <div class="card">
                        <h2 class="section__title-center steps__title">
                            List Tagihan <br> 
                        </h2>
                            <div class="card-body">
                                <div class="steps__card ">
                                <table class="table table-bordered" width="100%">
                                    <tr>
                                        <th>Batch Ke-</th>
                                        <th>Negara</th>
                                        <th>No Resi</th>
                                        <th>Keterangan Tagihan</th>
                                    </tr>
                                    <?php 
                                    foreach($data_tagihan as $row)
                                    {
                                        echo "<tr>";
                                        echo "<td>".$row['tag_batch']."</td>";
                                        echo "<td>".$row['tag_negara']."</td>";
                                        echo "<td>".$row['tag_resi']."</td>";
                                        echo "<td>".$row['tag_ket']."</td>";
                                        echo "</tr>";
                                    }

                                    ?>
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><br><br><br>
              
              

            <!--==================== QUESTIONS ====================-->
            <section class="questions section" id="faqs">
                <h2 class="section__title-center questions__title container">
                    Some common questions <br> were often asked
                </h2>

                <div class="questions__container container grid">
                    <div class="questions__group">
                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                    What is a G.O
                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                    G.O stands for Group Order. Group orders are an easier way to purchase Kpop goods (albums, fan-made merch) from fansites themselves or official shops.
                                </p>
                            </div>
                        </div>

                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                    How does it work
                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                    1. Personal order : You can contact our line  <a href="https://line.me/R/ti/g/mJRpsNZPri" class="footer__social-link">
                                    <img src="img/line.svg" width="15px" class="image" alt="" /></a> and send the link you want to order. <br><br>
                                    2. Sharing/PO : we will open several PO/sharing for products from many groups. You can also request to ask us to open a PO/sharing.
                                </p>
                            </div>
                        </div>

                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                    Shipping
                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                    Shipping by EMS/AirCargo<br><br>
                                    Domisili Tasikmalaya, Jawa Barat.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="questions__group">
                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                    Rules
                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                1. No HNR. HNR? Blacklist<br>
                                2. Payment on time according to the specified time limit. If there are problems, please contact the admin for relief<br>
                                3. WTT/WTS only ready women are allowed<br>
                                4. Do not seek/offer opslot from other GO<br>
                                5. Any damage on the way from Korea to Indonesia or to the customer's house is NOT our responsibility.<br>
                                6. We will always confirm the condition of the PC if there is damage before sending it to the customer<br>
                                7. Complaints must include a complete unboxing video without being cut<br>
                                8. There are no refunds if you are hit by a scammer when you place a personal order.<br>
                                </p>
                            </div>
                        </div>

                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                    Rate for KR,CN,JP,US
                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                    <img src="img/kr.svg" width="15px" class="image" alt="" /> 12.7<br>
                                    <img src="img/cn.svg" width="15px" class="image" alt="" /> 2320<br>
                                    <img src="img/jp.svg" width="15px" class="image" alt="" /> 145<br>
                                    <img src="img/us.svg" width="15px" class="image" alt="" /> 14.200<br>
                                    <img src="img/ph.svg" width="15px" class="image" alt="" /> 75<br>
                                </p>
                            </div>
                        </div>

                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                    How to calculate net price?
                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                <img src="img/kr.svg" width="15px" class="image" alt="" /> (item price + local postage (if any)) x rate<br>
                                    <img src="img/cn.svg" width="15px" class="image" alt="" /> item price x rate (fee etc)<br>
                                    <img src="img/jp.svg" width="15px" class="image" alt="" /> item price + 100 JPY x rate<br>
                                    <img src="img/us.svg" width="15px" class="image" alt="" /> item price x rate<br>
                                    <img src="img/ph.svg" width="15px" class="image" alt="" /> item price x rate<br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== CONTACT ====================-->
            <section class="contact section container" id="contact">                
                <div class="contact__container grid">
                    <div class="contact__box">
                        <h2 class="section__title">
                            Reach out to us today <br> via any of the given <br> information
                        </h2>

                        <div class="contact__data">
                            <div class="contact__information">
                                <h3 class="contact__subtitle">Contact us via line for instant reply</h3>
                                <span class="contact__description">
                                    <i class="ri-line-fill"></i>
                                    @gobyriqueza
                                </span>
                            </div>

                            <div class="contact__information">
                                <h3 class="contact__subtitle">Write us by mail</h3>
                                <span class="contact__description">
                                    <i class="ri-mail-line contact__icon"></i>
                                    gobyriqueza@email.com
                                </span>
                            </div>
                        </div>
                    </div>

                    <form action="" method="POST" class="contact__form">
                        <div class="contact__inputs">
                            <div class="contact__content">
                                <input type="email" name="email" placeholder=" " class="contact__input">
                                <label for="" class="contact__label">Email</label>
                            </div>

                            <div class="contact__content">
                                <input type="text" name="subject" placeholder=" " class="contact__input">
                                <label for="" class="contact__label">Subject</label>
                            </div>

                            <div class="contact__content contact__area">
                                <textarea name="message" placeholder=" " class="contact__input"></textarea>                              
                                <label for="" class="contact__label">Message</label>
                            </div>
                        </div>

                        <button onclick="myFunction()" type="submit" name="sendmssg" value="Tambah" class="button button--flex">
                        Send Message
                        <i class="ri-arrow-right-up-line button__icon"></i>
                        </button>

                        <script>
                        function myFunction() {
                        alert("Message will be sent please wait for our reply to your email");
                        }
                        </script>
                    </form>
                </div>
            </section>
        </main>

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

</html>
<?php 
session_start();
if($_SESSION['nama']=='')
{
    header("location:login.php");
}

include('lib_tagihan.php');
$lib = new Library();
$data_tagihan = $lib->show();
    
if(isset($_GET['hapus_tagihan']))
{
    $tag_batch = $_GET['hapus_tagihan'];
    $status_hapus = $lib->delete($tag_batch);
    if($status_hapus)
    {
        header('Location: adm_tagihan.php');
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
                <a href="admin.php" class="nav__logo">
                    <i class="ri-shopping-bag-2-line"></i> GO by riqueza
                </a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="admin.php" class="nav__link active-link">Home</a>
                        </li>
                        <li class="nav__item">
                            <a href="admin.php#note" class="nav__link">Note</a>
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
                    <img src="img/admbill.svg" alt="" class="home__img">

                    <div class="home__data">
                        <h1 class="home__title">
                            Tagihan
                        </h1>
                        <p class="home__description">
                            Edit Tagihan 
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
           <<section class="steps section container" id="note">
                <div class="steps__bg">
                    <div class="container">
                        <div class="card">
                        <h2 class="section__title-center steps__title">
                            List Tagihan <br> 
                        </h2>

                <!------CRUD TRACKING FOR ADMIN ------->

                <div class="card-body">
                        <a href="tagihan_add.php"><img src="assets/img/tambah.png" width="15%" alt="Tambah" ></a>
                        <div class="steps__card ">
                        <table class="table table-bordered" width="100%">
                                    <tr>
                                        <th>Batch Ke-</th>
                                        <th>Negara</th>
                                        <th>No Resi</th>
                                        <th>Keterangan Tagihan</th>
                                        <th>Action</th>
                                    </tr>
                                    <?php 
                                    foreach($data_tagihan as $row)
                                    {
                                        echo "<tr>";
                                        echo "<td>".$row['tag_batch']."</td>";
                                        echo "<td>".$row['tag_negara']."</td>";
                                        echo "<td>".$row['tag_resi']."</td>";
                                        echo "<td>".$row['tag_ket']."</td>";
                                        echo "<td><a class='btn btn-info' href='tagihan_edit.php?tag_batch=".$row['tag_batch']."'><i class=\"ri-edit-line\"></i></a>
                                        <a class='btn btn-danger' href='adm_tagihan.php?hapus_tagihan=".$row['tag_batch']."'><i class=\"ri-delete-bin-5-line\"></i></a></td>";
                                        echo "</tr>";
                                    }

                                    ?>
                                </table>
                            </div>
                        </div>
                    </div>
                    </div>
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

</html>
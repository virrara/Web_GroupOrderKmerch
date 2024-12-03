<?php 
class Database
{
    public function __construct()
    {
        $host = "localhost";
        $dbname = "db_go";
        $username = "root";
        $password = "";
        $this->db = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
    }
    public function sendMessage($email, $subject, $message)
    {
        $data = $this->db->prepare('INSERT INTO contactus (email,subject,message) VALUES (?, ?, ?)');
        
        $data->bindParam(1, $email);
        $data->bindParam(2, $subject);
        $data->bindParam(3, $message);
 
        $data->execute();
        return $data->rowCount();
    }
}
include "db_go.php";
$query = "select * from tb_proof";
$result = mysqli_query($conn,$query);
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

        <!--=============== POPUP ===============-->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        

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
                            Proof CO
                        </h1>
                        <p class="home__description">
                            Update proof co 
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
                    <div class="container">
                        <div class="card">
                        <h2 class="section__title-center steps__title">
                            Proof CO <br> 
                        </h2>
               <!------------ CODE POP UP --------------->
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel-body">
                        <div class="table-responsive">
                    <table class="table table-bordered">
                        <div class="card-body">
                        <a href="proof_add.php" class="btn btn-success">Tambah</a>
                                <hr/>
                    <thead>
                        <?php
                    $db = mysqli_connect("localhost", "root", "", "db_go");
                     $sql= "SELECT *FROM tb_proof";
                     ?>
                        <tr>
                            <th width="60">Photo</th>
                            <th>RESI</th>
                            <th>TANGGAL</th>
                            <th>BARANG</th>
                            <th>STATUS</th>
                            <th>View</th>
                        </tr>
                        </thead> 
                        <?php while($row = mysqli_fetch_array($result)){ ?>
                            <tr>
                                <td><img src="images/<?php echo $row['pr_image']; ?>" height="50" width="50"/></td>
                                <td><?php echo $row['pr_resi']; ?></td>
                                <td><?php echo $row['pr_tanggal']; ?></td>
                                <td><?php echo $row['pr_barang']; ?></td>
                                <td><?php echo $row['pr_status']; ?></td>
                                <td><button data-pr_batch='<?php echo $row['pr_batch']; ?>' class="userinfo btn btn-success">Info</button></td>
                        
                            </tr>
                        <?php } ?>
                    </table>
                </div>        
            </div>
            </div>   

            <script type='text/javascript'>
                $(document).ready(function(){
                    $('.userinfo').click(function(){
                        var batch = $(this).data('pr_batch');
                        $.ajax({
                            url: 'ajax.php',
                            type: 'post',
                            data: {batch: batch},
                            success: function(response){ 
                                $('.modal-body').html(response); 
                                $('#empModal').modal('show'); 
                            }
                        });
                    });
                });
            </script>

            <div class="modal fade" id="empModal" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Product Info</h4>
                            <button type="button" class="close" data-dismiss="modal">×</button>
                            </div>
                            <div class="modal-body">
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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


    </body>
</html>
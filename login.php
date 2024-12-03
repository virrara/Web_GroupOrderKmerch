<?php 
 
include 'config.php';
 
error_reporting(0);
 
session_start();
 
if (isset($_SESSION['username'])) {
    header("Location: admin.php");
}
 
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = ($_POST['password']);
 
    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['nama'] = $row['nama'];
        header("Location: admin.php");
    } else {
        echo "<script>alert('Username atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}

if (isset($_POST['home'])) {
  header("Location: index.php");
}
 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="assets/css/style.css" />
    <title>Sign in</title>
  </head>
  <body>
    <div class="alert alert-warning" role="alert">
      <?php echo $_SESSION['error']?>
    </div>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="" class="sign-up-form" method="POST">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="username" placeholder="Username" name="username" value="<?php echo $username; ?>" required autofocus/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required/>
            </div>
            <div class="input-group">
              <button name="submit" class="btn">Login</button>
            </div>
            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
          <form action="" class="sign-in-form">
          <a href="index.php"><img src="assets/img/login.png" alt="Home" ></a>
          </form>
        </div>
      </div>
      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              Login to your account!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign in
            </button>
          </div>
          <img src="img/log1.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Not Admin?</h3>
            <p>
              Back to home!
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Home
            </button>
          </div>
          <img src="img/register1.svg" class="image" alt="" />
        </div>
      </div>
    </div>
    <script src="assets/js/app.js"></script>
  </body>
</html>

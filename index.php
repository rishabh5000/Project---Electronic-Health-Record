<?php
$success = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $email = $_POST['email'];
  $feedback = $_POST['feedback'];

  $servername = "localhost";
  $username = "root";
  $pass = "";

  $db = "ehr";
  $conn = mysqli_connect($servername, $username, $pass, $db);
  if($conn){
    $sql = "INSERT INTO `feedback` ( `email`, `feedback`) VALUES ( '$email', '$feedback')";
    $result = mysqli_query($conn,$sql);
    if($result){
      $success = true;
    } else{
      $success = "error";
    }
  }
  else{
    echo "error found";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Electronic Health Record</title>

  <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body id="top">

 <!-- PRELOADER -->

  <div class="preloader" data-preloader>
    <div class="circle"></div>
  </div>

 <!-- HEADER -->

  <header class="header" data-header>
    <div class="container">

      <nav class="navbar" data-navbar>

        <div class="navbar-top">

          <!-- <a href="#" class="logo">
            <img src="./assets/images/logo.svg" width="136" height="46">
          </a> -->

          <button class="nav-close-btn" aria-label="clsoe menu" data-nav-toggler>
            <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
          </button>

        </div>

        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="#" class="navbar-link title-md">Home</a>
          </li>

          <li class="navbar-item">
            <a href="login.php" class="navbar-link title-md">Admin</a>
          </li>

          <li class="navbar-item">
            <a href="user/index.php" class="navbar-link title-md" id = "myProfileLink">My Profile</a>
          </li>

          <li class="navbar-item">
            <a href="#" class="navbar-link title-md">About Us</a>
          </li>

          <li class="navbar-item">
            <a href="#" class="navbar-link title-md">Contact Us</a>
          </li>

      </nav>

      <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
        <ion-icon name="menu-outline"></ion-icon>
      </button>

      <a href="register.php" class="btn has-before title-md" id = "registerLink" >Register</a>

      <div class="overlay" data-nav-toggler data-overlay></div>

    </div>
  </header>

  <main>

    <!-- HERO -->

      <section class="section hero" style="background-image: url('./assets/images/hero-bg.png')" aria-label="home">
        <div class="container">

          <div class="hero-content">

            <p class="hero-subtitle has-before" data-reveal="left">Welcome To EHR</p>

            <h1 class="headline-lg hero-title" data-reveal="left">
              Electronic Health Record Management System <br>
            
            </h1>

          <section>
            <div class="hero-card" data-reveal="left">

              <p class="title-lg card-text a" id="about">
                About Us 
              </p>

              <div class="wrapper">
<section id = "section2">
                <p class="title-lg card-text"> 
                  At EHR, we provide innovative Electronic Health Records tailored to the unique needs of healthcare providers. Our systems prioritize usability, efficiency, and security, streamlining workflows and enhancing patient care.
                </p>
</section>
              </div>
          

            </div>

          </div>

          <figure class="hero-banner" data-reveal="right">
            <img src="./assets/images/hero-banner.png" width="590" height="590" loading="eager"
              class="w-100">
          </figure>

        </div>
      </section>

  <!-- FOOTER -->
<section id = "section3">
  <footer class="footer" style="background-image: url('./assets/images/footer-bg.png')">
    <div class="container">

      <div class="section footer-top">

        <div class="footer-brand" data-reveal="bottom">
            
          <address class="address">
            <ion-icon name="map-outline"></ion-icon>

            <span class="text">
              Health Records <br>
              IIIT Nagpur
            </span>
          </address>

          <ul class="contact-list has-after">
            
            <li class="contact-item">

              <div class="item-icon">
                <ion-icon name="mail-open-outline"></ion-icon>
              </div>

                <p>
                  Email : <a href="#" class="contact-link">ehr@gmail.com</a>
                </p>

            </li>

            <li class="contact-item">

              <div class="item-icon">
                <ion-icon name="call-outline"></ion-icon>
              </div>

              <div>

                <p>
                  Contact : <a href="#" class="contact-link">721 909 7690</a>
                </p>
              </div>

            </li>

          </ul>

        </div>


        <div class="footer-list" data-reveal="bottom">

          <p class="headline-sm footer-list-title">Terms and Conditions</p>

          <p class="text">
           Your data record is safe with us. We have passed all necessary security checks.
          </p>
        </div>

        <ul class="footer-list" data-reveal="bottom">

          <li>
            <p class="headline-sm footer-list-title">Services</p>
          </li>

          <li>
            <a href="#" class="text footer-link">Data Analysis</a>
          </li>

          <li>
            <a href="#" class="text footer-link">Listing</a>
          </li>
          <li>
            <a href="#" class="text footer-link">Record Management</a>
          </li>

        </ul>

        <ul class="footer-list" data-reveal="bottom">

          <li>
            <p class="headline-sm footer-list-title">Services</p>
          </li>
 
          <li>
            <a href="#" class="text footer-link">Conditions</a>
          </li>

          <li>
            <a href="#" class="text footer-link">Terms of Use</a>
          </li>

          <li>
            <a href="#" class="text footer-link">Our Services</a>
          </li>

        </ul>

        <div class="footer-list" data-reveal="bottom">

          <p class="headline-sm footer-list-title">Leave us a Feedback</p>

          <form action="/EHR/index.php" class="footer-form" method = "post">

            <input type="feedback" name="feedback" id = "feedback" placeholder="Feedback" class="input-field title-lg" autocomplete = "off">
            <br>
            <input type="email" name="email" id = "email" placeholder="Email" class="input-field title-lg" autocomplete = "off">
            <button type="submit" class="btn has-before title-md">Submit</button>

          </form>
        

        </div>

      </div>

      <div class="footer-bottom">

        <p class="text copyright">
          &copy; Electronic Health Record Project 2024
        </p>
      </div>

    </div>    

  </footer>      

  <script src="./assets/js/script.js"></script>

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  <script>
    document.getElementById('registerLink').addEventListener('click', function() {
      document.getElementById('myProfileLink').removeAttribute('disabled');
    });
  </script>

</body>

</html>
<?php
include("includes/database.php");
$query = "SELECT Name,Ratings,Comments FROM data ORDER BY RAND() LIMIT 5";
$stmt = $conn->query($query);

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <![endif]-->
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Home Page</title>
  <meta name="description" content="" />
  <link rel="shortcut icon" href="assets/img/brand/logo.ico" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="./assets/css/index.css" />
</head>

<body id="top">
  <!--[if lt IE 7]>
      <p class="browsehappy">
        You are using an <strong>outdated</strong> browser. Please
        <a href="#">upgrade your browser</a> to improve your experience.
      </p>
    <![endif]-->
  <div class="navbar-container">
    <nav class="
          navbar navbar-expand-lg navbar-light
          bg-white
          custom-shadow
          fixed-top
        ">
      <div class="container">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand text-custom fw-bold text-center" href="index.php">
              S2C</a>
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active text-center" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-center" href="#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-center" href="#services">Portfolio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-center" href="#contact">Contact</a>
              </li>
            </ul>

            <a href="login.php" class="btn custom-btn-bg text-white rounded-pill px-5">Login</a>
            <a href="reg.php" class="btn text-custom rounded-pill px-3 fw-bold" style="margin-left: 10px;font-size:16px;">Register</a>
          </div>
        </div>
      </div>
    </nav>
  </div>
  <section id="jumbo" class="custom-bg p-md-5 p-3 shadow">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12">
          <h1 class="
                display-5
                text-white
                big-text
                pt-md-5 pt-5
                mt-5
                animate__animated animate__fadeInDown
                text-center
              ">
            Welcome to Sumit Sharma Classes
            <p>Educational Institution</p>
            <p>Open 24 hours</p>
          </h1>
        </div>
      </div>
    </div>
  </section>
  <section id="about" class="p-md-5 p-3" style="margin-top: 80px">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-center">
          <figure>
            <img src="./assets/img/sumit.jpg" alt="author" class="
                  rounded
                  img-fluid
                  custom-shadow
                  animate__animated animate__slideInLeft
                " />
          </figure>
        </div>
        <div class="
              col-md-6
              custom-shadow
              rounded
              animate__animated animate__slideInRight
            ">
          <h2 class="h2 pt-3 px-4 text-center">About</h2>
          <br />
          <div class="mx-md-auto d-block mw-100">
            <ul class="list">
              <li><b>Name: </b>Sumit Sharma</li>
              <li><b>Profession:</b> Tutor</li>

              <li><b>From:</b> Zirakpur, Punjab</li>
              <li><b>Lives In:</b> Zirakpur, Punjab</li>
              <li><b>Age:</b> 30</li>
              <li><b>Gender:</b> Male</li>
              <li><b>Contact:</b> 8146933310</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="services" class="p-md-5 p-3" style="margin-top: 80px">
    <h1 class="h1 text-center fw-bold">Services</h1>
    <div class="container mt-md-5 mt-5">
      <div class="row">
        <div class="col-md-6 text-center">
          <?php

          $sub = array("CBSE Exams" => "100%", "Physics/Chemistry/Mathematics(PCM-12th)"  => "100%", "Accounts/Business Studies(Commerce-12th)" => "100%", "Science/Maths(10th)" => "100%", "Home Tuitions For Juniors" => "100%");

          foreach ($sub as $s => $s_value) {
          ?>
            <h6 class="h6"><?php echo $s ?></h6>
            <div class="progress mx-auto mw-100" style="height: 18px; width: 300px;">
              <div class="progress-bar" role="progressbar" style="width: 100%;background-color:#01b0f8;border-radius:10px;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                <?php echo $s_value ?>
              </div>
            </div>
            <br>
          <?php
          }
          ?>
        </div>
        <div class="col-md-6 text-center">
          <?php

          $newSub = array("NATA Coaching" => "90%", "Polytechnic Coaching"  => "92%", "JEE Mains/Advance" => "90%", "Carrer Councelling" => "95%", "Engineering Coaching" => "90%");

          foreach ($newSub as $ns => $ns_value) {
          ?>
            <h6 class="h6"><?php echo $ns ?></h6>
            <div class="progress mx-auto mw-100" style="height: 18px; width: 300px">
              <div class="progress-bar" role="progressbar" style="width: <?php echo $ns_value ?>;background-color:#01b0f8;border-radius:10px;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                <?php echo $ns_value ?>
              </div>
            </div>
            <br>
          <?php
          }
          ?>
        </div>
      </div>
    </div>
  </section>

  <section class="container d-md-none" style="margin-top: 80px">
    <h1 class="h1 text-center fw-bold ">Gallery</h1>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <?php
        $i = 1;
        while ($i < 18) {

        ?>
          <div class="carousel-item <?php echo $i == 1 ? "active" : ''; ?>">
            <img src="assets/img/work/g<?php echo $i; ?>.jpg" class="d-block w-100" alt="image" />
          </div>
        <?php
          ++$i;
        }
        ?>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>
  <section id="gallery" class="p-md-5 p-3 d-none d-md-block" style="margin-top: 80px">
    <h1 class="text-center fw-bold">Gallery</h1>
    <div class="container mt-md-5 mt-5">
      <div class="grid-container">
        <?php
        $i = 1;
        while ($i < 17) {
        ?>
          <div class="grid-items">
            <img src="./assets/img/work/g<?php echo $i ?>.jpg" alt="img" class="img-fluid" />
          </div>
        <?php
          $i++;
        }
        ?>
      </div>
      <div class="container mt-5  d-flex justify-content-center">
        <a href="events.php" class="btn btn-primary text-center w-25">Show More Images&nbsp; <i class="far fa-eye"></i></a>
      </div>
    </div>
  </section>
  <section id="testimonial" class="p-md-5 p-3" style="margin-top: 80px">
    <div class="container">
      <h1 class="h1 text-center fw-bold">Testimonials </h1>
      <div class="gtco-testimonials">

        <div class="owl-carousel owl-carousel1 owl-theme">
          <?php while ($row = $stmt->fetch_assoc()) : ?>
            <div>
              <div class="card text-center">

                <div class="card-body">
                  <h5><?php echo $row['Name']; ?> </h5>
                  <span>Ratings: <?php echo $row['Ratings']; ?></span>
                  <p class="card-text"><?php echo $row['Comments']; ?> </p>
                </div>
              </div>
            </div>
          <?php endwhile; ?>

        </div>

      </div>
      <a href="#" class="btn btn-link btn-block w-100  text-center mt-5">Show More Reviews</a>
    </div>


  </section>
  <section id="locate" class="p-md-5 p-3" style="margin-top: 80px">
    <h1 class="text-center h1 fw-bold">Get in touch</h1>

    <div class="container mt-2 mt-md-5">
      <div class="row">
        <div class="col-md-6">
          <div id="google-maps" style="width: 100%; height: 100%">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3432.374495666226!2d76.84321281546109!3d30.651581346589502!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390f94c3b825f5b1%3A0xd86c98a23e3f1820!2sGuru%20Nanak%20Enclave%2C%20Dhakoli%2C%20Zirakpur%2C%20Punjab%20160104!5e0!3m2!1sen!2sin!4v1629107501125!5m2!1sen!2sin" style="border: 0; max-width: 100%" allowfullscreen="" loading="lazy" width="600" height="450"></iframe>
          </div>
        </div>
        <div class="
              col-md-6
              bg-white
              custom-shadow
              p-2 p-md-5
              rounded
              mt-lg-2 mt-5
            ">
          <form class="contact-form" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <div class="form-row">
              <div class="col-12">
                <label for="Name">Name: </label>
                <input class="form-control" type="text" name="Name" placeholder="Your Name" />
              </div>
              <div class="col-12 mt-3">
                <label for="Email">Email: </label>
                <input class="form-control" type="text" name="Email" placeholder="Email Address" />
              </div>
              <div class="col-12 mt-3">
                <label for="Subject">Subject</label>
                <input class="form-control" type="text" name="Subject" placeholder="Subject" />
              </div>
              <div class="col-12 mt-3">
                <textarea class="form-control" name="Message" rows="6" placeholder="Enter message here.."></textarea>
              </div>
              <button type="submit" class="btn btn-info text-white mt-3 ml-1" name="send">
                Send Message
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <footer id="contact" style="
        background: linear-gradient(      160deg,      rgba(0, 147, 233, 1.0) 0%,      rgba(128, 208, 199, 1.0) 100%    );

        margin-top: 80px;
      " class="p-md-5 p-3">
    <div class="container">
      <div class="row">
        <div class="col-md-4 text-center">
          <address class="text-white">
            <strong class="text-white">Where to find me:</strong> <br />
            <br />
            sco no 7 new gurunanak enclave
            Guru Harkishan Marg
            Dhakoli
            Panchkula, Punjab 160104
            India
          </address>
        </div>
        <div class="col-md-4 text-center">
          <strong class="text-white">Follow me:</strong>
          <br />
          <br />
          <ul class="list-unstyled text-white">
            <li>
              <a href="https://www.instagram.com/sumit_sharma_classes/" class="text-white">Instagram</a>
            </li>
            <li>
              <a href="https://www.facebook.com/SumitSharmaClasses/" class="text-white">Facebook</a>
            </li>
            <li>
              <a href="https://www.youtube.com/c/XsumitSharma" class="text-white">Youtube</a>
            </li>
          </ul>
        </div>
        <div class="col-md-4 text-center">
          <strong class="text-white">Contact Me:</strong><br />
          <br />
          <ul class="list-unstyled">
            <li>
              <a href="mailto: sumitsharmaclasses9@gmail.com" class="text-white">Send Email</a>
            </li>
            <li>
              <a href="tel:8146933310" class="text-white">8146933310</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <?php
  if (isset($_POST['send'])) {
    $to = "admin@example.com";
    $subject = $_POST['Subject'];
    $txt = $_POST['Message'];
    $from = $_POST['Email'];
    $headers = "From: {$from}" . "\r\n";

    if (mail($to, $subject, $txt, $headers)) {
      echo "<script>alert('successfully sent');</script>";
    }
  }
  ?>
  <a href="#top" class="
        btn btn-white
        rounded-circle
        custom-shadow
        toTop
        d-flex
        justify-content-center
        align-items-center
        text-decoration-none
      "><i class="fas fa-arrow-up"></i></a>
  <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

  <!-- <script src="" async defer></script> -->
  <script>
    (function() {
      "use strict";

      var carousels = function() {
        $(".owl-carousel1").owlCarousel({
          loop: true,
          center: true,
          margin: 0,
          responsiveClass: true,
          nav: false,
          responsive: {
            0: {
              items: 1,
              nav: false
            },
            680: {
              items: 2,
              nav: false,
              loop: false
            },
            1000: {
              items: 3,
              nav: true
            }
          }
        });
      };

      (function($) {
        carousels();
      })(jQuery);
    })();
  </script>
</body>

</html>
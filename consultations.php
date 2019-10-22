<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Consultations &mdash; TARpv17 Gritsenko Team Site</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">

    <?php

    require_once "conf.php";

    $counter = 0;

    ?>
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
      
      <div class="container-fluid">
        <div class="d-flex align-items-center">
          <div class="site-logo mr-auto w-25"><a href="index.php">Consultations</a></div>

          <div class="mx-auto text-center">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0">
                    <li><a href="index.php" class="nav-link">Home</a></li>
                    <li><a href="consultations.php" class="nav-link">Consultations</a></li>
                    <li><a href="teachers.php" class="nav-link">Teachers</a></li>
                    <?php
                session_start();
                
                // Check if the user is already logged in, if yes then redirect him to welcome page
                if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
                    echo("<li><a href='profile.php' class='nav-link'>Profile</a></li>");
                    echo("<li><a href='logout.php' class='nav-link'>Log out</a></li>");
                }
                else{
                  echo("<li><a href='login.php' class='nav-link'>Login</a></li>");
                }
                ?>
              </ul>
            </nav>
          </div>

          <div class="ml-auto w-25">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <!--<ul class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-lg-block m-0 p-0">
                <li class="cta"><a href="#contact-section" class="nav-link"><span>Contact Us</span></a></li>
              </ul>-->
            </nav>
            <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a>
          </div>
        </div>
      </div>
      
    </header>

    <div class="intro-section" id="home-section">
      
      <div class="slide-1" style="background-image: url('images/hero_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="row align-items-center">
                <div class="col-lg-6 mb-4">
                  <h1  data-aos="fade-up" data-aos-delay="100">List of teachers</h1>
                  <p class="mb-4"  data-aos="fade-up" data-aos-delay="200">On this page you can find information about teachers</p>
                  <!--<p data-aos="fade-up" data-aos-delay="300"><a href="#" class="btn btn-primary py-3 px-5 btn-pill">Admission Now</a></p>-->

                </div>

                <!-- <div class="col-lg-6 ml-auto" data-aos="fade-up" data-aos-delay="500">
                  <form action="" method="post" class="form-box">
                    <h3 class="h4 text-black mb-4">Sign Up</h3>
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Email Addresss">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group mb-4">
                      <input type="password" class="form-control" placeholder="Re-type Password">
                    </div>
                    <div class="form-group">
                      <input type="submit" class="btn btn-primary btn-pill" value="Sign up">
                    </div>
                  </form> -->

                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>

    
    <!-- <div class="site-section courses-title" id="courses-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="">
            <h2 class="section-title">Consultations</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section courses-entry-wrap"  data-aos="fade-up" data-aos-delay="100">
      <div class="container">
        <div class="row">
          <div class="owl-carousel col-12 nonloop-block-14">
            <div class="course bg-white h-100 align-self-stretch">
              <figure class="m-0">
                <a href="course-single.php"><img src="images/img_1.jpg" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="course-inner-text py-4 px-4">
                 <span class="course-price">$20</span> 
                <div class="meta"><span class="icon-clock-o"></span>4 Lessons / 12 week</div>
                <h3><a href="#">Programming</a></h3>
                <p>Õpetaja: Marina Oleinik </p>
              </div>
              <div class="d-flex border-top stats">
                <div class="py-3 px-4"><span class="icon-users"></span> 34 students</div>
                <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> 2</div>
              </div>
            </div>
            <div class="course bg-white h-100 align-self-stretch">
              <figure class="m-0">
                <a href="course-single.php"><img src="images/img_2.jpg" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="course-inner-text py-4 px-4">
                 <span class="course-price">$99</span> 
                <div class="meta"><span class="icon-clock-o"></span>4 Lessons / 12 week</div>
                <h3><a href="#">Hajusrakenduste alused</a></h3>
                <p>Õpetaja: Irina Merkulova</p>
              </div>
              <div class="d-flex border-top stats">
                <div class="py-3 px-4"><span class="icon-users"></span> 19 students</div>
                <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> 2</div>
              </div>
            </div>
            <div class="course bg-white h-100 align-self-stretch">
              <figure class="m-0">
                <a href="course-single.php"><img src="images/img_3.jpg" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="course-inner-text py-4 px-4">
                 <span class="course-price">$99</span> 
                <div class="meta"><span class="icon-clock-o"></span>4 Lessons / 12 week</div>
                <h3><a href="#">Tööõigus</a></h3>
                <p>Õpetaja: Irina Maksimova</p>
              </div>
              <div class="d-flex border-top stats">
                <div class="py-3 px-4"><span class="icon-users"></span> 12 students</div>
                <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> 2</div>
              </div>
            </div>
            <div class="course bg-white h-100 align-self-stretch">
              <figure class="m-0">
                <a href="course-single.php"><img src="images/img_4.jpg" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="course-inner-text py-4 px-4">
                 <span class="course-price">$20</span> 
                <div class="meta"><span class="icon-clock-o"></span>4 Lessons / week</div>
                <h3><a href="#">Rakenduste Testimine</a></h3>
                <p>Õpetaja: Dmitri Kanarjov</p>
              </div>
              <div class="d-flex border-top stats">
                <div class="py-3 px-4"><span class="icon-users"></span> 24 students</div>
                <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> 5</div>
              </div>
            </div>-->
            <!--<div class="course bg-white h-100 align-self-stretch">
              <figure class="m-0">
                <a href="course-single.php"><img src="images/img_5.jpg" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="course-inner-text py-4 px-4">
                <span class="course-price">$99</span>
                <div class="meta"><span class="icon-clock-o"></span>4 Lessons / week</div>
                <h3><a href="#">Multimedia</a></h3>
                <p>Lorem ipsum dolor sit amet ipsa nulla adipisicing elit. </p>
              </div>
              <div class="d-flex border-top stats">
                <div class="py-3 px-4"><span class="icon-users"></span> 14 students</div>
                <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> 0</div>
              </div>
            </div>
            <div class="course bg-white h-100 align-self-stretch">
              <figure class="m-0">
                <a href="course-single.php"><img src="images/img_6.jpg" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="course-inner-text py-4 px-4">
                <span class="course-price">$99</span>
                <div class="meta"><span class="icon-clock-o"></span>4 Lessons / week</div>
                <h3><a href="#">Programming</a></h3>
                <p>Lorem ipsum dolor sit amet ipsa nulla adipisicing elit. </p>
              </div>
              <div class="d-flex border-top stats">
                <div class="py-3 px-4"><span class="icon-users"></span> 18 students</div>
                <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> 2</div>
              </div>
            </div> -->

         <!--  </div>
         
        </div>
        <div class="row justify-content-center">
          <div class="col-7 text-center">
            <button class="customPrevBtn btn btn-primary m-1">Prev</button>
            <button class="customNextBtn btn btn-primary m-1">Next</button>
          </div>
        </div>
      </div>
    </div> -->
    <!-- <div class="list-group">
      <a href="#" class="list-group-item list-group-item-action active">
        List of Teachers
      </a>
      <a href="#" class="list-group-item list-group-item-action">Marina Oleinik - Programming</a>
      <a href="#" class="list-group-item list-group-item-action">Irina Merkulova - Data Bases</a>
      <a href="#" class="list-group-item list-group-item-action">Irina Maksimova - Design</a>
      <a href="#" class="list-group-item list-group-item-action">Dmitri Kanarjov - Testing</a>
      <button class="btn btn-primary" type="submit">Add New Teacher</button> -->


      <div class="site-section courses-entry-wrap"  data-aos="fade-up" data-aos-delay="100">
      <div class="container">
        <div class="row">
     <!-- <div class="course bg-white h-100 align-self-stretch mr-5">
        <figure class="m-0">
          <a href="course-single.php"><img src="images/img_3.jpg" alt="Image" class="img-fluid"></a>
        </figure>
        <div class="course-inner-text py-4 px-4">
           <span class="course-price">$20</span>
          <div class="meta"><span class="icon-clock-o"></span>4 Lessons / 12 week</div>
          <h3><a href="#">Programming</a></h3>
          <p>Õpetaja: Marina Oleinik </p>
        </div>
        <div class="d-flex border-top stats">
          <div class="py-3 px-4"><span class="icon-users"></span> 34 students</div>
          <div class="py-3 px-4 w-20 ml-auto border-left"><button class="btn btn-primary m-1">Subscribe</button></div>
        </div>
      </div>
      
      <div class="course bg-white h-100 align-self-stretch mr-5">
        <figure class="m-0">
          <a href="course-single.php"><img src="images/img_2.jpg" alt="Image" class="img-fluid"></a>
        </figure>
        <div class="course-inner-text py-4 px-4">
           <span class="course-price">$99</span> 
          <div class="meta"><span class="icon-clock-o"></span>6 Lessons / 12 week</div>
          <h3><a href="#">Data Bases</a></h3>
          <p>Õpetaja: Irina Merkulova</p>
        </div>
        <div class="d-flex border-top stats">
          <div class="py-3 px-4"><span class="icon-users"></span> 15 students</div>
          <div class="py-3 px-4 w-20 ml-auto border-left"><button class="btn btn-primary m-1">Subscribe</button></div>
        </div>
      </div>
    
    
      <div class="course bg-white h-100 align-self-stretch mr-5 mt-5">
        <figure class="m-0">
          <a href="course-single.php"><img src="images/img_5.jpg" alt="Image" class="img-fluid"></a>
        </figure>
        <div class="course-inner-text py-4 px-4">
           <span class="course-price">$99</span> 
          <div class="meta"><span class="icon-clock-o"></span>4 Lessons / 12 week</div>
          <h3><a href="#">Tööõigus</a></h3>
          <p>Õpetaja: Irina Maksimova</p>
        </div>
        <div class="d-flex border-top stats">
          <div class="py-3 px-4"><span class="icon-users"></span> 12 students</div>
          <div class="py-3 px-4 w-20 ml-auto border-left"><button class="btn btn-primary m-1">Subscribe</button></div>
        </div>
      </div>
 
      <div class="course bg-white h-100 align-self-stretch mr-5 mt-5">
        <figure class="m-0">
          <a href="course-single.php"><img src="images/img_4.jpg" alt="Image" class="img-fluid"></a>
        </figure>
        <div class="course-inner-text py-4 px-4">
           <span class="course-price">$99</span>
          <div class="meta"><span class="icon-clock-o"></span>4 Lessons / 12 week</div>
          <h3><a href="#">Tööõigus</a></h3>
          <p>Õpetaja: Irina Maksimova</p>
        </div>
        <div class="d-flex border-top stats">
          <div class="py-3 px-4"><span class="icon-users"></span> 12 students</div>
          <div class="py-3 px-4 w-20 ml-auto border-left"><button class="btn btn-primary m-1">Subscribe</button></div>
        </div>
      </div> -->


      <?php
      $kask=$yhendus->prepare("SELECT teacher FROM consultation");
      $kask->bind_result($teacherid);
      $kask->execute();
      while($kask->fetch()){
      }
      $kask->close();
      $kask2=$yhendus->prepare("SELECT name FROM users WHERE id=$teacherid");
      $kask2->bind_result($teachername);
      $kask2->execute();
      while($kask2->fetch()){
      }
      $kask2->close();

      $kask3=$yhendus->prepare("SELECT consultation.consID, consultation.consname, consultation.consdesc, users.name FROM consultation, users, registrations WHERE consultation.teacher=users.id");
      $kask3->bind_result($id, $name, $description, $teachername);
      $kask3->execute();
      while($kask3->fetch()) {
          if ($counter >= 3){
          echo '
          <div class="course bg-white h-100 align-self-stretch mr-5">';
          }
          else{
            echo '
          <div class="course bg-white h-100 align-self-stretch mr-5 mt-5">';
          }
          echo '
            <figure class="m-0">
              <a href="course-single.php"><img src="images/img_3.jpg" alt="Image" class="img-fluid"></a>
            </figure>
            <div class="course-inner-text py-4 px-4">
              <div class="meta"><span class="icon-clock-o"></span>4 Lessons / 12 week</div>';

              echo '<h3><a href="#">' .htmlspecialchars($name).' - '.htmlspecialchars($teachername).'</a></h3>';
              echo '<p>'.htmlspecialchars($description).'</p>';
              echo '
            </div>
            <div class="d-flex border-top stats">';
              echo '<div class="py-3 px-4"><span class="icon-users"></span>'.htmlspecialchars($countstudents).'</div>';

              echo '<div class="py-3 px-4 w-20 ml-auto border-left"><button class="btn btn-primary m-1">Subscribe</button></div>
            </div>
          </div>';
      }
      $kask3->close();     
      ?>


    


    <footer class="footer-section bg-white">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h3>About Consultations</h3>
            <p>Consultations Project is a web project made by TARpv17 group at TTHK, The group consists of following students: Danil Gritsenko, Vladimir Trohhalev, Nikita Tšaika</p>
          </div>

          <div class="col-md-3 ml-auto">
            <h3>Links</h3>
            <ul class="list-unstyled footer-links">
            <li><a href="index.php" class="nav-link">Home</a></li>
                    <li><a href="consultations.php" class="nav-link">Consultations</a></li>
                    <li><a href="teachers.php" class="nav-link">Teachers</a></li>
                    <li><a href="profile.php" class="nav-link">Profile</a></li>
            </ul>
          </div>

    <!--
    <div class="site-section" id="programs-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-lg-7 text-center"  data-aos="fade-up" data-aos-delay="">
            <h2 class="section-title">Our Programs</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam repellat aut neque! Doloribus sunt non aut reiciendis, vel recusandae obcaecati hic dicta repudiandae in quas quibusdam ullam, illum sed veniam!</p>
          </div>
        </div>
        <div class="row mb-5 align-items-center">
          <div class="col-lg-7 mb-5" data-aos="fade-up" data-aos-delay="100">
            <img src="images/undraw_youtube_tutorial.svg" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-4 ml-auto" data-aos="fade-up" data-aos-delay="200">
            <h2 class="text-black mb-4">We Are Excellent In Education</h2>
            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem maxime nam porro possimus fugiat quo molestiae illo.</p>
            <div class="d-flex align-items-center custom-icon-wrap mb-3">
              <span class="custom-icon-inner mr-3"><span class="icon icon-graduation-cap"></span></span>
              <div><h3 class="m-0">22,931 Yearly Graduates</h3></div>
            </div>
            <div class="d-flex align-items-center custom-icon-wrap">
              <span class="custom-icon-inner mr-3"><span class="icon icon-university"></span></span>
              <div><h3 class="m-0">150 Universities Worldwide</h3></div>
            </div>
          </div>
        </div>
        <div class="row mb-5 align-items-center">
          <div class="col-lg-7 mb-5 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
            <img src="images/undraw_teaching.svg" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-4 mr-auto order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
            <h2 class="text-black mb-4">Strive for Excellent</h2>
            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem maxime nam porro possimus fugiat quo molestiae illo.</p>
            <div class="d-flex align-items-center custom-icon-wrap mb-3">
              <span class="custom-icon-inner mr-3"><span class="icon icon-graduation-cap"></span></span>
              <div><h3 class="m-0">22,931 Yearly Graduates</h3></div>
            </div>
            <div class="d-flex align-items-center custom-icon-wrap">
              <span class="custom-icon-inner mr-3"><span class="icon icon-university"></span></span>
              <div><h3 class="m-0">150 Universities Worldwide</h3></div>
            </div>
          </div>
        </div>
        <div class="row mb-5 align-items-center">
          <div class="col-lg-7 mb-5" data-aos="fade-up" data-aos-delay="100">
            <img src="images/undraw_teacher.svg" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-4 ml-auto" data-aos="fade-up" data-aos-delay="200">
            <h2 class="text-black mb-4">Education is life</h2>
            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem maxime nam porro possimus fugiat quo molestiae illo.</p>
            <div class="d-flex align-items-center custom-icon-wrap mb-3">
              <span class="custom-icon-inner mr-3"><span class="icon icon-graduation-cap"></span></span>
              <div><h3 class="m-0">22,931 Yearly Graduates</h3></div>
            </div>
            <div class="d-flex align-items-center custom-icon-wrap">
              <span class="custom-icon-inner mr-3"><span class="icon icon-university"></span></span>
              <div><h3 class="m-0">150 Universities Worldwide</h3></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section" id="teachers-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-lg-7 mb-5 text-center"  data-aos="fade-up" data-aos-delay="">
            <h2 class="section-title">Our Teachers</h2>
            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam repellat aut neque! Doloribus sunt non aut reiciendis, vel recusandae obcaecati hic dicta repudiandae in quas quibusdam ullam, illum sed veniam!</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="teacher text-center">
              <img src="images/person_1.jpg" alt="Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">
              <div class="py-2">
                <h3 class="text-black">Benjamin Stone</h3>
                <p class="position">Physics Teacher</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro eius suscipit delectus enim iusto tempora, adipisci at provident.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
            <div class="teacher text-center">
              <img src="images/person_2.jpg" alt="Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">
              <div class="py-2">
                <h3 class="text-black">Katleen Stone</h3>
                <p class="position">Physics Teacher</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro eius suscipit delectus enim iusto tempora, adipisci at provident.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="300">
            <div class="teacher text-center">
              <img src="images/person_3.jpg" alt="Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">
              <div class="py-2">
                <h3 class="text-black">Sadie White</h3>
                <p class="position">Physics Teacher</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro eius suscipit delectus enim iusto tempora, adipisci at provident.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section bg-image overlay" style="background-image: url('images/hero_1.jpg');">
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-md-8 text-center testimony">
            <img src="images/person_4.jpg" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
            <h3 class="mb-4">Jerome Jensen</h3>
            <blockquote>
              <p>&ldquo; Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum rem soluta sit eius necessitatibus voluptate excepturi beatae ad eveniet sapiente impedit quae modi quo provident odit molestias! Rem reprehenderit assumenda &rdquo;</p>
            </blockquote>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section pb-0">
      <div class="future-blobs">
        <div class="blob_2">
          <img src="images/blob_2.svg" alt="Image">
        </div>
        <div class="blob_1">
          <img src="images/blob_1.svg" alt="Image">
        </div>
      </div>
      <div class="container">
        <div class="row mb-5 justify-content-center" data-aos="fade-up" data-aos-delay="">
          <div class="col-lg-7 text-center">
            <h2 class="section-title">Why Choose Us</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto align-self-start"  data-aos="fade-up" data-aos-delay="100">
            <div class="p-4 rounded bg-white why-choose-us-box">
              <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-graduation-cap"></span></span></div>
                <div><h3 class="m-0">22,931 Yearly Graduates</h3></div>
              </div>
              <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-university"></span></span></div>
                <div><h3 class="m-0">150 Universities Worldwide</h3></div>
              </div>
              <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-graduation-cap"></span></span></div>
                <div><h3 class="m-0">Top Professionals in The World</h3></div>
              </div>
              <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-university"></span></span></div>
                <div><h3 class="m-0">Expand Your Knowledge</h3></div>
              </div>
              <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-graduation-cap"></span></span></div>
                <div><h3 class="m-0">Best Online Teaching Assistant Courses</h3></div>
              </div>
              <div class="d-flex align-items-center custom-icon-wrap custom-icon-light">
                <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-university"></span></span></div>
                <div><h3 class="m-0">Best Teachers</h3></div>
              </div>
            </div>
          </div>
          <div class="col-lg-7 align-self-end"  data-aos="fade-left" data-aos-delay="200">
            <img src="images/person_transparent.png" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
    
    <div class="site-section bg-light" id="contact-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7">
            
            <h2 class="section-title mb-3">Message Us</h2>
            <p class="mb-5">Natus totam voluptatibus animi aspernatur ducimus quas obcaecati mollitia quibusdam temporibus culpa dolore molestias blanditiis consequuntur sunt nisi.</p>
          
            <form method="post" data-aos="fade">
              <div class="form-group row">
                <div class="col-md-6 mb-3 mb-lg-0">
                  <input type="text" class="form-control" placeholder="First name">
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="Last name">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <input type="text" class="form-control" placeholder="Subject">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <input type="email" class="form-control" placeholder="Email">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <textarea class="form-control" id="" cols="30" rows="10" placeholder="Write your message here."></textarea>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-6">
                  
                  <input type="submit" class="btn btn-primary py-3 px-5 btn-block btn-pill" value="Send Message">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    
    
     
    <footer class="footer-section bg-white">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h3>About Consultations</h3>
            <p>Consultations Project is a web project made by TARpv17 group at TTHK, The group consists of following students: Danil Gritsenko, Vladimir Trohhalev, Nikita Tšaika</p>
          </div>
          <div class="col-md-3 ml-auto">
            <h3>Links</h3>
            <ul class="list-unstyled footer-links">
              <li><a href="#">Home</a></li>
              <li><a href="#">Courses</a></li>
              <li><a href="#">Programs</a></li>
              <li><a href="#">Teachers</a></li>
            </ul>
          </div>
          <!--<div class="col-md-4">
            <h3>Subscribe</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt incidunt iure iusto architecto? Numquam, natus?</p>
            <form action="#" class="footer-subscribe">
              <div class="d-flex mb-5">
                <input type="text" class="form-control rounded-0" placeholder="Email">
                <input type="submit" class="btn btn-primary rounded-0" value="Subscribe">
              </div>
            </form>
          </div>-->

        </div>

        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <!--| This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>-->
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      </p>
            </div>
          </div>
          
        </div>
      </div>
    </footer>

  
    <?php

    ?>
  </div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>

  
  <script src="js/main.js"></script>
    
  </body>
</html>
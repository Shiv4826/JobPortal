<?php

session_start();




define("APPURL","http://localhost/JobPortal");
?>

<!doctype html>
<html lang="en">
  <head>
    <title>JobBoard </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Free-Template.co" />
    <link rel="shortcut icon" type="image/png" href="images/download.png">
    

    
    <link rel="stylesheet" href="<?php echo APPURL;?>/css/custom-bs.css">
    <link rel="stylesheet" href="<?php echo APPURL;?>/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="<?php echo APPURL;?>/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="<?php echo APPURL;?>/fonts/icomoon/style.css">
    <link rel="stylesheet" href="<?php echo APPURL;?>/fonts/line-icons/style.css">
    <link rel="stylesheet" href="<?php echo APPURL;?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo APPURL;?>/css/animate.min.css">
    <link rel="stylesheet" href="<?php echo APPURL;?>/css/quill.snow.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="<?php echo APPURL;?>/css/style.css">    
  </head>
  <body id="top">
<!-- 
  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div> -->
    

<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    

    <!-- NAVBAR -->
    <header class="site-navbar mt-3">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="site-logo col-6"><a href="<?php echo APPURL;?>">JobBoard</a></div>

          <nav class="mx-auto site-navigation">
            <ul style ="margin-right:-500px"class="site-menu js-clone-nav d-inline d-xl-block ml-0 pl-0">
              <li><a href="<?php echo APPURL;?>/index.php" class="nav-link active">Home</a></li>
              <li><a href="<?php echo APPURL;?>/about.php">About</a></li>
              
            
              <li><a href="<?php echo APPURL;?>/contact.php">Contact</a></li> 
              <?php if(isset($_SESSION['username'])):?>

                <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
       <?php echo $_SESSION['username']; ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#"> Public profile</a>
          <a class="dropdown-item" href="#">Update profile</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo APPURL;?>/auth/logout.php">Logout</a>
        </div>
      </li>
      <li class="d-lg-inline"><a href="post-job.html"><span class="mr-2">+</span> Post a Job</a></li>


              <?php else:?>

     







              <li class="d-lg-inline"><a href="<?php echo APPURL;?>/auth/login.php">Log In</a></li>
              <li class="d-lg-inline"><a href="<?php echo APPURL;?>/auth/register.php">Register</a></li>
<?php endif;?>
            </ul>
          </nav>
          
     

        </div>
      </div>
    </header>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Frans Hike-> Type page desc here</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css?family=Mansalva|Roboto&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">

    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">

  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>






      <header class="site-navbar site-navbar-target bg-secondary shadow" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">


            <div class="site-logo">
              <h2 class="text-white mb-3" face="verdana" >Frans Hike</h2>
            <!--  <p href="index.html" class="text-white">Fundraiser</p>-->
            </div>


            <nav class="site-navigation text-left ml-auto " role="navigation">
              <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                <li ><a href="index.html" class="nav-link">Home</a></li>
                <li><a href="frans.html" class="nav-link">Who is Frans?</a></li>
                <li><a href="photoGallery.php" class="nav-link">Photo Gallery</a></li>
                <li><a href="archive.html" class="nav-link">Archive</a></li>
                <li><a href="photoGallery.html" class="nav-link">Events</a></li>
                <li><a href="events.html" class="nav-link">Testimonials</a></li>
                <li class="active"><a href="about.html" class="nav-link">About Us</a></li>
                <li><a href="contact.html" class="nav-link">Contact</a></li>
                <li><a href="contact.html" class="nav-link">&#8203;</a></li> <!-- this is only some space before social media-->

              <li>
                <a href="https://www.facebook.com/franshikegermany/" class="p-3"><span class="icon-facebook"></span></a>
                <a href="https://www.instagram.com/franshike/" class="p-3"><span class="icon-instagram"></span></a>
                 <a href="#" class="p-3"><span class="icon-twitter"></span></a>
               </li>

              </ul>
            </nav>


            <div class="ml-auto toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-white"><span class="icon-menu h3 text-white"></span></a></div>



          </div>
        </div>

      </header>
<!-- END OF HEADER -->

<!-- Page Content Start -->


<div class="site-section">
  <div class="container">



    <div class="row mb-5 align-items-st">
      <div class="col-md-4">
        <div class="heading-20219">
          <h2 class="title text-cursive">Photo Gallery</h2>
        </div>
      </div>
      <div class="col-md-8">
        <p align="center">Here is a list of our previous events. Please click on any of the events to see sample photos from that event.</p>
      </div>
    </div>

    <div class="row">

<!-- Event PHP loop start -->
<!-- This loop will go over all the folders in the PhotoGallery folder in the website file, for each folder, it will create a section with that folder name -->
<!-- The picture for each event is the one named "cover.jpg" in that folder -->

<?php
$path = "photoGallery/";

if ($handle = opendir($path)) {
    while (false !== ($file = readdir($handle))) {
        if ('.' === $file) continue;
        if ('..' === $file) continue;

        $urlEncoded= "galleryBrowser.php?gallery=" . urlencode( strval($file) );
        $folderCoverPicPath= strval("photoGallery/" . strval($file) . "/" . "cover.jpg");
        // do something with the file
?>

      <div class="col-md-4">
        <div class="cause shadow-sm">
            <a href="<?php print $urlEncoded; ?>" class="cause-link d-block">
              <img src="<?php print $folderCoverPicPath; ?>" alt="Image" class="img-fluid">
              <div class="custom-progress-wrap">
                <span class="caption"></span>
                <div class="custom-progress-inner">
                  <div class="custom-progress bg-primary" style="width: 100%;"></div>
                </div>
              </div>
            </a>
            <div class="px-3 pt-3 border-top-0 border border shadow-sm">
            <!--  <span class="badge-primary py-1 small px-4 rounded mb-3 d-inline-block">Koln (Cologne) Hike 2019</span>-->
              <h3 class="mb-4"><a href="<?php print $urlEncoded; ?>"><?php print $file; ?></a></h3>
              </div>
          </div>
      </div>

<?php
    }
   closedir($handle);
}
?>

<!-- Event PHP loop finishes -->

  </div>
  </div>
</div>



<!-- Page Content finish -->

<!-- FOOTER START -->

    <footer class="site-footer bg-white">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="row">

              <div class="col-md-7">
                <h2 class="footer-heading mb-4">Features</h2>
                <ul class="list-unstyled">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Testimonials</a></li>
                  <li><a href="#">Terms of Service</a></li>
                  <li><a href="#">Privacy</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>

            </div>
          </div>
          <div class="col-md-4 ml-auto">

            <h2 class="footer-heading mb-4">Follow Us</h2>
            <a href="#about-section" class="smoothscroll pl-0 pr-3"><span class="icon-facebook"></span></a>
            <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
            <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
            <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
            </form>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="pt-5">
              <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            </div>
          </div>

        </div>
      </div>
    </footer>

    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/main.js"></script>

  </body>

</html>

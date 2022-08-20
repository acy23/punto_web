<?php
   session_start();
   include("config.php");   
?>
<?php

   if (isset($_POST['submit'])){
      
      $name = $_POST['name'];
      $email = $_POST['email'];
      $subject = $_POST['subject'];
      $message = $_POST['comments'];

      $sql1 = "insert into message (email,subject,message,name) values ('$email','$subject','$message','$name')";
      $result = mysqli_query($con,$sql1);
      if ($result){
         echo "Successfully sent!";
      }
      else{
         echo "Error";
      }
   }
   
?>

<!DOCTYPE html>
<!--
	 by TEMPLATE STOCK
	templatestock.co @templatestock
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->

<html lang="en">
<head>
<!-- Meta Data -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Punto Group</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- Stlylesheet -->
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="css/font-awesome/css/font-awesome.css" type="text/css" />
<link rel="stylesheet" href="css/style.css" type="text/css" />
<link rel="stylesheet" href="css/no-ui-slider/jquery.nouislider.css" type="text/css" />

<!-- Skin Color -->
<link rel="stylesheet" href="css/colors/green.css" id="color-skins"/>
</head>
<body>

<!-- Start Preloader -->
<div id="loader">
   <div class="spinner">
      <div class="cube cube0"></div>
      <div class="cube cube1"></div>
      <div class="cube cube2"></div>
      <div class="cube cube3"></div>
      <div class="cube cube4"></div>
      <div class="cube cube5"></div>
      <div class="cube cube6"></div>
      <div class="cube cube7"></div>
      <div class="cube cube8"></div>
      <div class="cube cube9"></div>
      <div class="cube cube10"></div>
      <div class="cube cube11"></div>
      <div class="cube cube12"></div>
      <div class="cube cube13"></div>
      <div class="cube cube14"></div>
      <div class="cube cube15"></div>
   </div>
</div>
<!-- End Preloader -->

<!-- Start Header -->
<header>
   <nav class="navbar navbar-default navbar-alt" role="navigation">
      <div class="container">
         <!-- Brand and toggle get grouped for better mobile display -->
         <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand to-top" rel="home" href="#">
               <img src="img/assets/logo-white.png" alt="Visual" class="logo-big">
               <img src="img/assets/logo-dark.png" alt="Visual" class="logo-small">
            </a>
         </div>
         
         <!-- Collect the nav links, forms, and other content for toggling -->
         <div class="collapse navbar-collapse" id="main-nav">
            <ul class="nav navbar-nav  navbar-right">
               <li>
                  <a class="to-top">
                     Home
                  </a>
               </li>
               <li class="to-section">
                  <a href="./#about">
                     About Us
                  </a>
               </li>
               <li class="to-section">
                  <a href="./#team">
                     Team
                  </a>
               </li>
               <li class="to-section">
                  <a href="./#contact">
                     Contact
                  </a>
               </li>
            </ul>
         </div>
         <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
   </nav>
</header>
<!-- End Header -->

<!-- Start Home Revolution Slider Parallax Section -->
<section id="home-revolution-slider">
   <div class="hero">
      <div class="tp-banner-container">
         <div class="tp-banner">
            <ul>
               <!-- SLIDE 1 -->
               <li data-transition="fade" data-slotamount="7" data-masterspeed="2000" data-thumb="img/backgrounds/bg01.jpg" data-delay="10000" data-saveperformance="on" data-title="PortoGroup">
                  <!-- <img src="img/backgrounds/bg01.jpg" alt="slidebg1" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> -->
                  <video id="video1" preload="" autoplay="" muted="" playsinline="" loop="">
                     <source src="img/backgrounds/esas-video.mp4" type="video/mp4">
                  </video> 
                  <!-- Home Heading -->
                  <div class="tp-caption sft"
                                        data-x="left"  
                                        data-y="260"
                                        data-speed="1200"
                                        data-start="1100"
                                        data-easing="Power3.easeInOut"
                                        data-splitin="none"
                                        data-splitout="none"
                                        data-elementdelay="0.1"
                                        data-endelementdelay="0.1"
                                        data-endspeed="300"
                                        style="z-index: 4; max-width: auto; max-height: auto; white-space:normal;">
                     <h2 class="home-heading op-1">Punto</h2>
                  </div>
                  <!-- Home Button -->
                  <div class="tp-caption home-button sft fadeout"
                                        data-x="left" 
                                        data-y="400" 
                                        data-speed="1200"
                                        data-start="1550"
                                        data-easing="Power3.easeInOut"
                                        data-splitin="none"
                                        data-splitout="none"
                                        data-elementdelay="0.1"
                                        data-endelementdelay="0.1"
                                        data-endspeed="300"
                                        style="z-index: 4; max-width: auto; max-height: auto; white-space:normal;">
                     <div class="op-1">
                        <a href="#features" class="btn btn-primary btn-scroll">
                           LEARN MORE
                        </a>
                     </div>
                  </div>
               </li>
            </ul>
            <div class="tp-bannertimer"></div>
         </div>
         <div class="home-bottom">
            <div class="container text-center">
               <div class="move bounce">
                  <a href="#features" class="ion-ios-arrow-down btn-scroll">
                  </a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- End Home Revolution Slider Parallax Section -->

<div class="site-wrapper content">
   
   <!-- Start Features Section -->
   <section id="features">
      <div class="container">
         <div class="col-md-12 text-center wow fadeInUp">
            <h3 class="section-title">About our Company</h3>
            <br>
         </div>
         <div class="row features-row wow fadeInUp">
            <div class="col-md-4 col-sm-12 feature-column">
               <div class="feature-icon">
                  <i class="icon-eyeglasses size-2x highlight"></i>
                  <i class="icon-eyeglasses back-icon"></i>
               </div>
               <div class="feature-info">
                  <h4>Global Brand</h4>
                  <p class="feature-description">As a global brand, we strive to capture the attention of our customers with our appreciation for luxury items and unconditional attention to product presentation. At Punto Group we aim to solely offer exceptional product quality, prime sales locations, and authentic pricing. We make sure all of our products meet these important and highly valued requirements.</p>
               </div>
            </div>
            <div class="col-md-4 col-sm-12 feature-column">
               <div class="feature-icon">
                  <i class="icon-lock-open size-2x highlight"></i>
                  <i class="icon-lock-open back-icon"></i>
               </div>
               <div class="feature-info">
                  <h4>Skillful support</h4>
                  <p class="feature-description">With an experienced team of designers and skilful support of our own R&D division, Punto Group has succeeded in inspiring innumerable international brands. Our design team seeks to create miscellaneous collections, with the prime focus on the customers’ needs and preferences.</p>
               </div>
            </div>
            <div class="col-md-4 col-sm-12 feature-column">
               <div class="feature-icon">
                  <i class="icon-energy size-2x highlight"></i>
                  <i class="icon-energy back-icon"></i>
               </div>
               <div class="feature-info">
                  <h4>Maintenance</h4>
                  <p class="feature-description">By offering a wide selection of products we have been able to build a strong client base. We believe that it is highly important to maintain genuine long-term connections with the customer. Our goal is to supply for life.</p>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--End Features Section -->
   
   <!-- Start About Section -->
   <section id="about">
      <div class="container">
         <div class="row">
            <div class="col-md-6 text-left about-text">
               <h3 class="wow fadeInUp">Our Story </h3>
               <p class="wow fadeInUp">Established in 1994 as a producer of ready-to-wear leather & fur apparel and accessories, Punto is nowadays the leader in its sector. Throughout the years Punto Group has risen to an eminent position within the luxury fashion industry. It is our objective to reflect the world’s current trends through our unique collections as well as set new ones to enter new avant-garde territories.</p>
               <p class="wow fadeInUp">
                  <button type="button" class="btn btn-primary btn-md">Get in Touch</button>
               </p>
            </div>
            <div class="col-md-6 wow fadeInUp about-text">
               <!--    <div class="video-container">
                                <iframe src="http://player.vimeo.com/video/115919099?title=0&amp;byline=0&amp;portrait=0&amp;color=fff" allowfullscreen></iframe>
                            </div> -->
               <h3 class="wow fadeInUp"> Features </h3>
               <div class="progress-bars">
                  <p>Client satisfaction</p>
                  <div class="progress" data-percent="100%">
                     <div class="progress-bar">
                        <span class="progress-bar-tooltip">100</span>
                     </div>
                  </div>
                  <p>Wide selection of products</p>
                  <div class="progress" data-percent="100%">
                     <div class="progress-bar">
                        <span class="progress-bar-tooltip">100</span>
                     </div>
                  </div>
                  <p>Sustainable relationships</p>
                  <div class="progress" data-percent="100%">
                     <div class="progress-bar">
                        <span class="progress-bar-tooltip">100</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- End About Section -->
   
   <!-- Start Team Section -->
   <section id="team">
      <div class="container">
         <div class="col-md-12 text-center wow fadeInUp">
            <h3 class="section-title">Meet the Crew.</h3><br>
         </div>
         <div class="row">
            <div class="col-md-3 col-sm-3 team-member">
               <div class="effect effects wow fadeInUp">
                  <div class="img">
                     <img src="img/team/team-1.jpg" class="img-responsive" alt="" />
                     <div class="overlay">
                        <ul class="expand">
                           <li class="social-icon">
                              <a href="#" onClick="return false;">
                                 <i class="icon-social-facebook"></i>
                              </a>
                           </li>
                           <li class="social-icon">
                              <a href="#" onClick="return false;">
                                 <i class="icon-social-twitter"></i>
                              </a>
                           </li>
                           <li class="social-icon">
                              <a href="#" onClick="return false;">
                                 <i class=" icon-envelope-open"></i>
                              </a>
                           </li>
                        </ul>
                        <a class="close-overlay hidden">
                           x
                        </a>
                     </div>
                  </div>
               </div>
               <div class="member-info wow fadeInUp">
                  <h4>John Visual</h4>
                  <h5 class="highlight">CEO / Founder</h5>
                  <p>Vivamus motestues phasellus enim sed orci eu pharetra. </p>
               </div>
            </div>
            <div class="col-md-3 col-sm-3 team-member">
               <div class="effect effects wow fadeInUp">
                  <div class="img">
                     <img src="img/team/team-2.jpg" class="img-responsive" alt="" />
                     <div class="overlay">
                        <ul class="expand">
                           <li class="social-icon">
                              <a href="#" onClick="return false;">
                                 <i class="icon-social-facebook"></i>
                              </a>
                           </li>
                           <li class="social-icon">
                              <a href="#" onClick="return false;">
                                 <i class="icon-social-twitter"></i>
                              </a>
                           </li>
                           <li class="social-icon">
                              <a href="#" onClick="return false;">
                                 <i class=" icon-envelope-open"></i>
                              </a>
                           </li>
                        </ul>
                        <a class="close-overlay hidden">
                           x
                        </a>
                     </div>
                  </div>
               </div>
               <div class="member-info wow fadeInUp">
                  <h4>John Visual</h4>
                  <h5 class="highlight">CEO / Founder</h5>
                  <p>Vivamus motestues phasellus enim sed orci eu pharetra.</p>
               </div>
            </div>
            <div class="col-md-3 col-sm-3 team-member">
               <div class="effect effects wow fadeInUp">
                  <div class="img">
                     <img src="img/team/team-3.jpg" class="img-responsive" alt="" />
                     <div class="overlay">
                        <ul class="expand">
                           <li class="social-icon">
                              <a href="#" onClick="return false;">
                                 <i class="icon-social-facebook"></i>
                              </a>
                           </li>
                           <li class="social-icon">
                              <a href="#" onClick="return false;">
                                 <i class="icon-social-twitter"></i>
                              </a>
                           </li>
                           <li class="social-icon">
                              <a href="#" onClick="return false;">
                                 <i class=" icon-envelope-open"></i>
                              </a>
                           </li>
                        </ul>
                        <a class="close-overlay hidden">
                           x
                        </a>
                     </div>
                  </div>
               </div>
               <div class="member-info wow fadeInUp">
                  <h4>Jane Wunder</h4>
                  <h5 class="highlight">PR Manager</h5>
                  <p>Vivamus motestues phasellus enim sed orci eu pharetra.</p>
               </div>
            </div>
            <div class="col-md-3 col-sm-3 team-member">
               <div class="effect effects wow fadeInUp">
                  <div class="img">
                     <img src="img/team/team-4.jpg" class="img-responsive" alt="" />
                     <div class="overlay">
                        <ul class="expand">
                           <li class="social-icon">
                              <a href="#" onClick="return false;">
                                 <i class="icon-social-facebook"></i>
                              </a>
                           </li>
                           <li class="social-icon">
                              <a href="#" onClick="return false;">
                                 <i class="icon-social-twitter"></i>
                              </a>
                           </li>
                           <li class="social-icon">
                              <a href="#" onClick="return false;">
                                 <i class=" icon-envelope-open"></i>
                              </a>
                           </li>
                        </ul>
                        <a class="close-overlay hidden">
                           x
                        </a>
                     </div>
                  </div>
               </div>
               <div class="member-info wow fadeInUp">
                  <h4>Mike Nicecode</h4>
                  <h5 class="highlight">Web Developer</h5>
                  <p>Vivamus motestues phasellus enim sed orci eu pharetra.</p>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- End Team Section -->
  
   <!-- Start Get Connected -->
   <!--
   <section id="services" class="parallax-section-9">
      <div class="container">
         <div class="col-md-12 text-center">
            <h3 class="section-title wow fadeInUp">What we do.</h3>
            <p class="subheading wow fadeInUp">We use <span class="highlight">our expertise</span> to extend your brand.</p>
         </div>
         <div class="row features-row wow fadeInUp">
            <div class="col-md-4 col-sm-12 feature-column">
               <div class="feature-icon">
                  <i class="icon-eyeglasses size-2x highlight"></i>
               </div>
               <div class="feature-info">
                  <h4>Parallax Design</h4>
                  <p class="feature-description">Vivamus molestie phasellus enim sed orci eu pharetra. Donec posuere nunc vitae tortor sagittis feugiat in non massa.</p>
               </div>
            </div>
            <div class="col-md-4 col-sm-12 white feature-column">
               <div class="feature-icon">
                  <i class="icon-lock-open size-2x highlight"></i>
               </div>
               <div class="feature-info">
                  <h4>Fully Responsive</h4>
                  <p class="feature-description">Vivamus molestie phasellus enim sed orci eu pharetra. Donec posuere nunc vitae tortor sagittis feugiat in non massa.</p>
               </div>
            </div>
            <div class="col-md-4 col-sm-12 white feature-column">
               <div class="feature-icon">
                  <i class="icon-energy size-2x highlight"></i>
               </div>
               <div class="feature-info">
                  <h4>Fast & Smooth</h4>
                  <p class="feature-description">Vivamus molestie phasellus enim sed orci eu pharetra. Donec posuere nunc vitae tortor sagittis feugiat in non massa.</p>
               </div>
            </div>
         </div>
         <div class="row features-row wow fadeInUp">
            <div class="col-md-4 col-sm-12 feature-column">
               <div class="feature-icon">
                  <i class="icon-eyeglasses size-2x highlight"></i>
               </div>
               <div class="feature-info">
                  <h4>Parallax Design</h4>
                  <p class="feature-description">Vivamus molestie phasellus enim sed orci eu pharetra. Donec posuere nunc vitae tortor sagittis feugiat in non massa.</p>
               </div>
            </div>
            <div class="col-md-4 col-sm-12 white feature-column">
               <div class="feature-icon">
                  <i class="icon-lock-open size-2x highlight"></i>
               </div>
               <div class="feature-info">
                  <h4>Fully Responsive</h4>
                  <p class="feature-description">Vivamus molestie phasellus enim sed orci eu pharetra. Donec posuere nunc vitae tortor sagittis feugiat in non massa.</p>
               </div>
            </div>
            <div class="col-md-4 col-sm-12 white feature-column">
               <div class="feature-icon">
                  <i class="icon-energy size-2x highlight"></i>
               </div>
               <div class="feature-info">
                  <h4>Fast & Smooth</h4>
                  <p class="feature-description">Vivamus molestie phasellus enim sed orci eu pharetra. Donec posuere nunc vitae tortor sagittis feugiat in non massa.</p>
               </div>
            </div>
         </div>
      </div>
   -->
   </section>

   <!-- End Services Section -->
   
   <!-- Start Clients Section -->

   <!-- 
   <section id="clients">
      <div class="container">
         <div class="row">
            <div class="col-md-12 text-center">
               <h3 class="section-title wow fadeInUp">Recent Clients.</h3>
               <p class="subheading wow fadeInUp">Meet our clients, some of the most well known companies.</p>
            </div>
            <div class="clients">
               <div id="client-slider" class="owl-carousel">
                  <div class="item">
                     <img src="img/clients/logo-1-dark.png" alt="" />
                  </div>
                  <div class="item">
                     <img src="img/clients/logo-2-dark.png" alt="" />
                  </div>
                  <div class="item">
                     <img src="img/clients/logo-3-dark.png" alt="" />
                  </div>
                  <div class="item">
                     <img src="img/clients/logo-4-dark.png" alt="" />
                  </div>
                  <div class="item">
                     <img src="img/clients/logo-5-dark.png" alt="" />
                  </div>
                  <div class="item">
                     <img src="img/clients/logo-6-dark.png" alt="" />
                  </div>
                  <div class="item">
                     <img src="img/clients/logo-7-dark.png" alt="" />
                  </div>
                  <div class="item">
                     <img src="img/clients/logo-8-dark.png" alt="" />
                  </div>
                  <div class="item">
                     <img src="img/clients/logo-9-dark.png" alt="" />
                  </div>
                  <div class="item">
                     <img src="img/clients/logo-10-dark.png" alt="" />
                  </div>
                  <div class="item">
                     <img src="img/clients/logo-11-dark.png" alt="" />
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   -->
   <!-- End Clients Section -->
   
   <!-- Start Call to Action 1 -->
   <section id="call-to-action-1">
      <div class="container">
         <div class="row">
            <div class="col-md-12 text-center">
               <h3 class="wow fadeInUp">FEEL LIKE WORKING WITH US?</h3>
               <p class="wow fadeInUp">Vivamus a placerat ante. Duis vulputate nibh sit amet augue vehicula, mattis ni<br>
                  viverra purus tristique. Proin commodo eu ipsum. </p>
               <a href="#contact" class="btn btn-primary btn-scroll">
                  Get in Touch
               </a>
            </div>
         </div>
      </div>
   </section>
   <!-- End Call to Action 1 -->
   
   <!-- Start Testimonials Section -->
   <section id="testimonials" class="parallax-section-4">
      <div class="container">
         <div class="row">
            <div class="col-md-12 text-center">
               <h3 class="section-title white wow fadeInUp">What clients say.</h3>
               <p class="subheading grey wow fadeInUp">What People Say's About Us</p>
            </div>
            <div class="col-md-12 text-center wow fadeInUp">
               <div id="owl-testimonials" class="owl-carousel">
                  <div>
                     <div class="testimonial">
                        <i class="icon-left ion-quote ion-2x highlight"></i>
                        <span> This guys are amazing! They were so quick to respond and let me tell you... they are all knowing!<br>
                        I highly recommend their themes! They are all about making their clients happy. </span>
                        <i class="icon-right ion-quote ion-2x highlight"></i>
                     </div>
                     <div class="testimonial-name">
                        <img src="img/clients/client-1.png" alt="client">
                        <h4 class="white">Jack Walles</h4>
                        <a href="#">
                           www.google.com
                        </a>
                     </div>
                  </div>
                  <div>
                     <div class="testimonial">
                        <i class="icon-left ion-quote ion-2x highlight"></i>
                        <span> This one is undoubtedly the best template I ever bought! Easy to edit, nicely coded and I highly recommend it.<br>
                        It's wonderful design and also very fast and excelent support. </span>
                        <i class="icon-right ion-quote ion-2x highlight"></i>
                     </div>
                     <div class="testimonial-name">
                        <img src="img/clients/client-2.png" alt="client">
                        <h4 class="white">Jane Smith</h4>
                        <a href="#">
                           www.facebook.com
                        </a>
                     </div>
                  </div>
                  <div>
                     <div class="testimonial">
                        <i class="icon-left ion-quote ion-2x highlight"></i>
                        <span> Visual is well documented and well coded, but the best of all is the friendly and quick support behind it.<br>
                        Visual Design did a great and dedicated job. Thank you for this awesome theme! </span>
                        <i class="icon-right ion-quote ion-2x highlight"></i>
                     </div>
                     <div class="testimonial-name">
                        <img src="img/clients/client-3.png" alt="client">
                        <h4 class="white">jonathan warton</h4>
                        <a href="#">
                           www.msn.com
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- End Testimonials Section -->
   
   <!-- Start Contact Form Section -->
   <section id="contact">
      <div class="container">
         <div class="row">
            <div class="col-md-12 text-center">
               <h3 class="section-title wow fadeInUp">Contact us</h3>
               <p class="subheading wow fadeInUp"> Let's Work Together. </p>
            </div>
            <div class="col-md-7 wow fadeInUp">
               <div id="message"></div>
               <form method="post" action="" name="contactform" id="contactform">
                  
                  <input name="name" type="text" id="name" placeholder="Name"/>
                  <input name="email" type="text" id="email" placeholder="Email"/>
                  <input name="subject" type="text" id="subject" placeholder="Subject"/>
                  <input name="comments" cols="40" rows="3" id="comments" placeholder="Message"/>
                  
                  <input type="submit" class="submit" id="submit" value="Send Message"/>
               </form>
            </div>
            <div class="col-md-5 wow fadeInLeft">
               <h4> Turkey : </h4>
               <address>
               Telsiz, 82/1. Sk. No:1, 34020 Zeytinburnu/İstanbul<br>
               P: (212) 546 87 50 <br>
               mail: info@puntogroup.com
               </address>
            </div>
         </div>
      </div>
   </section>
   <!-- End Contact Form Section -->
   
   <!-- Start Footer 1 -->
   <footer id="footer">
      <!-- End Footer Widgets -->
      
      <div class="footer-copyright">
         <div class="container">
            <div class="row">
               <div class="col-md-12 text-center">
                  <h3 class="section-title wow fadeInUp">Punto Group</h3>
                  <p class="wow fadeInUp"> All Rights Reserved. Copyright © 2022 
                  <a href="http://localhost/" target="_blank">Punto Group</a> 
                  </p>
                  <ul class="social-icons subheading">
                     <li>
                        <a href="#">
                           <i class="icon ion-social-instagram-outline"></i>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                           <i class="icon ion-social-linkedin"></i>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                           <i class="icon ion-social-youtube"></i>
                        </a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <!-- End Footer Copyright -->
      
   </footer>
   <!-- End Footer 1 -->
   
   <!-- Start Back To Top -->
   <a id="back-to-top">
      <i class="icon ion-chevron-up"></i>
   </a>
   <!-- End Back To Top -->
   
</div>
<!-- End Site Wrapper -->
<!-- jQuery -->
<script type="text/javascript" src="js/plugins/jquery.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/plugins/moderniz.min.js"></script>
<script type="text/javascript" src="js/plugins/smoothscroll.min.js"></script>
<script type="text/javascript" src="js/no-ui-slider/jquery.nouislider.all.min.js"></script>
<script type="text/javascript" src="js/plugins/revslider.min.js"></script>
<script type="text/javascript" src="js/plugins/waypoints.min.js"></script>
<script type="text/javascript" src="js/plugins/parallax.min.js"></script>
<script type="text/javascript" src="js/plugins/easign1.3.min.js"></script>
<script type="text/javascript" src="js/plugins/cubeportfolio.min.js"></script>
<script type="text/javascript" src="js/plugins/owlcarousel.min.js"></script>
<script type="text/javascript" src="js/plugins/tweetie.min.js"></script>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js"></script>
<script type="text/javascript" src="js/plugins/gmap3.min.js"></script>
<script type="text/javascript" src="js/plugins/wow.min.js"></script>
<script type="text/javascript" src="js/plugins/counterup.min.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
</body>
</html>
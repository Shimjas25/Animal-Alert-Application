<?php
	include('connect/db.php');
	$name=$_POST["name"];
?>	
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

    <head>
        <meta charset="utf-8">
        <title>Animal Track</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="Greenlife - Nature & Environmental Non-Profit HTML5 Template">
        <meta name="author" content="xenioushk">
        <link rel="shortcut icon" href="images/favicon.png" />
        
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- The styles -->
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" >
        <link href="css/animate.css" rel="stylesheet" type="text/css" >
        <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" >
        <link href="css/venobox.css" rel="stylesheet" type="text/css" >
        <link rel="stylesheet" href="css/styles.css" />
        
    <body> 

        <div id="preloader">
            <span class="margin-bottom"><img src="images/loader.gif" alt="" /></span>
        </div>

       <!--  HEADER -->

        <header class="main-header clearfix">

             <!--  end .top-bar  -->
            
            <section class="header-wrapper navgiation-wrapper">
            
                <div class="navbar navbar-default">			
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="logo" href="index.php"><img alt="" src="images/logo.png"></a>
                        </div>
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav navbar-right">                               
                                <li><a href="index.php">Home</a></li>
                                <li><a href="hospital.php">Hospital</a></li>
                                <li><a href="krishibhavan.php">Krishibhavan</a></li>
                                <li><a href="forestry.php">Forestry</a></li>
                                <li><a href="complaint.php">Complaint</a></li>
                                <li><a href="notification.php">Notification</a></li>
                                <li><a href="login.php">Login</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
            </section>


        </header> <!-- end main-header  -->

        <!--  HOME SLIDER BLOCK  -->
        
        <!-- slider start -->
        <div class="slider-wrap">
            <div id="slider_1" class="owl-carousel owl-theme">
                
                <div class="item">
                    <img src="images/home_1_slider_1.jpg" alt="img">
                    <div class="slider-content">
                        <div class="container">
                            <h2>GROW TREES FOR YOUR FUTURE</h2>
                            <h3>Save The Environment and You Will Save Life And Your Future</h3>
                        </div><!-- /.slider-content -->
                    </div>
                </div>
                
                <div class="item">
                    <img src="images/home_1_slider_2.jpg" alt="img">
                    <div class="slider-content">
                        <div class="container">
                            <h2>GREEN ENVIRONMENT FOR LIFE</h2>
                            <h3>Ensure Green and Healthy Environment For Better Living World</h3>
                        </div><!-- /.slider-content -->
                    </div>
                </div>
                
                
            </div>
        </div>
        <!-- slider end -->
        
        <!--  EVENT SECTION  -->

        <section class="section-content-block event-section-1 section-secondary-bg">

            <div class="container wow fadeInUp">

                <div class="row section-heading-wrapper">

                    <div class="col-md-8 col-md-offset-2 col-sm-12 text-center">
                        <h2 class="section-heading"><span><?php echo strtoupper($name);?></span> Forestry</h2>
                         <p class="section-subheading">
                             Increase in the awareness among people about various issues 
                        </p>
                    </div> <!-- end .col-sm-10  -->

                </div> <!-- end .row  -->

                <div class="row">
                    
                     <?php				
					$result = $db->prepare("select * from user where utype='Forestry' and location='$name'");
					$result->execute();
					for($i=1; $row = $result->fetch(); $i++)
					{
                    ?>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">

                        <div class="event_wrapper xs-margin">
                            
                            <figure class="event-img">
                                
                                <img src="photo/<?php echo $row["photo"];?>" alt="event" />
                                <p class="event-info">
                                    <span class="event-date"><i class="fa fa-calendar"></i> <?php echo $row["name"];?></span>
                                    <span class="event-location"><i class="fa fa-map-marker"></i> <?php echo $row["location"];?></span>
                                </p>
                                
                            </figure> <!-- end .cause-img  -->
                            
                            <div class="event-content">

                                <div class="event-text">
                                    
                                    <h5><a href="#"><?php echo $row["cntno"];?></a></h5>
                                    <p class="event-time">01:00pm - 03:00pm</p>
                                    
                                </div> <!--  end .cause-text  -->
                                
                                

                            </div> <!-- end .cause-content  -->

                        </div><!-- end .custom-event-list-wrapper -->

                    </div> <!-- end .col-md-4  -->
				
				<?php } ?>

                </div> <!-- end .row  -->
                
                <div class="row">
                    <div class="col-sm-12 col-md-4 col-md-offset-4 text-center">
                        <a href="login.php" class="btn btn-load-more">- Load All Hospital -</a>
                    </div>
                </div> <!-- end .row  -->

            </div> <!-- end .container  -->

        </section> <!-- end .event-section-1  -->
        
        
        <!--  COUNTER SECTION  -->

        <section class="section-content-block section-counter">

            <div class="container-fluid wow fadeInUp">

                <div class="row">

                    <div class="col-md-2 col-sm-12">

                        <div class="counter-block-1 text-center">
                            
                            <h4>Panchayath</h4>
                            <span class="counter">400</span>
                            
                        </div>

                    </div> <!--  end col-sm-3  -->

                    <div class="col-md-2 col-sm-12">

                        <div class="counter-block-1 text-center">

                            
                            <h4>Kudumbasree</h4>
                            <span class="counter">262</span>
                            

                        </div>

                    </div> <!--  end col-sm-3  -->

                    <div class="col-md-2 col-sm-12">

                        <div class="counter-block-1 text-center">

                            
                            <h4>Police Station</h4>
                            <span class="counter">653</span>
                            

                        </div>

                    </div> <!--  end col-sm-3  -->

                    <div class="col-md-2 col-sm-12">

                        <div class="counter-block-1 text-center">
                            
                            <h4>People</h4>
                            <span class="counter">364</span>

                        </div>

                    </div> <!--  end col-sm-3  -->
                    
                    <div class="col-md-2 col-sm-12">

                        <div class="counter-block-1 text-center">

                           
                            <h4>Post</h4>
                            <span class="counter">964</span>

                        </div>

                    </div> <!--  end col-sm-3  -->
                    
                    <div class="col-md-2 col-sm-12">

                        <div class="counter-block-1 text-center">
                            
                            <h4>Complaint</h4>
                             <span class="counter">101</span>

                        </div>

                    </div> <!--  end col-sm-3  -->

                </div> <!-- end row  -->

            </div> <!--  end .container  -->

        </section> <!--  end .section-counter -->
    
        
        <!--  GALLERY CONTENT  -->

        <section class="section-content-block no-bottom-padding">

            <div class="container">
                
                <div class="row section-heading-wrapper">

                    <div class="col-md-8 col-md-offset-2 col-sm-12 text-center">
                        <h2 class="section-heading"><span>Photo</span> Gallery</h2>
                        <p class="section-subheading">
                             Increase in the awareness among people about various issues 
                        </p>
                    </div> <!-- end .col-sm-10  -->

                </div> <!-- end .row  -->

            </div> <!--  end .container -->
            
            <div class="container-fluid wow fadeInUp">
                

                <div class="row no-padding-gallery">

                    <div class="col-md-3 col-sm-12 gallery-container">

                        <a class="gallery-light-box" data-gall="myGallery" href="images/gallery_1.jpg">

                            <figure class="gallery-img">

                                <img src="images/gallery_1.jpg" alt="gallery image" />

                            </figure> <!-- end .cause-img  -->

                        </a> <!-- end .gallery-light-box  -->

                    </div><!-- end .col-sm-3  -->

                    <div class="col-md-3 col-sm-12 gallery-container">

                        <a class="gallery-light-box"  data-gall="myGallery" href="images/gallery_2.jpg">

                            <figure class="gallery-img">

                                <img src="images/gallery_5.jpg" alt="gallery image" />

                            </figure> <!-- end .cause-img  -->

                        </a>

                    </div><!-- end .col-sm-3  -->

                    <div class="col-md-6 col-sm-12 gallery-container">

                        <a class="gallery-light-box"  data-gall="myGallery" href="images/gallery_3.jpg">

                            <figure class="gallery-img">

                                <img src="images/gallery_3.jpg" alt="gallery image" />

                            </figure> <!-- end .cause-img  -->

                        </a>

                    </div><!-- end .col-sm-3  -->
                    
                </div> <!-- end .row  -->
                    
                <div class="row no-padding-gallery">

                    <div class="col-md-6 col-sm-12 gallery-container">

                        <a class="gallery-light-box"  data-gall="myGallery" href="images/gallery_3.jpg">

                            <figure class="gallery-img">

                                <img src="images/gallery_4.jpg" alt="gallery image" />

                            </figure> <!-- end .cause-img  -->

                        </a>

                    </div><!-- end .col-sm-3  -->

                    <div class="col-md-3 col-sm-12 gallery-container">

                        <a class="gallery-light-box" data-gall="myGallery" href="images/gallery_1.jpg">

                            <figure class="gallery-img">

                                <img src="images/gallery_2.jpg" alt="gallery image" />

                            </figure> <!-- end .cause-img  -->

                        </a> <!-- end .gallery-light-box  -->

                    </div><!-- end .col-sm-3  -->

                    <div class="col-md-3 col-sm-12 gallery-container">

                        <a class="gallery-light-box"  data-gall="myGallery" href="images/gallery_2.jpg">

                            <figure class="gallery-img">

                                <img src="images/gallery_6.jpg" alt="gallery image" />

                            </figure> <!-- end .cause-img  -->

                        </a>

                    </div><!-- end .col-sm-3  -->


                </div> <!-- end .row  -->
                
            </div><!-- end .container-fluid  -->

        </section> <!-- end .section-content-block  -->
        
        <!-- CLIENT LOGO SECTION  -->

       
        
        <!--  NEWSLETTER SECTION  -->

        <section class="section-content-block newsletter-area-bg">

            <div class="container wow fadeInUp">

                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-sm-12 text-center">
                        <div class="">
                            <h3>NEWSLETTER SUBSCRIBE</h3>
                            <form id="mc-form" class="mc-form fix" action="#">
                                <div class="newsletter-form">
                                <input id="mc-email" name="EMAIL" placeholder="Email Address..." type="email">
                                <button id="mc-submit" type="submit">
                                <i class="fa fa-chevron-right"></i>
                                </button>
                                </div>
                            </form>
                            <div class="mailchimp-alerts text-centre fix">
                                <div class="mailchimp-submitting"></div>
                                <div class="mailchimp-success"></div>
                                <div class="mailchimp-error"></div>
                            </div>
                            <p>Signup for regular newsletter and stay upto date with our latest news</p>
                        </div>
                    </div> <!-- end .col-md-8  -->
                </div> <!-- end .row  --> 

            </div>

        </section> <!-- end .cta-section-3  -->
        
        <!-- FOOTER  -->
        
       <footer>
        <!-- FOOTER WIDGET AREA -->

            <section class="section-content-block footer-widget-area-bg">
                <div class="container wow fadeInUp">
                    
                    <div class="row">

                        <div class="col-md-8 col-md-offset-2 col-sm-12 text-center">
                            <div class="footer-widget-area">
                                <figure class="footer-logo-img text-center">
                                    <img alt="Logo" src="images/logo.png">
                                </figure> <!-- end .cause-img  -->
                                <div class="contact-info">
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas amet<br/> vestibulum tortor quam feugiat vitae  eget tempor sit  ante.</p>
                                </div>
                                <div class="contact-info">
                                    <div class="contact-details">
                                        <div class="social-icons margin-top-20">
                                            <a href="#">
                                            <i class="fa fa-facebook"></i>
                                            </a>
                                            <a href="#">
                                            <i class="fa fa-twitter"></i>
                                            </a>
                                            <a href="#">
                                            <i class="fa fa-pinterest-p"></i>
                                            </a>
                                            <a href="#">
                                            <i class="fa fa-instagram"></i>
                                            </a>
                                            <a href="#" class="margin-right-0">
                                            <i class="fa fa-linkedin"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end .col-md-4  -->

                    </div> <!-- end .row  --> 
                </div> <!-- end .container  -->
            </section> <!--  end .footer-widget-area-bg -->

            <!--FOOTER CONTENT  -->

            <section class="footer-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                             <span>Copyright © 2022. All right reserved by Animal Track</span>
                        </div> <!-- end .col-md-6  --> 
                        <div class="col-md-6 col-sm-12">
                            <div class="footer-nav">
                                <nav>
                                    <ul>
                                        <li><a href="index.php">Home</a></li>
                                        <li><a href="hospital.php">Hospital</a></li>
                                        <li><a href="krishibhavan.php">Krishibhavan</a></li>
                                        <li><a href="forestry.php">Forestry</a></li>
                                        <li><a href="complaint.php">Complaint</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div> <!-- end .col-md-6  --> 
                    </div> <!-- end .row  --> 
                </div> <!-- end .container  --> 
            </section>  <!--  end .footer-area -->
            
        </footer> <!--  end of footer -->

        <!-- Back To Top Button  -->

        <a id="backTop">Back To Top</a>
       
        <script src="js/jquery.min.js"></script>
       <script src="js/bootstrap.min.js"></script>
       <script src="js/wow.min.js"></script>
       <script src="js/jquery.backTop.min.js "></script>
       <script src="js/waypoints.min.js"></script>
       <script src="js/waypoints-sticky.min.js"></script>
       <script src="js/owl.carousel.min.js"></script>
       <script src="js/jquery.stellar.min.js"></script>
       <script src="js/jquery.counterup.min.js"></script>
       <script src="js/venobox.min.js"></script>
       <script src="js/custom-scripts.js"></script>
   </body>

</html>
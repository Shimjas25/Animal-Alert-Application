<?php
	include('connect/db.php');
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
        <meta http-equiv="refresh" content="3">
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
                                <li><a href="complaint.php">Complaint</a></li>
                                <li><a href="post.php">Post</a></li>
                                <li><a href="helpline.php">Helpline</a></li>
                                <li><a href="warning.php">Warning</a></li>
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
        
        <!--  HOW WE WORK SECTION 1 -->

        <section class="section-content-block section-how-we-work section-secondary-bg">

            <div class="container">

                <div class="row">

                    <div class="col-md-8 col-md-offset-2 col-sm-12 text-center">
                        <h2 class="section-heading"><span>Latest </span> Notification</h2>
                        <p class="section-subheading">
                            Increase in the awareness among people about various issues 
                        </p>
                    </div> <!-- end .col-sm-10  -->

                </div> <!--  end .row  -->

                <div class="row wow fadeInUp">

                    <?php				
					$result = $db->prepare("select * from notification");
					$result->execute();
					for($i=1; $row = $result->fetch(); $i++)
					{
                    ?>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        
                        <div class="service-block-bg">
                            <article class="service-block">
                              
                                 <?php
								 	if($row["name"]=="Elephant")
									{
									?>
                                     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                       <h2><?php echo $row["name"];?></h2>
                                       <br>Date : <?php echo $row["date"];?>
                                       <br>Time : <?php echo $row["timr"];?><br>
                                     </div>
                                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                     	<img src="images/elephant.jpg" width="100%">
                                     </div>
                                    <?php
									}
								 ?>
                                    <br /><br /><a href="#" class="service_read_more">&nbsp;</a>
                                
                                <i class="fa fa  fa-warning" style="color:red;"></i>

                            </article>

                        </div>
                    </div> <!--  end col-sm-6  -->
                    
                   <?php } ?>

                </div> <!-- end row  -->
                

            </div> <!--  end .container  -->

        </section> <!--  end .section-how-we-work -->
        
        <!--  CAUSE SECTION  -->

         <!-- end .cause-section-1  -->
        
        
        <!-- TEAM SECTION 2 -->

        <section class="section-content-block section-our-team  section-pure-white-bg">

            <div class="container wow fadeInUp">
                
                <div class="row section-heading-wrapper">

                    <div class="col-md-8 col-md-offset-2 col-sm-12 text-center">
                        <h2 class="section-heading section-heading">Volunteers</h2>
                         <p class="section-subheading section-subheading">
                            Increase in the awareness among people about various issues 
                        </p>
                    </div> <!-- end .col-sm-10  -->

                </div> <!-- end .row  -->

                <div class="row">

                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

                        <div class="team-layout-1 text-center xs-margin">       

                            <figure class="team-member">
                                <a href="#" title="Melissa Munoz">
                                    <img src="images/team_6.jpg" alt="" />
                                </a>
                            </figure> <!-- end. team-member  -->
                            <h3>ALEXANDER GARY</h3>                                   
                            <h4>FOUNDER</h4> 

                            <div class="team-social-share clearfix">

                                <a class="fa fa-facebook rectangle" href="#" title="Facebook"></a>
                                <a class="fa fa-twitter rectangle" href="#" title="Twitter"></a>
                                <a class="fa fa-google-plus rectangle" href="#" title="Google Plus"></a>
                                <a class="fa fa-linkedin rectangle" href="#" title="Linkedin"></a>

                            </div> <!-- end .author-social-box  -->

                        </div> <!--  end articles -->

                    </div> <!--  end .col-md-4 col-sm-12  -->
                    
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

                        <div class="team-layout-1 text-center xs-margin">       

                            <figure class="team-member">
                                <a href="#" title="Melissa Munoz">
                                    <img src="images/team_7.jpg" alt="" />
                                </a>
                            </figure> <!-- end. team-member  -->
                            <h3>MELISSA MUNOZ</h3>                                   
                            <h4>CO-FOUNDER</h4> 

                            <div class="team-social-share clearfix">

                                <a class="fa fa-facebook rectangle" href="#" title="Facebook"></a>
                                <a class="fa fa-twitter rectangle" href="#" title="Twitter"></a>
                                <a class="fa fa-google-plus rectangle" href="#" title="Google Plus"></a>
                                <a class="fa fa-linkedin rectangle" href="#" title="Linkedin"></a>

                            </div> <!-- end .author-social-box  -->

                        </div> <!--  end articles -->

                    </div> <!--  end .col-md-4 col-sm-12  -->
                    
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

                        <div class="team-layout-1 text-center xs-margin">       

                            <figure class="team-member">
                                <a href="#" title="Melissa Munoz">
                                    <img src="images/team_8.jpg" alt="" />
                                </a>
                            </figure> <!-- end. team-member  -->
                            <h3>JOHN ABRAHAM</h3>                                   
                            <h4>CHIEF EDITOR</h4> 

                            <div class="team-social-share clearfix">

                                <a class="fa fa-facebook rectangle" href="#" title="Facebook"></a>
                                <a class="fa fa-twitter rectangle" href="#" title="Twitter"></a>
                                <a class="fa fa-google-plus rectangle" href="#" title="Google Plus"></a>
                                <a class="fa fa-linkedin rectangle" href="#" title="Linkedin"></a>

                            </div> <!-- end .author-social-box  -->

                        </div> <!--  end articles -->

                    </div> <!--  end .col-md-4 col-sm-12  -->
                    
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

                        <div class="team-layout-1 text-center xs-margin">       

                            <figure class="team-member">
                                <a href="#" title="Melissa Munoz">
                                    <img src="images/team_9.jpg" alt="" />
                                </a>
                            </figure> <!-- end. team-member  -->
                            <h3>SILVIA STAN</h3>                                   
                            <h4>MANAGER</h4> 

                            <div class="team-social-share clearfix">

                                <a class="fa fa-facebook rectangle" href="#" title="Facebook"></a>
                                <a class="fa fa-twitter rectangle" href="#" title="Twitter"></a>
                                <a class="fa fa-google-plus rectangle" href="#" title="Google Plus"></a>
                                <a class="fa fa-linkedin rectangle" href="#" title="Linkedin"></a>

                            </div> <!-- end .author-social-box  -->

                        </div> <!--  end articles -->

                    </div> <!--  end .col-md-4 col-sm-12  -->

                </div> <!-- end .row  --> 

            </div> <!-- end .container  -->

        </section> <!--  end .section-our-team -->
        
        <!--  CTA SECTION  -->

        <section class="cta-section-2">
            <div class="container wow fadeInUp animated">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h5>WATCH AWESOME VIDEO OF</h5>
                        <h2> VOLUNTARY ACTIVITY </h2>
                        <a class="video-icon" href="#">
                           <span class="fa fa-play fa-4x"></span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        

        <!--  EVENT SECTION  -->

         <!-- end .event-section-1  -->
        
        
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
                                        <li><a href="complaint.php">Complaint</a></li>
                                        <li><a href="post.php">Post</a></li>
                                        <li><a href="helpline.php">Helpline</a></li>
                                        <li><a href="warning.php">Warning</a></li>
                                        <li><a href="notification.php">Notification</a></li>
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
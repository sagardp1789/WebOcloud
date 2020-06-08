<!DOCTYPE html>
<html class="no-js" lang="en" >
    
<!-- Mirrored from theme.createuiux.com/html-template/xplor/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Sep 2018 17:19:24 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="description" content="desc">
        <meta name="author" content="RadonTheme">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Title -->
        <title>Welcome to - Web-O-Cloud Solutions</title>
        <!-- Favicon and Touch Icons -->
        <link rel="shortcut icon" href="assets/images/WOCS.jpg">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">
        <link href="assets/css/font-awesome.min.css" rel="stylesheet">
        <link href="assets/css/flaticon.css" rel="stylesheet">
        <!-- Plugin CSS -->
        <link href="assets/css/bootstrap.css" rel="stylesheet">
        <link href="assets/css/animate.css" rel="stylesheet" >        
        <link href="assets/css/owl.carousel.css" rel="stylesheet" >  
        <link href="assets/css/owl.theme.default.min.css" rel="stylesheet" >                                                                     
        <link href="assets/css/lightbox.min.css" rel="stylesheet" >
        <link href="assets/css/fakeLoader.css" rel="stylesheet" >    
        <link href="assets/css/jquery.lineProgressbar.css" rel="stylesheet" >   
        <link href="assets/css/animated-headline.css" rel="stylesheet" >           
        <!-- Stylesheets -->
        <link href="assets/css/xplor.css" rel="stylesheet" media="screen">
        <link href="assets/css/xplor-responsive.css" rel="stylesheet" media="screen">
        <script src="assets/js/modernizr-2.8.3.min.js"></script>
       <style>
		.demo {
			list-style-type: none;
			margin: 5px;
			padding: 5px;
			font-size: 40px;
			font-family: "Times New Roman", Times, serif;
				}
</style>
    </head>
    <body>
        <!-- pageloder area start here -->
        <div id="fakeLoader"></div>
        <!-- pageloder area end here -->
        <!-- header area start here -->
        <?php include('includes/header.php');?>
        <!-- header area end here -->
        <!-- slider area start here -->
        <div class="slider-area">
            <div class="owl-carousel slide-slider">
			<?php
				include('includes/c.php');
				$sql = "select * from home_slider order by sr desc limit 5";
				$result = mysqli_query($connection,$sql);
				while($set=mysqli_fetch_array($result))
				{
					echo '<div class="single-slider" style="background-image: url('.$set["image"].')">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                 <div class="slider-content">
                                    <div class="slider-heading">
                                        <h1 data-animation-in="flipInX " >'.$set["heading"].' <span>'.$set["heading2"].'</span></h1>
                                        <p data-animation-in="bounceInLeft">'.$set["matter"].'</p>
                                        <div class="slider-btn" data-animation-in="bounceInUp">
                                            <ul>
                                                <li><a  class="btn" href="about.php">About us</a></li>
                                                <li><a  class="btn" href="contact.php">Contact us</a></li>                                            
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="slider-right" data-animation-in="bounceInRight">
                                    <img src="'.$set["image2"].'" alt="">
                                </div>
                            </div>                         
                        </div>
                    </div>
                </div> ';
				}
			?>  
            </div>
        </div>
        <!-- slider area end here -->
		
        <!-- service area start here -->
        <div class="service-area">
            <div class="service-title-area">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <div class="service-section-title">
                            <h4>Web-O-Cloud Solutions</h4>
                            <h3 class="cd-headline clip ">We are a creative consultancy focused on <span class="cd-words-wrapper"><b class="is-visible">Complete solution development. </b><b>Custom software development.</b><b>Mobile App Development</b><b>Website & Portal  Development</b><b>E Commerce  Development</b><b>Digitial Solutions Development</b><b>Digitial Marketing</b>
                            </span> <br /> Simplicity is the one word we love and utilize through our projects everyday.</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="service-list">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <?php
								include('includes/c.php');
								$sql = "select * from home_services order by sr desc limit 6";
								$result = mysqli_query($connection,$sql);
								while($set=mysqli_fetch_array($result))
								{
									
									echo '<div class="single-service">
									<div class="service-info">
                                    <div class="service-icon">
                                        <i class="'.$set["logo"].'"></i>
                                    </div>
                                    <div class="service-title">
                                        <h4>'.$set["titel"].'</h4>
                                    </div>
									</div>
									<div class="overlay">
                                    <div class="overlay-content">
                                        <div class="service-icon">
                                            <i class="'.$set["logo"].'"></i>
                                        </div>
                                        <div class="service-title">
                                            <h4><a href="#">'.$set["titel"].'</a></h4>
                                        </div>
                                        <div class="service-content">
                                            <p>'.$set["matter"].'</p>
                                        </div>
                                        
                                    </div>
									</div>                               
									</div>';
								}
							?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- service area end here -->
         <!-- chooseus-area start here -->
        <div class="chooseus-area section">
            <div class="container">
                <div class="row">
                    <div class="section-title text-center">
                        <h3>Web-O-Cloud Solutions </h3>
                        <h2>Why Choose us?</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="chooseus-img">
                            <a href="#"><img class="img-responsive" src="assets/images/chooseus/why.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="chooseus-info">
                            <div class="chooseus-info-list">
                                <div class="single-chooseus">
                                     <!-- Media middle -->
                                    <div class="media">
                                        <div class="media-left media-middle">
                                            <i class="fa fa-trophy"></i>
                                        </div>
                                        <div class="media-body"><br>
                                            <h4 class="media-heading">We archieve Targets</h4>
                                            <p>We have exellent track record in delivering many products and solutions.</p>
                                        </div>
                                    </div>
                                </div>
                                 <div class="single-chooseus">
                                     <!-- Media middle -->
                                    <div class="media">
                                        <div class="media-left media-middle">
                                            <i class="fa fa-refresh"></i>
                                        </div>
                                        <div class="media-body"><br>
                                            <h4 class="media-heading">We are agile</h4>
                                            <p>We live agile xtreme programming and are able to deliver working software in small iteration.</p>
                                        </div>
                                    </div>
                                </div>
                                 <div class="single-chooseus">
                                     <!-- Media middle -->
                                    <div class="media">
                                        <div class="media-left media-middle">
                                            <i class="fa fa-cube"></i>
                                        </div>
                                        <div class="media-body"><br>
                                            <h4 class="media-heading">Value Addition</h4>
                                            <p>We offer not just code but ideas and solutions to enhance product usability and quality. </p>
                                        </div>
                                    </div>
                                </div>
                                 <div class="single-chooseus">
                                     <!-- Media middle -->
                                    <div class="media">
                                        <div class="media-left media-middle">
                                            <i class="fa fa-spinner"></i>
                                        </div>
                                        <div class="media-body"><br>
                                            <h4 class="media-heading">We Help Solve Your Business Problems.</h4>
                                            <p>We sit on the same side of the table as YOU to provide business solutions to business problems. We don’t try to sell you the latest techno gizmo – instead – we listen to your business problem and offer several strategies to resolve the ROOT of the problem and achieve your objectives.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- chooseus-area end here -->
        <!-- portfolio area start here -->
        <div class="portfolio-area section">
            <div class="container">
                <div class="row">
                    <div class="section-title text-center">
                        <h3>Project we have done</h3>
                        <h2>latest Portfolio</h2>
                    </div>
                </div>
                <div class="row">
							<?php
								include('includes/c.php');
								$sql = "select * from home_portfolio order by sr desc limit 6";
								$result = mysqli_query($connection,$sql);
								while($set=mysqli_fetch_array($result))
									
									echo '<div class="col-sm-6">
										<div class="single-portfolio">
											<a href="#"><img src="'.$set["image"].'" alt=""></a>
											<div class="portfolio-info">
												<h4><a href="#">'.$set["titel"].'</a></h4>
												<p>'.$set["matter"].'</p>
											</div>
										</div>
									</div>'; 
							?>
                      
                    <!--<div class="col-sm-12">
                        <div class="load-more-btn text-center">
                            <a href="#" class="load-btn" >Load More</a>
                        </div>
                    </div>  -->                
                </div>
            </div>
        </div>
        <!-- portfolio area end here -->
        <!-- testimonial area start here -->
        <div class="testimonial-area section">
            <div class="container">
                <div class="row">
                    <div class="section-title text-center">
                        <h3>happy Client say </h3>
                        <h2>Testimonial</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="testimonial-info-list">
                            <div class="single-testimonial-info">
                                    <!-- Media middle -->
                                <div class="media">
                                    <div class="media-left media-middle">
                                        <i class="flaticon-graphic"></i>
                                    </div>
                                    <div class="media-body"><br>
                                        <h4 class="media-heading">Professional Services</h4>
                                        <p>We sit on the same side of the table as YOU to provide business solutions to business problems. We don’t try to sell you the latest techno gizmo – instead – we listen to your business problem and offer several strategies to resolve the ROOT of the problem and achieve your objectives.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="single-testimonial-info">
                                    <!-- Media middle -->
                                <div class="media">
                                    <div class="media-left media-middle">
                                        <i class="flaticon-computer"></i>
                                    </div>
                                    <div class="media-body"><br>
                                        <h4 class="media-heading">Quility product </h4>
                                        <p>The common element of the business definitions is that the quality of a product or service refers to the perception of the degree to which the product or service meets the customer's expectations.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="single-testimonial-info">
                                    <!-- Media middle -->
                                <div class="media">
                                    <div class="media-left media-middle">
                                        <i class="flaticon-technology-1"></i>
                                    </div>
                                    <div class="media-body"><br>
                                        <h4 class="media-heading">Support</h4>
                                        <p>Don’t let support be an afterthought. Consider it insurance on a great investment. Find out about how we can give you all the support you need</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="owl-carousel slide-testimonial">
							<?php
								include('includes/c.php');
								$sql="select * from home_clientsay order by sr desc limit 4";
								$result = mysqli_query($connection,$sql);
								while($set=mysqli_fetch_array($result))
								{
									echo '<div class="single-testimonial">
                                <div class="testimonial-content">
                                    <p>-'.$set["message"].'</p>
                                </div>
                                <div class="member-name">
                                    <h3><a href="#">'.$set["name"].'</a> <span>'.$set["business"].'</span></h3>
                                </div>
                            </div>';
								}
							?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- testimonial area end here -->
        <!-- funfact-area start here -->
        <!--<div class="funfact-area section ">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-6">
                               <div class="single-counter">
                                    <span class="funfact-counter">120</span>
                                    <p class="pull-right counter-content">Countries <span>covered</span></p>
                               </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="single-counter">
                                    <span class="funfact-counter">320</span>
                                    <p class="pull-right counter-content">Project <span>Completed</span></p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="single-counter">
                                    <span class="funfact-counter">320</span>
                                    <p class="pull-right counter-content">Offices <span>worldwide</span></p>
                                </div>                               
                            </div>
                            <div class="col-sm-6">
                                <div class="single-counter">
                                    <span class="funfact-counter">900</span>
                                    <p class="pull-right counter-content">Satisfied <span>Clients</span></p>
                                </div>                               
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <!--google map start section -->
                       <!-- <div class="google-map-area">
                            <div id="gmap" class="gmap-area"></div>
                        </div>
                         <!--google map end section -->
                    <!--</div>
                </div>
            </div>
        </div>
        <!-- funface-area end here -->
        <?php include('includes/footer.php');?>
        <!-- JavaScript -->
        <!-- jQuery Library -->
        <script src="assets/js/jquery-1.12.0.min.js"></script>
        <!-- jQuery Plugins -->
        <script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/wow.min.js"></script>
        <script src="assets/js/scrollup.js"></script>
        <script src="assets/js/mixItup.js"></script>
        <script src="assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="assets/js/lightbox.min.js"></script>
        <script src="assets/js/jquery.counterup.min.js"></script>
        <script src="assets/js/waypoints.min.js"></script>
        <script src="assets/js/jquery.appear.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
		<script src="assets/js/fakeLoader.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcvAXp35fi4q7HXm7vcG9JMtzQbMzjRe8"></script>  
        <script src="assets/js/gmaps.js"></script>  
        <script src="assets/js/jquery.lineProgressbar.js"></script>     
        <script src="assets/js/active-progress.js"></script>   
        <script src="assets/js/animated-headline.js"></script>             
        <!-- Custom Script -->
        <script src="assets/js/custom-script.js"></script>     
    </body>

<!-- Mirrored from theme.createuiux.com/html-template/xplor/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Sep 2018 17:20:04 GMT -->
</html>

<?php
//connect with server
include('includes/c.php');


// Code of generate Id

if(isset($_POST['btn_submit']))
{

//insert code 



$name1=$_POST['name'];
$email1 =$_POST['email'];
$message1=$_POST['msg'];
									 
									
                                     
 $query = "INSERT INTO query(name,email,message) VALUES ('$name1','$email1','$message1')";  
//echo $conn;								   
$result=mysqli_query($connection,$query);
if($result)
{
	echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
}
else
	echo mysqli_error($connection);
}
mysqli_close($connection); // Closing Connection with Server
?>	
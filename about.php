<!DOCTYPE html>
<html class="no-js" lang="en" >
    

<head>
        <meta charset="utf-8">
        <meta name="description" content="Welcome to - Web_O_Cloud Solutions">
        <meta name="author" content="Welcome to - Web_O_Cloud Solutions">
        <meta name="viewport" content="width=device-width, initial-scale=1,webo">
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
       
    </head>
    <body>
        <!-- header area start here -->
        <?php include('includes/header.php');?>
        <!-- header area end here -->
        <!-- breadcumb-area start here -->
         <div class="breadcumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="breadcumb-title text-center">
                            <h2>About us</h2>
                            <h3>Who is Web-O-Cloud Solutions?</h3>
                        </div>
                    </div>
                </div>
            </div>
         </div>
         <!-- breadcumb-area end here -->
         <!-- about company area start here -->
         <div class="about-xplor-area section">
             <div class="container ">
                 <div class="row">
                     <div class="col-sm-12">
                         <div class="about-xplor-title">
                             <h2>ABOUT THE Web-O-Cloud Solutions</h2>
                         </div>
                     </div>
                     <div class="col-md-6">
                         <div class="about-xplor-content">
                             <?php
								include('includes/c.php');
								
								$sql="SELECT matter_about FROM about_company ORDER BY sr DESC LIMIT 1";
								$result=mysqli_query($connection,$sql);

								while($r=mysqli_fetch_array($result))
								{
									echo"".$r[0]."";
								}
								$connection->close();
							 ?>
                         </div>
                     </div>
                     <div class="col-md-6 hidden-md hidden-lg">
                        <div class="about-xplor-imgg">
							<?php
								include('includes/c.php');
								
								$sql="SELECT image FROM about_company ORDER BY sr DESC LIMIT 1";
								$result=mysqli_query($connection,$sql);

								while($r=mysqli_fetch_array($result))
								{
									echo'<img src="'.$r[0].'" alt="">
									</div>
									</div>
									</div>
									</div>
									<div class="about-xplor-bg">
									<img src="'.$r[0].'" alt="">
									</div>
									</div>
									
									';
								}
								$connection->close();
							 ?>
                            
                        
         <!-- about xplor srea end here -->   
         
         <!-- xplor theme area start here 
         <div class="xplor-theme section">
             <div class="container">
                 <div class="row">
                     <div class="col-sm-12">
                         <div class="xplor-theme-title">
                             <h2>WHY Web-O-Cloud Solutions?</h2>
                         </div>
                     </div>
                     <div class="col-md-6 hidden-md hidden-lg">
                        <div class="xplor-theme-img">
						<?php 
							include('includes/c.php');
							$sql="select image2 from about_company order by sr desc limit 1";
							$result = mysqli_query($connection,$sql);
							while($r=mysqli_fetch_array($result))
							{
								echo '<img src="'.$r[0].'" alt="">';
							}
							$connection->close();
						?>
                        </div>
                     </div>
                     <div class="col-md-6 col-md-offset-6">
                         <div class="xplor-theme-content">
                            <p>
							<?php 
								include('includes/c.php');
								
								$sql = "select matter_why from about_company order by sr desc limit 1";
								$result = mysqli_query($connection,$sql);
								while($r=mysqli_fetch_array($result))
								{
									echo ''.$r[0].'';
								}
							?>	
							
                         </div>
                     </div>
                 </div>
             </div>
             <div class="xplor-theme-left-bg">
                
				<?php
								include('includes/c.php');
								
								$sql="SELECT image2 FROM about_company ORDER BY sr DESC LIMIT 1";
								$result=mysqli_query($connection,$sql);

								while($r=mysqli_fetch_array($result))
								{
									echo'
									<img src="'.$r[0].'" alt="">
									
									';
								}
								$connection->close();
							 ?>
            </div>
         </div>-->
         <!-- xplor theme area start here -->
         <!-- team area start here 
         <div class="team-area section ">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="team-area-title">
                            <h2>OUR  Corporate TEAM</h2>
                        </div>
                    </div>
                </div>    
                   <div class="row">
				   <?php
						include('includes/c.php');
						$sql="select * from team_about";
						$result = mysqli_query($connection,$sql);
						while($set=mysqli_fetch_array($result))
						{
							echo '<div class="col-md-4 col-sm-4">
                                <div class="single-team">
                                    <div class="member-img">
                                        <img src="'.$set["photo"].'" alt="">
                                    </div>
                                    <div class="member-info">
                                        <div class="member-name">
                                            <h3><a>'.$set["name"].'</a></h3>
                                            <span>'.$set["profession"].'</span><br>
											<span>'.$set["email"].'</span>
                                        </div>
                                    </div>
                                </div>
                            </div>';
						}
				   ?>
                            
                    </div>
                </div>
            </div>
         </div>-->
         <!-- team area end here -->
         
        <!-- footer start here -->
        <?php include('includes/footer.php');?>
        <!-- footer end here -->
        <!-- JavaScript -->
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

<!-- Mirrored from theme.createuiux.com/html-template/xplor/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Sep 2018 17:21:18 GMT -->
</html>
<!DOCTYPE html>
<html lang="en">



<head>
    <title>WOCS - Admin</title>
    <!--== META TAGS ==-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--== FAV ICON ==-->
    <link rel="shortcut icon" href="images/fav.ico">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600|Quicksand:300,400,500" rel="stylesheet">

    <!-- FONT-AWESOME ICON CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!--== ALL CSS FILES ==-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mob.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/materialize.css" />

</head>

<body>
    <!--== MAIN CONTRAINER ==-->
    <?php
		include('includes/header.php');
	?>
    <!--== BODY CONTNAINER ==-->
    <div class="container-fluid sb2">
        <div class="row">
            <?php
				include('includes/sidebar.php');
			?>
            <!--== BODY INNER CONTAINER ==-->
            <div class="sb2-2">
                <!--== breadcrumbs ==-->
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="admin_index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> Slider contents</a>
                        </li>
                        <li class="page-back"><a href="admin_index.php"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
                        </li>
                    </ul>
                </div>
                <!--== DASHBOARD INFO ==-->
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Happy clients</h4>
                                    <p>Happy clients review on home page.</p>
								</div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>sr</th>
                                                    <th>Name</th>
                                                    <th>Message</th>
                                                    <th>business</th>
													<th>Delete</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
													<?php
														include('includes/c.php');
														$sql = "select * from home_clientsay";
														$result = mysqli_query($connection,$sql);
														while($set=mysqli_fetch_array($result))
														{
															echo '<tr>
																<td>'.$set["sr"].'</td>
																<td>'.$set["name"].'</td>
																<td>'.$set["message"].'</td>
																<td>'.$set["business"].'</td>                                             
																<td>
																<a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
																</td>
																</tr>
																';
														}
													?>													
                                                                                                                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				<div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Add new review</h4>
									
                                </div>
                                <div class="tab-inn">
                                    <form action="happyusers_form.php" method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input name="name" id="name" type="text" class="validate">
                                                <label for="name">Full Name</label>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <textarea name="message" id="message"  class="validate"></textarea>
                                                <label for="message">&nbsp Message</label>
                                            </div>
                                        </div>
										<div class="row">
                                            <div class="input-field col s12">
                                                <input name="business" id="business" type="text" class="validate">
                                                <label for="business">Business</label>
                                            </div>
                                        </div>
                                                                            
										<div class="row">
                                            <div class="input-field col s12">
                                                <button type="submit" name="submit"  class="waves-effect waves-light btn-large">submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
			</div>
		</div>
		
		
    <!--======== SCRIPT FILES =========-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/custom.js"></script>
</body>



</html>-
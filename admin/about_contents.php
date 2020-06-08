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
                        <li class="active-bre"><a href="about_contents.php"> About page contents</a>
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
                                    <h4>About Us</h4>
                                    <p>About company and Why us</p>
								</div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>sr</th>
                                                    <th>Matter about</th>
                                                    <th>Image</th>
                                                    <th>Matter why US</th>
                                                    <th>image</th>
													<th>Delete</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
													<?php
														include('includes/c.php');
														$sql = "select * from about_company";
														$result = mysqli_query($connection,$sql);
														while($set=mysqli_fetch_array($result))
														{
															echo '<tr>
																<td>'.$set["sr"].'</td>
																<td>'.$set["matter_about"].'</td>
																<td>
																<span class="list-img"><img src="../'.$set["image"].'" alt=""></span>
																</td> 
																<td>'.$set["matter_why"].'</td>
																<td>
																<span class="list-img"><img src="../'.$set["image2"].'" alt=""></span>
																</td>                                              
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
                                    <h4>Update About page contents</h4>
                                </div>
                                <div class="tab-inn">
                                    <form action="about_form.php" method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <textarea name="matter_about" id="matter_about"  class="validate"></textarea>
                                                <label for="matter_about">&nbsp Matter About</label>
                                            </div>
                                        </div>
                                        <div class="row">											
                                            <div class="input-field col s12">
											<label for="file1" style="font-size:20px;">image1</label><br><br>
                                                <input name="file1" id="file1" type="file" >                                                
                                            </div>
                                        </div>
										<div class="row">
                                            <div class="input-field col s12">
                                                <textarea name="matter_why" id="matter_why"  class="validate"></textarea>
                                                <label for="matter_why">&nbsp Matter Why</label>
                                            </div>
                                        </div>
                                        <div class="row">											
                                            <div class="input-field col s12">
											<label for="file2" style="font-size:20px;">image2</label><br><br>
                                                <input name="file2" id="file2" type="file" >                                                
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



</html>
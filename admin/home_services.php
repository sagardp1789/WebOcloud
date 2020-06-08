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
                                    <h4>Services</h4>
                                    <p>Services on home page.</p>
								</div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>sr</th>
                                                    <th>Title</th>
                                                    <th>Matter</th>
                                                    <th>Logo</th>
													<th>Delete</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
													<?php
														include('includes/c.php');
														$sql = "select * from home_services";
														$result = mysqli_query($connection,$sql);
														while($set=mysqli_fetch_array($result))
														{
															echo '<tr>
																<td>'.$set["sr"].'</td>
																<td>'.$set["titel"].'</td>
																<td>'.$set["matter"].'</td>
																<td>
																<a href="#"><i class="'.$set["logo"].'" aria-hidden="true"></i></a>
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
                                    <h4>Add new Service</h4>
									<p>Add any fafa icon code in logo section</p>
                                </div>
                                <div class="tab-inn">
                                    <form action="homeservices_form.php" method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input name="title" id="title" type="text" class="validate">
                                                <label for="title">Title</label>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <textarea name="matter" id="matter"  class="validate"></textarea>
                                                <label for="matter">&nbsp Matter</label>
                                            </div>
                                        </div>
										<div class="row">
                                            <div class="input-field col s12">
                                                <input name="logo" id="logo" type="text" class="validate">
                                                <label for="logo">Logo</label>
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
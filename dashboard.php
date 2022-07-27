<?php
session_start();
if (!$_SESSION['ticket']) {
	header("location:login.php");
}

$userid = $_SESSION['userid'];
include('database_conn.php');
include('dependencies.php');
include('popup_dependencies.php');

$query = "select * from user_data where id='$userid'";
$result = $conn->query($query);
$dataUser = $result->fetch_assoc();

if (isset($_SESSION['userid'])) {
	$userid = $_SESSION['userid'];
}



$query = "select * from blogs";
$result = $conn->query($query);
/*<?php print_r($dataUser);?>  displays data from data base  */

?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!--user dash-->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="dash_css.css" rel="stylesheet">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

	<title>User Dashboard</title>
</head>

<body>

<header id="header" class="d-flex flex-column justify-content-center">

<?php include("nav2.php"); ?>
<!-- .nav-menu -->

</header>

<div class="container">

		<div class="row profile">
			<div class="col-md-3">
			<div class="section-title">
                    <h2>User Profile</h2>
                    
                </div> 

				<div class="profile-sidebar">
					<div class="profile-userpic">
						<img src="profile_pic/<?php echo $dataUser['Profile_p'] ?>" class="img-thumbnail" />
					</div>
					<br>
					<div class="profile-usertitle">
						<div class="profile-usertitle-id">
							<h4><b><u>ID #:</u></b> <i><?php echo $dataUser['ID']; ?></i></h4>
						</div>
						<div class="profile-usertitle-name">
							<h4><b><u>Name:</u></b> <i><?php echo $dataUser['Name']; ?></i></h4>
						</div>
						<div class="profile-usertitle-email">
							<h4><b><u>Email:</u></b> <i><?php echo $dataUser['Email']; ?></i></h4>
						</div>
						<div class="profile-usertitle-about">
							<h4><b><u>About you:</u></b>
								<p><i> <?php echo $dataUser['About']; ?></i>
							</h4>
							
							</p>
						</div>
						<br>
						<br>

						<div class="profile-userbuttons">
							<h3><a href ="ab1.php">Add Blog</a><h3>
							

							<br>

							<?php include('addblogs.php'); ?>

							
						</div>

					</div>
				</div>
				
			</div>
		</div>
</div>

		<div class="col-md-9">
			<div class="profile-content">
				<center>
					 <div class="section-title">
                    	<h2>Your Blogs</h2>
                    
                		</div> 
				</center>



					<?php while ($dataUser = $result->fetch_assoc()) { ?>
						<?php
						if (isset($_SESSION['userid'])) {

							if ($_SESSION['userid'] == $dataUser['user_data_id']) { ?>
							
								<div class="row">

										<div>
										<p><a href="blog_files/<?php echo $dataUser['Content'] ?>" target="_blank"><img src="blog_images/<?php echo $dataUser['Image'] ?>" class="img-thumbnail" /></a></p>

										<h3>Title: <a href="blog_files/<?php echo  $dataUser['Content'] ?>"><i><?php echo $dataUser['Title']; ?></i></a></h3>
										<h3>Author: <i><?php echo $dataUser['Author']; ?></i></h3>
										<h3>Date: <i><?php echo $dataUser['Date']; ?></i></h3>
										<h3>Des: <i><?php echo $dataUser['Des']; ?></i></h3>
										<br>



										<a href="comments.php?id=<?php echo $dataUser['ID'] ?>"> View Comments</a>
										<a href="edit1.php?id=<?php echo $dataUser['ID'] ?>"> Edit</a>
										<a href="delete.php?product_id=<?php echo $dataUser['ID'] ?>"> Delete</a>
										<br>

										
							</div>
							<br>
							<br>



									<div class="section-title">
                    					<h2>  </h2>
                    
                					</div> 

								<?php }
						}
								?>



								<?php } ?>
								</div>


			

							

			</div>
		</div>
	</div>

	<br>
	<br>
</body>


<?php include("footer.php"); ?>


</html>
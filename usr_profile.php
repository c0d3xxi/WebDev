





<?php
session_start();
if (!$_SESSION['ticket']) {
	header("location:login.php");
}


$userid = $_SESSION['userid'];
include('database_conn.php');
include('dependencies.php');

$query = "select * from user_data where id='$userid'";
$result = $conn->query($query);
$dataUser = $result->fetch_assoc();



if (isset($_SESSION['userid'])) {
	$userid = $_SESSION['userid'];
}
if (isset($_SESSION['blogid']))
{
    $bid = $_SESSION['blogid'];
}



$query = "select * from blogs";
$result = $conn->query($query);
/*<?php print_r($dataUser);?>  displays data from data base  */

$num1= rand(1,250);
$num2= rand(1,50);


?>







<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Comments</title>
</head>

<body>

<header id="header" class="d-flex flex-column justify-content-center">

<?php include("nav2.php"); ?>
<!-- .nav-menu -->

</header>
<br>

<div class="section-title">
                    <h2>User Info</h2>
                   
                </div> 
                <div class="container mt-5">
                <?php
                $id = $_GET['id'];
$query = "select * from user_data where ID='$id'";
$result = $conn->query($query);
$data = $result->fetch_assoc();
?>
                
    
    <div class="row d-flex justify-content-center">
        
        <div class="col-md-7">
            
            <div class="card p-3 py-4">
                
                <div class="text-center">
                    <img src="profile_pic/<?php echo $data['Profile_p'] ?>" width="100" class="rounded-circle">
                </div>

                <div class="text-center mt-3">
                    <span class="bg-secondary p-1 px-4 rounded text-white">Member</span>
                    <h5 class="mt-2 mb-0"><?php echo $data['Name'] ?></h5>
                    <span><?php echo $data['Email'] ?></span>
                    
                    <div class="px-4 mt-1">
                        <p class="fonts"><?php echo $data['About'] ?></p>
                    
                    </div>
                    
                     <ul class="social-list">
                        <li><i class="fa fa-facebook"></i></li>
                        <li><i class="fa fa-dribbble"></i></li>
                        <li><i class="fa fa-instagram"></i></li>
                        <li><i class="fa fa-linkedin"></i></li>
                        <li><i class="fa fa-google"></i></li>
                    </ul>
                    
                    <div class="buttons">
                        
                        <button class="btn btn-outline-primary px-4">Message</button>
                        <button class="btn btn-primary px-4 ms-3">Contact</button>
                    </div>
                    
                    
                </div>
                
               
                
                
            </div>
            
        </div>
        
    </div>
    
</div>


<br>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<br>
<br>
<br>
</body>
<?php include("footer.php"); ?>
</html>
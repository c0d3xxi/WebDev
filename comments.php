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


$id = $_GET['id'];
$query = "select * from blogs where ID='$id'";
$result = $conn->query($query);
$data = $result->fetch_assoc();
//print_r($data);


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


<div class="section-title">
                    <h2>Blog</h2>
                   
                </div> 
      


<div class="container bootstrap snippets bootdey">
    
<div class="col-md-12">
  <div class="box box-widget">
    <div class="box-header with-border">
      <div class="user-block">
        


        <?php $p_user = $data['user_data_id'];
        $query_sel= "select * from user_data where ID='$p_user'";
        $result=$conn->query($query_sel);
    
        $user_data= $result->fetch_assoc();
        
        ?>

        <img class="img-circle" src="profile_pic/<?php echo $user_data['Profile_p'] ?>" alt="User Image">
        
        <span class="username"><a href="usr_profile.php?id=<?php echo $user_data['ID'] ?>" target="_blank"><?php echo $data['Author'] ?></a></span>
        <span class="description">Shared publicly on <?php echo $data['Date'] ?></span>
      </div>
      
    </div>
    <div class="box-body">


      <div class="attachment-block clearfix">
      <a href="blog_files/<?php echo $data['Content'] ?>" target="_blank"><img class="attachment-img" src="blog_images/<?php echo $data['Image'] ?>" alt="Attachment Image"></a>
        <div class="attachment-pushed">
        <h4 class="attachment-heading"><a href="blog_files/<?php echo $data['Content'] ?>" target="_blank"><?php echo $data['Title']; ?></a></h4>
        <br>
        <div class="attachment-text">
        <?php echo $data['Des']; ?><a href="blog_files/<?php echo $data['Content'] ?>" target="_blank">... Click here to read full blog!!</a>
        </div>
        </div>
      </div>
      <br>
      <button type="button" class="btn btn-default btn-xs"><i class="fa fa-share"></i> Share</button>
      <button type="button" class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up"></i> Like</button>
  
      <span class="pull-right text-muted"><?php echo $num1 ?> likes - <?php echo $num2 ?> shares</span>
    </div>
    <br>
    <div class="section-title">
                    <h2>Comments</h2>
                   
                </div> 

                <?php 
                        $query= "select * from comments";
                        $result=$conn->query($query);
                        /*<?php print_r($dataUser);?>  displays data from data base  */
                        $cmt_data=$result->fetch_assoc();
                ?>
      
    <div class="box-footer box-comments">

    
    <?php while($cmt_data = $result->fetch_assoc()){
             if($cmt_data['comment_on_bid']==$_GET["id"]){ ?>

                <div class="box-comment">
             
                

                    <img class="img-circle img-sm" src="pics/def.jpg" alt="User Image">
                    <div class="comment-text">
                    <span class="username">
                    <label><?php echo $cmt_data['comment_by'];?></label>
                                <span class="text-muted pull-right"><?php echo $cmt_data['dateoc'];?></span>
                    </span>
                    <br>
                    <label>
                    <?php echo $cmt_data['comment'];?>
                    </label>
                    <br>
                    </div>
                    <?php if ($_SESSION['userid'] == $cmt_data['comment_by_id']) { ?>
                        <label><a href="edit_cmt.php?id=<?php echo $cmt_data['ID'] ?>"><h5><b>Edit</b></h5></a></label>
                        
                       
						<label class="pull-right"><a href="delete_cmt.php?cmt_id=<?php echo $cmt_data['ID'] ?>" ><h5><b>Delete</b></h5></a></label>
                        <?php } ?>
                        <br>
                <?php } ?>
        <?php } ?>

      </div>

    </div>
    
    <div class="box-footer">
      <form action="action.php?id=<?php echo $data['ID'] ?>" method="post">
        <img class="img-responsive img-circle img-sm" src="profile_pic/<?php echo $dataUser['Profile_p'] ?>" alt="Alt Text">
        <div class="img-push">
          <input type="text" class="form-control input-sm" name="cmt" placeholder="Post your comment here..."> 
          <br>
          
          <button class="btn btn-primary" type="submit" name="cmt_btn">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>
</div>

</body>

<?php include("footer.php"); ?>
</html>
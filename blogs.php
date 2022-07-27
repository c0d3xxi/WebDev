<?php 
session_start();

include('database_conn.php');
include('dependencies.php');

      

$query= "select * from blogs";
$result=$conn->query($query);
/*<?php print_r($dataUser);?>  displays data from data base  */



?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Blogs</title>
</head>
<body>
<header id="header" class="d-flex flex-column justify-content-center">

        <?php include("nav2.php"); ?>
        <!-- .nav-menu -->

    </header>
    <br>
    <center> 
        <div class="section-title">
                    <h2>Blogs</h2>
                    <br>
                    <h4><i>Here are some blog our users have written and posted. You can check them out by clicking on them.</i></h4>
                </div> 

    </center>
 
    <?php while($dataUser = $result->fetch_assoc()){?>
    <div class="container mt-5 mb-5">
    <div class="d-flex justify-content-center row">
        <div class="col-md-10">
            <div class="row p-2 bg-white border rounded">


                <div class="col-md-3 mt-1"><a href="comments.php?id=<?php echo $dataUser['ID'] ?>"><img class="img-fluid img-responsive rounded product-image" src="blog_images/<?php echo $dataUser['Image']?>"></a></div>
                <div class="col-md-6 mt-1">
                    <h4>Title: <a href="comments.php?id=<?php echo $dataUser['ID'] ?>"><i><b><?php echo $dataUser['Title'];?></b></i></a></h4>
                    
                    <div class="mt-1 mb-1 spec-1"><span><h5>Author: <i><?php echo $dataUser['Author'];?></i></h5></span></div>
                    <div class="mt-1 mb-1 spec-1"><span><h5><i> <?php echo $dataUser['Des']; ?></i></h5></span></div>
                    
                        
                </div>
                <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                    <div class="d-flex flex-row align-items-center">
                    
                    </div>
                 
                   
                    <h4>Date: <i><?php echo $dataUser['Date'];?></i></h4>
                    <div class="d-flex flex-column mt-4">
                    <div class="d-flex flex-row">
                        
                        <div class="ratings mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div><span> </span>
                       
                    </div>
                    <br>    
                  
                    <a href="blog_files/<?php echo $dataUser['Content'] ?>" target="_blank"><button class="btn btn-primary btn-sm" type="button">Read Blog</button></a>
                    
                    <br>
                </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
<?php } ?>
   
</body>
<?php include("footer.php"); ?>

</html>
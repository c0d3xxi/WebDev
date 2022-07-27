<?php include('database_conn.php');
include('dependencies.php');
include('popup_dependencies.php');
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$id = $_GET['id'];
$query = "select * from comments where ID='$id'";
$result = $conn->query($query);
$data = $result->fetch_assoc();
//print_r($data);
?>

<div class="edit">
      <div class="modal-dialog">
      
        <!-- Modal content-->
        <div class="modal-content">
        <div class="modal-header">
          </div>
          <div class="modal-header">

            <center><h3 class="modal-title"><b>Edit</b></h3></center>

          </div>
          <div class="modal-body">
          
          <form method="post" action="action.php""> <!-- enctype is for image -->
          <div class="modal-body mx-3">

          <div class="md-form mb-5">

            <label data-error="wrong" data-success="right" for="form32"><i class="fa-solid fa-file-signature fa-lg me-3 fa-fw"></i> Edit Comment:</label>
            <textarea  id="form32" class="form-control validate" name="edit_com" value="<?php echo $data['comment']; ?>" required></textarea>

            <input type="text" id="id" name="id" value="<?php echo $data['ID']; ?>" hidden>
          </div>

        


        
        <div class="modal-footer d-flex justify-content-center">
          <button class="btn btn-unique" name="edit_cmt"><b>Edit Comment</b> <i class="fas fa-paper-plane-o ml-1 fa-lg me-3 fa-fw"></i></button>
        </div>

        </form>




          </div>
          <div class="modal-footer">
            <a href="blogs.php"><button type="button" class="btn btn-default" data-dismiss="modal"><b>Back</b></button></a>
          </div>
        </div>
        
      </div>
    </div>

</body>
</html>



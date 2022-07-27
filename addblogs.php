<?php if(isset($_SESSION['ticket'])) { ?> 


  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
    
    <!-- Trigger the modal with a button -->
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add Blog</button>
    
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">
      
        <!-- Modal content-->
        <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          
          <div class="modal-header">

            <center><h3 class="modal-title"><b>New Blog</b></h3></center>

          </div>
          <div class="modal-body">
          
          <form method="post" action="action.php" enctype="multipart/form-data"> <!-- enctype is for image -->
          <div class="modal-body mx-3">

          <div class="md-form mb-5">
            <label data-error="wrong" data-success="right" for="form32"><i class="fa-solid fa-file-signature fa-lg me-3 fa-fw"></i> Blog Title:</label>
            <input type="text" id="form32" class="form-control validate" name="title" required>
          </div>

          <div class="md-form mb-5">
          <label data-error="wrong" data-success="right" for="form34"><i class="fa-solid fa-user-tie fa-lg me-3 fa-fw"></i> Author:</label>
            <input type="text" id="form34" class="form-control validate" name="author" required>
          </div>

          <div class="md-form mb-5">
            <label data-error="wrong" data-success="right" for="form29"><i class="fa-solid fa-calendar fa-lg me-3 fa-fw"></i> Upload Date:</label>
            <input type="date" id="form29" class="form-control validate" name="date" required>
            
          </div>

          <div class="md-form mb-5">
          <label data-error="wrong" data-success="right" for="form29"><i class="fa-solid fa-file-image fa-lg me-3 fa-fw"></i> Upload Image:</label>
            <input type="file" id="form29" class="form-control validate" name="img" required>
          </div>

          <div class="md-form mb-5">
          <label data-error="wrong" data-success="right" for="form29"><i class="fa-solid fa-paperclip fa-lg me-3 fa-fw"></i> Upload Blog:</label>
            <input type="file" id="form29" class="form-control validate" name="blog" required>
            <br>
            <br>

            <div class="form-outline flex-fill mb-4">
          <label data-error="wrong" data-success="right" for="form29"><i class="fa-solid fa-circle-info fa-lg me-3 fa-fw"></i> Description:</label>
          <textarea id="form3Example3c" class="form-control" name= "des" required></textarea>
        </div>

        <div class="modal-footer d-flex justify-content-center">
          <button class="btn btn-unique" name="sub_btn"><b>Submit Blog</b> <i class="fas fa-paper-plane-o ml-1 fa-lg me-3 fa-fw"></i></button>
        </div>

        </form>




          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal"><b>Close</b></button>
          </div>
        </div>
        
      </div>
    </div>
    
  </div>
</body>
</html>

<?php } ?> 



  



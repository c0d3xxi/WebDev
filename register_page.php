<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

   <?php include("dependencies.php");?>

 
</head>

<body>

    <!-- ======= Mobile nav toggle button ======= -->
    <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
    <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
    <!-- ======= Header ======= -->
    <header id="header" class="d-flex flex-column justify-content-center">

        <?php include("nav2.php"); ?>
        <!-- .nav-menu -->

    </header>
    <!-- End Header -->        
    
        <section class="vh-100" style="background-color: #eee;">
        <div class="container h-100">
        
            <div class="row d-flex justify-content-center align-items-center h-100" style="overflow:scroll">
            <div class="col-lg-12 col-xl-11">
                <div class="card text-black" style="border-radius: 25px;">
                <div class="card-body p-md-5">
                    <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                        <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                        <form class="mx-1 mx-md-4" action="action.php" method="post" enctype="multipart/form-data">

                        <div class="d-flex flex-row align-items-center mb-6">
                            <i class="fa-solid fa-user-tie fa-xl me-3 fa-fw"></i>                            
                            <div class="form-outline flex-fill mb-4">
                            <label class="form-label" for="form3Example1c">Your Name:</label>
                            <input type="text" id="form3Example1c" class="form-control" name ="uname" required/>
                            
                            </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-6">
                            <i class="fa-solid fa-at fa-xl me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-4">
                            <label class="form-label" for="form3Example3c">Your Email:</label>
                            <input type="email" id="form3Example3c" class="form-control" name ="email" required/>
                            
                            </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-6">
                            <i class="fa-solid fa-user-lock fa-xl me-3 fa-fw"></i>
                            
                            <div class="form-outline flex-fill mb-4">
                            <label class="form-label" for="form3Example4c">Password:</label>
                            <input type="password" id="form3Example4c" class="form-control" name ="pass" required/>
                            
                            </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-6">
                        
                            <i class="fa-solid fa-triangle-exclamation fa-xl me-3 fa-fw"></i>              
                            <div class="form-outline flex-fill mb-4">
                             <label class="form-label" for="form3Example4cd">Repeat your password:</label>
                             <input type="password" id="form3Example4cd" class="form-control" name ="pass1" required/>
                            
                            </div>



                    </div>

                    <div>
                    <div class="d-flex flex-row align-items-center mb-6">
                        
                        <i class="fa-solid fa-camera-retro fa-xl me-3 fa-fw"></i>              
                        <div class="form-outline flex-fill mb-4">
                        <label class="form-label" for="form3Example4cd">Profile Picture:</label>
                        <input type="file" id="form3Example4cd" class="form-control validate" name = "user_img" required/>
                        
                        </div>
                    </div>


                        

                        <div class="d-flex flex-row align-items-center mb-6">
                        

                            <i class="fa-solid fa-address-card fa-xl me-3 fa-fw"></i>    
                        

                            <div class="form-outline flex-fill mb-4">
                            <label class="form-label" for="form3Example3c">About You:</label>
                            <textarea id="form3Example3c" class="form-control" name= "tarea" required></textarea>
                            
                            </div>
                        </div>


                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                            <button type="Submit" class="btn btn-primary btn-lg" name="reg_btn">Register</button>
                        </div>
</form>
                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                        <a href="login.php">Already have an account?? Click here to login!!</a>
                    </div>
                    <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">





                 


</body>
</html>



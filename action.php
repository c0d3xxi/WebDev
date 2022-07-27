<?php
session_start();
include('database_conn.php');   //saving database connection to a file named database_conn and calling it.


if(isset($_POST['reg_btn']))
{
    if(($_POST['pass'])==($_POST['pass1']))
    {

        $u1 = $_POST['uname']; 

        $p1 = md5($_POST['pass']);

        $email = $_POST['email'];

        $profile = $_FILES['user_img']['name'];
        $ext = strtolower(pathinfo($_FILES['user_img']['name'], PATHINFO_EXTENSION));
        $rand_num= rand(1,9999999999999);
        $new_pro_pic_name = $rand_num."_profile.".$ext;

        $about = $_POST['tarea'];

        if($ext=='jpg' || $ext == 'jpeg' || $ext == 'png' || $ext == 'gif')
        {

            move_uploaded_file($_FILES['user_img']['tmp_name'], "profile_pic/".$new_pro_pic_name);

            $query_data = "insert into user_data (ID, Name, Email, Password, About, Profile_p) values (NULL, '$u1', '$email', '$p1', '$about', '$new_pro_pic_name')";

            $conn->query($query_data);
            header("location:login.php"); //redirecting the page to login.php
       }
        
    }
}   //login code end


if(isset($_POST['signin_btn']))
{
    $u1= $_POST['uname'];
    $p1= md5($_POST['pass']);
    $query_sel= "select * from user_data where Name='$u1' and Password='$p1'";
    $result=$conn->query($query_sel);

    $usr_data= $result->fetch_assoc();  //fetches user data from the database

    $count= $result->num_rows;
    if($count==0){
        //login failed
        echo "INVALID LOGIN DETAILS";
    }
    else{
        $_SESSION['ticket']="ok";
        $_SESSION['userid'] = $usr_data['ID'];
        header("location:dashboard.php");
    }

}

if(isset($_POST['sub_btn']))
{

    $title = $_POST['title']; 

    $author = $_POST['author'];

    $date = $_POST['date'];

    $img = $_FILES['img']['name'];
    $ext = strtolower(pathinfo($_FILES['img']['name'], PATHINFO_EXTENSION));
    $rand_num= rand(1,9999999999999);
    $new_pic_name = $rand_num."_blog.".$ext;

    $blog = $_FILES['blog']['name'];
    $ext_b = strtolower(pathinfo($_FILES['blog']['name'], PATHINFO_EXTENSION));
    $rand_numb= rand(1,9999999999999);

    $des = $_POST['des'];

    $new_blog_name = $rand_numb."_blog.".$ext_b;


    if($ext=='jpg' || $ext == 'jpeg' || $ext == 'png' || $ext == 'gif')
    {

    move_uploaded_file($_FILES['img']['tmp_name'], "blog_images/".$new_pic_name);

        if($ext_b=='docx' || $ext_b == 'pdf' || $ext_b == 'doc' || $ext_b == 'txt'){
            move_uploaded_file($_FILES['blog']['tmp_name'], "blog_files/".$new_blog_name);


            $user_data_id=$_SESSION['userid'];
            $query_data = "insert into blogs (ID, Title, Author, Date, Content, Image, Des, user_data_id) values (NULL, '$title', '$author', '$date', '$new_blog_name', '$new_pic_name', '$des', '$user_data_id')";

            $conn->query($query_data);
            header("location:blogs.php");
            

            $query_sel= "select * from blogs where Image='$new_pic_name', Title='$title', Author='$author', Date='$date', Des='$des' and Content='$new_blog_name'";
            $result=$conn->query($query_sel);

            $blog_data= $result->fetch_assoc();  //fetches user data from the database


            $_SESSION['blogid']=$blog_data['ID'];

        }
        else{
            echo '<script>alert("Invalid document file type!!")</script>';
        }
    }
    else{
        echo "Invalid picture file type!!";
    }

}

if(isset($_POST['edit_btn']))
{
    $id=$_POST['id'];
    $edit_title=$_POST['edit_title'];
    $query="update blogs set Title='$edit_title' where ID='$id'";
    $conn->query($query);
    

    

    header("location:dashboard.php");

}

if(isset($_POST['edit_cmt']))
{
    

    $id=$_POST['id'];
    $edit_com=$_POST['edit_com'];
    $query="update comments set comment='$edit_com' where ID='$id' ";
    $conn->query($query);


    header("location:blogs.php");

}

if(isset($_POST['cmt_btn']))
{

    $date= date("Y-m-d");
    date_default_timezone_set('Asia/Kathmandu');
    $time = date("h:i:sA");
    $op=$date." ".$time;
    
    


    $cmtby_id=$_SESSION['userid'];

    $query_sel= "select * from user_data where ID='$cmtby_id'";
    $result=$conn->query($query_sel);
    $user_data= $result->fetch_assoc();

    $query_sel1= "select * from blogs";
    $result1=$conn->query($query_sel1);
    $blog_data= $result->fetch_assoc();


    $cmtby_name = $user_data['Name'];
    $comment = $_POST['cmt'];

   
    $id = $_GET['id'];
    $query = "select * from blogs where ID='$id'";
    $result = $conn->query($query);
    $data = $result->fetch_assoc();
    //print_r($data);


    $cmton_bid = $data['ID'];


    $query_data = "insert into comments (ID, comment_by_id, comment_by, comment_on_bid, comment, dateoc) values (NULL, '$cmtby_id', '$cmtby_name', '$cmton_bid', '$comment', '$op')";

            $conn->query($query_data);
             header("location:comments.php?id=".$id);
}



?>
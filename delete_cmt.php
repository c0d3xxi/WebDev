<?php
include('database_conn.php');
$id = $_GET['cmt_id'];
$query = "delete from comments where ID='$id'";
$result = $conn->query($query);
//print_r($data);
header("location:blogs.php");
?>
<?php 
include("../MasterPage/Dbmanager.php");
extract($_POST);
$insert = "insert into feedback values(null,'$title','$review',curdate())";
$sql = mysqli_query($conn , $insert);
    if($sql==true)
    {
        echo "<script>alert('Data Saved Successfully...');window.location.href='../StudentZone/feedback.php';</script>";
    }
?> 
    
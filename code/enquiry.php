<?php
include("../MasterPage/Dbmanager.php");
extract($_POST);
$insert = "insert into enquiry values(null,'$name','$email','$mob','$massage',curdate())";
$sql = mysqli_query($conn , $insert);
    if($sql==true){
    echo "<script>alert('Data Saved Successfully...');window.location.href='../index.php';</script>";
    }
?>
 
    


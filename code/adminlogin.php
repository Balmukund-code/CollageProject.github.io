<?php 
session_start();
include("../MasterPage/Dbmanager.php");
extract($_POST);
    $select ="select * from admin where email='$email' and pass='$pass'";
    $sql = mysqli_query($conn , $select);
    if(mysqli_num_rows($sql)>0) 
    {
    $_SESSION['email'] = $email;
    // header("location:../AdminZone/dashboard.php");
    echo "<script>alert('correct addmin create.');window.location.href='../AdminZone/dashboard.php';</script>";
    }
    else
    {
    echo "<script>alert('incorrect addmin create.');window.location.href='../AdminZone/index.php';</script>";
    }
    
    
?>


<?php 
    session_start();
    include("../MasterPage/Dbmanager.php");
    extract($_POST);
    $ab = $_SESSION['email'];
    if(!$npass='' && $npass == $cpass){
    $pas = base64_encode($npass);
    $update = "UPDATE login SET password='$pas' WHERE email='$ab'";
    $sql = mysqli_query($conn , $update);
    if($sql){
        echo "<script>alert('password change successfull...');window.location.href='../StudentZone/changepassword.php';</script>";

    }
    }
    else
    {
        echo "<script>alert('conform password is not match..');window.location.href='../StudentZone/changepassword.php';</script>";
    }

?>


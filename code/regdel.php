<?php
include("../MasterPage/Dbmanager.php");
$id = $_REQUEST['msg'];
$del ="delete from registration where id='$id'";
$sql = mysqli_query($conn , $del);
if($sql==true)
{
   echo "<script>alert('Record Delete successfull');window.location.href='../AdminZone/registrationmgmt.php';</script>";
   
}
else
{
    echo "<script>alert('Record not Delete successfull');window.location.href='../AdminZone/registrationmgmt.php';</script>";    
}
?>

<?php
include("../MasterPage/Dbmanager.php");
extract($_POST);
// print_r($del);
// die();
// $sql = mysqli_query($conn , $del);

$insert ="insert into notification values(null,'$ndec',curdate())";
$sql = mysqli_query($conn , $insert);
if($sql==true)
{
    echo "<script>alert('notification added successfully');window.location.href='../AdminZone/addnotification.php'</script>";
}
else
{
    echo "<script>alert('sorry!notification not added successfully');window.location.href='../AdminZone/addnotification.php'</script>";   

}    
?>

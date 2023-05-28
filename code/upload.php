<?php
include("../MasterPage/Dbmanager.php");
extract($_POST);
if(isset($_POST['submit']))
{
    $file = time()."_".basename($_FILES['file']['name']);
    $temp = $_FILES['file']['tmp_name'];
    $insert = "insert into upload values(null,'$file','$branch',curdate())";
    $sql = mysqli_query($conn , $insert);
    if($sql==true)
    {
        move_uploaded_file($temp ,"image/".$file);
        echo "<script>alert('uploaded successfully');window.location.href='../AdminZone/courseUpload.php'</script>";
    }
    else
    {
        echo "<script>alert('sorry!uploaded not successfully');window.location.href='../AdminZone/courseUpload.php'</script>";   

    } 
}

?>
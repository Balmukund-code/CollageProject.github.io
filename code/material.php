<?php
include("../MasterPage/Dbmanager.php");
    extract($_POST);
    $file = time()."_".basename($_FILES['upload_pdf']['name']);
    $temp = $_FILES['upload_pdf']['tmp_name'];
    $insert ="insert into upload_study values(null,'$subject_title','$subject','$branch','$file',curdate())";
    $sql = mysqli_query($conn , $insert);
    if($sql==true)
    {
        move_uploaded_file($temp ,"../image/".$file);
        echo "<script>alert('uploaded successfully');window.location.href='../AdminZone/uploadstudymaterial.php'</script>";
    }
    else
    {
        echo "<script>alert('sorry!uploaded not successfully');window.location.href='../AdminZone/uploadstudymaterial.php'</script>";   

    }    
?>
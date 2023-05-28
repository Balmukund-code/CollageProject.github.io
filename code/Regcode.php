<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Regcode Page</title>
    </head>
    <body>
        <?php 


            include("../MasterPage/Dbmanager.php");
            extract($_POST);
            if(isset($_POST['submit']))
            {
                if($password == $cpass)
                {

                    $file = time()."_".basename($_FILES['file']['name']); 
                    $temp = $_FILES['file']['tmp_name'];                  
                    $insert = "INSERT INTO registration VALUES(null,'$name','$gender','$email','$mobile_number','$city','$dob','$file','$pincode','$address',curdate())";
                    $res = mysqli_query($conn ,$insert);
                    move_uploaded_file($temp ,"../image/".$file);
                    if($res == true)
                    {
                        $pass = base64_encode($password);
                        $log = "INSERT INTO login VALUES(null,'$email','$pass',curdate())";    
                        mysqli_query($conn , $log);
                        echo "<script>alert('Successfull');window.location.href='../login.php'</script>";
                    }else{
                        echo "<script>alert('Unsuccessfull');window.location.href='../registration.php'</script>";
                    }
                }else{
                    echo "<script>alert('password and conformpassword not match');window.location.href='../registration.php'</script>";
                }
            }
            else{
                echo "<script>alert('feild is required ');window.location.href='../registration.php'</script>";
            }
        ?>
    </body>
</html>

<!DOCTYPE html>
<html>
    <head>
        <title>User Login</title>
    </head>
    <body>
        <?php
        session_start();
            include("../MasterPage/Dbmanager.php");
            extract($_POST);
            $pass = base64_encode($password);
            $select = "select * from login where email='$email' and  password ='$pass'";
            $sql = mysqli_query($conn,$select);
            if(mysqli_num_rows($sql)>0)
            {
                $_SESSION['email'] = $email;
                header("location:../StudentZone/Dashboard.php");
            }
                else
                {
                    echo "<script>alert('your email or password is not matched');window.location.href='../login.php';</script>";

            }  

        ?>   
    </body>
</html>

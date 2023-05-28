<?php
   session_start();
    if(!isset($_SESSION['email'])){
        header("location:../AdminZone/index.php");  
    }


?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Notification  Page</title>
        <?php include("../masterpage/link1.php")?>
    </head>
    <body>
        <?php include("../masterpage/header2.php")?>
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4" style="background:black;min-height: 200px; border-radius:10px;margin-top:40px;border:4px solid black;padding: 20px;color:white; ">
                    <center h3>ADD NOTIFICATION HERE..</center>
                    <hr>
                    <form action="../code/notification.php" method="post">
                    <span style="font-size: 16px;font-family: roman;">Notification discription</span>
                    <textarea class="form-control" name="ndec" placeholder="type notification here.." style="resize:none;"></textarea>
                    <br>
                    <br>
               
                    <input type="submit" value="Add Now" class="btn btn-primary form-control">  
                    </form>  
                </div>
                <div class="col-sm-4"></div>

            </div>
        </div>
    </body>
</html>

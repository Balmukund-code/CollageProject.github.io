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
        <title>logout Page</title>
        <!-- <%
        session.invalidate();    
        %> -->
        <?
          session_destroy($_SESSION['email']);
        ?>
        <script>
            function logout()
            {
             window.history.forward;
             window.setTimeout("window.location.href='../AdminZone/index.php'",500);
            }
        </script>
        
            
    </head>
    <body onload="logout()">
        
       
    </body>
</html>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>logout Page</title>
        <?php 
        session_start();
        $_SESSION['email'];
        session_destroy();
        ?>
        <script>
            function logout()
            {
             window.history.forward;
             window.setTimeout("window.location.href='../index.php'",500);
            }
        </script>
        
            
    </head>
    <body onload="logout()">
        
       
    </body>
</html>

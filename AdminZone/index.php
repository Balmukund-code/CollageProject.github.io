<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>login Page</title>
        <?php include("../MasterPage/link1.php")?>
        <style>
            .outer{
                min-height:60px;
                background: lightblue;
                
            }
        </style>
    </head>
    <body>
        <div class="col-sm-12 outer">
            <div class="col-sm-4"></div>
            <div class="col-sm-4 login">
                <div class="text-center h2">login here<span class="fa fa-key"></span></div><br>
                <form action="../code/Adminlogin.php" method="post">
                    Email:<br>
  <div class="input-group">
      <span class="input-group-addon">
          <span class="fa fa-user"></span></span>
                      
      <input type="email" name="email" class="form-control" placeholder="enter your Email">
            </div><br>
            password:<br>
                  <div class="input-group">
                      <span class="input-group-addon"><span class="fa fa-key"></span></span>
                     
                      <input type="password" name="pass" class="form-control" placeholder="enter your password"/>
                     </div><br>
                     <input type="submit" value="LOGIN HERE" class="form-control" style="background:green;color: white;font-size:18px;" >
                </form>
        
          <div class="col-sm-4"></div>
    </body>
</html>

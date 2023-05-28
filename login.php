<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>welcome to login</title>
        <?php include("MasterPage/link.php")?>
        <style>     
            .login
            {
                min-height: 500px;
                background:grey;
               
            }
            .log
            {
                min-height:200px; 
                background: lightblue;
                margin-top: 3%;
                padding: 2%;
                box-shadow:0px 2px 3px black;
                border-radius:8px;
            }          
        </style>
            
    </head>
    <body>
        <div class="col-sm-12">
            <div class="row">
                <?php include("MasterPage/header.php") ?>
                <div class="col-sm-12 login">
                    <div class="col-sm-4"></div>
                 <div class="col-sm-4 log"> <a href="index.php" class="pull-right" style="font-size:25px;"><span>x</span></a>
                    <div class="text-center h2">LOGIN HERE <span class="fa fa-lock"> </span></div>
                        <div class="col-sm-12">
                            <form action="code/login.php" method="post">
                                USER E-mail
                                <div class="input-group">
                                    <span class="input-group-addon">
                                    <span class="fa fa-user"></span>
                                    </span>
                                    <input type="email" name="email" placeholder="enter your e-mail" class="form-control" required="enter your name"/>                                
                                </div>
                                Password
                                <div class="input-group"><span class="input-group-addon">
                                    <span class="fa fa-key"></span></span>
                                    <input type="password" name="password" placeholder="enter your password" class="form-control" required="enter your name"/>
                                </div></br>
                                <input type="submit" style="background:green;color:white" value="LOGIN" class="form-control"/>  
                                <center><a href="Registration.php">NEW USER REGISTER HERE</a></center>
                            </form>
                    </div>
                </div>
            <div class="col-sm-4"></div>
            </div>
            <?php include("MasterPage/footer.php")?>
            </div>
        </div>
    </body>
</html>

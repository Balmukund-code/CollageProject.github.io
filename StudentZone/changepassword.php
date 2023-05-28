<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>change password Page</title>
        <?php include("../MasterPage/link1.php")?>
        <style>
            .changepass
            {
                min-height: 500px;
                background-image: url('../images/.jpg');
                
            }
            .c
            {
             text-align: center;
             text-align:justify;
             
            }
            .c .fa
            {
         
                font-size:40px;;
                color:#31b0d5;
                    
            }
            .pass
            {
        
              min-height:100px; 
              background-image:url('../images/k13.jpg'); 
            }
            .pass1
            {
                background: rgba(367,367,367,.4);
                min-height:300px;
                padding-top:65px; 
            }
           
        </style>
            
    </head>
    <body>
        <div class="col-sm-12">
            <div class="row">
                <?php include("../MasterPage/header1.php")?>
                <div class="col-sm-12 changepass">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10">
                        <div class="text-center h2"><span class="fa fa-key"></span><b tyle="color:lightblue;">change password</b></div>
                        <div class="col-sm-12">
                            <div class="col-sm-6 c">
                                <span class="fa fa-edit"></span><br>
                                <h3>Read Notification</h3>
                            <i> The Student be change your password and get new password when the old student to registered or 
                                registration and for got the old password then they will can get new password.</i>
                            </div>
                           
                 <div class="col-sm-6 pass">
                      <div class="row">
                      <div class="col-sm-12 pass1">
                 <form action="../code/changePassword.php" method="post">
                    <label >Old Password</label>
                     <input type="password" name="opass" class="form-control" placeholder="enter your password" >
                     <label >New Password</label>
                 <input type="password" name="npass" class="form-control"placeholder="enter your new password"  >
                 <label >Confirm Password</label>
                 <input  type="password" name="cpass" class="form-control"placeholder="enter your conform password">
                 <input type="submit" value="CHANGE PASSWORD" class="form-control btn btn-primary">
                 </form>
                    </div>
                        </div>       
                        </div>
                            <div class="col-sm-1"></div>
                        </div>
                    </div>
                </div>
                <?php include("../MasterPage/footer.php")?>
          </div>
        </div> 
    </body>
</html>

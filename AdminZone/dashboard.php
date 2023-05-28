<?php
    session_start();
    //print_r($_SESSION['email'])
    if(!isset($_SESSION['email'])){
        header("location:../AdminZone/index.php");  
    }


?>



<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Dashboard Page</title>
        <?php include("../MasterPage/link1.php")?>
        <style>
         .dashboard
         {
             min-height: 360px;
             
         }
         .dash
         {
             min-height: 255px;
             background:lightblue;
             border:10px double;
             box-shadow: 10px;
             text-align: center;
             margin-top:5%;
             color:yellow;
             font-size: 35px;
             padding-top:20%;
             margin-bottom: 25px;
            
         }
         .dash:hover
         {
             background: #0F9E5E;
             color: blue;
             box-shadow: 5px 5px 25px black;
          transform: skewy(12deg);
          cursor: pointer;
           transition: all ease 1s;
             
         }
         .a
         {
             min-height: 255px;
             background:lightblue;
             border:10px double;
             box-shadow:lightblue(10,10,100)insext;
             text-align: center;
             margin-top:5%;
             color:blue;
             font-size: 35px;
             padding-top:20%;
             margin-bottom: 25px;
            
         }
          .a:hover
         {
             background: #0F9E5E;
             color:yellow;
             box-shadow: 5px 5px 25px black;
          transform: skewx(12deg);
          cursor: pointer;
           transition: all ease 1s;
         }
        </style>
           
    </head>
    <body>
        <div class="col-sm-12">
            <div class="row">
                <?php include("../MasterPage/header2.php")?>
                <div class="col-sm-12 dashboard">
                    <div class="text-center h2"><span class="fa fa-dashboard fa-spin"></span>ADMIN DASHBOARD</div>
                 <div class="col-sm-12">
                        <div class="col-sm-4">
                            
                            <div class="col-sm-12 dash"> <a href="dashboard.php"><span class="fa fa-dashboard"></span>Dashboard</a></div>
                        </div>
                         <div class="col-sm-4">
                             
                             <div class="col-sm-12 dash"> <a href="uploadstudymaterial.php"><span class="fa fa-upload"> </span>upload study material</a></div>
                        </div>
                         <div class="col-sm-4">
                             
                             <div class="col-sm-12 dash"> <a href="addnotification.php"><span class="fa fa-pencil-square"></span>Notification</a></div>
                        </div>
                              
                       
                    </div>
                </div>
                <div class="col-sm-12">
                        <div class="col-sm-4">
                           
                            <div class="col-sm-12 a"><a href="contactusMgmt.php"><span class="fa fa-phone"></span>Mgmt contact us</a></div>
                        </div>
                         <div class="col-sm-4">
                            
                             <div class="col-sm-12 a"><a href="feedbackmgmt.php"><span class="fa fa-pencil-square"> </span>Feedback Mgmt</a></div>
                        </div>
                         <div class="col-sm-4">
                             
                             <div class="col-sm-12 a"><a href="changepassword.php"><span class="fa fa-key"></span>change password</a></div>
                        </div>
                              
                        
                    </div>
                <div class="col-sm-12">
                        <div class="col-sm-4">
                            
                            <div class="col-sm-12 dash"> <a href="registrationmgmt.php"><span class="fa fa-pencil-square"></span>Registration Mgmt</a></div>
                        </div>
                         <div class="col-sm-4">
                             
                             <div class="col-sm-12 dash"> <a href="login.php"><span class="fa fa-sign-in"> </span>Login</a></div>
                        </div>
                         <div class="col-sm-4">
                             
                             <div class="col-sm-12 dash"> <a href="logout.php"><span class="fa fa-sign-out"></span>Logout</a></div>
                        </div>
                              
                       
                    </div>
                </div>
             
                
                <?php include("../MasterPage/footer.php")?>
            </div>
        </div>  
    </body>
</html>


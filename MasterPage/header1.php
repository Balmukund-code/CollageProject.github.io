<?php 
session_start();
if($_SESSION['email']==null)
{
    header("location:../login.php");
}    
?>
<!DOCTYPE html>
<div class="col-sm-12 t">
            <div class="col-sm-4">
                <span class="fa fa-phone"></span>+918112809757
            </div>
            <div class="col-sm-4">
         <?php
         echo $_SESSION['email'];
         ?>
            </div>
            <div class="col-sm-4">
                <a href="http://www.facebook.com" target="_blank"> <span class="fa fa-facebook"></span></a>
                <a href="http://www.google.com" target="_blank"> <span class="fa fa-google"></span></a>
                         <a href="http://www.twitter.com" target="_blank"><span class="fa fa-twitter"></span></a>
                         
                         <a href="http://www.youtube.com" target="_blank"> <span class="fa fa-youtube"></span></a>
            </div>
</div>
<div class="col-sm-12 header">
<div class="col-sm-3">           
<img src="../images/aktu.png" class="img-responsive" style="max-height: 65px;"/>
</div>
<div class="col-sm-9">
  <nav class="navbar navbar-default" id="menu">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="Dashboard.php"><span class=" fa fa-dashboard fa-spin"></span>Dashboard</a></li>
        <li><a href="../StudentZone/downloadstudy.php"><span class="fa fa-download"></span>download study material</a></li>
        <li><a href="../StudentZone/feedback.php"><span class="fa fa-pencil-square-o"></span>Feedback</a></li>
        <li><a href="../StudentZone/changepassword.php"><span class="fa fa-key fa-spin"></span>Change password</a></li>
        <li><a href="../StudentZone/myprofile.php"><span class="fa fa-columns"></span>My profile</a></li>
        <li><a href="../StudentZone/logout.php"><span class="fa fa-sign-out"></span>Logout</a></li>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
  </nav>
</div>
</div>
</div>
</div>
</div>

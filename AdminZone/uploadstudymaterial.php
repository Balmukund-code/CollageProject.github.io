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
        <title>upload Page</title>
        <?php include("../MasterPage/link1.php")?>
    </head>
    <body>
        <div class="col-sm-12">
            <div class="row">
        <?php include("../MasterPage/header2.php")?>
    <div class="col-sm-12" style="background: url('../images/a.jpg');min-height:500px; ">
                <div class="col-sm-12">
                    <div class="col-sm-6"></div>
                    <div class="col-sm-6 " style="min-height:400px; background: rgba(255,255,255,.5);margin-top:30px;" >
                        <form action="../code/material.php" method="post" enctype="multipart/form-data">
                            <h2 style="color:navy;" class="text-center">UPLOAD STUDY MATERIAL</h2>
                            <hr>
                        Title of study material:
                 <input type="text" name="subject_title" placeholder=" Title of study material" class="form-control"/>
                 Name  of subject:
                 <input type="text" name="subject" placeholder="Name of subject" class="form-control"/>
                    Branch name:
                    <select name="branch" class="form-control">
                                <option>select</option>
                                <option>Computer science and Engineering</option>
                                <option>Information Technology</option>
                                <option>Textile chemistry</option>
                                <option>Textile Designing</option>
                                <option>Electrical Engineering</option>
                             </select>
                               File uploading :
                               <input type="file" name="upload_pdf" class="form-control"/>
                               <input type="submit" value="Submit this form here" class="form-control" style="background:green;color: white;font-size:18px;"/>
                                     
                        </form>
                         </div>
                       </div>
                      </div>
            <?php include("../MasterPage/footer.php")?>
                       </div>
        </div>
    </body>
</html>

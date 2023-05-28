<?php
session_start();
    if(!isset($_SESSION['email'])){
        header("location:../AdminZone/index.php");  
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include("../MasterPage/link1.php")?>

</head>
<body>
<?php include("../MasterPage/header2.php")?>
<div class="col-sm-12">
    <h3 class="text-center">Upload Course</h3>
</div>
<div class="col-sm-12">
<div class="col-sm-6">
    <img src="../images/student6.jpg" alt="not" class="img-responsive">
</div>
<div class="col-sm-6">
    <form action="../code/upload.php" method="post" enctype="multipart/form-data">
        <label>BRANCH</label>
        <input type="text"class="form-control" placeholder="ENTER BRANCH NAME" name="branch" required>
        <Label>CHOOSE PICTURE</Label>
        <input type="file"class="form-control" name="file" required>
        <input type="submit" name="submit" value="ADD NOW" class="btn btn-primary form-control">  
    </form> 
    </div>
</div>
<?php include("../MasterPage/footer.php")?> 
</body>
</html>
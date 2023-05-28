<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>course Page</title>
        <?php include("MasterPage/link.php")?>
      <style>
          .b
          {
          height: 260px;
          }
    </style>
    </head>
    <body>
    <?php include("MasterPage/header.php")?>
        <div class="col-sm-12 ">
            <div class="row">
                <div class="text-center h1"><span class="fa fa-book"></span>OUR COURSES</div>
            </div>
        </div>
        <div class="col-sm-12">
            <?php
                include("MasterPage/Dbmanager.php");
                $select ="select * from upload";
                $sql = mysqli_query($conn , $select);
                while($row = mysqli_fetch_assoc($sql))
                {
                ?>
            <div class="col-sm-4"><h2><?= $row['branch']?></h2></div>
            <div class="col-sm-8">
                
                    <img src="./code/image/<?php echo $row['file'];?>" class="img-responsive" alt="<?php echo $row['file'];?>" style="height:400px;width:800px;"/>
            </div>
            <?php
            }
        ?> 
        </div>
        <?php include("MasterPage/footer.php")?>
        </div>     
    </body>
</html>

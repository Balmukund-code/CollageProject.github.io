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
        <title>feedback Page</title>
        <?php include("../MasterPage/link1.php")?>
        <style>
            .cmgmt
            {
                min-height: 500px;
            }
            table
            {
                width: 90%;
            }
            th
            {
                background:lightblue;
                color:greyt;
                height:40px;
                text-align: center;
            }
            td{
                height: 40px;
                background:white;
                text-align: center;
            }
            .mgmt a
            {
             color:red;    
            }
            .mgmt .fa
            {
               font-size:50px;
               text-align:center;
               overflow-x:scroll; 
            }
        </style>
    </head>
    <body>
        <?php include("../MasterPage/header2.php")?>
        <div class="col-sm-12 cmgmt">
            <div class="row">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>SR.NO</th>
                        <th>TITLE</th>
                        <th>REVIEW</th>
                        <th>DELETE</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                include("../MasterPage/Dbmanager.php");
                $select = "select * from feedback";
                $sql = mysqli_query($conn , $select);       
       $c=1;
       while($row = mysqli_fetch_assoc($sql))
       {
           ?>
                <tr>
                    <td><?= $c?></td>
                    <td><?= $row['title']?></td>
                    <td><?= $row['review']?></td>
                    <td><a href="../code/feedbackdel.php?msg=<?= $row['id']?>"><span class="fa fa-trash"></span></a></td>
                </tr>
            </tbody>
                <?php
        $c++;
                }
                ?>
        </table>
            <?php include("../MasterPage/footer.php")?>
            </div>
        </div>
    </body>
</html>
`
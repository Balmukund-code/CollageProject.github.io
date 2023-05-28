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
        <title>contactmangement Page</title>
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
                color:grey;
                height:40px;
                text-align: center;
            }
            td
            {
                height: 40px;
                background:white; 
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
                        <th>NAME</th>
                        <th>EMAIL</th>
                        <th>MOBILE NO</th>
                        <th>MASSAGE</th>
                        <th>DATE</th>
                        <th>DELETE</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                include("../MasterPage/Dbmanager.php");
                $select = "select * from enquiry";
                $sql = mysqli_query($conn , $select);       
                 $c=1;
              while($row = mysqli_fetch_assoc($sql))
                {
                ?>
                <tr>
                    <td><?= $c;?></td>
                    <td><?= $row['name']?></td>
                    <td><?= $row['email']?></td>
                    <td><?= $row['mobile_number']?></td> 
                    <td><?= $row['message']?></td>
                    <td><?= $row['date']?></td>
                    <td><a href="../code/enqdel.php?msg=<?= $row['id']?>"><span class="fa fa-trash"></span></a></td>
                </tr>
                <?php
                    $c++;
                }
                ?>
            </tbody>
            </table>
            <?php include("../MasterPage/footer.php")?>
            </div>
        </div>
    </body>
</html>

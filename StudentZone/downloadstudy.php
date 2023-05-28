<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>php Page</title>
        <?php include("../MasterPage/link1.php")?>
    </head>
    <body>
        <div class="col-sm-12">
            <div class="row">
                <?php include("../MasterPage/header1.php") ?>
                <div class="col-sm-12">
                    <table class="table table-hover">
                        <tr>
                          <td colspan="6">
                            <h2>DOWNLOAD STUDY MATERIAL</h2>
                          </td>
                        </tr>
                         <tr>
                            <th>SERIAL NO.</th>
                            <th>Title</th>
                            <th>NAME</th>
                            <th>Branch name</th>
                            <th>pdf</th>
                            <th>Date</th>
                          </tr>
                            <?php
                                include("../MasterPage/Dbmanager.php");   
                                $select ="select * from upload_study order by id desc limit 0,20";
                                $sql = mysqli_query($conn , $select);
                                $i=1;
                               while($row = mysqli_fetch_assoc($sql))
                               {
                               ?>
                          <tr>
                            <td><?= $i?></td>
                            <td><?= $row['subject_title']?></td>
                            <td><?= $row['subject']?></td>
                            <td><?= $row['branch']?></td>
                            <td><a href="../image/<?= $row['upload_pdf']?>"/>Download</a></td>
                            <td><?= $row['date']?></td>          
                          </tr>     
                              <?php
                              $i++;
                              }
                              ?>
         
                    </table>
                </div>
                <?php include("../MasterPage/footer.php")?>
            </div>
        </div>
    </body>
</html>
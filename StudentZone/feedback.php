<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>php Page</title>
            <?php include("../MasterPage/link1.php")?>
            <style>
                .j
                {
                
                  background:rgba(5,5,5,.7); 
                }
            </style>
                
    </head>
    <body>
        <div class="col-sm-12 outer">
            <div class="row">
                <?php include("../MasterPage/header1.php")?>
                <div class="text-center"><h1 style="color:green;"><span class="fa fa-feedback"></span>FEEDBACK
            </div>
                
                <div class="col-sm-8">
                    <div class="col-sm-12">
                        <img src="../images/student5.jpg" class="img-responsive"/>
                </div>
                </div>
                <div class="col-sm-4">
                   <div class="col-sm-12 ">
                        
                        <form action="../code/feedback.php" method="post">
                   Title
                   <input type="text" class="form-control" name="title" placeholder="enter your title" />
                   Review
                   <textarea name="review" class="form-control" placeholder="enter your review" ></textarea>
                   <input type="submit" value="submit" class="form-control" style="background:green;color:white; "/>
                        </form>      
                    </div>
                </div>
        </div>
        </div>
        <?php include("../MasterPage/footer.php")?>
    </body>
</html>

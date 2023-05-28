<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Registration Page</title>
        <?php include("MasterPage/link.php")?>
        <style>
        .reg
        {
       min-height: 500px;
       background:lightskyblue;
       margin-bottom:4%;
       padding:2%;
        }
        </style>
    </head>
    <body>
        <div class="col-sm-12">
            <div class="row">
                <?php include("MasterPage/header.php")?>
                <div class="h3 text-center"><span class="fa fa-user"></span><b style="color:blue">Registration Form</b></div>+
                <div class="col-sm-12">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6 reg">
                        <form action="code/Regcode.php" method="post" enctype="multipart/form-data">
                            NAME<input type="text" name="name" placeholder="Enter your name" class="form-control" required/>
                            GENDER<input type="radio" value="male" name="gender"/>male
                            <input type="radio" value="famale" name="gender"/>female<br>
                            E-MAIL<input type="email" name="email" placeholder="Enter yuor e-mail id" class="form-control" required/>
                        CONTACT NuMBER<input type="text" name="mobile_number" placeholder="Enter your mobile number" class="form-control" required/>
                        CITY<select name="city" class="form-control">
                        <option>..select..</option>
                        <option>lucknow</option>
                        <option>Mumbai</option>
                        <option>Allahabad</option>
                        <option>Konpur</option>
                        <option>Gugrat</option>
                        <option>Hariyana</option>
                        <option>Punjab</option>
                        <option>Varansi</option>
                        <option>Mau</option>
                        </select>
                        DATE OF BIRTH <input type="date" name="dob" class="form-control"/>
                        profile picture<input type="file" name="file" class="form-control"/>
                        PASSWORD<input type="password" name="password" placeholder="Enter your password" class="form-control" required/>
                        CONFORM PASSWORD<input type="password" name="cpass" placeholder="Enter your conform password" class="form-control" required/>
                        PIN CODE<input type="text" name="pincode" placeholder="Enter your Pincode" class="form-control" required/>
                        ADDRESS<textarea name="address" placeholder="Enter your address" class="form-control" required/></textarea>
                        <input type="submit" name="submit" value="RESITATION NOW" class="form-control btn btn-success"/>
                        <center><a href="login.php">ALREADY HAVE A ACCOUNT ! LOGIN HERE</a></center>
                    </form>
                    </div>
                        <div class="col-sm-3"></div>
                        <div class="row">
                       <?php include("MasterPage/footer.php") ?>
                        </div>
                </div>
            </div>
        </div>
    </body>
</html>

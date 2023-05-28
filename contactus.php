<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Contact Us</title>
        <?php include("MasterPage/link.php")?>
        <style>
            .contsct
            {
                min-height: 800px;
            }
            .c
            {
            background:lightblue;
            margin-bottom:20px;
            border-radius:12px;
            background:rgba(5,5,5,.5); 
            }
            .m img
            {
                height:200px;
                width: 200px;
                border-radius:50%; 
            }
            .m
            {
                background:lightblue; 
            }
        </style>
    </head>
    <body>
        <div class="col-sm-12">
            <div class="row">
                <?php include("MasterPage/header.php")?>
                <div class="col-sm-12 contact">
                    
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10">
                
                      <div class="col-sm-6 ">
                          <div class="col-sm-12 m">
                          <img src="images/contact.webp"> <b><i>Mr. Helper .</i></b><br>
                           Contact us for more details about this web app
                          
                          </div>
                      </div>
                            <div class="col-sm-6 c">
                                <form action="#" method="post">
                                 <div class="text-center h2"><span class="fa fa-phone"></span> Contact us</div>
                                Address<textarea name="address" placeholder="Enter your address" class="form-control" required></textarea>
                                E-mail<input type="text" name="email" class="form-control" placeholder="Enter your E-mail"/>
                                Contact us<input type="text" name="contact" class="form-control" placeholder="Enter your contact number"/>
                                <input type="submit" value="submit" class="form-control btn btn-success">
                                </form>
                        </div>
                    </div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3556.715079180667!2d80.93753977407697!3d26.944245658737188!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3999564d2761d6eb%3A0x451418ec61b4ac7!2sDr.%20A.%20P.%20J.%20Abdul%20Kalam%20Technical%20University%2C%20Lucknow!5e0!3m2!1sen!2sin!4v1685250217178!5m2!1sen!2sin" style="height: 300px; width: 100%; border: 10px double white;"></iframe>
                    </div>
                </div>
            
                <?php include("MasterPage/footer.php")?>
            </div>
        </div> 
    </body>
</html>

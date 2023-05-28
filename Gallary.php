<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Gallery Page</title>
        <?php include("MasterPage/link.php")?>
        <script>
            $(document).ready(function(){
            $(".s").click(function(){
                $("#lightbox").css("display","block");
                var url=$(this).attr("src");
                $("imgM").attr("src",url);
            })        
            })
        </script>
        <style>
            .gallery
            {
                min-height:400px;
   
         }
         .gal{
             min-height: 300px;
             background:lightblue;
             margin-bottom:5%;
             padding-bottom:2%; 
             
         }
         .g
         {
             background: white;
             padding-top:5%;
             padding-bottom:5%;
             margin-top:10%;
         }
         .g img
         {
             filter:grayscale(100%);
             transition: all ease 1s;
            
         }
         .g img:hover
         {
            filter:grayscale(0);
            transition: all ease 1s;
            transform:scale(1.2);
            
            
         }
         #lightbox
         {
             height:100%;
             width: 100%;
             background: rgba(0,0,0,.5);
             position:fixed;
             z-index: 10;
             padding-top:3%;
             display: none;
             
         }
         .lightbox1
         {
             width: 70%;
             height: 60%;
             background: white;
             margin: 0px auto;
             padding:1%;
             box-shadow: 10px 10px 20px block;
            
             
         }
         .lightbox1 img
         {
             height: 80%;
             width: 110%;
         }
        </style>
    </head>
    <body>
        <div class="col-sm-12"> 
            <div class="row">
                <?php include("MasterPage/header.php")?>
                <div class="col-sm-12 gallery">
                    <div class="h2 text-center">
                        <a href="gallary.jsp" class="pull-right" style="font-size:25px;"></a>
                        <span class="fa fa-picture-o">Image<b style="color:blue">Gallery</b></span></div>
                    <div class="col-sm-12">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-10 gal">
                            <div class="col-sm-12">
                                <div class="col-sm-4">
                                    <div class="col-sm-12 g">
                                        <img src="images/student1.jpg" alt="" class="img-responsive s"/>
                                    </div>
                                </div>
                                 <div class="col-sm-4">
                                    <div class="col-sm-12 g">
                                        <img src="images/student2.jpg" alt="" class="img-responsive s"/>
                                    </div>
                                </div>
                                 <div class="col-sm-4">
                                    <div class="col-sm-12 g">
                                        <img src="images/student3.jpg" alt="" class="img-responsive s"/>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-sm-12">
                                <div class="col-sm-4">
                                    <div class="col-sm-12 g">
                                        <img src="images/student4.jpg" alt="" class="img-responsive s"/>
                                    </div>
                                </div>
                                 <div class="col-sm-4">
                                    <div class="col-sm-12 g">
                                        <img src="images/student5.jpg" alt="" class="img-responsive s"/>
                                    </div>
                                </div>
                                 <div class="col-sm-4">
                                    <div class="col-sm-12 g">
                                        <img src="images/student6.jpg" alt="" class="img-responsive s"/>
                                    </div>
                                </div>
                                
                            </div>
                        </div>   
                   
   <div class="col-sm-1"></div>                        
                        </div>
            </div>
                <?php include("MasterPage/footer.php") ?>
            </div>
        </div>
       <!..start light box effect-->
       <div id="lightbox">
           <div class="lightbox1">
                  <a href="gallary.php" class="pull-right" style="font-size:25px; color:red; "><span>x</span></a>
                  <div class="text-center h2"><b><i>Image show here</i></b></div>
               <img src="images/a.jpg" class="img-responsive imgM">
           </div>
       </div>
       
    </body>
</html>

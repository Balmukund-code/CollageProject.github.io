<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
              <title>profile Page</title>
        <?php include("../MasterPage/link1.php")?>
    </head>
    <body>
             <?php include("../MasterPage/header1.php")?>
             <!-- <%
//out.print(session.getAttribute("userid"));
DBManager1 db=new DBManager1();
String cmd="select * from tbl_registration where Email='"+session.getAttribute("userid")+"'";
ResultSet rs=db.ExcuteSelect(cmd);
if(rs.next())
{ -->
 <!-- %> -->
             <div class="col-sm-12">
                 <div class="col-sm-1"></div>
                 <div class="col-sm-10">
                     <center><h2 style="color:blue; font-size:30px;">my profile &nbsp;<span class="fa fa-user" style="color: green;font-size:50px;"></span></h2></center>
                     <hr>
                     <div class="col-sm-12">
                         <div class="col-sm-4">
                             <img src="../images/student4.jpg" class="img-responsive"/>
                         </div>
                         <div class="col-sm-8" style="background:rgba(256,256,256,.5); margin-bottom:20px; ">
                             <div class="col-sm-12">
                                 <div class="col-sm-6">
                                 name:
                             <input type="text" class="form-control"  name="name" placeholder="enter your name"/>
                                     Gender:
                                     <input type="radio" name="gender" value="male"/>  male
                                     
                                     <input type="radio" name="gender" value="famale"/>  female
                                     <br>
                                     contact:
                                     <input type="number" name="cont" class="form-control"  placeholder="enter your number"/>
                                     
                                     
                                     email:
                                     <input type="text" name="email" class="form-control"  placeholder="enter your email"/>
                                     Address
                                     <input type="text" name="address" class="form-control"  placeholder="enter your address"/>
                                     
                                     <input type="submit" value="update profile" style="background:navy;color:white;border: none;" class="form-control"/>
                                            
                                 </div>
                                 <div class="col-sm-6">
                                      possword:
                                      <input type="password" name="pass"  class="form-control" placeholder="enter your password"/>
                                     
                                     city:
                                     <input type="text"  name="city"  class="form-control" placeholder="enter your city name"/>
                                     
                                     pincode:
                         <input type="nubmer" name="pincode"  class="form-control" placeholder="enter your pincode number"/>
                                     
                                     fileupload:
                              <input type="text" name="fileupload"  class="form-control"/>
                                     
                                     <a href="Dashboard.php">            
                                         
                                         <input type="submit" value="Back to home" style="background:green;color:white;" class="form-control"/></a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                <!-- <%
                }
                %>  -->
             </div>
             <?php include("../MasterPage/footer.php")?>
    </body>
</html>

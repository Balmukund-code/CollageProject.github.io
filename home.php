<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Home </title>
        <?php include("MasterPage/link.php")?>

        </head>
    <body>
      <div class="col-sm-12 outer">
    <div class="row">
        <?php include("MasterPage/header.php")?>
        
        <div class="col-sm-12 slider">
            <div class="row">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/aktu1.jpg" alt="...">
       <div class="carousel-caption">
        
      </div>
    </div>
    <div class="item">
      <img src="images/aktu2.webp" alt="...">
      <div class="carousel-caption">
      
      </div>
      </div>
    <div class="item">
      <img src="images/aktu3.jpg" alt="...">
      <div class="carousel-caption">
       
      </div>
    </div>
    
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
                    </div>
                    </div>
<div class="col-sm-12 notification">
    <?php
    include("MasterPage/Dbmanager.php");
    $select ="select * from notification order by id desc limit 0,1";
    $sql = mysqli_query($conn , $select);
    $noti="";
    while($row = mysqli_fetch_assoc($sql))
    {?>
    <marquee style="padding-top:14px;">
     <?php echo $row["ndec"]?>&nbsp;&nbsp;<span><img src='images/a6.gif' height='30px' width='45px'/></span>&nbsp;&nbsp;&nbsp;    
     </marquee>
    <?php
    }
    ?>
    
                    </div>
<div class="col-sm-12 services"> 
                  <div class="text-center h2">our <b style="color:white;">services</b></div>
                  <div class="col-sm-3 b">
                      <div class="col-sm-12 s">
                 <center><img src="images/p.jpg" style="height:250px;width: 250px;border:2px solid lightblue;margin-top:15px;"><br>   
                          <b>COMPUTER SCIENCE & ENGINEERING</b>
                 </center>
                      </div>
                  </div>
            
                  <div class="col-sm-3">
                  <div class="col-sm-12 s"><center><img src="images/mach.jpg" style="height:250px;width: 250px;border:2px solid lightblue;margin-top:15px;"><br>   
                          <b>MACHENICAL ENGINEERING</b>
                 </center></div></div>
                  <div class="col-sm-3">
                      <div class="col-sm-12 s"><center><img src="images/civil.jpeg" style="height:250px;width: 250px;border:2px solid lightblue;margin-top:15px;"><br>   
                          <b>CIVIL ENGINEERING</b>
                 </center></div></div>
                  <div class="col-sm-3">
                      <div class="col-sm-12 s"><center><img src="images/elec.jpeg" style="height:250px;width: 250px;border:2px solid lightblue;margin-top:15px;"><br>   
                          <b>ELECTRICAL ENGINEERING</b>
                 </center></div>
                  </div>     
                   </div>
<div class="col-sm-12 main">
                   <div class="col-sm-1"></div>
                  
                   <div class="col-sm-10 text-justify">
                       <div class="text-center h2"><b style="color:blue"><span class="fa fa-home"></span></b>Home</div>
                     <p>This portal helps to store and manage college information like students record
                       teachers and staff profiles examination schedules,time table ,syllabus and curriculum,students performance
record school events/etc.This portal must have control over all the issues of a Collage .It should mainly deals with the students
administration ,admission academic results ,fee details ,etc.Only the administration for would veiw/edit the details can manage and update
their website in an easy cost effective manner,Admin considering their wide range of student information,extesive search area and the need to 
provide to a wide education application.This portal can be defined as a portal that store and presents material for online,training and
performance assessment <b>ToDAY's</b> education scenario is rapidly changing and demanding the system demands greater levels of student,faculty
members and staff member to have optimum use of resources.THIs project is useful for visitors college students & teachers.
visitor can get information of college,campus courses,etc.which help him to select the college using this application student can login and get notice
my profile information student can update personal information & upload his assignment.</p> 

                   </div>
                   <div class="col-sm-1"></div>
                   </div>
          
       
<div class="col-sm-12 vission">
                    <div class="col-sm-1"></div>
                   <div class="col-sm-10">
                    <div class="col-sm-6 ">
                            <div class="col-sm-12 a">
                                <div class="text-center"><h2 style="text-justify">our<span> vision</span></h2></div>
 The Website provides all the necessary details about the college including date and year of established . To 
provide all polytechnic students show case their hidden talent to other members of the college . Todays education
scenario is rapidly changing and demanding the system demands greater levels of communication between student 
and faculty members and staff member to have optimum use of resource.
                    </div>
                </div>
               <div class="col-sm-6">
                    <div class="col-sm-12 a">
                        <div class="text-color h2 text-center">our<span> mission</span></div>
<b><i>We use a combination of surveys ,focus group,and one-on-one interviews to gather information from faculty ,and 
staff members from institutions . After gathering requirements we have  to  decided many aims and object of Government
Polytechnic Mau.</i></b>
<ul>
<li> To provide anytime anywhere online learning .</li>
    <li>Enable knowledge sharing of  lower economies .</li>
<li>To provide true feedback by every students.</li>
<li>Event notification to student .</li>
<li>To provide information about training & placement.</li>
       </ul>
                    </div>
                </div>
                </div>
           
        <div class="col-sm-1"></div>
    </div>
 
            
        <div class="col-sm-12 ufooter">
          
            <div class="col-sm-4" style="color:white;text-align: center; ">
                <h3>partners</h3><br>
                Balmukund Chauhan<br>
                Mob.no 8112809757<br>
                <a href="https://mail.google.com/#inbox?compose=new">balmukundc9@gmail.com</a>
                <hr>
                Add Parters
                  <a href="#">Gmail</a>
                  <hr>
                  Add Parters
                     <a href="#">Gmail</a>
                     <hr>
                     
                     
            </div>
               <div class="col-sm-4">
                   <div class="col-sm-12 r">
                       <div>
                            
                            <a href="https://www.instagram.com/balmukund_chauhan_/"><span class="fa fa-facebook-square"></span></a>
                            <a href="http//www.twitter.com"><span class="fa fa-twitter-square"></span></a>   
                            <a href="https://www.youtube.com/@creativemind280"><span class="fa fa-youtube-play"></span></a>
                            <a href="https://www.linkedin.com/public-profile/settings?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_self_edit_contact-info%3BZ2vbWM1JS1eP4OnIenCyWA%3D%3D"><span class="fa fa-linkedin-square"></span></a>
                            
 
                       </div>
                   </div>
                   
               </div>
                   
                  <div class="col-sm-4 text-center p">
                      <div class="col-sm-12">
                      <b class="font-size:25px;">
                          <span class="fa fa-phone"></span>Contact</b><br>8112809757<br>
                          <a href="https://mail.google.com/#inbox?compose=new">balmukundc9@gmail.com</a></div>
                  </div>
                  </div>
    <?php include("MasterPage/footer.php") ?>
                 </div>
               </div>
          <!--enquiry-->
      
          <img src="images/enquiry.png" data-toggle="modal" data-target="#box" id="d"/> 
          <div class="modal fade" id="box">
              <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Enquiry Form</h4>
      </div>
      <div class="modal-body">
              <form action="code/enquiry.php" method="post">
                  <input type="text" class="form-control" name="name" placeholder="enter your name" required/>
                  <input type="email" class="form-control" name="email" placeholder="enter your email" required/>
                  <input type="text" class="form-control" name="mob" placeholder="enter your contact" required/>
                  <textarea name="massage" placeholder="enter your massage" class="form-control" required></textarea>
                  <input type="submit" value="submit" class="form-control btn btn-primary">
              </form>
      </div>
    </div>
    </div>
</div>
</body>
</html>

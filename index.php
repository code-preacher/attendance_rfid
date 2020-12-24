<?php
session_start();
if(isset($_POST['start'])){
  header("location:scan.php");
}
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title></title>
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!--   <meta http-equiv="refresh" content="30"> -->
      <link rel="stylesheet" href="css/bootstrap.min.css">  
      <link rel="stylesheet" type="text/css" href="css/style1.css">
        <script src="js/jquery-slim.min.js"></script>
<script src="js/popper.min.js"></script>

      <script src="js/bootstrap.min.js"></script>
      <style>
html {
height: 100%;
}

h1 {
font-size: 50px;
text-transform:uppercase;
font-family: "Times New Roman", Times, serif;
}
.linear-wipe {
text-align: center;
background: -webkit-gradient(linear, left top, right top, color-stop(20%, #FF3202), color-stop(40%, #FF6E02), color-stop(60%, #FF6E02), color-stop(80%, #FF3202));
background: linear-gradient(to right, #FF3202 20%, #FF6E02 40%, #FF6E02 60%, #FF3202 80%);
background-size: 200% auto;
color: #000;
background-clip: text;
text-fill-color: transparent;
-webkit-background-clip: text;
-webkit-text-fill-color: transparent;
-webkit-animation: shine 3s linear infinite;
animation: shine 1s linear infinite;
}
@-webkit-keyframes shine {
to {
background-position: 200% center;
}
}
@keyframes shine {
to {
background-position: 200% center;
}
}
</style>
   </head>
   <body>
      <nav class="navbar navbar-expand-lg navbar-light " style="background-color: black">
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
         </button>
         <div class="container">
            <a class="navbar-brand" href="#">
               <h2 class="linear-wipe">
               SIMULATION OF STUDENT ATTENDANCE <BR>MANAGEMENT SYSTEM USING RFID
               </h2>
            </a>
            <br><br><br>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
               <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                  <li class="nav-item active">
                     <a class="nav-link" href="#"></a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#"></a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link disabled" href="#"></a>
                  </li>
               </ul>
               <nav class="navbar navbar-light">
                  <form class="form-inline">
                     <!-- <a href="view_attendance.php"><input type="submit" class="btn btn-outline-success my-2 my-sm-0" value="Sign In"></a>-->
                     <a href="view.php" class="btn btn-outline-warning" style="color: #fff;">View all Attendance</a>
                       <a href="add-student.php" class="btn btn-outline-warning" style="color: #fff;">Add Student</a>
                         <a href="view-student.php" class="btn btn-outline-warning" style="color: #fff;">View Student</a>
                  </form>
               </nav>
            </div>
         </div>
      </nav>
      <div class="container">
      <div class="row">
      <div class="col-lg-6">
         <div id="clock">
            <div class="hour">
               <div class="min"></div>
               <div class="min"></div>
               <div class="min"></div>
               <div class="min"></div>
               <div class="min"></div>
            </div>
            <div class="hour">
               <div class="min"></div>
               <div class="min"></div>
               <div class="min"></div>
               <div class="min"></div>
               <div class="min"></div>
            </div>
            <div id="alarm"> </div>
            <div id="min"></div>
            <div id="hour"></div>
            <div id="sec"></div>
            <ol>
               <li></li>
               <li></li>
               <li></li>
               <li></li>
               <li></li>
               <li></li>
               <li></li>
               <li></li>
               <li></li>
               <li></li>
               <li></li>
               <li></li>
            </ol>
            <hr>
            <center>
               <div class="date">
                  <?php 
                     date_default_timezone_set("africa/lagos");
                      $time = date("h:i A",strtotime("+0 HOURS"));
                      $date = date("M-d-Y");
                      ?>
                  <strong style="font-size: 1.6em;"><?php echo  $date;?>&nbsp;&nbsp;<font style="color:#ffc107;">|</font>&nbsp;&nbsp; <span style="color: #ff6666;font-size: 1em;" id="tick2" class="timeh1"></strong>
            </center>
            </div>
         </div>
         <div class="col align-self-center">
            <div class="span10">
               <br>  <br>
               <!-- <div class="alert alert-warning hide alert-dismissible fade show" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  </div>-->
               <!--<div class="alert alert-warning hide"></div>-->
               <form id="register_form" novalidate  action="scan.php" method="POST">
                  <div class="card" style="border-top: 4px solid orange;border-bottom: 4px solid orange;border-radius: 4px;">
                     <h3 class="card-header">Attendance Switch</h3>
                     <div class="card-body">
                        <div class="input-group input-group-lg">
                           <span class="input-group-addon" id="sizing-addon1"><img src="icon/users.ico"></span>
                           <input type="submit" class="btn btn-warning btn-block btn-lg" name="start" value="Take Attendance" aria-describedby="sizing-addon1" required="" />
                        </div>
                        <br>
                    
               </form>
               </div>
               </div>
               <br>
              
               <?php
               if (!empty($_SESSION['msg'])) {
                       echo" <div class='alert alert-danger hide alert-dismissible fade show' role='alert'><strong>".$_SESSION['msg']."</strong>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>";
$_SESSION['msg']="";
               }
         
               ?>
            </div>
            <br>
            <!--<div class="alert alert-info hide alert-dismissible fade show" role="alert"><strong>All right Reserved @ 2018 By:Juniltoledo</strong>
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button>
               </div>-->
            <script  src="js/index.js"></script>
   </body>
   </div>
   </div>

</html>
<br><br>
<script>
   // <!--/. tells about the time  -->
                 function show2(){
                 if (!document.all&&!document.getElementById)
                 return
                 thelement=document.getElementById? document.getElementById("tick2"): document.all.tick2
                 var Digital=new Date()
                 var hours=Digital.getHours()
                 var minutes=Digital.getMinutes()
                 var seconds=Digital.getSeconds()
                 var dn="PM"
                 if (hours<12)
                 dn="AM"
                 if (hours>12)
                 hours=hours-12
                 if (hours==0)
                 hours=12
                 if (minutes<=9)
                 minutes="0"+minutes
                 if (seconds<=9)
                 seconds="0"+seconds
                 var ctime=hours+":"+minutes+":"+seconds+" "+dn
                 thelement.innerHTML=ctime
                 setTimeout("show2()",1000)
                 }
                 window.onload=show2
         //-->
          
           
</script> <!--/. Script where the format of the interface time,month,day and year relies -->

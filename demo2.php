
<?php
session_start();
?>
<?php
include("config.php");
?>
<html>
  <head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<style>
body {
  margin: 0;
background: url(1.jpg);
background-size: cover;

}


ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 15%;
  background-color: #f0f0f0;
  position: fixed;
  height: 100%;
  overflow: auto;
}

li a {
  font-family: Cursive;
  display: block;
  font-size: 20px;
  color: #000;
  padding: 8px 16px;
  text-decoration: none;
}

li a.active {
  
  font-size: 20px;
  background-color: powderblue;
  color: red;
}

li a:hover:not(.active) {
  font-size: 20px;
  background-color: #AFEEEE	;
  color: white;
}
#mySidenav a {
  position: fixed;
  left: -180px;
  transition: 0.3s;
  padding: 15px;
  width: 200px;
  text-decoration: none;
  font-size: 20px;
  color: white;
  border-radius: 0 5px 5px 0;
}
#mySidenav a:hover {
  left: 0;
}
#about {
  top: 20px;
  background-color:#f44336 ;
}

#blog {
  top: 80px;
  background-color: blue;
}

#projects {
  top: 140px;
  background-color: red ;
}

#contact {
  top: 200px;
  background-color: #555;
}

#test1 {
  top: 260px;
  background-color: green;
}
#test2 {
  top: 320px;
  background-color:#CD5C5C;
}
#test3 {
  top: 380px;
  background-color: #B22222;
}
#test4 {
  top: 440px;
  background-color: #FF1493;
}
#test5 {
  top: 500px;
  background-color: #D02090;
}
#test6 {
  top: 560px;
  background-color: #9400D3;
}

#test7 {
  top: 620px;
  background-color: #000000;
}

</style>
</head>


<body style=background-color:powderblue;>
<div id="mySidenav" class="sidenav">
  <a href="demo2.php" id="about">Dashboard<i class="fa fa-fw fa-home" style=" margin-left:85;"></i></a>
  <a href="attendace.php" id="blog">Attendance<i class="fa fa-fw fa-user" style=" margin-left:83;"></i></a>
  <a href="attendacereport.php" id="projects">Attendance Report<i class="fa fa-address-card" style=" margin-left:25;"></i> </a>
  <a href="editAttendance.php" id="contact">Update attendance<i class="fa fa-pencil-square-o" style=" margin-left:30;"></i> </a>
  
</div>

  


<div  style="margin-left:5%;padding:1px 16px;height:1000px;" >

    <header><center><h1><b>CISTRON SYSTEM PRIVATE LIMITED</b></h1></center></header>
    <center><img src ="img.png" width="100" height="100"></center>
    <label style = "font-size: 30px; color: brown; font-family: Cursive	 " ><center><p id="name"></p></center></label>
    <div class=row>
    <button style="width:150; height:150; border-radius:20%; color:red; margin-left:90; margin-top: 20" type="submit" id="attendance" onclick="attendance()"><img src ="attendacereport.png" width="60" height="60" ><br><br> Attendance</br></br></button>
    <button style="width:150; height:150; border-radius:20%; color:red; margin-left:90; margin-top: 20" type="submit" onclick="attendancereport()"><img src ="attendacereport.png" width="60" height="60" ><br><br> Attendance Report</br></br></button>
    <button style="width:150; height:150; border-radius:20%; color:red; margin-left:90; margin-top: 20" type="submit" onclick="edit()"><img src ="leave.png" width="60" height="60" ><br><br>Update attendance</br></br></button>
    
  <button style="width:150; height:150; border-radius:20%; color:red; margin-left:90; margin-top: 20" type="submit" onclick="logout()"><img src ="detail.png" width="60" height="60" ><br><br>Logout</br></br></button>
 
</div>



</div>


</body>
</html>
<script>  
         var uname= sessionStorage.getItem("name");
         var upass=sessionStorage.getItem("pass");
         document.getElementById("name").innerHTML=uname;
         document.getElementById("pass").innerHTML=upass;
function attendance() {
  window.location="http://localhost/demo/attendace.php";


}
function attendancereport(){
  window.location="http://localhost/demo/attendacereport.php";
}

function edit(){
  window.location="http://localhost/demo/editAttendance.php";
}


function logout(){
  window.location="http://localhost/demo/demo1.php";
}
 
    </script>
    

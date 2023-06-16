<?php
include('config.php');

$updateid=$_GET['update'];
$sql="SELECT * from attendance where id='$updateid'";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result)){
    $name=$row['name'];
    $text=$row['text'];

}

?>

<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  margin: 0;
  background: url(8.jpg);
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
  position: absolute;
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
<body style=background-color:powderblue;>
<div id="mySidenav" class="sidenav">
  <a href="demo2.php" id="about">Dashboard<i class="fa fa-fw fa-home" style=" margin-left:85;"></i></a>
  <a href="attendace.php" id="blog">Attendance<i class="fa fa-fw fa-user" style=" margin-left:83;"></i></a>
  <a href="attendacereport.php" id="projects">Attendance Report<i class="fa fa-address-card" style=" margin-left:25;"></i> </a>
  <a href="editAttendance.php" id="contact">Update attendance<i class="fa fa-pencil-square-o" style=" margin-left:30;"></i> </a>
</div>
<div  style="margin-left:5%;padding:1px 16px;height:1000px;" ><br>
<form action="updateAttendanceStore.php" method="POST">
    <center><label style="color:red; font-size:20px;"><b>Update Attendance<b></label><center><br>
    <input type='hidden' name='id' value='<?php echo $updateid ;?>'>
    <center><input style="color:Tomato;  padding: 10px ; width: 25% ; border: 2px solid green;" type="text" required placeholder="Name" id="name" name="name"  value='<?php echo $name ;?>'> </center><br>
    <center><input style="color:Tomato;  padding: 10px ;  width: 25% ; border: 2px solid green;"  id="text" name="text" value='<?php echo $text ;?>' placeholder="Present (or) absent"></center><br><br>
    <center><input type='submit' style='padding: 10px 50px 10px 50px ; background-color:red; color:white;  border-radius: 10%;' value='Submit'><center>
</form>
</div>
    </html>
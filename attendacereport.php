<?php
session_start();
include("config.php");


?>

<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  margin: 0;
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
  <a href="attendace.php" id="blog">Attendance<i class="fa fa-fw fa-wrench" style=" margin-left:83;"></i></a>
  <a href="" id="projects">Report<i class="fa fa-fw fa-user" style=" margin-left:115;"></i></a>
  <a href="#" id="contact">Leave Report<i class="fa fa-fw fa-envelope" style=" margin-left:63;"></i> </a>
  <a href="attendacereport.php" id="test1">Attendance Report<i class="fa fa-fw fa-wrench" style=" margin-left:20;"></i> </a>
  <a href="#" id="test2">Expense<i class="fa fa-fw fa-user" style=" margin-left:105;"></i> </a>
  <a href="#" id="test3">Expense Report<i class="fa fa-fw fa-envelope" style=" margin-left:45;"></i> </a>
  <a href="#" id="test4">Sales Report<i class="fa fa-fw fa-wrench" style=" margin-left:70;"></i> </a>
  <a href="#" id="test5">Quote Report<i class="fa fa-fw fa-user" style=" margin-left:65;"></i> </a>
  <a href="#" id="test6">Sales Report<i class="fa fa-fw fa-envelope" style=" margin-left:70;"></i> </a>
  <a href="#" id="test7">Quote Report<i class="fa fa-fw fa-user" style=" margin-left:65;"></i> </a>

  
</div>
<div  style="margin-left:5%;padding:1px 16px;height:1000px;" ><br>
<?php
$sql="SELECT * from attendance order by id DESC";
$result=mysqli_query($con,$sql);
?>
<table width='100%' border=0 style="color:black;  background-color:white;" height='10%'>

<center><label style="color:red; font-size:40px"><b>Attendance Report</b></label></center><br>

<td style="color:black; font-size:30px; background-color:red;"><center><b>Name</b></center></td>
<td style="color:black; font-size:30px; background-color:red;"><center><b>Attendance</b></center></td>
<td style="color:black; font-size:30px; background-color:red;"><center><b>Delete</b></center></td>


</tr>
    <?php
    while($res=mysqli_fetch_array($result)){
        echo"<tr>";
        echo"<td style='color:blue; font-size:20px; background-color:MistyRose'><center>".$res['name']."</center></td>";
        echo"<td style='color:blue; font-size:20px; background-color:MistyRose'><center>".$res['text']."</center></td>";
        $id=$res['id'];
        echo"<td style=' background-color:MistyRose' >
        <a href='deleteattendance.php?del=$res[id]'>
        <center><button name='id' value><i class='fa fa-trash'></i></button></td></a></center></td>";
    }
    ?>
    </table>





</div>
<script>
    function delete(){
       console.log("de");
    }
    </script>




    </html>
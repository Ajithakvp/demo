<?php
include("config.php");
session_start();

?>
<link rel="stylesheet" href="modelcss.css">

<html>
    <style>
        body {
  margin: 0;
background: url(8.jpg);
background-size: cover;

}
        .container { 
        
        width: 400px;
        padding: 25px; 
        background-color: snow;
        margin: 15% 25% 0% 35%;
        border-radius: 10%;
        
    } 
    </style>

<body style="background-color:powderblue;">       
<div class="container">
    <form action="login.php" method="POST">
<center><label><b>Login Page</b></label></center>
  <label for="username" style="margin:10px 10px 10px 35px;">Username:</label><br>
  <center><input style="color:Tomato;  padding: 10px ; width: 85%  ;   
        border: 2px solid green;" type="text" required placeholder="Username" id="empid" name="empid" > </center><br>
   <label  style="margin:10px 10px 10px 35px;">Password:</label><br>
   <center><input style="color:Tomato;  padding: 10px ;  width: 85% ; border: 2px solid green;" type="password" id="password" name="password" placeholder="password"></center><br><br>
  <center><input type="submit" style=" padding: 10px 50px 10px 50px;  background-color:red; color:white;  border-radius: 10%;" value="Submit" ><center></div>
</form>


<!-- <script>
function data(){

    uname=document.getElementById("username").value;
    password=document.getElementById("pwd").value;

    username="Cistron"
    pass="123"

    if (uname == ""){
        alert("Please enter the user name");
    }else if(password == ""){
        alert("Please enter the Password");
    }else if(uname==username && password==pass){
        alert(uname+":"+password);
        sessionStorage.setItem("name",uname);
        sessionStorage.setItem("pass",password);
        window.location="http://localhost/demo/demo2.php";
     }  else{
        alert("Incorrect username and Password");
    }

}
</script> -->



</body>

</html>


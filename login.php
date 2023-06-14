<?php
include("config.php");
$empid=$_POST['empid'];
$password=$_POST['password'];
$sql="SELECT * from login where empid='$empid' AND password='$password'";
$result=mysqli_query($con,$sql);
if(mysqli_fetch_array($result)>0){
    echo '<script type="text/javascript"> 
    window.location="http://localhost/demo/demo2.php";
     </script>';
}else{
    echo $sql;

    echo"out";

}
?>
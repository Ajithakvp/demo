
<?php
include("config.php");


$name=$_POST['name'];
$text=$_POST['text'];
$sql="INSERT into attendance(name,text) VALUE('$name','$text')";
$result=mysqli_query($con,$sql);
if($result){
    echo '<script type="text/javascript"> 
    alert("Inserted");
    window.location="http://localhost/demo/attendace.php";
     </script>';
}else{
    echo '<script type="text/javascript"> 
    alert("Not Inserted");
     </script>';
}



?>
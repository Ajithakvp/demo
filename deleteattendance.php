
<?php
include("config.php");


$id=$_GET['del'];
$sql = "DELETE FROM attendance WHERE id=".$id;
$result=mysqli_query($con,$sql);
if($result){
    echo '<script type="text/javascript"> 
    alert("Deleted");
    window.location="http://localhost/demo/attendacereport.php";
     </script>';
}else{
    echo '<script type="text/javascript"> 
    alert(Not Deleted");
     </script>';
}



?>
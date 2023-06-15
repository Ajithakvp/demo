<?php

include('config.php');
$id=$_POST['id'];
$name=$_POST['name'];
$text=$_POST['text'];


$sql = "update attendance set name='$name', text='$text'where id='$id'";
 $result = mysqli_query($con,$sql) or die("Error: " . mysqli_error($con));
 if ($con->query($sql) === TRUE) {
    echo '<script type="text/javascript"> 
    alert("Updated");
    window.location="http://localhost/demo/editAttendance.php";
     </script>';
}else{
    echo '<script type="text/javascript"> 
    alert(Not Update");
     </script>';
}

?>
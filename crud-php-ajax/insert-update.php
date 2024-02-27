<?php
$conn = mysqli_connect("localhost","root","","crud");

$Eid = mysqli_real_escape_string($conn, $_POST['Eid']);

$fname = mysqli_real_escape_string($conn, $_POST['fname']);




$sql = "UPDATE students SET student_name = '{$fname}' WHERE id = {$Eid} "; 
if(mysqli_query($conn,$sql)){
    echo 1;
}else{
    echo 0;
}


?>
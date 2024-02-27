
<?php

$conn = mysqli_connect("localhost","root","","crud");

$name = mysqli_real_escape_string($conn, $_POST['sname']);

$sql = "INSERT INTO students (student_name) VALUES ( '{$name}' ) ";
if(mysqli_query($conn,$sql)){
    echo 1;
}else{
    echo 0;
}
<?php

$id = $_POST['id'];

$conn = mysqli_connect("localhost","root","","crud") or die("Connection Failed");

$sql = "SELECT * FROM students WHERE id = {$id}";
$result = mysqli_query($conn, $sql) or die("SQL Query Failed.");
$output = "";
if(mysqli_num_rows($result) > 0 ){
while($row = mysqli_fetch_assoc($result)){
   $output = "<tr>
    <td>StudentName </td>
    <td><input type='text' id='fname' value='{$row["student_name"]}'>
        <input type='text' id='Eid' hidden value=' {$row["id"]} '>
    <td>
</tr>

<tr>
    <td></td>
    <td> <input type='submit' id='update-id' value='update'> </td>
</tr>";
}
 mysqli_close($conn);

    echo $output;

}else{
    echo "<h1> No Record Found </h1>";
}

?>
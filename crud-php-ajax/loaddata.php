<?php

$conn = mysqli_connect("localhost","root","","crud") or die("Connection Failed");

$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql) or die("SQL Query Failed.");
$output = "";
if(mysqli_num_rows($result) > 0 ){

$output = '<table border="1px" cellspacing="0" width="100%" cellpadding="10px">
<tr>
    <th>id</th>
    <th>Student_name</th>
    <th>Edite</th>
    <th>Delete</th>
</tr>';
   while($row = mysqli_fetch_assoc($result)){
 $output .= "<tr>
    <td align='center'>{$row['id']}</td>
    <td>{$row['student_name']} </td>
    <td align='center'><button class='edit-btn' data-eid = '{$row['id']}' '> Edite </button></td>
    <td align='center'><button class='delete-btn' data-id = '{$row['id']}' '> Delete </button></td>
    </tr>";
   }
$output .='</table>';

 mysqli_close($conn);

 echo $output;

}else{
    echo "<h1> Record Not Avalible </h1>";
}
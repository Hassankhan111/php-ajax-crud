<?php

 $seach_terms = $_POST['search'];
 $conn = mysqli_connect("localhost","root","","crud") or die("connection feild");

 $sql = "SELECT * FROM students WHERE student_name LIKE '%{$seach_terms}%' ";
 $res = mysqli_query($conn,$sql) or die("query feild");
 
 $output = "";
if(mysqli_num_rows($res) > 0){
   $output ='<table border="1px" cellspacing="0" width="100%" cellpadding="10px">
    <tr>
        <th>id</th>
        <th>student_name</th>
        <th>Edite</th>
        <th>Delete</th>
    </tr>';
    while($row = mysqli_fetch_assoc($res)){
    $output .= "<tr>
    <td>{$row['id']}</td>
    <td>{$row['student_name']}</td>
    <td align='center'><button class='edit-btn' data-id = '{$row['id']}' '> Edite </button></td>
    <td align='center'><button class='delete-btn' data-id = '{$row['id']}' '> Delete </button></td>
    </tr>";
   }
   $output .= "</table>";

    mysqli_close($conn);

    echo $output;
 }else{
    echo "<h1> Record Not Found </h1>";
 }

?>
<?php


// saving data to table

$stu_id = $_POST['sid'];
$stu_name = $_POST['sname'];
$stu_address = $_POST['saddress'];
$stu_class = $_POST['sclass'];
$stu_phone = $_POST['sphone'];


// making connection
$conn = mysqli_connect("localhost","root","","my_first_db") or die("Connection Failed");

$sql = "UPDATE students SET s_name = '{$stu_name}', s_address = '{$stu_address}', s_class = '{$stu_class}', s_phone = '{$stu_phone}' WHERE sid = '{$stu_id}'";

$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");


// redirection to home page after updating data
header("Location: http://localhost/Git/crud-read-data/index.php");


// connection close
mysqli_close($conn);
?>
<?php


// saving data to table

$stu_id = $_POST['sid'];
$stu_name = $_POST['sname'];
$stu_address = $_POST['saddress'];
$stu_class = $_POST['sclass'];
$stu_phone = $_POST['sphone'];


// making connection
$conn = mysqli_connect("localhost","root","","my_first_db") or die("Connection Failed");

$sql = "UPDATE student SET sname = '{$stu_name}', saddress = '{$stu_address}', sclass = '{$stu_class}', sphone = '{$stu_phone}' WHERE sid = {$stu_id}";

$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");


// redirection to home page after saving data
header("Location: http://localhost/Git/crud-read-data/index.php");


// connection close
mysqli_close($conn);
?>
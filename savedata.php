<?php


// saving data to table
echo $stu_name = $_POST['sname'];
echo $stu_address = $_POST['saddress'];
echo $stu_class = $_POST['class'];
echo $stu_phone = $_POST['sphone'];


// making connection
$conn = mysqli_connect("localhost","root","","my_first_db") or die("Connection Failed");

$sql = "INSERT INTO students(s_name,s_address,s_class,s_phone) VALUES ('{$stu_name}', '{$stu_address}', '{$stu_class}','{$stu_phone}')";

$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");


// redirection to home page after saving data
header("Location: http://localhost/Git/crud-read-data/index.php");


// connection close
mysqli_close($conn);
?>
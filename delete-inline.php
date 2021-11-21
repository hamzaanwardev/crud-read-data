<?php


$stu_id = $_GET['id'];

$conn = mysqli_connect("localhost","root","","my_first_db") or die("Connection Failed");

$sql = "SELECT * FROM students JOIN studentsclass WHERE students.s_class = studentsclass.cid";

$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

?>
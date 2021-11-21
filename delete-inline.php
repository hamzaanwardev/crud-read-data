<?php


$stu_id = $_GET['id'];

include 'config.php';

$sql = "DELETE FROM students WHERE sid = {$stu_id}";

$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header ("Locattion: http//localhost/Git/crud-read-data/index.php");

?>
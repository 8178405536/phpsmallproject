<?php
include ('config.php');
$id = $_GET['id'];

$sql = "DELETE FROM ajay_table WHERE id = $id";
$result = mysqli_query($conn,$sql) or die("Error");

header("location: dashbord.php");

?>
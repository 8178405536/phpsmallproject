


<?php
include ("config.php");
$id=$_GET['id'];

$sql=mysqli_query($conn,"DELETE FROM repeat_data  WHERE id =$id ")

or die(mysqli_error());
header("location:dashbord.php");
?>



?>


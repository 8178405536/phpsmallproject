




<?php

include('config.php');
if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $password =$_POST['password'];

    $sql="INSERT INTO password (name,password)
    value('$name','$password')";
    $query =mysqli_query($conn,$sql);
    header('dashboard.php');
}
?>



<?php
include ('config.php');

if (isset($_POST['update'])) {
    $id=$_GET['id'];
    $fname=$_POST['first_name'];
    $lname=$_POST['last_name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $address=$_POST['address'];

    $result1 = mysqli_query($conn,"UPDATE  ajay_table SET first_name='$fname',last_name='$lname',phone= '$phone',email= '$email', address= '$address' WHERE id= $id");
    header("location: del.php");
}

?>


<html>
<head>
<title>Update Employee Data</title>
</head>
<body>
    
<?php
    $id = $_GET['id'];
    $sqli = mysqli_query($conn,"SELECT * FROM ajay_table WHERE id=$id");
    while($row1=mysqli_fetch_assoc($sqli)){
?>    
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
<a href="retrieve.php">Employee List</a>
</div>

First Name: <br>
<input type="text" name="first_name" class="txtField" value="<?php echo $row1['first_name']; ?>">
<br><br>
Last Name :<br>
<input type="text" name="last_name" class="txtField" value="<?php echo $row1['last_name']; ?>">
<br><br>
phone:<br>
<input type="text" name="phone" class="txtField" value="<?php echo $row1['phone']; ?>">
<br><br>
Email:<br>
<input type="text" name="email" class="txtField" value="<?php echo $row1['email']; ?>">
<br><br>
address:<br>
<input type="text" name="address" class="txtField" value="<?php echo $row1['address']; ?>">
<br><br>
<input type="hidden" value="<?php echo $row1['id'];?>">
<input type="submit" name="update" value="update" class="buttom">

</form>
<?php } ?>
</body>
</html>



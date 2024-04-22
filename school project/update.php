<?php
include('config.php');

if(isset($_POST['update'])){
    $id=$_GET['id'];
    $oldpassword = $_POST['oldpassword'];
    $newpassword = $_POST['newpassword'];
  

$sql =mysqli_query($conn,"UPDATE password SET oldpassword='$oldpassword',newpassword='$newpassword'
WHERE id= '$id'");
    header("location: dashbord.php");
    

    $sql= mysqli_query($conn,"UPADTE")
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
</head>
<body>
    <h1> welcome admin dashboard update query </h1>
    
    <?php
    $id = $_GET['id'];
    $sqli = mysqli_query($conn,"SELECT * FROM pass_update WHERE id=$id");

    while($row1=mysqli_fetch_assoc($sqli)){
?>   
   
    <form method="post" action="">
  
    <label for="name">old password: </label>
    <input type="text" name="oldpassword"  value="<?php echo $row1['name']; ?>"><br><br>
    
    <label for="email">new password </label>
    <input type="text" name="newpassword"  value="<?php echo $row1['email']; ?>"><br><br>


    <input class="btn btn-info" type="submit" name="change" >
    

    </form>
<?php  }  ?>
</body>
</html>
 
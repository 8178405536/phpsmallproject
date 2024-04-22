<?php
include('config.php');

if(isset($_POST['update'])){
    $id=$_GET['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    
   

$sql =mysqli_query($conn,"UPDATE repeat_data SET name='$name',email='$email'
WHERE id= '$id'");
    header("location: dashbord.php");
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
    <h1>  update  password </h1>
    
    <?php
    $id = $_GET['id'];
    $sqli = mysqli_query($conn,"SELECT * FROM repeat_data WHERE id=$id");
    while($row1=mysqli_fetch_assoc($sqli)){
?>   
   
    <form method="post" action="">
  
    <label for="name">Name: </label>
    <input type="text" name="name"  value="<?php echo $row1['name']; ?>"><br><br>
    
    <label for="email">email: </label>
    <input type="text" name="email"  value="<?php echo $row1['email']; ?>"><br><br>


    

    <input class="btn btn-info" type="submit" name="update" >
    

    </form>
<?php  }  ?>
</body>
</html>
 
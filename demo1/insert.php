


<?php


include('config.php');

if(isset($_POST['submit'])){

    $name =$_POST['name'];
    $email =$_POST['email'];
   
   

     $sql = "INSERT into  repeat_data (name,email)
     values('$name','$email')"  ;

     $result =mysqli_query($conn,$sql);

     header('location: dashbord.php');
     

}

?> 

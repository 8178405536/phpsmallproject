<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create form page</title>
</head>
<body>
   
    <h1> welcome   </h1>
   
    <form method="post" action="insert.php">
  
    <label for="name">Name: </label>
    <input type="text" name="name"  ><br><br>
   
     
    
    <label for="password">password</label>
    <input type="password" name="password"  ><br><br>
    


    <input class="btn btn-info" type="submit" name="submit" ><br><br>
    
    

    </form>
    <a href="update.php?id=<?php echo $row['id'];?>" class="btn btn-info" name="update" > change password
                
                </a>
                
    
  
</body>
</html>
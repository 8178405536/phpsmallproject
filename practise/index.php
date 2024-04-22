




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  
    <div class="box"><h1> Register form for Vender</h1>
    
        <div class="col-md-sm-6"> 
          
          <form method="post" action="">
            <label for="">First  Name :</label>
            <input type="text" name="fname" ><br><br>
            <label for="">Last  Name :</label>
            <input type="text" name="lname" ></br></br>
            <label for="">phone number : </label>
            <input type="number" name="phone" ></br></br>
            <label for="">Email  : </label>
            <input type="text" name="email" ></br></br>
            <label for="">Address :</label>
            <input type="textarea" name="address" ></br></br>
            <a href="del.php">
            <input class="btn btn-info" type="submit" name="submit" >
          
      
    </a>
    
           
          </form>
        </div>
        

        
    </div>

    <div class="box"><h1>  user name  detail show</h1>
    
    <table class="table">
  <thead>
    <tr>
    <th scope="col">S.No</th>      
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    
  <?php
    include ('config.php');
            

            $sql = mysqli_query($conn,"SELECT * FROM ajay_table order by id");

            $i=1;
            if(mysqli_num_rows($sql)>0){

              while($row=mysqli_fetch_assoc($sql)){ 
              
          ?>
          <tr>
            <td><?= $i++;?></td>
            <td><?php echo $row['first_name'];?></td>
            <td> <?php echo $row['last_name'];?></td>
            
            <td><?php echo $row['phone'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['address'];?></td>
            <td>
                <a href="delete.php?id=<?php echo $row['id'];?>" class="btn btn-warning" name="delete" >Delete 
                
                </a>
               
            </td>
          </tr>
          <?php } }?>

   
  </tbody>
</table>

        
    </div>
    
    


   
    
</body>
</html>
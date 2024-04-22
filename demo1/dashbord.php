
 
<?php

include ("config.php");
 if(isset($_POST['filter_btn'])){
  $value_filter=$_POST['filter_value'];
 $query="SELECT * FROM repeat_data WHERE CONCAT(name,id) LIKE '%$value_filter%' ";
$query_run=mysqli_query($conn,$query);

 if(mysqli_num_rows($query_run)>0){
 while($row6=mysqli_fetch_array($query_run))    
 { ?>
 <a href="dashboard.php?Action=Show&id=<?php echo $row6['id'];?>"><?php echo $row6['name'];?></a>
 <?php
 }
   }
else{
 echo "No Record Found..!";
   }
   }                                        
  ?>   






   



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> dashboard</title>

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</head>
<body>


<h1 class="">  All detail Show </h1>


 <form class="row g-3 "  method="post" action="dashbord.php">
 
  <div class="col-auto">
    
    <input type="text" name="filter_value" class="form-control " placeholder="Search name" >
  </div>
  <div class="col-auto">
  <button type="submit " name="filter_btn" class="btn btn-primary">Search</button> 
  </div>
</form> 






<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
     
      <!-- <th scope="col">phone</th> -->
      <th scope="col">Delete</th> 
      <th scope="col">update</th>
      <!-- <th scope="col">address</th> -->
      

    </tr>

  </thead>
  <tbody>
 


  <?php

include('config.php');
$i=1;
$sql = mysqli_query($conn,"SELECT * FROM repeat_data order by id");
if(mysqli_num_rows($sql)>0){
  while($row=mysqli_fetch_assoc($sql)){ 
?>
    <tr>
      <td scope="row"><?php echo $i++;?></td>

      <td><?php  echo $row['name'];?></td>

      <td> <?php  echo $row['email'];?></td>

      <!-- <td>phone</td> -->

      <td> <a href="delletedemo.php?id=<?php echo $row['id'];?>" class="btn btn-warning" name="delete" >Delete  </a> 
                </td>
            <td>
                <a href="update.php?id=<?php echo $row['id'];?>" class="btn btn-info" name="edit" >change
                
                </a>
               
            </td>
           


    
   
    

    <?php } }?>
    </tr>
  </tbody>
</table>
  </div>

</body>
</html>
<!-- <?php 
    include ('config.php');

    


    if(isset($_POST['submit'])){  
        $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];     

        //$sql = mysqli_query($conn,"INSERT INTO ajay_table first_name, last_name, phone, email, address VALUES ($fname,$lname,$phone,$email,$address)");
        $query = mysqli_query($conn,("INSERT INTO ajay_table ('first_name','last_name','phone','email','address')
                                      VALUES ($fname, $lname , $phone,$email,$address)");
    }
 
?>
 -->



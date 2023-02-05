<?php      
    include('connection.php');  
    $username = $_POST['exampleInputEmail1'];  
    $password = $_POST['exampleInputPassword1'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "insert into login set username = '$username' ,password = '$password'";  
        $result = mysqli_query($con, $sql); 

       
?>  
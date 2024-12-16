<?php
include "../config/conn.php";

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users(username,Email,Password) VALUES ('$username','$email','$password')";

    $result = $conn->query($sql);
    
   if($result->num_rows > 0){
    echo $conn->error;
   }else{
    header('location:../views/AdminDetails.php');
   }
}

?>
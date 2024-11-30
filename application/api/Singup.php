<?php
include "../config/conn.php";

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO students (Name,email,password) VALUES ('$name','$email','$password')";

    $result = $conn->query($sql);

   if($result->num_rows > 0){
    echo $conn->error;
   }else{
    header('location:../views/login.php');
   }

}
?>
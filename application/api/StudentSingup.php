<?php
include "../config/conn.php";

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $Phone = $_POST['Phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO students (Name,phone,email,password) VALUES ('$name','$Phone','$email','$password')";

    $result = $conn->query($sql);
    
   if($result->num_rows > 0){
    echo $conn->error;
   }else{
    header('location:../views/Student_Login.php');
   }
}

?>
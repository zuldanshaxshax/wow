<?php
include "../config/conn.php";

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $Phone = $_POST['Phone'];
    $Address = $_POST['Address'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO teacher (Name,phone,Address,email,password) VALUES ('$name', '$Phone','$Address','$email','$password')";

    $result = $conn->query($sql);

   if($result->num_rows > 0){
    $error = $conn->error;
    echo $error;
   }else{
    header('location:../views/Teacher_page.php');
   }
}

?>
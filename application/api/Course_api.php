<?php

include '../config/conn.php';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $price = $_POST['price'];

    $sql = "INSERT INTO course (CourseName,Price) VALUE ('$name','$price')";

    $result = $conn->query($sql);
    
    if(!$result){
     echo $conn->error;
    }else{
     header('location:../views/Course_page.php');
    }
}


?>
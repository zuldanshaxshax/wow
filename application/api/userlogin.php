<?php

include '../config/conn.php';

if(isset($_POST['submit'])){

    $email = $_POST['email'];
    $pass = $_POST['password'];

    $sql = "SELECT * FROM users where  email = '$email' and password = '$pass'";

    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    if($count == 1){
        header('location:../views/Admin.php');
    }else{
        echo '<script>
        window.location.href = "../views/userlogin.php";
        alert("Login Failed. invalid Email And password !!");
         window.location.href = "../views/userlogin.php";
        </script>';
    }

    
}



?>
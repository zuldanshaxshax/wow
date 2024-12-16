<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choose page</title>
    <style>
        .container{
            height: 100vh;
            align-items: center;
            justify-content: center;
            display: flex;
        }
        .con{
            width: 300px;
            height: 300px;
            background-color: gray;
            box-shadow: 0 4px 10px rgba(0,0,0.3);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 30px;
            border-radius: 10px;
        }
        .con a{
            width: 90%;
            height: 30px;
            background: #fff;
            text-align: center;
            padding-top: 10px;
            text-decoration: none;
            color: #000;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            border-radius: 5px;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="con">
            <a href="courses.php">Student</a>
            <a href="TeacherSingup.php">Teacher</a>
            <a href="userlogin.php">Admin</a>
        </div>
    </div>
    <script src="../../js/main.js"></script>
</body>
</html>
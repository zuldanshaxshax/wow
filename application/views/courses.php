<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E learn</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/css/all.min.css" integrity="sha512-9xKTRVabjVeZmc+GUW8GgSmcREDunMM+Dt/GrzchfN8tkwHizc5RP4Ok/MXFFy5rIjJjzhndFScTceq5e6GvVQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <nav>
        <div class="logo">
            <i class="fa-brands fa-codepen"></i>
            <h1>E-learn</h1>
        </div>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="courses.php">Courses</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="">Contact</a></li>
        </ul>
        <div class="btns">
            <button id="signin"><a href="login.php">singin</a></button>
        </div>    
    </nav>

    <div class="courses" id="courses">
        <h2>Courses</h2>
        <div class="row">
            <div class="col-courses">
                <div class="image">
                    <img src="images/javascript.png" alt="">
                </div>
                <span>JavaScript basic</span> <br>
                <form action="" method="post">
                <button id="course"><a href="SignUp.php" id="course">Inrolment</a></button>
                </form>
            </div>

            <div class="col-courses">
                <div class="image">
                    <img src="images/react.png" alt="">
                </div>
                <span>React-js basic</span> <br>
                <form action="" method="post">
                <button id="course"><a href="SignUp.php" id="course">Inrolment</a></button>
                </form>
            </div>

            <div class="col-courses">
                <div class="image">
                    <img src="images/php.jpeg" alt="">
                </div>
                <span>php basic</span> <br>
                <form action="" method="post">
                <button id="course"><a href="SignUp.php" id="course">Inrolment</a></button>
                </form>
            </div>
        </div>
    </div>
    
    <script src="../../js/main.js"></script>
</body>
</html>
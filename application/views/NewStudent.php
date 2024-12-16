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
            <li><a href="">Home</a></li>
            <li><a href="">Courses</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Contact</a></li>
        </ul>
        <div class="btns">
            <button id="signin"><a href="#">singin</a></button>
        </div>
    </nav>
    <div class="form-container">
        <form action="../api/StudentSingup.php" method="post">
            <h3>Register Now</h3>
            <input type="text" name="name"  required placeholder="enter your name">
            <input type="text" name="Phone" required placeholder="enter your Phone">
            <input type="email" name="email" required placeholder="enter your email">
            <input type="password" name="password" required placeholder="enter your password">
            <input type="submit" name="submit" value="Register Now" class="form-btn">
            <p>already have an account? <a href="Student_Login.php">Login Now</a></p>
        </form>
    </div>
    <script src="../../js/main.js"></script>
</body>
</html>
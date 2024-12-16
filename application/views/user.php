
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
    
    <div class="form-container">
        <form action="../api/user.php" method="post">
            <h3>Login Now</h3>
            <input type="text" name="username" required placeholder="enter your Username">
            <input type="email" name="email" required placeholder="enter your email">
            <input type="password" name="password" required placeholder="enter your password">
            <a href="#showCourse"><input type="submit" name="submit" value="Login Now" class="form-btn"></a>
            <p>Don't have an account? <a href="TeacherSingup.php">Register Now</a></p>
        </form>
    </div>

    <script src="../../js/main.js"></script>
</body>
</html>
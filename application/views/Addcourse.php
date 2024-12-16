<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>File Upload</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="form-container">
        <form action="../api/Course_api.php" method="post">
            <h3>Course Register Now</h3>
            <input type="text" name="name" required placeholder="Course Name">
            <input type="text" name="price" required placeholder="0.00">
            <input type="submit" name="submit" value="Register Now" class="form-btn">
            <p>already have an account? <a href="Teacher_SingIn.php">Login Now</a></p>
        </form>
    </div>
</body>
</html>

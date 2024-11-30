<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>services</title>
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


    <!-- end header -->
    <div class="services">
        <h2>Services</h2>
        <div class="row">
            <div class="col-service">
                <i class="fa-solid fa-globe"></i>
                <h2>Synchoronize</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil neque tenetur veritatis sequi iure,</p>
                <a href="courses.php"><button type="submit" value="read More">read More</button></a>
            </div>
            <div class="col-service">
                <i class="fa-solid fa-globe"></i>
                <h2>Asynchoronize</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil neque tenetur veritatis sequi iure,</p>
                <a href="courses.php"><button type="submit" value="read More">read More</button></a>
            </div>
            <div class="col-service">
                <i class="fa-solid fa-globe"></i>
                <h2>Blended</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil neque tenetur veritatis sequi iure,</p>
                <a href="courses.php"><button type="submit" value="read More">read More</button></a>
            </div>
        </div>
    </div>

    <style>

        .services{
            height: 100vh;
        }
        .services h2{
            text-align: center;
            font-size: 36px;
            font-weight: 600;
            padding-top: 5px;
        }
        
        .col-service{
            width: 300px;
            min-height: 300px;
            background-color: #cfc9c2;
            border-radius: 8px;
            text-align: center;
        }
        .col-service i{
            font-size: 35px;
            padding-top: 15px;
            padding-bottom: 15px;
            color: rgb(46, 143, 46);
        }
        .col-service h2{
            font-size: 28px;
            padding-top: 20px;
        }
        .col-service p{
            padding-top: 10px;
            color: gray;
            font-size: 16px;
            
        }
        
        .col-service button{
            padding: 6px 14px;
            border-radius: 10px;
            outline-color: rgb(187, 159, 106);
            margin-top: 30px;
            border: none;
            cursor: pointer;
        }
        .all{
            display: flex;
            justify-content: space-around;
        }
        
        
        
            </style>
    
</body>
</html>
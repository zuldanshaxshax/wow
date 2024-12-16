<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Teacher Profile</title>
  <style>
    *{
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    }
    .header{
      width: 100%;
      height: 80px;
      background-color: rgb(175, 174, 174);
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 0 10%;
    }
    .header ul{
      display: flex;
      list-style: none;
      gap: 20px;
    }
    .header ul li a{
      color: aliceblue;
      font-size: 20px;
      text-decoration: none;
    }
    .header .name{
      width: 30px;
      height: 30px;
      background-color: aliceblue;
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 30px;
      border-radius: 50%;
    }
    .sidebar {
  width: 250px;
  background-color: #2c3e50;
  color: white;
  padding: 20px;
  box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
}

.sidebar h2 {
  text-align: center;
}

.sidebar ul {
  list-style: none;
  padding: 0;
}

.sidebar ul li {
  margin: 20px 0;
}

.sidebar ul li a {
  color: white;
  text-decoration: none;
  display: block;
  padding: 10px;
  border-radius: 5px;
}

.sidebar ul li a:hover {
  background-color: #34495e;
}

/* Main Content */
.main-content {
  flex: 1;
  background-color: #ecf0f1;
  padding: 20px;
}

.header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background-color: #3498db;
  color: white;
  padding: 10px 20px;
  border-radius: 5px;
}

.header .user-info {
  display: flex;
  align-items: center;
}

.header .avatar {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  margin-right: 10px;
}

/* Cards */
.cards {
  display: flex;
  gap: 20px;
  margin: 20px 0;
}

.card {
  flex: 1;
  background-color: white;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  text-align: center;
}

.card h3 {
  margin-bottom: 10px;
}

/* Charts */
.charts {
  display: flex;
  gap: 20px;
}

.chart {
  flex: 1;
  background-color: white;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.chart-placeholder {
  height: 200px;
  background-color: #bdc3c7;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #2c3e50;
  font-size: 16px;
  border-radius: 5px;
}
.mute{
  display:flex;
  justify-content: space-between;
}
/* General Styles */

header {
    background-color: #6200ea;
    color: white;
    padding: 1rem 0;
    text-align: center;
}

main {
    padding: 2rem;
}



/* Table Styles */
table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 2rem;
}

/* Basic Table */
.basic-table th, .basic-table td {
    padding: 10px;
    border: 1px solid #ddd;
}

/* Striped Table */
.striped-table th, .striped-table td {
    padding: 10px;
    border: 1px solid #ddd;
}

.striped-table tbody tr:nth-child(odd) {
    background-color: #f9f9f9;
}

/* Bordered Table */
.bordered-table th, .bordered-table td {
    padding: 10px;
    border: 2px solid #333;
}

.bordered-table th {
    background-color: #6200ea;
    color: white;
}

/* Footer */


footer {
            background-color: #4CAF50;
            color: white;
            text-align: center;
            padding: 1rem;
            font-size: 1rem;
        }
  </style>
</head>
<body>
  <?php
    include "../config/conn.php";
    $sql = "SELECT * from teacher ";
      $result = $conn->query($sql);
      $name = '';
      $row = $result->fetch_assoc();
        $name .= "<h1>" . $row['Name'] . "</h1>";
      
        ?>
        <header class="header">
      <h1>Welcome, <?php echo  $row['Name']  ?>!</h1>
      <div class="user-info">
        <img src="user.jpg" alt="User Avatar" class="avatar">
        <span>John Doe</span>
      </div>
    </header>
    <div class="mute">
    <aside class="sidebar">
    <h2>My Dashboard</h2>
    <nav>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="Course_page.php">Courses</a></li>
        <li><a href="#">Reports</a></li>
        <li><a href="Teacher_SingIn.php">Logut</a></li>
      </ul>
    </nav>
  </aside>
   

  <!-- Main Content -->
  <main class="main-content">
    

    <section class="cards">
      <div class="card">
        <h3>Total Sales</h3>
        <p>$25,000</p>
      </div>
      <div class="card">
        <h3>New Users</h3>
        <p>1,234</p>
      </div>
      <div class="card">
        <h3>Page Views</h3>
        <p>5,678</p>
      </div>
    </section>


            
</main>
  </div>
  
  <footer>
        &copy; 2024 E-Learning Platform. All rights reserved.
    </footer>
</body>
</html>
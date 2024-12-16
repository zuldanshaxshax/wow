<?php include "header.php"; ?>
  <?php include "sidebar.php"; ?>
  <?php include "head.php"; ?>
  <?php include "../config/conn.php"; ?>

    <main class="content">
    <div class="container-fluid p-0">

            <h1 class="h3 mb-1">DataTables Buttons</h1>

        
            <div class="row">
              <div class="col-12">
                <div class="card">
              
                  <div class="card-body">
                    <table id="studentDetailsTable" class="table table-striped" style="width:100%">
                    <thead>
                          <tr>
                              <th>Coures ID</th>
                              <th>Course Name</th>
                              <th>Price</th>
                          </tr>
                      </thead>
                      <tbody >
                        <?php
                            $query = "SELECT * FROM course";
                            $result = $conn->query($query);
                            $tableStudent = "";
                           

                            if($result){

                                $tableStudent .= "<tr>";
                                
                                while($row = $result->fetch_assoc()){

                                    $tableStudent .= "<td>" . $row['CourseID'] . "</td>";
                                    $tableStudent .= "<td>" . $row['CourseName'] . "</td>";
                                    $tableStudent .= "<td>" . $row['Price'] . "</td>";
                                    $tableStudent .= "</tr>";
                                }
                                echo $tableStudent;
                            }

                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

          </div>


  </main>

  
  
  
  

  <?php include "footer.php"; ?>

 
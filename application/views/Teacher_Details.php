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
                              <th>Id</th>
                              <th>Full Name</th>
                              <th>Phone</th>
                              <th>Email</th>
                              <th>password</th>
                          </tr>
                      </thead>
                      <tbody >
                        <?php
                            $query = "SELECT * FROM teacher";
                            $result = $conn->query($query);
                            $tableStudent = "";
                           

                            if($result){

                                $tableStudent .= "<tr>";
                                
                                while($row = $result->fetch_assoc()){

                                    $tableStudent .= "<td>" . $row['TeacherID'] . "</td>";
                                    $tableStudent .= "<td>" . $row['Name'] . "</td>";
                                    $tableStudent .= "<td>" . $row['phone'] . "</td>";
                                    $tableStudent .= "<td>" . $row['email'] . "</td>";
                                    $tableStudent .= "<td>" . $row['password'] . "</td>";
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

 
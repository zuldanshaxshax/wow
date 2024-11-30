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
                              <th>Email</th>
                              <th>password</th>
                          </tr>
                      </thead>
                      <tbody >
                        <?php
                            $query = "SELECT * FROM students";
                            $result = $conn->query($query);
                            $tableStudent = "";
                           

                            if($result){

                                $tableStudent .= "<tr>";
                                
                                while($row = $result->fetch_assoc()){

                                    $tableStudent .= "<td>" . $row['studentID'] . "</td>";
                                    $tableStudent .= "<td>" . $row['Name'] . "</td>";
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
  <!-- Modal -->
<!-- Modal -->
<div class="modal fade" id="addStudentModal" tabindex="-1" aria-labelledby="registerStudentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="registerStudentModalLabel">Student Registration</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="addStudentForm" action="../api/create.php" method="post">
                <div class="modal-body">
                    <!-- Form content -->
                    <div class="mb-1">
                        <label for="fullName" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="fullName" name= "fullName" placeholder="Enter full name" required>
                    </div>

                    <div class="mb-1">
                        <label for="motherName" class="form-label">Mother's Name</label>
                        <input type="text" class="form-control" id="motherName" name="motherName" placeholder="Enter mother's name" required>
                    </div>

                    <div class="mb-1">
                        <label for="dateOfBirth" class="form-label">Date of Birth</label>
                        <input type="date" class="form-control" id="dateOfBirth" name = "dateOfBirth" required>
                    </div>

                    <div class="mb-1">
                        <label for="gender" class="form-label">Gender</label>
                        <select class="form-control" id="gender" name= "gender" required>
                            <option value="">Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>

                    <div class="mb-1">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" name ="address" placeholder="Enter address" required>
                    </div>

                    <div class="mb-1">
                        <label for="previousSchool" class="form-label">Previous School (Optional)</label>
                        <input type="text" class="form-control" id="previousSchool" name = "previousSchool" placeholder="Enter previous school name">
                    </div>

                    <div class="mb-1">
                        <label for="admissionDate" class="form-label">Admission Date</label>
                        <input type="date" class="form-control" id="admissionDate" name = "admissionDate"  required>
                    </div>

                    <div class="mb-1">
                        <label for="currentGradeLevel" class="form-label">Current Grade Level</label>
                        <input type="text" class="form-control" id="currentGradeLevel" name ="currentGradeLevel"  placeholder="Enter current grade level" required>
                    </div>

                    <div class="mb-1">
                        <label for="emergencyContactName" class="form-label">Emergency Contact Name</label>
                        <input type="text" class="form-control" id="emergencyContactName" name = "emergencyContactName" placeholder="Enter emergency contact name" required>
                    </div>

                    <div class="mb-1">
                        <label for="emergencyContactRelationship" class="form-label">Relationship to Student</label>
                        <select class="form-control" id="emergencyContactRelationship" name = "emergencyContactRelationship" required>
                            <option value="">Select Relationship</option>
                            <option value="Mother">Mother</option>
                            <option value="Father">Father</option>
                            <option value="Brother">Brother</option>
                            <option value="Sister">Sister</option>
                            <option value="Uncle">Uncle</option>
                            <option value="Aunt">Aunt</option>
                        </select>
                    </div>

                    <div class="mb-1">
                        <label for="emergencyContactNumber" class="form-label">Emergency Contact Number</label>
                        <input type="tel" class="form-control" id="emergencyContactNumber" name = "emergencyContactNumber" placeholder="Enter emergency contact number" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-success" value="Add" onclick="addStudent()">
                </div>
            </form>
        </div>
    </div>
</div>

  
  
<!-- Update Modal -->
<div class="modal fade" id="addStudentModal" tabindex="-1" aria-labelledby="registerStudentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="registerStudentModalLabel">Student Registration</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="addStudentForm" action="../api/create.php" method="post">
                <div class="modal-body">
                    <!-- Form content -->
                    <div class="mb-1">
                        <label for="fullName" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="fullName" name= "fullName" placeholder="Enter full name" required>
                    </div>

                    <div class="mb-1">
                        <label for="motherName" class="form-label">Mother's Name</label>
                        <input type="text" class="form-control" id="motherName" name="motherName" placeholder="Enter mother's name" required>
                    </div>

                    <div class="mb-1">
                        <label for="dateOfBirth" class="form-label">Date of Birth</label>
                        <input type="date" class="form-control" id="dateOfBirth" name = "dateOfBirth" required>
                    </div>

                    <div class="mb-1">
                        <label for="gender" class="form-label">Gender</label>
                        <select class="form-control" id="gender" name= "gender" required>
                            <option value="">Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>

                    <div class="mb-1">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" name ="address" placeholder="Enter address" required>
                    </div>

                    <div class="mb-1">
                        <label for="previousSchool" class="form-label">Previous School (Optional)</label>
                        <input type="text" class="form-control" id="previousSchool" name = "previousSchool" placeholder="Enter previous school name">
                    </div>

                    <div class="mb-1">
                        <label for="admissionDate" class="form-label">Admission Date</label>
                        <input type="date" class="form-control" id="admissionDate" name = "admissionDate"  required>
                    </div>

                    <div class="mb-1">
                        <label for="currentGradeLevel" class="form-label">Current Grade Level</label>
                        <input type="text" class="form-control" id="currentGradeLevel" name ="currentGradeLevel"  placeholder="Enter current grade level" required>
                    </div>

                    <div class="mb-1">
                        <label for="emergencyContactName" class="form-label">Emergency Contact Name</label>
                        <input type="text" class="form-control" id="emergencyContactName" name = "emergencyContactName" placeholder="Enter emergency contact name" required>
                    </div>

                    <div class="mb-1">
                        <label for="emergencyContactRelationship" class="form-label">Relationship to Student</label>
                        <select class="form-control" id="emergencyContactRelationship" name = "emergencyContactRelationship" required>
                            <option value="">Select Relationship</option>
                            <option value="Mother">Mother</option>
                            <option value="Father">Father</option>
                            <option value="Brother">Brother</option>
                            <option value="Sister">Sister</option>
                            <option value="Uncle">Uncle</option>
                            <option value="Aunt">Aunt</option>
                        </select>
                    </div>

                    <div class="mb-1">
                        <label for="emergencyContactNumber" class="form-label">Emergency Contact Number</label>
                        <input type="tel" class="form-control" id="emergencyContactNumber" name = "emergencyContactNumber" placeholder="Enter emergency contact number" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-success" value="Add" onclick="addStudent()">
                </div>
            </form>
        </div>
    </div>
</div>

  
  
  
  
  
    <script src="js/app.js"></script>
    <script src="../js/student_registration.js"></script>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      // Datatables with Buttons
      var datatablesButtons = $("#datatables-buttons").DataTable({
        responsive: true,
        lengthChange: !1,
        buttons: [""]
      });

      // Add custom button
      datatablesButtons.button().add(0, {
        action: function (e, dt, node, config) {
          $('#addStudentModal').modal('show');
        },
        text: 'New Student'
      });

      datatablesButtons.buttons().container().appendTo("#datatables-buttons_wrapper .col-md-6:eq(0)");

    });


    
  </script>

  <?php include "footer.php"; ?>

 
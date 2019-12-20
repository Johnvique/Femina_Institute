<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Femina Institute</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body id="page-top">
<?php 
include 'sidebar.php';
?>
      <div id="content-wrapper">

        <div class="container-fluid">

                <?php 
      if (isset($_POST['register'])) {
        insert();
      }
      
      function insert(){
      include 'class/connect.php';
        if (isset($_FILES['image'])) 
            {  
               
               $names = $_FILES['image']['name'];
               $sizes = $_FILES['image']['size'];
               $types = $_FILES['image']['type'];
               $tmp = $_FILES['image']['tmp_name'];
               $folder_location = 'uploads/'.$names;
               $move = move_uploaded_file($tmp,$folder_location);
                
               if ($move) {
                  $name = $_POST['fname'];
                  $gender = $_POST['gender'];
                  $email = $_POST['email'];
                  $course = $_POST['course'];
                  $nid = $_POST['nid'];
                  $fname  = $_POST['fname'];
                  $dob = $_POST['dob'];
                  
                   $qry = "INSERT INTO `student`(`fname`, `course`, `national_id`,`dob`, `email`, `gender`, `image`)
                   VALUES('$name','$course','$nid','$dob','$email','$gender','$names')";
                   if (mysqli_query($conn,$qry)or die(mysqli_error($conn))) {
                      ?>
                      <div class="btn alert alert-info alert-dismissable flex-center" role="alert">
                          <button type="button " class="close" data-dismiss="alert" aria-label="close">
                          <strong>Success</strong> Student <?php echo $name ?> Saved You can Close this Window.
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                      <?php
               }
               else{
                   ?>
                   <div class="btn btn-block alert alert-danger alert-dismissable" role="alert">
                          <button type="button " class="close" data-dismiss="alert" aria-label="close">
                          <strong>Failed !</strong>The Product failed to upload try again .
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                   <?php
               }
           }
        }
        else{
          echo "help";
        }
        mysqli_close($conn);
      }
                ?>
          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Students</li>
          </ol>

          <a href="pdf_students.php" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Print">
            <i class="fa fa-print"></i>
          </a>
          <!-- Add student Modal -->
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
            Add Student
          </button>

          <!-- Modal -->
          <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                <form method="post" enctype="multipart/form-data" action="">
                 <div class="row">
                   <div class="col-md-6">
                   <div class="form-group">
                    <label for="fname">Full Name</label>
                    <input type="text" class="form-control" name="fname" id="fname" placeholder="Full Name">
                  </div>
                  <div class="form-group">
                      <label for="courses">Courses To Apply</label>
                      <select name="course" class="form-control"> <!--Supplement an id here instead of using 'text'-->
                        <option value="first" selected>--Select Course--</option> 
                        <option value="Computer Packages">Computer Packages</option>
                        <option value="Accounting(CPA)">Accounting(CPA)</option>
                        <option value="Business Management">Business Management</option>
                        <option value="Youth Mentorship">Youth Mentorship</option>
                      </select>
                  </div>
                  <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" name="image" id="image" placeholder="Image Of Student">
                  </div>
                  <div class="form-group form-check">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="female" checked>
                    <label class="form-check-label" for="exampleRadios1">
                      Female
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input"  type="radio" name="gender" id="exampleRadios2" value="male">
                    <label class="form-check-label" for="exampleRadios2">
                      Male
                    </label>
                  </div>
                  </div>
                  
                   </div>
                   <div class="col-md-6">
                      <div class="form-group">
                        <label for="dob">Date Of Birth</label>
                        <input type="date" name="dob" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                      </div>
                      <div class="form-group">
                        <label for="nid">National ID</label>
                        <input type="text" name="nid" class="form-control" id="nid"  placeholder="National ID" maxlength="8">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                      </div>
                   </div>
                 </div>
                
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" name="register" class="btn btn-primary">Submit</button>
                </div>
                </form>

              </div>
            </div>
          </div>
          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Student Data Table</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Full Name</th>
                      <th>Course</th>
                      <th>Email</th>
                      <th>National ID</th>
                      <th>Gender</th>
                      <th>Joined At</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                    <th>Full Name</th>
                      <th>Course</th>
                      <th>Email</th>
                      <th>National ID</th>
                      <th>Gender</th>
                      <th>Joined At</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  <?php 
                  include'class/connect.php';
                  $qry = "SELECT * FROM `student`";
                  $exec = mysqli_query($conn,$qry);
                  while($result = mysqli_fetch_array($exec)){ ?>
                  <tr>
                  <!-- `id`, `fname`, `course`, `dob`, `email`, `gender`, `image`, `timestamp` -->
                      <td><?php echo $result['fname'] ?></td>
                      <td><?php echo $result['course'] ?></td>
                      <td><?php echo $result['email'] ?></td>
                      <td><?php echo $result['national_id'] ?></td>
                      <td><?php echo $result['gender'] ?></td>
                      <td><?php echo date("M jS, Y",strtotime($result['timestamp'])); ?></td>
                      <td>
                      <!-- <button class="btn btn-sm btn-success"><i class="fa fa-edit"></i></button> -->
                      <button class="delete btn btn-sm btn-danger" id='del_<?= $result['id'] ?>' style="padding: 2px;margin: 0px;margin-left:5px;">
                                          <i class="fa fa-trash"></i><span>
                                              
                                          </span>
                                      </button>                        </td>
                    </tr>
                 <?php }
                  ?>
                    
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>

          <p class="small text-center text-muted my-5">
            <em>More table examples coming soon...</em>
          </p>

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Your Website 2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
  // Delete 
  $('.delete').click(function(){
    var el = this;
    var id = this.id;
    var splitid = id.split("_");
    // Delete id
    var deleteid = splitid[1];
 
    // Confirm box
    bootbox.confirm("Are you sure want to delete?", function(result) {
 
       if(result){
         // AJAX Request
         $.ajax({
           url: 'delete_staff.php',
           type: 'POST',
           data: { id:deleteid },
           success: function(response){
             // Removing row from HTML Table
             $(el).closest('tr').css('background','tomato');
             $(el).closest('tr').fadeOut(800, function(){ 
               $(this).remove();
             });
           }
         });
       }
 
    });
 
  });
});
    </script>
  </body>

</html>

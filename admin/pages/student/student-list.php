<?php
session_start();
include '../../db.php';
$db = new db();
$username = "Admin";
$id_admin = "";
if (isset($_SESSION['username'])) {
  $username = $_SESSION['username'];
  $id_admin = $_SESSION['id_admin'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Class | Student List</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->

  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index3.php" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
      <li class="nav-item">
        <a type="submit" id="logout" title="Logout" class="nav-link btn"
           style="color: red; font-size: 1.1rem" value="Logout"><i class="fa fa-power-off"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../admin-dashboard.php" class="brand-link">
      <span class="brand-text font-weight-light justify-content-center d-flex">Class</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/avatar3.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <p style="color: white"><?php echo $username ?></p>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="../../admin-dashboard.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Admin Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Student
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="student-registration.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Register</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="student-list.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Instructor
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../Instructor/instructor-add.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Register</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../Instructor/instructor-list.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Category
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../category/category-add.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Category</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Sub Category
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../subCategory/subCategory-add.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Sub Category</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Course
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../course/coursepage.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Course</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Video
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../video/videoaddpage.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Video</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Student Add Course
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../studentHasCourse/studentHasCourse-add.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Video</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Student List</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <!-- Main content -->
    <section class="content mb-5">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Student List</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <div id="table">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <div class="modal fade" id="student_update">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header bg-primary">
            <h4 class="modal-title">Update Student Profile</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form id="quickForm">
              <div class="card-body">
                <div class="form-group">
                  <input type="hidden" class="form-control" id="update_idStudent" name="id" disabled >
                </div>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-md-6 mb-3">
                      <label for="update_first_name">First name</label>
                      <input type="text" name="update_Frist_Name" class="form-control"
                             id="update_Frist_Name" placeholder="First name">
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="update_last_name">Last name</label>
                      <input type="text" name="update_Last_Name" class="form-control" id="update_Last_Name"
                             placeholder="Last name">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-md-6 mb-3">
                      <label for="update_Full_Name">Full Name</label>
                      <div class="input-group">
                        <input type="text" name="update_Full_Name" class="form-control"
                               id="update_Full_Name"
                               placeholder="Full Name" aria-describedby="inputGroupPrepend">
                      </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="update_Contact_no1">Mobile Number</label>
                      <input type="text" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" required name="update_Contact_no1" class="form-control"
                             id="update_Contact_no1" placeholder="Mobile Number">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-md-6 mb-3">
                      <label for="update_Contact_no2">Land Phone Number</label>
                      <div class="input-group">
                        <input type="text" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" required name="update_Contact_no2" class="form-control"
                               id="update_Contact_no2" placeholder="Land Phone Number"
                               aria-describedby="inputGroupPrepend">
                      </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="update_Birth_day">Birth Of Date</label>
                      <input type="date" name="update_Birth_day" class="form-control" id="update_Birth_day"
                             placeholder="Birth Of Date">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-md-6 mb-3">
                      <label for="update_Address_line1">Address Line 1</label>
                      <input type="text" name="update_Address_line1" class="form-control"
                             id="update_Address_line1"
                             placeholder="Address Line 1">

                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="update_Address_line2">Address Lne 2</label>
                      <input type="text" name="update_Address_line2" class="form-control"
                             id="update_Address_line2"
                             placeholder="Address Lne 2">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-md-6 mb-3">
                      <label for="update_Address_line3">Address Line 3</label>
                      <input type="text" name="update_Address_line3" class="form-control"
                             id="update_Address_line3"
                             placeholder="Address Line 3">

                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="update_City">City</label>
                      <input type="text" name="update_City" class="form-control" id="update_City"
                             placeholder="City">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-md-6 mb-3">
                      <label for="update_Guardian_Name">Guardian Name</label>
                      <input type="text" name="update_Guardian_Name" class="form-control"
                             id="update_Guardian_Name"
                             placeholder="Guardian Name">

                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="update_Guardian_CNo">Guardian Contact Number</label>
                      <input type="text" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" required name="update_Guardian_CNo" class="form-control"
                             id="update_Guardian_CNo"
                             placeholder="Guardian Contact Number">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-md-6 mb-3">
                      <label for="update_Guardian_Email">Guardian Email</label>
                      <input type="email" name="update_Guardian_Email" class="form-control"
                             id="update_Guardian_Email"
                             placeholder="Guardian Email">

                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="update_User_name">Student Email</label>
                      <input type="email" name="update_User_name" class="form-control" id="update_User_name"
                             placeholder="Student Email" required>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-md-6">
                      <label for="update_password">Password</label>
                      <div class="row">
                        <div class="col-9">
                          <input type="password" name="update_Password" class="form-control"
                                 id="update_Password" placeholder="Password" required>
                          <input class="ml-1 mt-2" type="checkbox" onclick="myFunction()">
                          Show Password
                        </div>
                        <div class="col-3">
                          <input type="button"
                                 class="btn border-0 btn-transition btn btn-outline-success form-control"
                                 value="Generate" onClick="randomPassword(10);"
                                 tabindex="2">
                        </div>
                      </div>
                    </div>
<!--                    <div class="col-md-6">-->
<!--                      <label for="update_img_path">Upload Image</label>-->
<!--                      <input name="update_img_path" id="update_img_path" type="file"-->
<!--                             class="form-control-file">-->
<!--                      <small class="form-text text-muted">This is some PNG, JPG, JPEG.</small>-->
<!--                    </div>-->
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
            </form>
          </div>
          <div class="modal-footer justify-content-end">
            <div class="">
              <input class="btn btn-primary" id="student_recode_update"
                     type="submit"
                     value="Update">
            </div>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>

  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2021 </strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script src="../../custom/js/studentJs/student-list.js"></script>
<script src="../../custom/js/studentJs/student-update.js"></script>
<script src="../../custom/js/studentJs/student-delete.js"></script>
<script src="../../custom/js/otherpagelogout.js"></script>


</body>
</html>

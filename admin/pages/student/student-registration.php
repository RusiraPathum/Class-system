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
  <title>Class | Student Registration</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
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
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
            data-accordion="false">
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
                <a href="student-registration.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Register</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="student-list.php" class="nav-link">
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
            <!--            <h1>Validation</h1>-->
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Registration</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content mb-5">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Student Registration</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <form id="quickForm">
                  <div class="card-body">
                    <div class="form-group">
                      <div class="form-row">
                        <div class="col-md-6 mb-3">
                          <label for="first_name">First name</label>
                          <input type="text" name="Frist_Name" class="form-control"
                                 id="Frist_Name" placeholder="First name">
                        </div>
                        <div class="col-md-6 mb-3">
                          <label for="last_name">Last name</label>
                          <input type="text" name="Last_Name" class="form-control" id="Last_Name"
                                 placeholder="Last name">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="form-row">
                        <div class="col-md-6 mb-3">
                          <label for="Full_Name">Full Name</label>
                          <div class="input-group">
                            <input type="text" name="Full_Name" class="form-control"
                                   id="Full_Name"
                                   placeholder="Full Name" aria-describedby="inputGroupPrepend">
                          </div>
                        </div>
                        <div class="col-md-6 mb-3">
                          <label for="Birth_day">Birth Of Date</label>
                          <input type="date" name="Birth_day" class="form-control" id="Birth_day"
                                 placeholder="Birth Of Date">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="form-row">
                        <div class="col-md-6 mb-3">
                          <label for="Contact_no2">Land Phone Number</label>
                          <div class="input-group">
                            <!--                                                    <div class="input-group-prepend">-->
                            <!--                                                        <span class="input-group-text" id="inputGroupPrepend">@</span>-->
                            <!--                                                    </div>-->
                            <input type="text" name="Contact_no2" class="form-control"
                                   id="Contact_no2" pattern="[0-9]{3}[0-9]{3}[0-9]{4}"  placeholder="Land Phone Number"
                                   aria-describedby="inputGroupPrepend">
                          </div>
                        </div>
                        <div class="col-md-6 mb-3">
                          <label for="Address_line1">Address Line 1</label>
                          <input type="text" name="Address_line1" class="form-control"
                                 id="Address_line1"
                                 placeholder="Address Line 1">

                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="form-row">
                        <div class="col-md-6 mb-3">
                          <label for="Contact_no1">Mobile Number</label>
                          <input type="tel" name="Contact_no1"  pattern="[0-9]{3}[0-9]{3}[0-9]{4}"  class="form-control"
                                 id="Contact_no1" placeholder="Mobile Number">
                        </div>
                        <div class="col-md-6 mb-3">
                          <label for="Address_line2">Address Lne 2</label>
                          <input type="text" name="Address_line2" class="form-control"
                                 id="Address_line2"
                                 placeholder="Address Lne 2">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="form-row">
                        <div class="col-md-6 mb-3">
                          <label for="Address_line3">Address Line 3</label>
                          <input type="text" name="Address_line3" class="form-control"
                                 id="Address_line3"
                                 placeholder="Address Line 3">

                        </div>
                        <div class="col-md-6 mb-3">
                          <label for="City">City</label>
                          <input type="text" name="City" class="form-control" id="City"
                                 placeholder="City">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="form-row">
                        <div class="col-md-6 mb-3">
                          <label for="Guardian_Name">Guardian Name</label>
                          <input type="text" name="Guardian_Name" class="form-control"
                                 id="Guardian_Name"
                                 placeholder="Guardian Name">

                        </div>
                        <div class="col-md-6 mb-3">
                          <label for="Guardian_Email">Guardian Email</label>
                          <input type="email" name="Guardian_Email" class="form-control"
                                 id="Guardian_Email"
                                 placeholder="Guardian Email">

                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="form-row">
                        <div class="col-md-6 mb-3">
                          <label for="Guardian_CNo">Guardian Contact Number</label>
                          <input type="tel" name="Guardian_CNo" class="form-control"
                                 id="Guardian_CNo" pattern="[0-9]{3}[0-9]{3}[0-9]{4}"
                                 placeholder="Guardian Contact Number">
                        </div>
                        <div class="col-md-6 mb-3">
                          <label for="User_name">Student Email</label>
                          <input type="email" name="User_name" class="form-control" id="User_name"
                                 placeholder="Student Email" >
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="form-row">
                        <div class="col-md-6">
                          <label for="password">Password</label>
                          <div class="row">
                            <div class="col-9">
                              <input type="password" name="Password" class="form-control"
                                     id="Password" placeholder="Password">
                              <input class="ml-1 mt-2" type="checkbox" onclick="myFunction()">
                              Show Password
                            </div>
                            <div class="col-3">
                              <input type="button"
                                     class="btn btn-outline-success form-control"
                                     value="Generate" onClick="randomPassword(10);"
                                     tabindex="2">
                            </div>
                          </div>
                        </div>
<!--                        <div class="col-md-6">-->
<!--                          <label for="img_path">Upload Image</label>-->
<!--                          <input name="img_path" id="img_path" type="file"-->
<!--                                 class="form-control-file">-->
<!--                          <small class="form-text text-muted">This is some PNG, JPG, JPEG.</small>-->
<!--                        </div>-->
                      </div>
                    </div>
                  </div>
                  <!-- /.card-body -->
                </form>

              </div>
            </div>
          </div>
          <div class="card-footer">
            <input class="btn btn-primary" id="student_register"
                   type="submit"
                   value="Register">
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- Main content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2021</strong> All rights reserved.
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
<!-- jquery-validation -->
<script src="../../plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="../../plugins/jquery-validation/additional-methods.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<!-- Page specific script -->
<script src="../../custom/js/studentJs/student-register.js"></script>
<script src="../../custom/js/otherpagelogout.js"></script>

<script>
  $(function () {
    $.validator.setDefaults({
      submitHandler: function () {
        // alert("Form successful submitted!");
      }
    });
    $('#quickForm').validate({
      rules: {
        ser_name: {
          required: true,
          email: true,
        },
        assword: {
          required: true,
          minlength: 5
        },
      },
      messages: {
        email: {
          required: "Please enter a email address",
          email: "Please enter a vaild email address"
        },
        password: {
          required: "Please provide a password",
          minlength: "Your password must be at least 5 characters long"
        },
      },
      errorElement: 'span',
      errorPlacement: function (error, element) {
        error.addClass('invalid-feedback');
        element.closest('.col-md-6').append(error);
      },
      highlight: function (element, errorClass, validClass) {
        $(element).addClass('is-invalid');
      },
      unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
      }
    });
  });
</script>
</body>
</html>

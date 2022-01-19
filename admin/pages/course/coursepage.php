<?php
session_start();
include '../../db.php';
$db = new db();
$username = "Admin";
$id_admin = "";
if (isset($_SESSION['username'])) {
  $username = $_SESSION['username'];
  $id_admin = $_SESSION['id_admin'];
} ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Class | Course Add</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="../../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../../plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="../../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="../../plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="../../plugins/bs-stepper/css/bs-stepper.min.css">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="../../plugins/dropzone/min/dropzone.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
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
        <a href="../../admin-dashboard.php" class="nav-link">Home</a>
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
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Student
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../student/student-registration.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Register</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../student/student-list.php" class="nav-link">
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
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Course
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../course/coursepage.php" class="nav-link active">
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
              <li class="breadcrumb-item active">Course Add and List</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content mb-5">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Course Add</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-12">
                <form id="quickForm">
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-md-12 mb-3">
                        <label>Instructor Name</label>
                        <select id="instructor_name" name="instructor_name" class="form-control select2"
                                style="width: 100%;">
                          <option>Select Instructor Name</option>
                          <?php

                          $query = "SELECT * FROM instructer ORDER by idInstructer";

                          $rs = $db->Search($query);

                          while ($row = $rs->fetch(2)) {

                            $idInstructer = $row['idInstructer'];
                            $Full_Name = $row['Full_Name'];

                            echo "<option value='" . $idInstructer . "'>$Full_Name</option>";
                          }
                          ?>
                        </select>
                      </div>
                    </div>

                  </div>
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-md-6 mb-3">
                        <label for="Course_Name	">Course Name </label>
                        <input type="text" name="Course_Name	" class="form-control"
                               id="Course_Name"
                               placeholder="Course Name">
                      </div>
                      <div class="col-md-6 mb-3">
                        <label for="Discription	">Description </label>
                        <input type="text" name="Discription	" class="form-control"
                               id="Discription"
                               placeholder="Description">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-md-6 mb-3">
                        <label for="Duration	">Duration (Month)</label>
                        <input type="number" name="Duration" class="form-control"
                               id="Duration"
                               placeholder="Duration">

                      </div>
                      <div class="col-md-6 mb-3">
                        <label for="Hours	">Hours</label>
                        <input type="number" name="Hours" class="form-control"
                               id="Hours"
                               placeholder="Hours">

                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-md-6 mb-3">
                        <label for="Price	">Price</label>
                        <input type="number" name="Price	" class="form-control"
                               id="Price"
                               placeholder="Price">

                      </div>
                      <div class="col-md-6 mb-3">
                        <label for="No_of_Video	">Number ofVideo </label>
                        <input type="number" name="No_of_Video	" class="form-control"
                               id="No_of_Video"
                               placeholder="Number of Video">

                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-row">
                      <!--                      <div class="col-md-6">-->
                      <!--                        <label for="img_path">Upload Video</label>-->
                      <!--                        <input name="Introduction_Video_Path" id="Introduction_Video_Path" type="file"-->
                      <!--                               class="form-control-file">-->
                      <!--                        <small class="form-text text-muted">This is some mp4.</small>-->
                      <!--                      </div>-->
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Category Name</label>
                    <select id="category_name" onchange="categorySelected(this.options[this.selectedIndex].value)"
                            name="subcategory_name" class="form-control select2"
                            style="width: 100%;">
                      <option>Select Category</option>
                      <?php
                      $query = "SELECT * FROM category ORDER by idcategory";
                      $rs = $db->Search($query);
                      while ($row = $rs->fetch(2)) {
                        $idcategory = $row['idcategory'];
                        $name = $row['name'];
                        echo "<option value='" . $idcategory . "'>$name</option>";
                      }
                      ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Sub Category Name</label>
                    <select id="subcategory_name" name="subcategory_name" class="form-control select2"
                            style="width: 100%;">
                    </select>
                  </div>
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-md-6 mb-3">
                        <label for="Price	">Course Content Description</label>
                        <textarea type="text" name="Content_Discription" class="form-control"
                                  id="Content_Discription"
                                  placeholder="Course Content Description" rows="4"></textarea>

                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <input class="btn btn-primary" id="add_course"
                   type="submit"
                   value="Add Course">
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
    </section>

    <!-- /.content -->
    <section class="content mb-5">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Courses List</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <div id="course_table">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
    </section>

    <div class="modal fade" id="course_update">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header bg-primary">
            <h4 class="modal-title">Update Course Details</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form id="quickForm">
              <div class="form-group">
                <input type="hidden" class="form-control" id="update_idCourse" name="update_idSub_category" disabled>
              </div>
              <div class="form-group">
                <div class="form-row">
                  <div class="col-md-12 mb-3">
                    <label>Instructor Name</label>
                    <select id="update_instructor_name" name="update_instructor_name" class="form-control select2"
                            style="width: 100%;" required>
                      <option selected disabled>Select Instructor Name</option>
                      <?php

                      $query = "SELECT * FROM instructer ORDER by idInstructer";

                      $rs = $db->Search($query);

                      while ($row = $rs->fetch(2)) {

                        $idInstructer = $row['idInstructer'];
                        $Full_Name = $row['Full_Name'];

//                        if ($Full_Name == )

                        echo "<option value='" . $idInstructer . "'>$Full_Name</option>";
                      }
                      ?>
                    </select>
                  </div>
                </div>

              </div>
              <div class="form-group">
                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <label for="update_Course_Name	">Course Name </label>
                    <input type="text" name="update_Course_Name	" class="form-control"
                           id="update_Course_Name"
                           placeholder="Course Name">
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="update_Discription	">Description </label>
                    <input type="text" name="update_Discription	" class="form-control"
                           id="update_Discription"
                           placeholder="Description">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <label for="update_Duration">Duration </label>
                    <input type="number" name="update_Duration" class="form-control"
                           id="update_Duration"
                           placeholder="Duration">

                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="update_Hours	">Hours</label>
                    <input type="number" name="update_Hours" class="form-control"
                           id="update_Hours"
                           placeholder="Hours">

                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <label for="update_Price	">Price</label>
                    <input type="number" name="update_Price" class="form-control"
                           id="update_Price"
                           placeholder="Price">

                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="update_No_of_Video	">Number ofVideo </label>
                    <input type="number" name="update_No_of_Video" class="form-control"
                           id="update_No_of_Video"
                           placeholder="Number ofVideo">

                  </div>
                </div>
              </div>
              <div class="form-group">
                <!--                <div class="form-row">-->
                <!--                  <div class="col-md-6">-->
                <!--                    <label for="update_Introduction_Video_Path">Upload Video</label>-->
                <!--                    <input name="update_Introduction_Video_Path" id="update_Introduction_Video_Path" type="file"-->
                <!--                           class="form-control-file">-->
                <!--                    <small class="form-text text-muted">This is some mp4.</small>-->
                <!--                  </div>-->
                <!--                </div>-->
              </div>
              <div class="form-group">
                <label>Category Name</label>
                <select id="update_category_name" onchange="categorySelected2(this.options[this.selectedIndex].value)"
                        name="subcategory_name" class="form-control select2"
                        style="width: 100%;">
                  <option selected disabled>Select Category</option>
                  <?php
                  $query = "SELECT * FROM category ORDER by idcategory";
                  $rs = $db->Search($query);
                  while ($row = $rs->fetch(2)) {
                    $idcategory = $row['idcategory'];
                    $name = $row['name'];
                    echo "<option value='" . $idcategory . "'>$name</option>";
                  }
                  ?>
                </select>
              </div>
              <div class="form-group">
                <label>Sub Category Name</label>
                <select id="subcategory_name2" name="update_subcategory_name" class="form-control select2"
                        style="width: 100%;">
                </select>
              </div>
              <div class="form-group">
                <input type="hidden" class="form-control" id="update_idCourse_Content" name="update_idCourse_Content"
                       disabled>
              </div>
              <div class="form-group">
                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <label for="update_Content_Discription">Course Content Description</label>
                    <textarea type="text" name="update_Content_Discription" class="form-control"
                              id="update_Content_Discription"
                              placeholder="Course Content Description" rows="3"></textarea>
                  </div>
                </div>
              </div>

            </form>
          </div>
          <div class="modal-footer justify-content-end">
            <div class="">
              <input class="btn btn-primary" id="update_course"
                     type="submit"
                     value="Update Course Details">
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
    <strong>Copyright &copy; 2021 </strong> All rights
    reserved.
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
<!-- Select2 -->
<script src="../../plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="../../plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="../../plugins/moment/moment.min.js"></script>
<script src="../../plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- date-range-picker -->
<script src="../../plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="../../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="../../plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- BS-Stepper -->
<script src="../../plugins/bs-stepper/js/bs-stepper.min.js"></script>
<!-- dropzonejs -->
<script src="../../plugins/dropzone/min/dropzone.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script src="../../custom/js/courseJs/course-add.js"></script>
<script src="../../custom/js/courseJs/course-update.js"></script>
<script src="../../custom/js/otherpagelogout.js"></script>

<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', {'placeholder': 'dd/mm/yyyy'})
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', {'placeholder': 'mm/dd/yyyy'})
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservationdate').datetimepicker({
      format: 'L'
    });

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })

    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function (event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    })

    $("input[data-bootstrap-switch]").each(function () {
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })

  })
</script>
</body>
</html>

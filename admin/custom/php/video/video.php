<?php
session_start();
include "../../../db.php";
$db = new db();

if (isset($_POST['add_video'])) {
//  $name = $_FILES['file'];
//  echo "<pre>";
//  print_r($name);
//  exit();
  $course_name = $_POST['course_name'];
  $Type = $_POST['Type'];
  $Title = $_POST['Title'];
  $Discription = $_POST['Discription'];
  $Video_length = $_POST['Video_length'];

  $Video_path = $_FILES['file']['name'];
  $temp_name = $_FILES['file']['tmp_name'];
  $file_size = $_FILES['file']['size'];
  $file_destination = "../../video/" . $Video_path;
  $duration = $_POST['duration'];

  $query1 = "Select max(Number)  as id From course_videos";
  $rs1 = $db->Search($query1);

  $id = 1;
  if ($row = $rs1->fetch(PDO::FETCH_ASSOC)) {
    $id = $row['id'] + 1;
  } else {

  }
//  echo $id;
  if (move_uploaded_file($temp_name, $file_destination)) {
    $query = "INSERT INTO course_videos (Course_idCourse, Type, Number, Title, Discription, Video_length, Video_path, duration)
            VALUES ('$course_name', '$Type', '$id', '$Title', '$Discription', '$Video_length', '$Video_path', '$duration')";
//
    $db->IUD($query);
//
    header('location: ../../../pages/video/videoaddpage.php?saved=1');
    exit("not found");
  }
}

if ($_POST['id'] == "show") {

  $output = "";

  $output .= "
        <table id=\"example1\" class=\"table table-bordered table-striped\">
            <thead class='text-center'>
            <tr>
                <th hidden>Course Video Id</th>
                <th>Course Name</th>
                <th>Type</th>
                <th>Title</th>
                <th>Video Length</th>
                <th>Duration</th>
                <th>Control</th>
            </tr>
            </thead>
            <tbody class='text-center'>
    ";
//
//  $query = "SELECT *
//            FROM course as c INNER JOIN instructer as i
//            ON c.Instructer_idInstructer = i.idInstructer
//            INNER JOIN sub_category as subc
//            ON c.sub_category_idsub_category = subc.idsub_category";

  $query = "SELECT * FROM course c, course_videos cv WHERE cv.Course_idCourse=c.idCourse";

  $rs = $db->Search($query);

  while ($row = $rs->fetch(2)) {
    $idCourse_Videos = $row['idCourse_Videos'];
    $course_name = $row['Course_Name'];
    $Type = $row['Type'];
    $Title = $row['Title'];
    $Discription = $row['Discription'];
    $Video_length = $row['Video_length'];
    $Video_path = $row['Video_path'];
    $duration = $row['duration'];

    $output .= "
            <tr>
                <td hidden>$idCourse_Videos</td>
                <td>$course_name</td>
                <td>$Type</td>
                <td>$Title</td>
                <td>$Video_length</td>
                <td>$duration</td>
                <td class='text-center'><button onclick='getVideoDetails($idCourse_Videos, \"$course_name\", \"$Type\",
                \"$Title\", \"$Discription\", \"$Video_length\", \"$Video_path\", \"$duration\")'
                 title='Update Record' class='btn btn-warning'  type='button' data-toggle='modal' data-target='#video_update'><span><i class=\"fa fa-edit\"></i></span></button>
            </tr>
        ";
  }

  $output .= '
        </tbody>
    </table>

   <script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print"]
      }).buttons().container().appendTo("#example1_wrapper .col-md-6:eq(0)");
    });
  </script>

    ';

  echo $output;

}

//if ($_POST['id'] == "update") {
//
//  $update_idCourse_Videos = $_POST['update_idCourse_Videos'];
//  $update_course_name = $_POST['update_course_name'];
//  $update_Type = $_POST['update_Type'];
//  $update_Number = $_POST['update_Number'];
//  $update_Title = $_POST['update_Title'];
//  $update_Discription = $_POST['update_Discription'];
//  $update_Video_length = $_POST['update_Video_length'];
//  $update_Video_path = $_POST['update_Video_path'];
//
//  $query = "UPDATE course_videos SET Course_idCourse ='$update_course_name', 	Type='$update_Type',
//                         Number='$update_Number', Title='$update_Title', Discription='$update_Discription',
//                         Video_length='$update_Video_length', Video_path='$update_Video_path' WHERE idCourse_Videos  = '$update_idCourse_Videos'";
//
//  $db->IUD($query);
//  echo 1;
//
//}

if ($_POST['id'] == "search") {

  $course_name_search_id = $_POST['course_name_search_id'];

  $query = "SELECT * FROM course_videos WHERE Course_idCourse = '$course_name_search_id'";

  $rs = $db->Search($query);
  echo "<div class='row mt-5'>";

  if ($rs->rowCount() > 0) {
    while ($row = $rs->fetch(2)) {

      $idCourse_Videos = $row['idCourse_Videos'];
      $Course_idCourse = $row['Course_idCourse'];
      $Title = $row['Title'];
      $Video_path = $row['Video_path'];
      $Number = $row['Number'];

      echo "<div class='col-6 text-center' style='height:100%;'>
               <video oncontextmenu='return false;' disablePictureInPicture controls controlsList='nodownload' controls>
                   <source src='../../custom/Video/$Video_path'>
               </video>
                <div>
                 <p class='d-flex justify-content-center'>$Title</p>
                 <button onclick='delete_video($idCourse_Videos)' class=\"btn btn-danger mb-5\">Delete</button>
                </div>
           </div>
        ";
    }
  } else {

    echo "<div class=\"alert container-fluid text-center\">
            <span class=\"closebtn\" onclick=\"this . parentElement . style . display = 'none';\">&times;</span>
            <strong class='text-center'>Video Not Found</strong>
          </div>";
  }


  echo "</div>";

}

if ($_POST['id'] == "delete") {

  $idCourse_Videos = $_POST['idCourse_Videos'];

  $query = "DELETE FROM course_videos WHERE idCourse_Videos = '$idCourse_Videos'";

  $db->IUD($query);

  echo 1;
}

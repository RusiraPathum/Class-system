<?php
session_start();
include "../../../db.php";
$db = new db();

if ($_POST['id'] == "insert") {
  $student_name = $_POST['student_name'];
  $course_name = $_POST['course_name'];
  $Start_date = $_POST['Start_date'];
  $Expire_date = $_POST['Expire_date'];

  $query = "INSERT INTO student_has_course ( Student_idStudent, Course_idCourse, Start_date, Expire_date)
            VALUES ('$student_name', '$course_name', '$Start_date', '$Expire_date')";
  $db->IUD($query);

  $query_get_id = "SELECT MAX(ID) as ID FROM student_has_course";
  $rs_get_id = $db->Search($query_get_id);

  $shc_id = "0";
  while ($row = $rs_get_id->fetch(2)){
    $shc_id = $row['ID'];
  }
//  echo $shc_id;

  $query_course_video_id = "SELECT * FROM course_videos WHERE Course_idCourse = '$course_name'";
  $rs_course_video_id = $db->Search($query_course_video_id);

//  echo $query_course_video_id;

  $idCourse_video = "1";
  while ($row = $rs_course_video_id->fetch(2)){
    $idCourse_video = $row['idCourse_Videos'];

    $query_student_video_add = "INSERT INTO student_has_course_videos (Course_Videos_idCourse_Videos, Student_has_Course_ID, Start_date_Time, Expire_Date_Time)
                                VALUES ('$idCourse_video', '$shc_id', '-', '-')";
//    echo $query_student_video_add;
    $db->IUD($query_student_video_add);
  }

//  echo $idCourse_video;

    // insert into student_has_course
    // get max id of student_has_course
    // select from course_videos where course_idCourse = cid
    // do a while loop using above rs
    // insert into student_has_videos

}

if ($_POST['id'] == "show") {

  $output = "";

  $output .= "
        <table id=\"example1\" class=\"table table-bordered table-striped\">
            <thead class='text-center'>
            <tr>
                <th hidden>ID</th>
                <th>Student Name</th>
                <th>Course Name</th>
                <th>Start Date</th>
                <th>Expire Date</th>
                <th>Control</th>
            </tr>
            </thead>
            <tbody class='text-center'>
    ";

  $query = "SELECT shc.ID, shc.Student_idStudent, shc.Course_idCourse, s.Full_Name AS Student_name, c.Course_Name AS Course_name, shc.Start_date, shc.Expire_date, shc.Status, shc.Review_Comment, shc.Feedback_rate, shc.toShow
            FROM student s, course c, student_has_course shc
            WHERE shc.Student_idStudent = s.idStudent
            AND shc.Course_idCourse = c.idCourse";

  $rs = $db->Search($query);

  while ($row = $rs->fetch(2)) {
    $ID = $row['ID'];
    $Student_name = $row['Student_name'];
    $Student_idStudent = $row['Student_idStudent'];
    $Course_name = $row['Course_name'];
    $Course_idCourse = $row['Course_idCourse'];
    $Start_date = $row['Start_date'];
    $Expire_date = $row['Expire_date'];
    $Status = $row['Status'];
    $Review_Comment = $row['Review_Comment'];
    $Feedback_rate = $row['Feedback_rate'];
    $toShow = $row['toShow'];

    $output .= "
            <tr>
                <td hidden>$ID</td>
                <td>$Student_name</td>
                <td>$Course_name</td>
                <td>$Start_date</td>
                <td>$Expire_date</td>
                <td class='text-center'><button onclick='getStudentVideoDetails($ID, \"$Student_idStudent\", \"$Course_idCourse\",
                \"$Start_date\", \"$Expire_date\", \"$Review_Comment\", \"$Feedback_rate\")'
                title='Update Record' class='btn btn-warning'  type='button' data-toggle='modal' data-target='#student_video_update'><span><i class=\"fa fa-edit\"></i></span></button></td>
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

if ($_POST['id'] == "update") {

  $update_id = $_POST['update_id'];
  $update_student_name = $_POST['update_student_name'];
  $update_course_name = $_POST['update_course_name'];
  $update_Start_date = $_POST['update_Start_date'];
  $update_Expire_date = $_POST['update_Expire_date'];


  $query = "UPDATE student_has_course SET Student_idStudent='$update_student_name', Course_idCourse='$update_course_name',
            Start_date='$update_Start_date', Expire_date='$update_Expire_date' WHERE ID = '$update_id'";

  $db->IUD($query);
  echo 1;
}


if ($_POST['id'] == "set_expire_date"){

  $cid = $_POST['cid'];
  $Start_date = $_POST['Start_date'];

  $query = "select * from course where idCourse='$cid'";


  if ($row = $db->Search($query)->fetch(PDO::FETCH_ASSOC)){
    $Duration = $row['Duration'];

    $new_start_date = date('Y-m-d', strtotime($Start_date . '.' . $Duration . 'month'));

    echo $new_start_date;
  }
}

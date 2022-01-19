<?php
session_start();
include "../../../db.php";
$db = new db();

if (isset($_POST['update_video'])) {

  $update_idCourse_Videos = $_POST['update_idCourse_Videos'];
  $update_course_name = $_POST['update_course_name'];
  $update_Type = $_POST['update_Type'];
  $update_Title = $_POST['update_Title'];
  $update_Discription = $_POST['update_Discription'];
  $update_Video_length = $_POST['update_Video_length'];
  $update_duration = $_POST['update_duration'];

  $update_Video_path = $_FILES['update_Video_path']['name'];
  $temp_name = $_FILES['update_Video_path']['tmp_name'];
  $file_size = $_FILES['update_Video_path']['size'];
  $file_destination = "../../video/" . $update_Video_path;

  if (move_uploaded_file($temp_name, $file_destination)) {
    $query = "UPDATE course_videos SET Course_idCourse='$update_course_name', Type='$update_Type', Title='$update_Title', Discription='$update_Discription',
                Video_length='$update_Video_length', Video_path='$update_Video_path', duration='$update_duration'  WHERE idCourse_Videos='$update_idCourse_Videos'";

    $db->IUD($query);
    header('location: ../../../pages/video/videoaddpage.php');

  }

}

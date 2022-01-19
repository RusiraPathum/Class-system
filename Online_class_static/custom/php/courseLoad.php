<?php
session_start();
include "../../db.php";
$sid = "";
//$sid = $_SESSION['studentId'];
$db = new db();
$output = '';

if ($_POST['id'] == "load_course_video") {

    $title = $_POST['title'];
    $idCourse_Videos = $_POST['id_course'];
    $Course_idCourse = $_POST['course_idCourse'];

    $get_duration_query = "SELECT duration FROM course_videos WHERE idCourse_Videos = '$idCourse_Videos' AND Title = '$title'";
    $rs_duration = $db->Search($get_duration_query);
    $duration = "";

    while ($row = $rs_duration->fetch(PDO::FETCH_ASSOC)) {
        $duration = $row['duration'];
    }


    $get_start_date_query = "SELECT * FROM student_has_course_videos WHERE Course_Videos_idCourse_Videos = '$idCourse_Videos' AND Student_has_Course_ID= '$Course_idCourse'";
    $rs_get_start_date = $db->Search($get_start_date_query);



    while ($row = $rs_get_start_date->fetch(PDO::FETCH_ASSOC)) {
        $dateS = $row['Start_date_Time'];
        $dateE = $row['Expire_Date_Time'];
        date_default_timezone_set("Asia/Colombo");
        $today = date('Y-m-d');

        if ($dateS == "-" && $dateE = "-") {
            $expire_date_time = date('Y-m-d', strtotime($today . '.' . $duration . 'day'));

            $query_student_video_add = "UPDATE student_has_course_videos SET Start_date_Time = '$today',
                                Expire_Date_Time = '$expire_date_time'
                                WHERE Course_Videos_idCourse_Videos = '$idCourse_Videos' AND Student_has_Course_ID= '$Course_idCourse' ";

            $db->IUD($query_student_video_add);
        } else {

            if ($today >= $dateE) {

                $query_status_update = "UPDATE student_has_course_videos SET Status = '0'
                                WHERE Course_Videos_idCourse_Videos = '$idCourse_Videos' AND Student_has_Course_ID= '$Course_idCourse' ";
                $db->IUD($query_status_update);
                echo "NA";

            } else {
                $query = "SELECT * FROM course_videos WHERE idCourse_Videos = '$idCourse_Videos' AND Title = '$title'";
                $rs = $db->Search($query);

                if ($row = $rs->fetch(PDO::FETCH_ASSOC)) {

                    $video_path = $row['Video_path'];
                    echo "<div style='height:100%; margin-right: 5px;'>
                            <video oncontextmenu='return false;' disablePictureInPicture autoplay controls controlsList='nodownload' src=\"../admin/custom/Video/$video_path\" controls ></video>
                          </div>";

                }
            }
        }
    }
}

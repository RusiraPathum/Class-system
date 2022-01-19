<?php
include '../../db.php';
$db = new db();
session_start();
if ($_POST['id'] == "login") {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $screenSize = $_POST['screenSize'];

    $tDate = date("Y-m-d");
    date_default_timezone_set("Asia/Colombo");
    $tTime = date("h:i:sa");
    $Activity_Type = "Student Login";

    $query1 = "SELECT * FROM student WHERE User_name='$username' and Password='$password'";
    $rs = $db->Search($query1);
    if ($row = $rs->fetch(PDO::FETCH_ASSOC)) {
        $status = $row['status'];
        $Student_idStudent = $row['idStudent'];
        if ($status == 1) {
            $_SESSION['name'] = $row['Frist_Name'];
            $_SESSION['idStudent'] = $row['idStudent'];
            $query5 = "insert into log (Student_idStudent, Date, Time, Device, Activity_Type) values ('$Student_idStudent','$tDate','$tTime','$screenSize','$Activity_Type')";
            $db->IUD($query5);
            echo 1;
        }else{
            echo 2;
        }

    } else {
        $query2 = "SELECT * FROM admin WHERE username = '$username' and password = '$password'";
        $rs1 = $db->Search($query2);
        if ($row = $rs1->fetch(PDO::FETCH_ASSOC)) {
            $_SESSION['username'] = $row['username'];
            $_SESSION['id_admin'] = $row['idadmin'];
            echo 3;
        }else{
            echo 4;
        }
    }
}


if ($_POST['id'] == "forgpass") {

    $username = $_POST['username'];

    $query = "SELECT email FROM student WHERE User_name='$username'";

    $rs = $db->Search($query);
    if ($row = $rs->fetch(2)) {
//        echo $row['email'];
        $_SESSION['ss'] = $row['email'];
    } else {
        echo "0";
    }

}

if ($_POST['id'] == "upload_image"){

    $update_idStudent = $_POST['update_idStudent'];
    $img_path = $_POST['img_path'];
    $query = "update student set img_path = '$img_path' where idStudent = '$update_idStudent'";

    $db->IUD($query);
    echo 1;
}

if ($_POST['id'] == "feedback"){

    $courseID = $_POST['courseID'];
    $sid = $_POST['sid'];
    $Review_Comment = $_POST['Review_Comment'];
//    echo $courseID;

    $query = "update student_has_course set  Review_Comment='$Review_Comment' WHERE Course_idCourse='$courseID' AND Student_idStudent='$sid'";

    if ($db->Search($query)){
        echo "<span style='color: #51be78'>Thanks You Comment..</span>";
    }

}
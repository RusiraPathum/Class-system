<?php
session_start();
include "../../db.php";
$db = new db();
$sid = "";
if (isset($_SESSION['studentId'])) {
    $sid = $_SESSION['studentId'];
}

if ($_POST['id'] == "get_title") {

    $today_date = date("Y-m-d");
//    echo $today_date;
    echo $sid;


}

if ($_POST['id'] == "set_content"){
    $cid = $_POST['cid'];


    $query4 = "select * from course_content where Course_idCourse= '$cid'";
    if ($row = $db->Search($query4)->fetch(PDO::FETCH_ASSOC)){
        $Content_Discription = $row['Content_Discription'];

        echo "<div class='container'>                                                           
                   <div class='row'>                                                       
                       <div class='col-2'></div>
                       <div class='col-8 mt-4'>
                       <h1 class=''>Course Content</h1><hr style='width: 40%; color: black; margin-left: 0'>                   
                           <div class='ml-4'>
                               $Content_Discription
                           </div>
                       </div>
                       <div class='col-2'></div>
                   </div>
              </div>                                                     ";
    }
}
<?php
session_start();
include '../../../db.php';
$db = new db();

if ($_POST['id'] == "insert") {

  $Frist_Name = $_POST['Frist_Name'];
  $Last_Name = $_POST['Last_Name'];
  $Full_Name = $_POST['Full_Name'];
  $Contact_no1 = $_POST['Contact_no1'];
  $Contact_no2 = $_POST['Contact_no2'];
  $Birth_day = $_POST['Birth_day'];
  $Address_line1 = $_POST['Address_line1'];
  $Address_line2 = $_POST['Address_line2'];
  $Address_line3 = $_POST['Address_line3'];
  $City = $_POST['City'];
  $Guardian_Name = $_POST['Guardian_Name'];
  $Guardian_CNo = $_POST['Guardian_CNo'];
  $Guardian_Email = $_POST['Guardian_Email'];
  $User_name = $_POST['User_name'];
  $Password = $_POST['Password'];
//  $img_path = $_POST['img_path'];

  $screenSize = $_POST['screenSize'];

  $tDate = date("Y-m-d");
  date_default_timezone_set("Asia/Colombo");
  $tTime = date("h:i:sa");
  $Activity_Type = "Student Register";

  $query = "INSERT INTO student (Frist_Name, Last_Name, Full_Name, Contact_no1, Contact_no2,
                  Birth_day, Address_line1, Address_line2, Address_line3, City, Guardian_Name, Guardian_CNo, Guardian_Email, User_name, Password, img_path)
                VALUES ('$Frist_Name', '$Last_Name', '$Full_Name', '$Contact_no1', '$Contact_no2',
                        '$Birth_day', '$Address_line1', '$Address_line2', '$Address_line3', '$City', '$Guardian_Name', '$Guardian_CNo', '$Guardian_Email', '$User_name', '$Password', '../admin/custom/img/studentImg/default-image.png')";

  $db->IUD($query);

  $query_3 = "SELECT MAX(idStudent) as id FROM student";
  $rs_3 = $db->Search($query_3);

  $Student_idStudent=1;
  if ($row = $rs_3->fetch(PDO::FETCH_ASSOC)){
    $Student_idStudent = $row['id'];
  }else{

  }

  $query1 = "insert into log (Student_idStudent, Date, Time, Device, Activity_Type) values ('$Student_idStudent','$tDate','$tTime','$screenSize','$Activity_Type')";
  $db->IUD($query1);
}

if ($_POST['id'] == "show") {

  $output = "";

  $output .= "
        <table id=\"example1\" class=\"table table-bordered table-striped\">
            <thead class='text-center'>
            <tr>
                <th hidden>Student Id</th>
                <th>Full Name</th>
                <th>Contact Number</th>
                <th>Address</th>
                <th>Guardian Name</th>
                <th>Guardian Number</th>
                <th>Student Email</th>
                <th>Change Status</th>
                <th>Control</th>
            </tr>
            </thead>
            <tbody class='text-center'>
    ";

  $query = "SELECT * FROM student ORDER by idStudent";

  $rs = $db->Search($query);
  $i = 1;
  while ($row = $rs->fetch(2)) {
    $idStudent = $row['idStudent'];
    $Frist_Name = $row['Frist_Name'];
    $Last_Name = $row['Last_Name'];
    $Full_Name = $row['Full_Name'];
    $Contact_no1 = $row['Contact_no1'];
    $Contact_no2 = $row['Contact_no2'];
    $Birth_day = $row['Birth_day'];
    $Address_line1 = $row['Address_line1'];
    $Address_line2 = $row['Address_line2'];
    $Address_line3 = $row['Address_line3'];
    $City = $row['City'];
    $Guardian_Name = $row['Guardian_Name'];
    $Guardian_CNo = $row['Guardian_CNo'];
    $Guardian_Email = $row['Guardian_Email'];
    $User_name = $row['User_name'];
    $Password = $row['Password'];
    $img_path = $row['img_path'];
    $status = $row['status'];
    $statusId = "s" . $i;

    $final_status = "";
    if ($status == 1){
      $final_status = "<span id='$statusId' onclick='changeStatus($idStudent, $status, \"$statusId\")' class='bg-success p-1 pl-2 pr-2' style='border-radius: 10px; border:none; cursor:pointer'>Activated</span>";
    }else{
      $final_status =  "<span id='$statusId' onclick='changeStatus($idStudent, $status, \"$statusId\")' class='bg-danger p-1 pl-2 pr-2' style='border-radius: 10px; border:none; cursor:pointer'>Deactivated</span>";
    }

    $output .= "
            <tr>
                <td hidden>$idStudent</td>
                <td>$Full_Name</td>
                <td>$Contact_no1</td>
                <td>$Address_line1</td>
                <td>$Guardian_Name</td>
                <td>$Guardian_CNo</td>
                <td>$User_name</td>
                <td>$final_status</td>
                <td class='text-center'>
                <button onclick='getStudentDetails($idStudent,\"$Frist_Name\", \"$Last_Name\", \"$Full_Name\", \"$Contact_no1\", \"$Contact_no2\", \"$Birth_day\",
                \"$Address_line1\", \"$Address_line2\", \"$Address_line3\", \"$City\", \"$Guardian_Name\", \"$Guardian_CNo\", \"$Guardian_Email\", \"$User_name\", \"$Password\", \"$img_path\")'
                title='Update Record' class='btn btn-warning'  type='button' data-toggle='modal' data-target='#student_update'><span><i class=\"fa fa-edit\"></i></span>
                </button></td>
            </tr>
        ";
    $i++;
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
  $update_idStudent = $_POST['update_idStudent'];
  $update_Frist_Name = $_POST['update_Frist_Name'];
  $update_Last_Name = $_POST['update_Last_Name'];
  $update_Full_Name = $_POST['update_Full_Name'];
  $update_Contact_no1 = $_POST['update_Contact_no1'];
  $update_Contact_no2 = $_POST['update_Contact_no2'];
  $update_Birth_day = $_POST['update_Birth_day'];
  $update_Address_line1 = $_POST['update_Address_line1'];
  $update_Address_line2 = $_POST['update_Address_line2'];
  $update_Address_line3 = $_POST['update_Address_line3'];
  $update_City = $_POST['update_City'];
  $update_Guardian_Name = $_POST['update_Guardian_Name'];
  $update_Guardian_CNo = $_POST['update_Guardian_CNo'];
  $update_Guardian_Email = $_POST['update_Guardian_Email'];
  $update_User_name = $_POST['update_User_name'];
  $update_Password = $_POST['update_Password'];

  $query = "UPDATE student SET Frist_Name='$update_Frist_Name', Last_Name='$update_Last_Name', Full_Name='$update_Full_Name', Contact_no1='$update_Contact_no1', Contact_no2='$update_Contact_no2',
    Birth_day='$update_Birth_day', Address_line1='$update_Address_line1', Address_line2='$update_Address_line2', Address_line3='$update_Address_line3', City='$update_City',
    Guardian_Name='$update_Guardian_Name', Guardian_CNo='$update_Guardian_CNo', Guardian_Email='$update_Guardian_Email', User_name='$update_User_name', Password='$update_Password'
    WHERE idStudent='$update_idStudent'";

  $db->IUD($query);
  echo 1;
}

if ($_POST['id'] == "delete") {

  $idStudent = $_POST['idStudent'];

  $query = "DELETE FROM student WHERE idStudent = '$idStudent'";

  $db->IUD($query);

  echo 1;
}

if ($_POST['id'] == "update_status" ){
  $idStudent = $_POST['idStudent'];
  $status = $_POST['status'];

  $query = "update student set status = '$status' where idStudent = '$idStudent'";
  $db->IUD($query);
  echo 1;
}

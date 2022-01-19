<?php
session_start();
include '../../../db.php';
$db = new db();

if ($_POST['id'] == "insert"){

  $Name = $_POST['Name'];
  $Full_Name = $_POST['Full_Name'];
  $Description = $_POST['Description'];
  $Contact_No = $_POST['Contact_No'];
  $Email = $_POST['Email'];
  $NIC_no = $_POST['NIC_no'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $img_path = $_POST['img_path'];

  $query = "INSERT INTO instructer (Name, Full_Name, Description, Photo_Path, Contact_No, Email, NIC_no, username, password)
            VALUES ('$Name', '$Full_Name', '$Description', '$img_path', '$Contact_No', '$Email', '$NIC_no', '$username', '$password')";

  $db->IUD($query);

}

if ($_POST['id'] == "show") {

  $output = "";

  $output .= "
        <table id=\"example1\" class=\"table table-bordered table-striped\">
            <thead class='text-center'>
            <tr>
                <th hidden>Instructor Id</th>
                <th>Full Name</th>
                <th>Description</th>
                <th>Contact Number</th>
                <th>Email</th>
                <th>NIC Number</th>
                <th>User Name</th>
                <th>Control</th>
            </tr>
            </thead>
            <tbody class='text-center'>
    ";

  $query = "SELECT * FROM instructer ORDER by idInstructer";

  $rs = $db->Search($query);

  while ($row = $rs->fetch(2)){
    $idInstructer = $row['idInstructer'];
    $Name = $row['Name'];
    $Full_Name = $row['Full_Name'];
    $Description = $row['Description'];
    $Photo_Path = $row['Photo_Path'];
    $Contact_No = $row['Contact_No'];
    $Email = $row['Email'];
    $NIC_no = $row['NIC_no'];
    $username = $row['username'];
    $password = $row['password'];

    $output.= "
            <tr>
                <td hidden>$idInstructer</td>
                <td>$Full_Name</td>
                <td>$Description</td>
                <td>$Contact_No</td>
                <td>$Email</td>
                <td>$NIC_no</td>
                <td>$username</td>
                <td class='text-center'><button onclick='getInstructorDetails($idInstructer, \"$Name\", \"$Full_Name\", \"$Description\",
                 \"$Photo_Path\", \"$Contact_No\", \"$Email\", \"$NIC_no\", \"$username\", \"$password\" )'
                 title='Update Record' class='btn btn-warning'  type='button' data-toggle='modal' data-target='#instructor_update'><span><i class=\"fa fa-edit\"></i></span></button>
            </tr>
        ";
  }

  $output.='
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
  $update_idInstructer = $_POST['update_idInstructer'];
  $update_Name = $_POST['update_Name'];
  $update_Full_Name = $_POST['update_Full_Name'];
  $update_Description = $_POST['update_Description'];
  $update_img_path = $_POST['update_img_path'];
  $update_Contact_No = $_POST['update_Contact_No'];
  $update_Email = $_POST['update_Email'];
  $update_NIC_no = $_POST['update_NIC_no'];
  $update_username = $_POST['update_username'];
  $update_password = $_POST['update_password'];

  $query = "UPDATE instructer SET Name='$update_Name', Full_Name='$update_Full_Name', Description='$update_Description', Photo_Path='$update_img_path', Contact_No='$update_Contact_No',
    Email='$update_Email', NIC_no='$update_NIC_no', username='$update_username', password='$update_password' WHERE idInstructer = '$update_idInstructer'";

  $db->IUD($query);
  echo 1;
}

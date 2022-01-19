<?php
session_start();
include '../../../db.php';
$db = new db();

if ($_POST['id'] == "insert") {

  $name = $_POST['name'];

  $duplicate = $db->Search("SELECT * FROM category WHERE name = '$name'");

  if ($row = $duplicate->fetch(2)) {
//    echo "Not";
  }else{
//    echo "insert";
    $query = "INSERT INTO category (name) VALUES ('$name')";

    $db->IUD($query);
  }
}

if ($_POST['id'] == "show") {

  $output = "";

  $output .= "
        <table id=\"example1\" class=\"table table-bordered table-striped\">
            <thead class='text-center'>
            <tr>
                <th hidden>Category Id</th>
                <th>Category Name</th>
                <th>Control</th>
            </tr>
            </thead>
            <tbody class='text-center'>
    ";

  $query = "SELECT * FROM category ORDER by idCategory";

  $rs = $db->Search($query);

  while ($row = $rs->fetch(2)) {
    $idCategory = $row['idcategory'];
    $name = $row['name'];

    $output .= "
            <tr>
                <td hidden>$idCategory</td>
                <td>$name</td>
                <td class='text-center'><button onclick='getCategoryDetails($idCategory, \"$name\")' title='Update Record' class='btn btn-warning'  type='button' data-toggle='modal' data-target='#category_update'><span><i class=\"fa fa-edit\"></i></span></button></td>
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

  $update_idcategory = $_POST['update_idcategory'];
  $update_name = $_POST['update_name'];

  $query = "UPDATE category SET name='$update_name' WHERE idcategory = '$update_idcategory'";

  $db->IUD($query);
  echo 1;
}

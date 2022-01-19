<?php
session_start();
include '../../../db.php';
$db = new db();

if ($_POST['id'] == "insert") {

  $category_name = $_POST['category_name'];
  $name = $_POST['name'];

  $query = "INSERT INTO sub_category (name, category_idcategory) VALUES ('$name', '$category_name')";

  $db->IUD($query);

}

if ($_POST['id'] == "show") {

  $output = "";

  $output .= "
        <table id=\"example1\" class=\"table table-bordered table-striped\">
            <thead class='text-center'>
              <tr>
                  <th hidden>Category Id</th>
                  <th>Sub Category Name</th>
                  <th>Category Name</th>
                  <th>Control</th>
              </tr>
            </thead>
            <tbody class='text-center'>
    ";

  $query = "SELECT sub_category.idSub_category, sub_category.category_idcategory, sub_category.name as sub_name , category.name as cat_name
            FROM sub_category, category
            WHERE sub_category.Category_idCategory = category.idCategory
            ORDER BY sub_category.Category_idCategory";

  $rs = $db->Search($query);

  while ($row = $rs->fetch(2)) {
    $idSub_category = $row['idSub_category'];
    $sub_name = $row['sub_name'];
    $cat_name = $row['cat_name'];
    $category_idcategory = $row['category_idcategory'];

    $output .= "
            <tr>
                <td hidden>$idSub_category</td>
                <td>$sub_name</td>
                <td>$cat_name</td>
                <td class='text-center'><button onclick='getSubCategoryDetails($idSub_category, \"$category_idcategory\", \"$sub_name\", \"$cat_name\")'
                title='Update Record' class='btn btn-warning'  type='button' data-toggle='modal' data-target='#sub_category_update'><span><i class=\"fa fa-edit\"></i></span></button></td>
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

  $update_idSub_category = $_POST['update_idSub_category'];
  $update_name = $_POST['update_name'];
  $update_category_name = $_POST['update_category_name'];

  $query = "UPDATE sub_category SET name='$update_name', 	category_idcategory='$update_category_name' WHERE idsub_category = '$update_idSub_category'";

  $db->IUD($query);
  echo 1;
}

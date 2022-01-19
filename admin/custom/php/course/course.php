<?php
session_start();
include "../../../db.php";
$db = new db();

if ($_POST['id'] == "insert") {
  $instructor_name = $_POST['instructor_name'];
  $Course_Name = $_POST['Course_Name'];
  $Discription = $_POST['Discription'];
  $Duration = $_POST['Duration'];
  $Hours = $_POST['Hours'];
  $Price = $_POST['Price'];
  $No_of_Video = $_POST['No_of_Video'];
  $category_name = $_POST['category_name'];
  $subcategory_name = $_POST['subcategory_name'];
  $Content_Discription = $_POST['Content_Discription'];

  $max_id = 1;

//  function get_max_id($tblName, $colName){
////    include "../../../db.php";
//    $db = new db();
//    $query = "SELECT MAX($colName) AS id FROM $tblName";
//    $rs = $db->Search($query);
//    if($row = $rs->fetch(2)) {
//      return $row['id'] + 1;
//    }else {
//      return 1;
//    }
//  }

  $query_3 = "SELECT MAX(idCourse) as id FROM course";
  $rs_3 = $db->Search($query_3);

  $id=1;
  if ($row = $rs_3->fetch(PDO::FETCH_ASSOC)){
    $id = $row['id'] + 1;
  }else{

  }

//  get_max_id('course', 'idCourse', $db);

//  echo $id;

  $query = "INSERT INTO course (idCourse, Instructer_idInstructer, Course_Name, Discription, Duration, Hours, Price, No_of_Video,
                    Introduction_Video_Path, sub_category_idsub_category, sub_category_category_idcategory)
            VALUES ('$id', '$instructor_name', '$Course_Name', '$Discription', '$Duration', '$Hours', '$Price', '$No_of_Video',
                    'path', '$subcategory_name', '$category_name')";

  $query2 = "INSERT INTO course_content (Course_idCourse, Content_Discription) VALUES ('$id', '$Content_Discription')";

  $db->IUD($query);
  $db->Search($query2);
  echo $query;
  echo $query2;

}

if ($_POST['id'] == "getcatid" ){

  $catId = $_POST['catId'];

  $query = "SELECT * FROM sub_category WHERE category_idcategory = '$catId'";

  $rs = $db->Search($query);
  echo "<option selected disabled value='val-1'>Select Sub Category</option>";
  while ($row = $rs->fetch(2)) {
    $idsub_category = $row['idsub_category'];
    $name = $row['name'];
    echo "<option value='".$idsub_category."'>$name</option>";
  }

}

if ($_POST['id'] == "show") {

  $output = "";

  $output .= "
        <table id=\"example1\" class=\"table table-bordered table-striped\">
            <thead class='text-center'>
            <tr>
                <th hidden>Course Id</th>
                <th>Instructor Name</th>
                <th>Course Name</th>
                <th>Description</th>
                <th>Duration</th>
                <th>Price</th>
                <th>Category Name</th>
                <th>Sub Category Name</th>
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

  $query = "SELECT c.idCourse, i.Full_Name, c.Course_Name, c.Discription, c.Duration, c.Hours, c.Price, c.No_of_Video, c.Introduction_Video_Path, cat.name AS category_name, sub_c.name AS sub_category_name,
            cc.idCourse_Content, cc.Course_idCourse, cc.Content_Discription
            FROM course c, instructer i, sub_category sub_c, category cat , course_content cc
            WHERE c.sub_category_idsub_category = sub_c.idsub_category
            AND i.idInstructer = c.Instructer_idInstructer
            AND sub_c.category_idcategory= cat.idcategory
            AND cc.Course_idCourse = c.idCourse";


  $rs = $db->Search($query);

  while ($row = $rs->fetch(2)){
    $idCourse = $row['idCourse'];
    $instructor_name = $row['Full_Name'];
    $Course_Name = $row['Course_Name'];
    $Discription = $row['Discription'];
    $Duration = $row['Duration'];
    $Hours = $row['Hours'];
    $Price = $row['Price'];
    $No_of_Video = $row['No_of_Video'];
    $Introduction_Video_Path = $row['Introduction_Video_Path'];
    $category_name = $row['category_name'];
    $sub_category_name = $row['sub_category_name'];
    $idCourse_Content = $row['idCourse_Content'];
    $Course_idCourse = $row['Course_idCourse'];
    $idCourse_Content = $row['idCourse_Content'];
    $Content_Discription = $row['Content_Discription'];

    $output.= "
            <tr>
                <td hidden>$idCourse</td>
                <td>$instructor_name</td>
                <td>$Course_Name</td>
                <td>$Discription</td>
                <td>$Duration</td>
                <td>$Price</td>
                <td>$category_name</td>
                <td>$sub_category_name</td>
                <td class='text-center'><button onclick='getCourseDetails($idCourse, \"$instructor_name\", \"$Course_Name\",
                \"$Discription\", \"$Duration\", \"$Hours\", \"$Price\", \"$No_of_Video\", \"$Introduction_Video_Path\", \"$category_name\", \"$sub_category_name\", \"$idCourse_Content\", \"$Content_Discription\")'
                title='Update Record' class='btn btn-warning'  type='button' data-toggle='modal' data-target='#course_update'><span><i class=\"fa fa-edit\"></i></span></button>
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

if ($_POST['id'] == "update"){
  $update_idCourse = $_POST['update_idCourse'];
  $update_instructor_name = $_POST['update_instructor_name'];
  $update_Course_Name = $_POST['update_Course_Name'];
  $update_Discription = $_POST['update_Discription'];
  $update_Duration = $_POST['update_Duration'];
  $update_Hours = $_POST['update_Hours'];
  $update_Price = $_POST['update_Price'];
  $update_No_of_Video = $_POST['update_No_of_Video'];
//  $update_Introduction_Video_Path = $_POST['update_Introduction_Video_Path'];
  $update_category_name = $_POST['update_category_name'];
  $update_subcategory_name = $_POST['subcategory_name2'];
  $update_idCourse_Content =$_POST['update_idCourse_Content'];
  $update_Content_Discription = $_POST['update_Content_Discription'];

  $query = "update course set Instructer_idInstructer='$update_instructor_name', Course_Name='$update_Course_Name', Discription='$update_Discription', Duration='$update_Duration',
    Hours='$update_Hours', Price='$update_Price', No_of_Video='$update_No_of_Video', sub_category_idsub_category='$update_category_name',
    sub_category_category_idcategory='$update_subcategory_name' where idCourse='$update_idCourse'";

  $query2 = "update course_content set Content_Discription='$update_Content_Discription' where Course_idCourse  ='$update_idCourse'";

  $db->IUD($query);
  $db->IUD($query2);
  echo 1;
}

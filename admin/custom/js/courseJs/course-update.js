function getCourseDetails(idCourse, instructor_name, Course_Name, Discription,
                          Duration, Hours, Price, No_of_Video, category_name, sub_category_name,idCourse_Content, Content_Discription) {

  // alert(Content_Discription);
  document.getElementById('update_idCourse').value = idCourse;
  document.getElementById('update_instructor_name').value = instructor_name;
  document.getElementById('update_Course_Name').value = Course_Name;
  document.getElementById('update_Discription').value = Discription;
  document.getElementById('update_Duration').value = Duration;
  document.getElementById('update_Hours').value = Hours;
  document.getElementById('update_Price').value = Price;
  document.getElementById('update_No_of_Video').value = No_of_Video;
  document.getElementById('update_category_name').value = category_name;
  document.getElementById('subcategory_name2').value = sub_category_name;
  document.getElementById('update_idCourse_Content').value = idCourse_Content;
  document.getElementById('update_Content_Discription').value = Content_Discription;

}

$("#update_course").click(function (e) {

  var update_idCourse = $("#update_idCourse").val();
  var update_instructor_name = $("#update_instructor_name").val();
  var update_Course_Name = $("#update_Course_Name").val();
  var update_Discription = $("#update_Discription").val();
  var update_Duration = $("#update_Duration").val();
  var update_Hours = $("#update_Hours").val();
  var update_Price = $("#update_Price").val();
  var update_No_of_Video = $("#update_No_of_Video").val();
  var update_category_name = $("#update_category_name").val();
  var subcategory_name2 = $("#subcategory_name2").val();
  var update_idCourse_Content = $("#update_idCourse_Content").val();
  var update_Content_Discription = $("#update_Content_Discription").val();
// alert(subcategory_name2);
  var id = "update";
  var dt = {
    id: id,
    update_idCourse: update_idCourse,
    update_instructor_name: update_instructor_name,
    update_Course_Name: update_Course_Name,
    update_Discription: update_Discription,
    update_Duration: update_Duration,
    update_Hours: update_Hours,
    update_Price: update_Price,
    update_No_of_Video: update_No_of_Video,
    update_category_name: update_category_name,
    subcategory_name2: subcategory_name2,
    update_idCourse_Content:update_idCourse_Content,
    update_Content_Discription: update_Content_Discription
  };

  if (update_Course_Name == "") {
    Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Oops...',
      text: 'Please Fill The Course Name',
    })
  }  else if (update_instructor_name == null) {
    Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Oops...',
      text: 'Please Select The Instructor Name',
    })
  }else if (update_Discription == "") {
    Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Oops...',
      text: 'Please Fill The Description',
    })
  } else if (update_Hours == "") {
    Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Oops...',
      text: 'Please Fill The Hourse',
    })
  } else if (update_Price == "") {
    Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Oops...',
      text: 'Please Fill The Price',
    })
  } else if (update_No_of_Video == "") {
    Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Oops...',
      text: 'Please Fill The Number Of Video',
    })
  } else if (update_category_name == null) {
    Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Oops...',
      text: 'Please Fill The Category Name',
    })
  } else if (subcategory_name2 == null) {
    Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Oops...',
      text: 'Please Fill The Sub Category Name',
    })
  }
  else if (update_Content_Discription == "") {
    Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Oops...',
      text: 'Please Fill The Course Content Description',
    })
  } else {
    $.ajax({
      url: '../../custom/php/course/course.php',
      method: 'POST',
      data: dt,
      success: function (msg) {
        // alert(msg);
        if (msg == 1) {

          course_load();
          e.preventDefault();
          $('#course_update').modal('hide');


          Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'Course Details has been Updated',
            showConfirmButton: false,
            timer: 1500
          })
        }else {
          Swal.fire({
            position: 'top-end',
            icon: 'error',
            title: 'Oops...',
            text: 'Upload Failed!',
          })
        }
      },
      error: function (request, error) {
        alert("Request " + JSON.stringify(error));
      }
    });
  }

});

function categorySelected(catId) {
// alert(catId);
//   alert("hi");
  var id = "getcatid";
  $.ajax({
    url: '../../custom/php/course/course.php',
    method: 'POST',
    data: {id, catId},
    success: function (msg) {
      // alert(msg);

      $('#subcategory_name').html(msg);

    },
    error: function (request, error) {
      alert("Request: " + JSON.stringify(error));
    }
  });

}

function categorySelected2(catId) {
// alert(catId);
//   alert("hi");
  var id = "getcatid";
  $.ajax({
    url: '../../custom/php/course/course.php',
    method: 'POST',
    data: {id, catId},
    success: function (msg) {
      // alert(msg);

      $('#subcategory_name2').html(msg);

    },
    error: function (request, error) {
      alert("Request: " + JSON.stringify(error));
    }
  });

}

function getStudentVideoDetails(ID, Student_idStudent, Course_idCourse, Start_date, Expire_date) {
  // alert("dd");
  document.getElementById('update_id').value = ID;
  document.getElementById('update_student_name').value = Student_idStudent;
  document.getElementById('update_course_name').value = Course_idCourse;
  document.getElementById('update_Start_date').value = Start_date;
  document.getElementById('update_Expire_date').value = Expire_date;

}

$("#update_student_video_add").click(function (e) {

  var update_id = $("#update_id").val();
  var update_student_name = $("#update_student_name").val();
  var update_course_name = $("#update_course_name").val();
  var update_Start_date = $("#update_Start_date").val();
  var update_Expire_date = $("#update_Expire_date").val();

  var id = "update";
  var dt = {
    id: id,
    update_id:update_id,
    update_student_name: update_student_name,
    update_course_name: update_course_name,
    update_Start_date: update_Start_date,
    update_Expire_date: update_Expire_date,
    update_Review_Comment: update_Review_Comment,
    update_Feedback_rate: update_Feedback_rate
  };

  if (update_student_name == "") {
    Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Oops...',
      text: 'Please Fill The Student Name',
    })
  } else if (update_course_name == "") {
    Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Oops...',
      text: 'Please Fill The Course Name',
    })
  }else if (update_Start_date == "") {
    Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Oops...',
      text: 'Please Fill The Start Date',
    })
  }else if (update_Expire_date == "") {
    Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Oops...',
      text: 'Please Fill The Expire Date',
    })
  } else {
    $.ajax({
      url: '../../custom/php/studentHasCoursePhp/studentHasCourse.php',
      method: 'POST',
      data: dt,
      success: function (msg) {
        // alert(msg);
        if (msg == 1) {

          loadStudentVideo();
          e.preventDefault();
          $('#student_video_update').modal('hide');


          Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'Category Details has been Updated',
            showConfirmButton: false,
            timer: 1500
          })
        } else {
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

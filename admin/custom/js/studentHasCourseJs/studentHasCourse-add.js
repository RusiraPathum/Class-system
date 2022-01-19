

$('#student_video_add').click(function (){
  // alert("hh");
  var student_name = $("#student_name").val();
  var course_name = $("#course_name").val();
  var Start_date = $("#Start_date").val();
  var Expire_date = $("#Expire_date").val();
  // var Review_Comment = $("#Review_Comment").val();
  // var Feedback_rate = $("#Feedback_rate").val();

  var id = "insert";
  var dt = {
    id:id,
    student_name:student_name,
    course_name:course_name,
    Start_date:Start_date,
    Expire_date:Expire_date,
  };

  // alert(JSON.stringify(dt));

  if (student_name == ""){
    Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Oops...',
      text: 'Please Fill The Student Name!',
    });
  }else if (course_name == ""){
    Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Oops...',
      text: 'Please Fill The Course Name!',
    });
  }else if (Start_date == ""){
    Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Oops...',
      text: 'Please Fill The Start Date!',
    });
  }else if (Expire_date == ""){
    Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Oops...',
      text: 'Please Fill The Expire Date!',
    });
  }else {
    $.ajax({
      url: '../../custom/php/studentHasCoursePhp/studentHasCourse.php',
      method:'POST',
      data:dt,
      success:function (msg){
        // alert(msg);
        // console.log(msg);
        Swal.fire({
          position: 'top-end',
          icon: 'success',
          title: 'Your Video has been saved',
          showConfirmButton: false,
          timer: 1500
        });
        $("#quickForm")[0].reset();
        loadStudentVideo();
      },
      error:function (request, error){
        alert("Request: "+JSON.stringify(error));
      }
    });
  }

});

function loadStudentVideo() {
  var id = "show";

  $.ajax({
    url: '../../custom/php/studentHasCoursePhp/studentHasCourse.php',
    type: 'POST',
    cache: false,
    data: {id:id},
    success:function (data){
      $('#student_video_table').html(data);
    },
    error: function (request, error){
      alert("Request: "+JSON.stringify(request));
    }
  });
}

$(document).ready(function () {
  loadStudentVideo();
});
let x = 1;
function getCourseId(cid){
  alert("hh");

  var x = document.getElementById("course_name").value;
  alert(x);
}

function getStartDate(Start_date){

  alert(x);

  var id = "set_expire_date";

  var dt = {id:id, Start_date:Start_date};

  alert(JSON.stringify(dt));

  $.ajax({
    url: '../../custom/php/studentHasCoursePhp/studentHasCourse.php',
    method:'POST',
    data:dt,
    success:function (msg){
      alert(msg);
      $('#Expire_date').html(msg);
    }
  })
}

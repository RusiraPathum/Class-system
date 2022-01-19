$("#add_course").click(function () {
  // alert("hi");
  var instructor_name = $("#instructor_name").val();
  var Course_Name = $("#Course_Name").val();
  var Discription = $("#Discription").val();
  var Duration = $("#Duration").val();
  var Hours = $("#Hours").val();
  var Price = $("#Price").val();
  var No_of_Video = $("#No_of_Video").val();
  // var instructor_name = $("#instructor_name").val();
  var category_name = $("#category_name").val();
  var subcategory_name = $('#subcategory_name').val();
  var Content_Discription = $('#Content_Discription').val();

  // alert(instructor_name);
  var id = "insert";
  var dt = {
    id: id,
    instructor_name: instructor_name,
    Course_Name: Course_Name,
    Discription: Discription,
    Duration: Duration,
    Hours: Hours,
    Price: Price,
    No_of_Video: No_of_Video,
    category_name: category_name,
    subcategory_name: subcategory_name,
    Content_Discription:Content_Discription
  };

  // alert(JSON.stringify(dt));

  if (Course_Name == "") {
    Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Oops...',
      text: 'Please Fill The Course Name',
    })
  } else if (Discription == "") {
    Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Oops...',
      text: 'Please Fill The Description',
    })
  } else if (Duration == "") {
    Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Oops...',
      text: 'Please Fill The Duration',
    })
  } else if (Hours == "") {
    Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Oops...',
      text: 'Please Fill The Hours',
    })
  } else if (Price == "") {
    Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Oops...',
      text: 'Please Fill The Price',
    })
  } else if (No_of_Video == "") {
    Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Oops...',
      text: 'Please Fill Number Of Video',
    })
  } else if (subcategory_name == "") {
    Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Oops...',
      text: 'Please Fill Sub category',
    })
  } else if (Content_Discription == "") {
    Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Oops...',
      text: 'Please Fill The Course Content Description',
    })
  }else {
    $.ajax({
      url: '../../custom/php/course/course.php',
      method: 'POST',
      data: dt,
      success: function (msg) {
        // alert(msg);
        Swal.fire({
          position: 'top-end',
          icon: 'success',
          title: 'Sub Category has been saved',
          showConfirmButton: false,
          timer: 1500
        })
        $("#quickForm")[0].reset();
        course_load();
      },
      error: function (request, error) {
        alert("Request " + JSON.stringify(error));
      }
    })
  }

});

function course_load() {
  var id = "show";

  $.ajax({
    url: '../../custom/php/course/course.php',
    type: 'POST',
    cache: false,
    data: {id:id},
    success:function (data){
      $('#course_table').html(data);
    },
    error: function (request, error){
      alert("Request: "+JSON.stringify(request));
    }
  });
}

$(document).ready(function () {
  course_load();
});

function categorySelected(catId) {
// alert(catId);
  // alert("hi");
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


$(document).ready(function (){
  // $(document).on('click', '#show_data', function (e){
  var id = "show";


  // });
});

function delete_video(idCourse_Videos) {
  // alert("delete");
  // alert(idCourse_Videos);

  var id = "delete";
  var dt = {
    id: id,
    idCourse_Videos: idCourse_Videos
  };

  // alert(JSON.stringify(dt));

  Swal.fire({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!'
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        url: '../../custom/php/video/video.php',
        method: 'POST',
        data: dt,
        success: function (msg) {
          if (msg == 1) {
            Swal.fire(
              'Deleted!',
              'Your file has been deleted.',
              'success'
            )
            loardVideo();
          } else {

          }
        },
        error: function (request, error) {
          alert("Request: " + JSON.stringify(error));
        }
      });
    }
  })


}

// function loardVideo(){
//   var course_name_search_id = $("#course_name_search_id").val();
//
//
//   var id = "search";
//   var dt = {
//     id: id,
//     course_name_search_id: course_name_search_id
//   };
//
//   // alert(JSON.stringify(dt));
//
//   $.ajax({
//     url: '../../custom/php/video/video.php',
//     method: 'POST',
//     data: dt,
//     success: function (msg) {
//       // alert(msg);
//       $('#videoSearch').html(msg);
//
//     },
//     error: function (request, error) {
//       alert("Request " + JSON.stringify(error));
//     }
//   })
// }

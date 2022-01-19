function getVideoDetails(idCourse_Videos, course_name, Type, Title, Discription, Video_length, Video_path, duration){
  // alert(Title);

  document.getElementById('update_idCourse_Videos').value = idCourse_Videos;
  document.getElementById('update_course_name').value = course_name;
  document.getElementById('update_Type').value = Type;
  document.getElementById('update_Title').value = Title;
  document.getElementById('update_Discription').value = Discription;
  document.getElementById('update_Video_length').value = Video_length;
  document.getElementById('update_Video_path').value = null;
  document.getElementById('update_duration').value = duration;
}

// $("#update_video").click(function (e) {
//
//   var update_idCourse_Videos = $('#update_idCourse_Videos').val();
//   var update_course_name = $('#update_course_name').val();
//   var update_Type = $('#update_Type').val();
//   var update_Number = $('#update_Number').val();
//   var update_Title = $('#update_Title').val();
//   var update_Discription = $('#update_Discription').val();
//   var update_Video_length = $('#update_Video_length').val();
//   var update_Video_path = $('#update_Video_path').val();
//
//   var id = "update";
//   var dt = {
//     id: id,
//     update_idCourse_Videos: update_idCourse_Videos,
//     update_course_name: update_course_name,
//     update_Type: update_Type,
//     update_Number: update_Number,
//     update_Title: update_Title,
//     update_Discription: update_Discription,
//     update_Video_length: update_Video_length,
//     update_Video_path:update_Video_path
//   };
//
//   if (update_course_name == "") {
//     Swal.fire({
//       position: 'top-end',
//       icon: 'error',
//       title: 'Oops...',
//       text: 'Please Fill The Course Name',
//     })
//   } else if (update_Type == "") {
//     Swal.fire({
//       position: 'top-end',
//       icon: 'error',
//       title: 'Oops...',
//       text: 'Please Fill The Type',
//     })
//   } else if (update_Number == "") {
//     Swal.fire({
//       position: 'top-end',
//       icon: 'error',
//       title: 'Oops...',
//       text: 'Please Fill The Number',
//     })
//   } else if (update_Title == "") {
//     Swal.fire({
//       position: 'top-end',
//       icon: 'error',
//       title: 'Oops...',
//       text: 'Please Fill The Title',
//     })
//   } else if (update_Discription == "") {
//     Swal.fire({
//       position: 'top-end',
//       icon: 'error',
//       title: 'Oops...',
//       text: 'Please Fill The Description',
//     })
//   } else if (update_Video_length == "") {
//     Swal.fire({
//       position: 'top-end',
//       icon: 'error',
//       title: 'Oops...',
//       text: 'Please Fill The Video Length',
//     })
//   }else if (update_Video_path == "") {
//     Swal.fire({
//       position: 'top-end',
//       icon: 'error',
//       title: 'Oops...',
//       text: 'Please Upload The Video',
//     })
//   } else {
//     $.ajax({
//       url: '../../custom/php/video/video.php',
//       method: 'POST',
//       data: dt,
//       success: function (msg) {
//         // alert(msg);
//         if (msg == 1) {
//
//           loadVideo();
//           e.preventDefault();
//           $('#video_update').modal('hide');
//
//           Swal.fire({
//             position: 'top-end',
//             icon: 'success',
//             title: 'Video Details has been Updated',
//             showConfirmButton: false,
//             timer: 1500
//           })
//         } else {
//           Swal.fire({
//             position: 'top-end',
//             icon: 'error',
//             title: 'Oops...',
//             text: 'Upload Failed!',
//           })
//         }
//       },
//       error: function (request, error) {
//         alert("Request " + JSON.stringify(error));
//       }
//     });
//   }
//
// });

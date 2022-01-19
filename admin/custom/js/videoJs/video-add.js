// $("#add_video").click(function () {
//   // alert("hi");
//   var course_name = $("#course_name").val();
//   var Type = $("#Type").val();
//   var Number = $("#Number").val();
//   var Title = $("#Title").val();
//   var Discription = $("#Discription").val();
//   var Video_length = $("#Video_length").val();
//   var Video_path = $("#Video_path").val();
//
//   var id = "insert";
//   var dt = {
//     id: id,
//     course_name: course_name,
//     Type: Type,
//     Number: Number,
//     Title: Title,
//     Discription: Discription,
//     Video_length: Video_length,
//     Video_path:Video_path
//   };
//
//   // alert(JSON.stringify(dt));
//
//   if (course_name == "") {
//     Swal.fire({
//       position: 'top-end',
//       icon: 'error',
//       title: 'Oops...',
//       text: 'Please Fill The Course Name',
//     })
//   } else if (Type == "") {
//     Swal.fire({
//       position: 'top-end',
//       icon: 'error',
//       title: 'Oops...',
//       text: 'Please Fill The Type',
//     })
//   } else if (Number == "") {
//     Swal.fire({
//       position: 'top-end',
//       icon: 'error',
//       title: 'Oops...',
//       text: 'Please Fill The Number',
//     })
//   } else if (Title == "") {
//     Swal.fire({
//       position: 'top-end',
//       icon: 'error',
//       title: 'Oops...',
//       text: 'Please Fill The Title',
//     })
//   } else if (Discription == "") {
//     Swal.fire({
//       position: 'top-end',
//       icon: 'error',
//       title: 'Oops...',
//       text: 'Please Fill The Description',
//     })
//   } else if (Video_length == "") {
//     Swal.fire({
//       position: 'top-end',
//       icon: 'error',
//       title: 'Oops...',
//       text: 'Please Fill The Video Length',
//     })
//   }if (Video_path == "") {
//     Swal.fire({
//       position: 'top-end',
//       icon: 'error',
//       title: 'Oops...',
//       text: 'Please Upload The Course Video',
//     })
//   } else {
//     $.ajax({
//       url: '../../custom/php/video/video.php',
//       method: 'POST',
//       data: dt,
//       success: function (msg) {
//         alert(msg);
//         // Swal.fire({
//         //   position: 'top-end',
//         //   icon: 'success',
//         //   title: 'Video has been saved',
//         //   showConfirmButton: false,
//         //   timer: 1500
//         // })
//         $("#quickForm")[0].reset();
//         loadVideo();
//       },
//       error: function (request, error) {
//         alert("Request " + JSON.stringify(error));
//       }
//     })
//   }
//
// });

function loadVideo() {
  var id = "show";

  $.ajax({
    url: '../../custom/php/video/video.php',
    type: 'POST',
    cache: false,
    data: {id:id},
    success:function (data){
      $('#video_table').html(data);
    },
    error: function (request, error){
      alert("Request: "+JSON.stringify(request));
    }
  });
}

$(document).ready(function () {
  loadVideo();
});

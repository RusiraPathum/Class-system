$('#search_video').click(function () {

  // var course_name_search_id = $("#course_name_search_id").val();
  //
  //
  // var id = "search";
  // var dt = {
  //   id: id,
  //   course_name_search_id: course_name_search_id
  // };
  //
  // // alert(JSON.stringify(dt));
  //
  // $.ajax({
  //   url: '../../custom/php/video/video.php',
  //   method: 'POST',
  //   data: dt,
  //   success: function (msg) {
  //     // alert(msg);
  //     $('#videoSearch').html(msg);
  //
  //   },
  //   error: function (request, error) {
  //     alert("Request " + JSON.stringify(error));
  //   }
  // })

});


function loardVideo(){
  var course_name_search_id = $("#course_name_search_id").val();


  var id = "search";
  var dt = {
    id: id,
    course_name_search_id: course_name_search_id
  };

  // alert(JSON.stringify(dt));

  $.ajax({
    url: '../../custom/php/video/video.php',
    method: 'POST',
    data: dt,
    success: function (msg) {
      // alert(msg);
      $('#videoSearch').html(msg);

    },
    error: function (request, error) {
      alert("Request " + JSON.stringify(error));
    }
  })
}



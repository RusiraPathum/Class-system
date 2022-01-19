function loadInstructor(){
  var id = "show";

  $.ajax({
    url: '../../custom/php/instructorPhp/instructor.php',
    type: 'POST',
    cache: false,
    data: {id:id},
    success:function (data){
      $('#instructor_table').html(data);
    },
    error: function (request, error){
      alert("Request: "+JSON.stringify(request));
    }
  });
}

$(document).ready(function (){
  loadInstructor();
});

// $(document).on('click', '#show_data', function (e){
//    var id = "show";
//
//    $.ajax({
//       url: 'custom/php/student.php',
//       type: 'POST',
//        cache: false,
//        data: {id:id},
//        success:function (data){
//           $('#table').html(data);
//        },
//        error: function (request, error){
//           alert("Request: "+JSON.stringify(request));
//        }
//    });
// });

function loadx() {
  var id = "show";

  $.ajax({
    url: '../../custom/php/studentPhp/student.php',
    type: 'POST',
    cache: false,
    data: {id: id},
    success: function (data) {
      $('#table').html(data);
    },
    error: function (request, error) {
      alert("Request: " + JSON.stringify(request));
    }
  });
}

$(document).ready(function () {
  loadx();
});

function changeStatus(idStudent, status, statusId) {

  var id = "update_status";
  var newStatus = 0;
  if (status == 1) {
    newStatus = 0;
  } else if (status == 0) {
    newStatus = 1;
  }
  var dt = {id: id, idStudent: idStudent, status: newStatus};


  Swal.fire({
    title: 'Are you sure?',
    text: "You won't be able to Change Status!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, Change!'
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        url: '../../custom/php/studentPhp/student.php',
        method: 'POST',
        data: dt,
        success: function (msg) {
          if (msg == "1") {
            Swal.fire(
              'Changed!',
              '',
              'success'
            )
            let jsID = "#" + statusId;

            if ($(jsID).text() == "Activated") {
              $(jsID).text("Deactivated");
              $(jsID).addClass("bg-danger");
              $(jsID).removeClass("bg-success");
            } else {
              $(jsID).text("");
              $(jsID).text("Activated");
              $(jsID).removeClass("bg-danger");
              $(jsID).addClass("bg-success");
            }

          } else {
            alert("Update failed!");
          }
        }

      });

    }
  })

}

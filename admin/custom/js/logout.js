$('#logout').click(function (){
  // alert("logout");

  var id = "logout";


  Swal.fire({
    title: 'Are you sure?',
    text: "You won't be able to Logout!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, Logout!'
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        url: 'custom/php/logout.php',
        method: 'POST',
        data: {id:id},
        success: function (msg) {
          if (msg == 1){
            window.location.href = "../Online_class_static/index.php";
          }
        },
        error: function (request, error) {
          alert("Request: " + JSON.stringify(error));
        }
      });
    }
  })



});

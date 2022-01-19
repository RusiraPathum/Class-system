function delete_user(idStudent) {
  // alert("delete");

  var id = "delete";
  var dt = {
    id: id,
    idStudent: idStudent
  };
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
        url: '../../custom/php/studentPhp/student.php',
        method: 'POST',
        data: dt,
        success: function (msg) {
          if (msg == 1){
            Swal.fire(
              'Deleted!',
              'Your file has been deleted.',
              'success'
            )
            loadx();
          }

        },
        error: function (request, error) {
          alert("Request: " + JSON.stringify(error));
        }
      });
    }
  })


  // alert(JSON.stringify(dt));

  //

}


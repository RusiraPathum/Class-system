function getCategoryDetails(idcategory, name){
  document.getElementById('update_idcategory').value = idcategory;
  document.getElementById('update_name').value = name;
}

$("#update_category").click(function (e){

  var update_idcategory = $("#update_idcategory").val();
  var update_name = $("#update_name").val();

  var id ="update";
  var dt = {
    id:id,
    update_idcategory:update_idcategory,
    update_name:update_name,
  };

  if (update_name == ""){
    Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Oops...',
      text: 'Please Fill The Category Name',
    })
  }else {
    $.ajax({
      url: '../../custom/php/categoryPhp/category.php',
      method: 'POST',
      data: dt,
      success: function (msg) {
        // alert(msg);
        if (msg == 1) {

          loadCategory();
          e.preventDefault();
          $('#category_update').modal('hide');


          Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'Category Details has been Updated',
            showConfirmButton: false,
            timer: 1500
          })
        }else {
          Swal.fire({
            position: 'top-end',
            icon: 'error',
            title: 'Oops...',
            text: 'Upload Failed!',
          })
        }
      },
      error: function (request, error) {
        alert("Request " + JSON.stringify(error));
      }
    });
  }

});



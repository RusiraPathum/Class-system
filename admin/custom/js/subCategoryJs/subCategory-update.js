function  getSubCategoryDetails(idSub_category, category_idcategory, sub_name,){
// alert(category_idcategory);
  document.getElementById('update_idSub_category').value = idSub_category;
  document.getElementById('update_category_name').value = category_idcategory;
  // alert($('#update_category_name').val());
  // $("#update_category_name option[value='2']").attr("selected","selected");
  document.getElementById('update_name').value = sub_name;

}

$("#update_sub_category").click(function (e){

  var update_idSub_category = $('#update_idSub_category').val();
  var update_category_name = $('#update_category_name').val();
  var update_name = $('#update_name').val();

  // alert(update_category_name);
  var id = "update";
  var dt = {
    id:id,
    update_idSub_category:update_idSub_category,
    update_category_name:update_category_name,
    update_name:update_name
  };

  if (update_name == ""){
    Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Oops...',
      text: 'Please Fill The Sub Category Name',
    })
  }else {
    $.ajax({
      url: '../../custom/php/subCategoryPhp/subCategory.php',
      method: 'POST',
      data: dt,
      success: function (msg) {
        // alert(msg);
        if (msg == 1) {

          loadSubCategory();
          e.preventDefault();
          $('#sub_category_update').modal('hide');

          Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'Sub Category Details has been Updated',
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

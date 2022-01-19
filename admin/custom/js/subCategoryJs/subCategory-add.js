$("#subcategory_add").click(function () {
  var category_name = $("#category_name").val();
  var name = $("#name").val();


  var id = "insert";
  var dt = {id:id, category_name:category_name, name:name};


  if (name == "") {
    Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Oops...',
      text: 'Please Fill Course content field',
    })
  } else {

    $.ajax({
      url: '../../custom/php/subCategoryPhp/subCategory.php',
      method: 'POST',
      data: dt,
      success: function (msg) {
        // alert(msg);
        Swal.fire({
          position: 'top-end',
          icon: 'success',
          title: 'Sub Category has been saved',
          showConfirmButton: false,
          timer: 1500
        })
        document.getElementById('name').value=null;
        loadSubCategory()
      },
      error: function (request, error) {
        alert("Request: " + JSON.stringify(error));
      }
    });

  }

});

function loadSubCategory(){
  var id = "show";

  $.ajax({
    url: '../../custom/php/subCategoryPhp/subCategory.php',
    type: 'POST',
    cache: false,
    data: {id:id},
    success:function (data){
      $('#sub_category_table').html(data);
    },
    error: function (request, error){
      alert("Request: "+JSON.stringify(request));
    }
  });
}
$(document).ready(function (){
  loadSubCategory()
});

function categoryAdd(){

  var name = document.getElementById('name').value;

  var id = "insert";

  var dt = {id:id, name:name}

  // alert(JSON.stringify(dt));

  if (name == ""){
    Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Oops...',
      text: 'Please Fill The Category Name!',
    })
  }else{
    $.ajax({
      url: '../../custom/php/categoryPhp/category.php',
      method: 'POST',
      data: dt,
      success: function (msg) {
        // alert(msg);
        Swal.fire({
          position: 'top-end',
          icon: 'success',
          title: 'Category has been saved',
          showConfirmButton: false,
          timer: 1500
        })
        document.getElementById('name').value=null;
        loadCategory();
      },
      error: function (request, error) {
        alert("Request: " + JSON.stringify(request));
      }
    });
  }

}
function loadCategory(){
  var id = "show";

  $.ajax({
    url: '../../custom/php/categoryPhp/category.php',
    type: 'POST',
    cache: false,
    data: {id:id},
    success:function (data){

      $('#category_table').html(data);
    },
    error: function (request, error){
      alert("Request: "+JSON.stringify(request));
    }
  });
}


$(document).ready(function (){
  loadCategory();
});

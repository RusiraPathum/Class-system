function getInstructorDetails(idInstructer, Name, Full_Name, Description,
                              Photo_Path, Contact_No, Email, NIC_no, username, password) {
  document.getElementById('update_idInstructer').value = idInstructer;
  document.getElementById('update_Name').value = Name;
  document.getElementById('update_Full_Name').value = Full_Name;
  document.getElementById('update_Description').value = Description;
  document.getElementById('update_img_path').value = null;
  document.getElementById('update_Contact_No').value = Contact_No;
  document.getElementById('update_Email').value = Email;
  document.getElementById('update_NIC_no').value = NIC_no;
  document.getElementById('update_username').value = username;
  document.getElementById('update_password').value = password;
}

$("#instructor_recode_update").click(function (e) {

  // alert("hi");

  var update_idInstructer = $("#update_idInstructer").val();
  var update_Name = $("#update_Name").val();
  var update_Full_Name = $("#update_Full_Name").val();
  var update_Description = $("#update_Description").val();
  // var update_img_path = $("#update_img_path").val();
  var update_Contact_No = $("#update_Contact_No").val();
  var update_Email = $("#update_Email").val();
  var update_NIC_no = $("#update_NIC_no").val();
  var update_username = $("#update_username").val();
  var update_password = $("#update_password").val();
  var update_img_path = document.getElementById('update_img_path').files[0];
  let update_imagePath = "";



  if (update_Name == "") {
    Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Oops...',
      text: 'Please Fill The Name',
    })
  } else if (update_Full_Name == "") {
    Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Oops...',
      text: 'Please Fill The Full Name',
    })
  } else if (update_Description == "") {
    Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Oops...',
      text: 'Please Fill The Description',
    })
  } else if (update_img_path == "") {
    Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Oops...',
      text: 'Please Upload The Image',
    })
  } else if (update_Contact_No == "") {
    Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Oops...',
      text: 'Please Fill The Phone Number',
    })
  } else if (update_Email == "") {
    Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Oops...',
      text: 'Please Fill The Email',
    })
  } else if (update_NIC_no == "") {
    Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Oops...',
      text: 'Please Fill The NIC Number',
    })
  } else if (update_username == "") {
    Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Oops...',
      text: 'Please Fill The User Name',
    })
  } else if (update_password == "") {
    Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Oops...',
      text: 'Please Fill The Password',
    })
  } else {
    let update_imagePath = "../../custom/img/instructorImg/" + update_img_path.name;

    var id = "update";
    var dt = {
      id: id,
      update_idInstructer: update_idInstructer,
      update_Name: update_Name,
      update_Full_Name: update_Full_Name,
      update_Description: update_Description,
      update_img_path: update_imagePath,
      update_Contact_No: update_Contact_No,
      update_Email: update_Email,
      update_NIC_no: update_NIC_no,
      update_username: update_username,
      update_password: update_password,
    }

    // alert(JSON.stringify(dt));

    $.ajax({
      url: '../../custom/php/instructorPhp/instructor.php',
      method: 'POST',
      data: dt,
      success: function (msg) {
        if (msg == 1) {

          loadInstructor();
          e.preventDefault();
          $('#instructor_update').modal('hide');

          Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'Instructor Details has been Updated',
            showConfirmButton: false,
            timer: 1500
          });
          uploadImage_update(update_img_path);
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

function randomPassword(length) {
  var chars = "abcdefghijklmnopqrstuvwxyz!@#$%^&*()-+<>ABCDEFGHIJKLMNOP1234567890";
  var pass = "";
  for (var x = 0; x < length; x++) {
    var i = Math.floor(Math.random() * chars.length);
    pass += chars.charAt(i);
  }
  document.getElementById('update_password').value = pass;
}

function myFunction() {
  var x = document.getElementById("update_password");

  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

function uploadImage_update(file) {
  let form_data = new FormData();
  form_data.append('file', file);

  $.ajax({
    url: '../../custom/php/instructorPhp/upload_instructor_img.php',
    dataType: 'text',
    cache: false,
    contentType: false,
    processData: false,
    data: form_data,
    type: 'post',
    success: function (php_script_response) {
      // alert(php_script_response);
    }
  });
}

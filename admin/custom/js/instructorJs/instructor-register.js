function instructorRegister() {

  var Name = document.getElementById('Name').value;
  var Full_Name = document.getElementById('Full_Name').value;
  var Description = document.getElementById('Description').value;
  // var Photo_Path = document.getElementById('Photo_Path').value;
  var Contact_No = document.getElementById('Contact_No').value;
  var Email = document.getElementById('Email').value;
  var NIC_no = document.getElementById('NIC_no').value;
  var username = document.getElementById('username').value;
  var password = document.getElementById('password').value;
  var img_path = document.getElementById('img_path').files[0];
  let imagePath = "";



  if (Name == "") {
    Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Oops...',
      text: 'Please Fill The Name!',
    })
  } else if (Full_Name == "") {
    Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Oops...',
      text: 'Please Fill The Full Name!',
    })
  } else if (Description == "") {
    Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Oops...',
      text: 'Please Fill The Description!',
    })
  } else if (Contact_No == "") {
    Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Oops...',
      text: 'Please Fill The Contact Number!',
    })
  } else if (Email == "") {
    Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Oops...',
      text: 'Please Fill The Email!',
    })
  } else if (NIC_no == "") {
    Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Oops...',
      text: 'Please Fill The NIC Number!',
    })
  } else if (username == "") {
    Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Oops...',
      text: 'Please Fill The User Name!',
    })
  } else if (img_path == undefined) {
    Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Oops...',
      text: 'Please Upload The Image!',
    })
  } else if (password == "") {
    Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Oops...',
      text: 'Please Fill The Password!',
    })
  } else {

    let imagePath = "../../custom/img/instructorImg/" + img_path.name;

    var id = "insert";
    var dt = {
      id: id,
      Name: Name,
      Full_Name: Full_Name,
      Description: Description,
      Contact_No: Contact_No,
      Email: Email,
      NIC_no: NIC_no,
      username: username,
      password: password,
      img_path: imagePath
    }

    $.ajax({
      url: '../../custom/php/instructorPhp/instructor.php',
      method: 'POST',
      data: dt,
      success: function (msg) {
        Swal.fire({
          position: 'top-end',
          icon: 'success',
          title: 'Instructor has been saved',
          showConfirmButton: false,
          timer: 1500
        });
        $("#quickForm")[0].reset();
        uploadImage1(img_path);
      },
      error: function (request, error) {
        alert("Request: " + JSON.stringify(request));
      }
    });
  }
}

function uploadImage1(file) {
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


function randomPassword(length) {
  var chars = "abcdefghijklmnopqrstuvwxyz!@#$%^&*()-+<>ABCDEFGHIJKLMNOP1234567890";
  var pass = "";
  for (var x = 0; x < length; x++) {
    var i = Math.floor(Math.random() * chars.length);
    pass += chars.charAt(i);
  }
  document.getElementById('password').value = pass;
}

function myFunction() {
  var x = document.getElementById("password");

  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

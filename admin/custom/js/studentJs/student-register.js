$('#student_register').click(function (){

  var x = screen.width;

  let screenSize = "";

  if (x >= 1150){
    screenSize = "Laptop";
  }else if (400 >= x){
    screenSize = "Mobile";
  }else if (400 > x <= 1150){
    screenSize = "Tablet"
  }

  // alert("hhh");
  var Frist_Name = document.getElementById('Frist_Name').value;
  var Last_Name = document.getElementById('Last_Name').value;
  var Full_Name = document.getElementById('Full_Name').value;
  var Contact_no1 = document.getElementById('Contact_no1').value;
  var Contact_no2 = document.getElementById('Contact_no2').value;
  var Birth_day = document.getElementById('Birth_day').value;
  var Address_line1 = document.getElementById('Address_line1').value;
  var Address_line2 = document.getElementById('Address_line2').value;
  var Address_line3 = document.getElementById('Address_line3').value;
  var City = document.getElementById('City').value;
  var Guardian_Name = document.getElementById('Guardian_Name').value;
  var Guardian_CNo = document.getElementById('Guardian_CNo').value;
  var Guardian_Email = document.getElementById('Guardian_Email').value;
  var User_name = document.getElementById('User_name').value;
  var Password = document.getElementById('Password').value;
  // var img_path = document.getElementById('img_path').files[0];
  let imagePath = "";

  // alert(imagePath);




  if (Frist_Name == "") {
    Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Oops...',
      text: 'Please Fill The First Name!',
    })
  } else if (Last_Name == "") {
    Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Oops...',
      text: 'Please Fill The Last Name!',
    })
  } else if (Full_Name == "") {
    Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Oops...',
      text: 'Please Fill The Full Name!',
    })
  } else if (Contact_no1 == "") {
    Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Oops...',
      text: 'Please Fill The Contact Number!',
    })
  } else if (Contact_no2 == "") {
    Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Oops...',
      text: 'Please Fill The Contact Number!',
    })
  } else if (Birth_day == "") {
    Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Oops...',
      text: 'Please Fill The Birth Day!',
    })
  } else if (Address_line1 == "") {
    Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Oops...',
      text: 'Please Fill The Address Line1!',
    })
  } else if (Address_line2 == "") {
    Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Oops...',
      text: 'Please Fill The Address Line2!',
    })
  } else if (Address_line3 == "") {
    Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Oops...',
      text: 'Please Fill The Address Line3!',
    })
  } else if (City == "") {
    Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Oops...',
      text: 'Please Fill The City!',
    })
  }else if (Guardian_Name == "") {
    Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Oops...',
      text: 'Please Fill The Guardian Name!',
    })
  }else if (Guardian_CNo == "") {
    Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Oops...',
      text: 'Please Fill The Guardian Contact Number!',
    })
  }else if (Guardian_Email == "") {
    Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Oops...',
      text: 'Please Fill The Guardian Email!',
    })
  }else if (User_name == "") {
    Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Oops...',
      text: 'Please Fill The Student Email!',
    })
  }else if (Password == "") {
    Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Oops...',
      text: 'Please Fill The Password!',
    })
  }else {
    // let imagePath = "../../custom/img/studentImg/" + img_path.name;
    var id = "insert";
    var dt = {
      id: id,
      Frist_Name: Frist_Name,
      Last_Name: Last_Name,
      Full_Name: Full_Name,
      Contact_no1: Contact_no1,
      Contact_no2: Contact_no2,
      Birth_day: Birth_day,
      Address_line1: Address_line1,
      Address_line2: Address_line2,
      Address_line3: Address_line3,
      City: City,
      Guardian_Name: Guardian_Name,
      Guardian_CNo: Guardian_CNo,
      Guardian_Email: Guardian_Email,
      User_name: User_name,
      Password: Password,
      screenSize:screenSize
    }
    // alert(JSON.stringify(dt));
    $.ajax({
      url: '../../custom/php/studentPhp/student.php',
      method: 'POST',
      data: dt,
      success: function (msg) {
        // alert(msg);
        Swal.fire({
          position: 'top-end',
          icon: 'success',
          title: 'Student Details has been saved',
          showConfirmButton: false,
          timer: 1500
        });
        $("#quickForm")[0].reset();
        // uploadImage(img_path);
      },
      error: function (request, error) {
        alert("Request: " + JSON.stringify(request));
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
  document.getElementById('Password').value = pass;
}

function myFunction() {
  var x = document.getElementById("Password");

  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

// function uploadImage(file) {
//   let form_data = new FormData();
//   form_data.append('file', file);
//   $.ajax({
//     url: '../../custom/php/studentPhp/upload-img.php',
//     dataType: 'text',
//     cache: false,
//     contentType: false,
//     processData: false,
//     data: form_data,
//     type: 'post',
//     success: function (php_script_response) {
//       // alert(php_script_response);
//     }
//   });
// }

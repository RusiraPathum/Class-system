function getStudentDetails(idStudent, Frist_Name, Last_Name, Full_Name,
                           Contact_no1, Contact_no2, Birth_day, Address_line1,
                           Address_line2, Address_line3, City, Guardian_Name,
                           Guardian_CNo, Guardian_Email, User_name, Password,
                           img_path) {

  document.getElementById('update_idStudent').value = idStudent;
  document.getElementById('update_Frist_Name').value = Frist_Name;
  document.getElementById('update_Last_Name').value = Last_Name;
  document.getElementById('update_Full_Name').value = Full_Name;
  document.getElementById('update_Contact_no1').value = Contact_no1;
  document.getElementById('update_Contact_no2').value = Contact_no2;
  document.getElementById('update_Birth_day').value = Birth_day;
  document.getElementById('update_Address_line1').value = Address_line1;
  document.getElementById('update_Address_line2').value = Address_line2;
  document.getElementById('update_Address_line3').value = Address_line3;
  document.getElementById('update_City').value = City;
  document.getElementById('update_Guardian_Name').value = Guardian_Name;
  document.getElementById('update_Guardian_CNo').value = Guardian_CNo;
  document.getElementById('update_Guardian_Email').value = Guardian_Email;
  document.getElementById('update_User_name').value = User_name;
  document.getElementById('update_Password').value = Password;
  document.getElementById('update_img_path').value = img_path;

}

$("#student_recode_update").click(function (e) {
  var update_idStudent = $("#update_idStudent").val();
  var update_Frist_Name = $("#update_Frist_Name").val();
  var update_Last_Name = $("#update_Last_Name").val();
  var update_Full_Name = $("#update_Full_Name").val();
  var update_Contact_no1 = $("#update_Contact_no1").val();
  var update_Contact_no2 = $("#update_Contact_no2").val();
  var update_Birth_day = $("#update_Birth_day").val();
  var update_Address_line1 = $("#update_Address_line1").val();
  var update_Address_line2 = $("#update_Address_line2").val();
  var update_Address_line3 = $("#update_Address_line3").val();
  var update_City = $("#update_City").val();
  var update_Guardian_Name = $("#update_Guardian_Name").val();
  var update_Guardian_CNo = $("#update_Guardian_CNo").val();
  var update_Guardian_Email = $("#update_Guardian_Email").val();
  var update_User_name = $("#update_User_name").val();
  var update_Password = $("#update_Password").val();
  // var update_img_path = $("#update_img_path").val();

  var id = "update";
  var dt = {
    id: id,
    update_idStudent:update_idStudent,
    update_Frist_Name: update_Frist_Name,
    update_Last_Name: update_Last_Name,
    update_Full_Name: update_Full_Name,
    update_Contact_no1: update_Contact_no1,
    update_Contact_no2: update_Contact_no2,
    update_Birth_day: update_Birth_day,
    update_Address_line1: update_Address_line1,
    update_Address_line2: update_Address_line2,
    update_Address_line3: update_Address_line3,
    update_City: update_City,
    update_Guardian_Name: update_Guardian_Name,
    update_Guardian_CNo: update_Guardian_CNo,
    update_Guardian_Email: update_Guardian_Email,
    update_User_name:update_User_name,
    update_Password: update_Password,
  }

  // alert(JSON.stringify(dt));

  if (update_Frist_Name == "") {
    Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Oops...',
      text: 'Please Fill The First Name',
    })
  } else if (update_Last_Name == "") {
    Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Oops...',
      text: 'Please Fill The Last Name',
    })
  } else if (update_Full_Name == "") {
    Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Oops...',
      text: 'Please Fill The Full Name',
    })
  } else if (update_Contact_no1 == "") {
    Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Oops...',
      text: 'Please Fill The Contact Number',
    })
  } else if (update_Contact_no2 == "") {
    Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Oops...',
      text: 'Please Fill The Contact Number',
    })
  } else if (update_Birth_day == "") {
    Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Oops...',
      text: 'Please Fill The Birth Day',
    })
  } else if (update_Address_line1 == "") {
    Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Oops...',
      text: 'Please Fill The Address Line 1',
    })
  } else if (update_Address_line2 == "") {
    Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Oops...',
      text: 'Please Fill The Address Line 2',
    })
  } else if (update_Address_line3 == "") {
    Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Oops...',
      text: 'Please Fill The Address Line 3',
    })
  } else if (update_City == "") {
    Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Oops...',
      text: 'Please Fill The City',
    })
  } else if (update_Guardian_Name == "") {
    Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Oops...',
      text: 'Please Fill The Guardian Name',
    })
  } else if (update_Guardian_CNo == "") {
    Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Oops...',
      text: 'Please Fill The Guardian Contact Number',
    })
  } else if (update_Guardian_Email == "") {
    Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Oops...',
      text: 'Please Fill The Guardian Email',
    })
  } else if (update_User_name == "") {
    Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Oops...',
      text: 'Please Fill The Student Email',
    })
  } else if (update_Password == "") {
    Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'Oops...',
      text: 'Please Fill The Password',
    })
  } else {
      $.ajax({
        url: '../../custom/php/studentPhp/student.php',
        method: 'POST',
        data: dt,
        success:function (msg){
          if(msg == 1) {
            loadx();
            e.preventDefault();
            $('#student_update').modal('hide');

            Swal.fire({
              position: 'top-end',
              icon: 'success',
              title: 'Student Details has been Updated',
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
          // $("#student_update").modal("hide");
        },

        error:function (request, error){
          alert("Request "+JSON.stringify(error));
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
  document.getElementById('update_Password').value = pass;
}

function myFunction() {
  var x = document.getElementById("update_Password");

  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}



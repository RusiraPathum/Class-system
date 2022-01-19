$("#login").click(function () {

    var x = screen.width;

    let screenSize = "";

    if (x >= 1150){
        screenSize = "Laptop";
    }else if (400 >= x){
        screenSize = "Mobile";
    }else if (400 > x <= 1150){
        screenSize = "Tablet"
    }

    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;

    // alert(x);

    if ($.trim(username).length > 0 && $.trim(password).length > 0) {

        var id = "login";

        var dt = {
            id: id,
            username: username,
            password: password,
            screenSize:screenSize
        };
        // console.log(dt);

        $.ajax({
            url: 'custom/php/backend.php',
            method: 'POST',
            data: dt,
            cache: false,
            success: function (msg) {
                // alert(msg);
                if (msg == 0) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Incorrect Username or Password!',
                    })
                } else if (msg == 1) {
                    window.location = "video.php";
                } else if (msg == 2) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Your Session Expired!',
                    })
                } else if(msg == 3){
                    window.location = "../admin/admin-dashboard.php";
                }else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Pleases Register Our System!',
                    })
                }
            },
            error: function (request, error) {
                alert("Request: " + JSON.stringify(request));
            }
        });
    } else
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Fill the Email And Password!',
        });
    return false;
});

// $("#forgot_password").click(function () {
//
//     var username = document.getElementById('username').value;
//
//     var id = "forgpass";
//
//     $.ajax({
//         url: './custom/php/backend.php',
//         method: 'POST',
//         data: {id: id, username: username},
//         success: function (msg) {
//             // alert(msg);
//             if (msg == "0") {
//                 Swal.fire({
//                     icon: 'error',
//                     title: 'Oops...',
//                     text: 'Please enter username to proceed with password reset',
//                 });
//             } else {
//                 // $('#forgot_email').html(msg);
//                 window.location.replace('forgot_password.php');
//             }
//
//
//         },
//         error: function (request, error) {
//             alert("Request: " + JSON.stringify(request));
//         }
//     })
// });


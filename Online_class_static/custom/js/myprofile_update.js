function update_my_profile(sid) {

    document.getElementById('update_idStudent').value = sid;

}

$('#student_image_update').click(function () {

    var update_idStudent = document.getElementById('update_idStudent').value;
    var img_path = document.getElementById('update_img_path').files[0];
    let imagePath = "../admin/custom/img/studentImg/" + img_path.name;



    var id = "upload_image";
    var dt = {id: id, update_idStudent: update_idStudent, img_path: imagePath};



    $.ajax({
        url: 'custom/php/backend.php',
        method: 'POST',
        data: dt,
        beforeSend: function () {
            $('#eeeee').html("<lable class='text-success'>Image Uploading...</lable>");
            setTimeout(function() {
                $('#student_setting').modal();
            }, 3000);
        },
        success: function (msg) {
            uploadImage2(img_path);
        },
        error: function (request, error) {
            alert("Request: " + JSON.stringify(request));
        }
    });
});

function uploadImage2(file) {
    let form_data = new FormData();
    form_data.append('file', file);
    $.ajax({
        url: 'custom/php/upload_image.php',
        dataType: 'text',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        type: 'post',
        success: function (php_script_response) {
            // alert(php_script_response);
            // alert("h3");
            // $('#eeeee').html(php_script_response);
        }
    });
}


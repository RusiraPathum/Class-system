function course_video_load(title, id_course, course_idCourse) {
    // $('#course_title_video').html('');

    var id = "load_course_video";

    var dt = {id:id, id_course:id_course, title:title, course_idCourse:course_idCourse};
    // $('#course_title_video').html("");
    $.ajax({
        url: 'custom/php/courseLoad.php',
        method: 'POST',
        data: dt,
        success: function (msg) {
            // alert(msg);
            if (msg == "NA"){
                Swal.fire({
                    icon: 'error',
                    title: 'Sorry...',
                    text: 'Clicked Video Expired!',
                });
            }else{
                $('#course_title_video').html(msg);
            }
        }
    });

}


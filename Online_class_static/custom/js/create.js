$('#title_click').click(function () {
    alert("hh");

    var id = "get_title"

    $.ajax({
        url: 'custom/php/create.php',
        method: 'POST',
        data: {id: id},
        success: function (msg) {
            alert(msg);
        }
    });
});

$('#add_feedback').click(function () {

    var Review_Comment = $("#Review_Comment").val();

    var id = "feedback";
    var dt = {id: id, courseID:currentCoures, sid:currentStudent, Review_Comment: Review_Comment};

    $.ajax({
        url: 'custom/php/backend.php',
        method: 'POST',
        data: dt,
        success: function (msg) {
            $('#error').html(msg);
            $("#error").fadeOut(2000);
            $("#quickForm")[0].reset();
        }

    });
});

var currentCoures = null;
var currentStudent = null;

function getCourseName(cid, sid) {

    var id = "set_content";
    $.ajax({
       url: 'custom/php/create.php',
       method: 'POST',
       data:{id:id, cid:cid},
       success:function (msg){
           $('#course_content').html(msg);
       }
    });

   currentCoures = cid;
   currentStudent = sid;
    $('#all_course').removeAttr("hidden");
}


<?php
session_start();
include './db.php';
$db = new db();
$first_name = "Student";
$sid = "";
if (isset($_SESSION['name'])) {
    $first_name = $_SESSION['name'];
    $sid = $_SESSION['idStudent'];

}

?>

<!DOCTYPE html>
<html lang="zxx" class="no-js" xmlns="http://www.w3.org/1999/html">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="i">
    <!-- Author Meta -->

    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>YouCan.lk | Video</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--CSS============================================= -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">
    <link href="css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
          integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!--    <link rel="stylesheet" href="css/main.css">-->
    <link rel="stylesheet" href="css/video.css">


</head>
<body>

<!--Start content section-->
<div class="page-wrapper chiller-theme toggled">

    <a id="show-sidebar" class="btn btn-sm" style="background-color: #51be78; z-index: 1" href="#">
        <i class="fas fa-bars" style="background-color: #51be78; color: black; "></i>
    </a>

    <nav style="border-color: red" id="sidebar" class="sidebar-wrapper">

        <div class="sidebar-content">

            <div class="sidebar-brand row">
                <div class="col-10">
                    <h4 class="text-">
                        <?php
                        echo "Hi " . $first_name;
                        ?>
                    </h4>
                </div>
                <div class="col-2" id="close-sidebar">
                    <i class="fas fa-times"></i>
                </div>
            </div>

            <div class="sidebar-menu">
                <ul>
                    <?php
                    $query1 = "select * from student_has_course where Student_idStudent = '$sid'";
                    $rs1 = $db->Search($query1);
                    while ($row = $rs1->fetch(PDO::FETCH_ASSOC)) {
                        $idc = $row['Course_idCourse'];
                        $courseID = $row['Course_idCourse'];
                        $_SESSION['courseID'] = $row['Course_idCourse'];
                        $query2 = "select * from course where idCourse = '$idc'";
                        $rs2 = $db->Search($query2);
                        while ($row = $rs2->fetch(PDO::FETCH_ASSOC)) {
                            $Course_Name = $row['Course_Name'];
                            echo "<li class='sidebar-dropdown'>
                                    <a href='#' onclick='getCourseName($courseID, \"$sid\")'>
                                        <i class='fa fa-tachometer-alt'></i>
                                        <span>$Course_Name</span>
                                    </a>
                                    <div class=\"sidebar-submenu\">
                                        <ul>";

                            $query3 = "select * from course_videos where Course_idCourse = '$idc'";
                            $rs3 = $db->Search($query3);
                            while ($row = $rs3->fetch(PDO::FETCH_ASSOC)) {
                                $Title = $row['Title'];
                                $idCourse_Videos = $row['idCourse_Videos'];

                                echo "<li>
                                        <a href='#' onclick=\"course_video_load('$Title','$idCourse_Videos', '$idc')\">
                                         <span>$Title</span>
                                        </a>
                                      </li>";
                            }
                            echo "</ul>
                              </div>
                             </li>";

                        }
                    }

                    //                    $query = "SELECT s.idStudent, c.Course_Name AS course_name
                    //                                  FROM student_has_course shc, course c, student s
                    //                                  WHERE c.idCourse = shc.Course_idCourse AND s.idStudent = shc.Student_idStudent
                    //                                  AND s.idStudent = '$sid'";
                    //
                    //                    $query_1 = "SELECT *
                    //                                    FROM `student` As s INNER JOIN `student_has_course` AS sc
                    //                                    ON s.idStudent=sc.Student_idStudent INNER JOIN `course_videos` AS c ON
                    //                                    sc.Course_idCourse=c.Course_idCourse where s.idStudent='$sid'
                    //                                    GROUP BY c.idCourse_Videos";
                    //
                    //                    //                    and c.Course_idCourse='3'
                    //
                    //                    $rs = $db->Search($query);
                    //
                    //                    $rs_1 = $db->Search($query_1);
                    //
                    //                    while ($row = $rs->fetch(PDO::FETCH_ASSOC)) {
                    //                        $course_Name = $row['course_name'];
                    //
                    //
                    //                        echo "<li class='sidebar-dropdown'>
                    //                                    <a href='#'>
                    //                                        <i class='fa fa-tachometer-alt'></i>
                    //                                        <span>$course_Name</span>
                    //                                    </a>
                    //                                    <div class=\"sidebar-submenu\">
                    //                                    <ul>";
                    //
                    //                        while ($row = $rs_1->fetch(PDO::FETCH_ASSOC)) {
                    //
                    //                            $course_video_title = $row['Title'];
                    //                            $idCourse_Videos = $row['idCourse_Videos'];
                    //                            $Course_idCourse = $row['Course_idCourse'];
                    //
                    //                            echo "<li>
                    //                                    <a href='#' onclick=\"course_video_load('$course_video_title','$idCourse_Videos', '$Course_idCourse')\">
                    //                                         <span>$course_video_title</span>
                    //                                     </a>
                    //                                   </li>";
                    //                        }
                    //                        echo "</ul>
                    //                              </div>
                    //                             </li>";
                    //
                    //                    }

                    ?>
                </ul>
            </div>
            <div id="table">

            </div>
            <!-- sidebar-menu  -->
        </div>
        <!-- sidebar-content  -->

        <div class="sidebar-footer mb-3">
            <?php

            if ($row = $db->Search("select * from student where idStudent = '$sid'")->fetch(PDO::FETCH_ASSOC)) {

                $First_Name = $row['Frist_Name'];
                $Birth_day = $row['Birth_day'];
                $Full_Name = $row['Full_Name'];
                $Contact_no1 = $row['Contact_no1'];
                $Password = $row['Password'];
                $img_path = $row['img_path'];

                echo "     
                    <div class='mr-auto ml-2 p-1/'>
                        <a title='My Profile' onclick='update_my_profile($sid)' class='btn' style='cursor: pointer; background-color: white'  data-toggle='modal' data-target='#student_setting'>My Profile
                            <i class='fa fa-cog'></i>
                        </a>
                    </div>
                    <div class=\"ml - auto p - 1\">
                        <a type=\"submit\" id=\"logout\" class=\"btn mb - 1 align - items - center\"
                            style=\"color: red; background - color: white\" title=\"Logout\">Logout<i
                                class=\"ml-1 fa fa-power-off\"></i>
                        </a>
                    </div>";

            }
            ?>


        </div>

    </nav>
    <!-- sidebar-wrapper  -->
    <main class="page-content">
        <div class="container-fluid">
            <div id="course_title_video" class="embed-responsive embed-responsive-16by9">
                <?php
                $db = new db();

                $query = "SELECT * FROM video_uplod ORDER BY id";
                $rs = $db->Search($query);

                if ($rs->rowCount() > 0) {
                    while ($row = $rs->fetch(2)) {
                        $name = $row['name'];
                        $video = $row['video'];
                        echo "<div style='height:100%; margin-right: 5px;'>
                                <video oncontextmenu='return false;' disablePictureInPicture autoplay controls controlsList='nodownload' src='../admin/custom/Video/$video' controls ></video>
                              </div>";
                    }
                } else {
                    echo "<p class=text>Video Not Found</p>";
                }
                ?>
            </div>

            <!--All courses-->
            <section class="" id="all_course" hidden>
                <div class="all-courses">
                    <div class="">
                        <div class="row">
                            <div class="col-12 ">
                                <nav>
                                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                        <a class="nav-item nav-link active" id="description" data-toggle="tab"
                                           href="#nav-maths"
                                           role="tab" aria-controls="nav-maths" aria-selected="true" style="font-weight: bold; font-size: 1.2rem">Description</a>
                                        <!--                                        <a class="nav-item nav-link" id="nav-biology-tab" data-toggle="tab"-->
                                        <!--                                           href="#nav-biology"-->
                                        <!--                                           role="tab" aria-controls="nav-biology" aria-selected="false">Q&A</a>-->
                                        <a class="nav-item nav-link" id="nav-art-tab" data-toggle="tab" href="#nav-art"
                                           role="tab"
                                           aria-controls="nav-art" aria-selected="false" style="font-weight: bold; font-size: 1.2rem">Review</a>
                                        <!--                                        <a class="nav-item nav-link" id="nav-technology-tab" data-toggle="tab"-->
                                        <!--                                           href="#nav-technology" role="tab" aria-controls="nav-technology"-->
                                        <!--                                           aria-selected="false">Announcement</a>-->
                                    </div>
                                </nav>
                                <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-maths" role="tabpanel"
                                         aria-labelledby="description">
                                        <div id="course_content"></div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-biology" role="tabpanel"
                                         aria-labelledby="nav-biology-tab">
                                        <div class="bg-primary" style="height: 100px"></div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-art" role="tabpanel"
                                         aria-labelledby="nav-art-tab">
                                        <div class="pt-5">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-2"></div>
                                                    <div class="col-8">
                                                        <form method="post" id="quickForm">
                                                            <div class="form-group">
                                                                <div class="form-row">
                                                                    <div class="col-lg-12 col-sm-12 col-12">
                                                                        <label for="Review_Comment">Review And Comment</label>
                                                                        <textarea type="text" name="Review_Comment"
                                                                                  class="form-control"
                                                                                  id="Review_Comment"
                                                                                  placeholder="Review And Comment" rows="5" required></textarea>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="ml-3">
                                                                    <input class="btn btn-primary mr-auto" id="add_feedback"
                                                                           type="button"
                                                                           value="Submit">
                                                                </div>
                                                                <div class="ml-3 mt-1" id="error"></div>
                                                            </div>

                                                        </form>
                                                    </div>
                                                    <div class="col-2"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-technology" role="tabpanel"
                                         aria-labelledby="nav-technology-tab">
                                        <div class="bg-danger" style="height: 100px"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--All courses-->

            <br><br>
            <!-- start footer Area -->
            <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                            <h2 class="mb-4">Widura</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae nemo minima qui dolor,
                                iusto
                                iure.</p>
                            <p><a href="#">Learn More</a></p>
                        </div>
                        <div class="col-lg-3">
                            <h3 class="footer-heading"><span>Our Campus</span></h3>
                            <ul class="list-unstyled">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">CoursesO</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3">
                            <h3 class="footer-heading"><span>Our Courses</span></h3>
                            <ul class="list-unstyled">
                                <li><a href="#">Math</a></li>
                                <li><a href="#">Science &amp; Engineering</a></li>
                                <li><a href="#">Arts &amp; Humanities</a></li>
                                <li><a href="#">Economics &amp; Finance</a></li>
                                <li><a href="#">Business Administration</a></li>
                                <li><a href="#">Computer Science</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3">
                            <h3 class="footer-heading"><span>Contact</span></h3>
                            <ul class="list-unstyled">
                                <li><a href="#">Help Center</a></li>
                                <li><a href="#">Support Community</a></li>
                                <li><a href="#">Press</a></li>
                                <li><a href="#">Share Your Story</a></li>
                                <li><a href="#">Our Supporters</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="copyright">
                                <p>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                                    All rights reserved by <a href="https://www.optimizesolutions.lk/" target="_blank">Optimize
                                        Solutions</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End footer Area -->
        </div>
    </main>
    <!-- page-content" -->

    <div class="modal fade" id="student_setting">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h4 class="modal-title" style="color: white">My Profile</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                            <?php
                            if ($row = $db->Search("SELECT * FROM student where idStudent='$sid'")->fetch(PDO::FETCH_ASSOC)) {
                                $First_Name = $row['Frist_Name'];
                                $Last_Name = $row['Last_Name'];
                                $Full_Name = $row['Full_Name'];
                                $Contact_no1 = $row['Contact_no1'];
                                $Birth_day = $row['Birth_day'];
                                $Guardian_Name = $row['Guardian_Name'];
                                $Guardian_CNo = $row['Guardian_CNo'];
                                $img_path = $row['img_path'];

                                $imageExplode = explode("/", $img_path);
                                $allImage = $imageExplode[2]."/".$imageExplode[3]."/".$imageExplode[4]."/".$imageExplode[5];

                                echo "<div class='row'>
                                        <div class='col-lg-6 col-md-6 col-12'>
                                            <div class='mt-4'>
                                                <div class='row'>
                                                    <div class='col-6'>
                                                        <p style='font-weight: bold'>First name :</span> </p>                                                                                                                                
                                                    </div>
                                                    <div class='col-6  ml-0'>
                                                        <p class='mt-1'>$First_Name</p>    
                                                    </div>                                                                                                                                                      
                                                </div>
                                               
                                                <div class='row mt-2'>
                                                    <div class='col-6'>
                                                        <p style='font-weight: bold'>Last name : </p>                                                                                                                                
                                                    </div>
                                                    <div class='col-6  ml-0'>
                                                        <p class='mt-1'>$Last_Name</p>    
                                                    </div>                                                                                                                                                      
                                                </div>
                                               
                                                <div class='row mt-2'>
                                                    <div class='col-6'>
                                                        <p style='font-weight: bold'>Full name : </p>                                                                                                                                
                                                    </div>
                                                    <div class='col-6  ml-0'>
                                                        <p class='mt-1'>$Full_Name</p>    
                                                    </div>                                                                                                                                                      
                                                </div>
                                               
                                                <div class='row mt-2'>
                                                    <div class='col-6'>
                                                        <p style='font-weight: bold'>Contact Number : </p>                                                                                                                                
                                                    </div>
                                                    <div class='col-6  ml-0'>
                                                        <p class='mt-1'>$Contact_no1</p>    
                                                    </div>                                                                                                                                                      
                                                </div>
                                               
                                                <div class='row mt-2'>
                                                    <div class='col-6'>
                                                        <p style='font-weight: bold'>Birth Day : </p>                                                                                                                                
                                                    </div>
                                                    <div class='col-6  ml-0'>
                                                        <p class='mt-1'>$Birth_day</p>    
                                                    </div>                                                                                                                                                      
                                                </div>
                                               
                                                 <div class='row mt-2'>
                                                    <div class='col-6'>
                                                        <p style='font-weight: bold'>Guardian Name : </p>                                                                                                                                
                                                    </div>
                                                    <div class='col-6  ml-0'>
                                                        <p class='mt-1'>$Guardian_Name</p>    
                                                    </div>                                                                                                                                                      
                                                </div>
                                               
                                                <div class='row mt-2'>
                                                    <div class='col-6 text'>
                                                        <p style='font-weight: bold'>Guardian Number : </p>                                                                                                                                
                                                    </div>
                                                    <div class='col-6  ml-0'>
                                                        <p class='mt-1'>$Guardian_CNo</p>    
                                                    </div>                                                                                                                                                      
                                                </div>                                               
                                            </div>   
                                       </div> 
                                        <div class='col-lg-6 col-md-6 col-12 mt-'>                                        
                                                <div class='form-group'>
                                                    <input type='hidden' class='form-control' id='update_idStudent' name='id' disabled>
                                                </div>
                                            <div class='row'>
                                                 <div class='col-12 align-items-center text-center container'>                                                                                                                                                                                               
                                                    <img id='upload_image' style='width: 50%; border-radius: 50%; borde' src='../admin/$allImage'>
                                                 </div>
                                                <div class='col-12 mt-3 d-flex justify-content-center'>
                                                    <form id='quickForm' method='post' enctype='multipart/form-data'>
                                                        <div class='form-group'>
                                                            <div class='form-row justify-content-center'>
                                                                <div class='col-6'>
                                                                <label for='update_img_path'>Upload Image</label>
                                                                <input name='update_img_path' id='update_img_path' type='file'
                                                                    class='orm-control-file' required>
                                                                <small id='eeeee' class='form-text text-muted'>This is some PNG, JPG,
                                                                    JPEG.</small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class='d-flex justify-content-center'>
                                                            <input class='btn btn-primary' id='student_image_update'
                                                            type='submit'
                                                                value='Upload Image''>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>                                                                                                                                                                                          
                                       </div>                  
                                      </div>";
                            }
                            ?>
                    </div>

                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

</div>


<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/jquery.mb.YTPlayer.min.js"></script>
<script src="js/main.js"></script>

<script src="custom/js/login.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


<script>

    $(document).bind("contextmenu", function (e) {
        e.preventDefault();
    });

    function loadSidePanel() {
        let ajaxID = "get-side-panel";
        $.ajax({
            url: 'custom/php/courseLoad.php',
            method: 'GET',
            data: {id: ajaxID},
            success: function (data) {
                console.log(data);
                $('#table').html(data);
            }
        });
    }

    document.onkeydown = function (e) {
        if (event.keyCode == 123) {
            return false;
        }
        if (e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
            return false;
        }
        if (e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
            return false;
        }
        if (e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
            return false;
        }
        if (e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
            return false;
        }
    }
    jQuery(function ($) {

        $(".sidebar-dropdown > a").click(function () {

            $(".sidebar-submenu").slideUp(200);
            if (
                $(this)
                    .parent()
                    .hasClass("active")
            ) {
                $(".sidebar-dropdown").removeClass("active");
                $(this)
                    .parent()
                    .removeClass("active");
            } else {
                $(".sidebar-dropdown").removeClass("active");
                $(this)
                    .next(".sidebar-submenu")
                    .slideDown(200);
                $(this)
                    .parent()
                    .addClass("active");
            }
        });

        $("#close-sidebar").click(function () {
            $(".page-wrapper").removeClass("toggled");
        });
        $("#show-sidebar").click(function () {
            $(".page-wrapper").addClass("toggled");
        });


    });

    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });

</script>

<script src="custom/js/courseLoad.js"></script>
<script src="custom/js/create.js"></script>
<script src="custom/js/logout.js"></script>
<script src="custom/js/myprofile_update.js"></script>

</body>
</html>
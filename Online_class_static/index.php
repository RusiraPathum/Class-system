<!DOCTYPE html>
<html lang="en">

<head>
    <title>Class</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


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

        <link rel="stylesheet" href="css/home.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
          integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

</head>

<body id="body" data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>


    <div class="py-2 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-9 d-none d-lg-block">
                    <a href="#" class="small mr-3"><span class="icon-phone2 mr-2"></span> 10 20 123 456</a>
                    <a href="#" class="small mr-3"><span class="icon-envelope-o mr-2"></span> info@mydomain.com</a>
                </div>
                <div class="col-lg-3 text-right">
                    <a href="#" class="small mr-3" data-toggle="modal" data-target="#myModal"><span
                                class="icon-unlock-alt"></span> Log In</a>
                </div>
            </div>
        </div>
    </div>

    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

        <div class="container">
            <div class="d-flex align-items-center">
                <div class="site-logo">
                    <a href="index.php" class="d-block">Widura

                    </a>
                </div>
                <div class="mr-auto">
                    <nav class="site-navigation position-relative text-right" role="navigation">
                        <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                            <li>
                                <a href="index.php" class="nav-link text-left">Home</a>
                            </li>
                            <li>
                                <a href="about.php" class="nav-link text-left">About Us</a>
                            </li>
                            <li>
                                <a href="courses.php" class="nav-link text-left">Courses</a>
                            </li>
                            <li>
                                <a href="contact.php" class="nav-link text-left">Contact</a>
                            </li>
                        </ul>                                                                                                                                                                                                                                                                                          </ul>
                    </nav>

                </div>
                <div class="ml-auto">
                    <div class="social-wrap">
                        <a href="#"><span class="icon-facebook"></span></a>
                        <a href="#"><span class="icon-twitter"></span></a>
                        <a href="#"><span class="icon-linkedin"></span></a>

                        <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                                    class="icon-menu h3"></span></a>
                    </div>
                </div>

            </div>
        </div>

    </header>

    <div class="hero-slide owl-carousel site-blocks-cover mb-5">
        <div class="intro-section" style="background-image: url('images/hero_1.jpg');">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
                        <h1>Academics University</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="intro-section" style="background-image: url('images/hero_1.jpg');">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
                        <h1>You Can Learn Anything</h1>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!--    start login modal-->
    <div class="modal fade zoom-in" id="myModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Login</h4>
                    <button type="button" style="color: #51be78;" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body mt-2">
                    <form action="">
                        <div class="form-group">
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i style="color: #51be78;"
                                                                      class="fas fa-user"></i></span>
                                </div>
                                <input type="email" class="form-control" placeholder="Enter Email" id="username"
                                       name="username">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i style="color: #51be78;"
                                                                      class="fas fa-key"></i></span>
                                </div>
                                <input type="password" class="form-control" placeholder="Enter password" id="password"
                                       name="password">
                            </div>
                        </div>
<!--                        <div class="forgot ml-1">-->
<!--                            <a href="forgot_password.php" id="forgot_password" data-toggle="modal" class="text">Forgot-->
<!--                                Password</a>-->
<!--                        </div>-->
                        <div class="modal-footer">
                            <input type="submit" class="small small btn btn-primary px-4 py-2 rounded-0"
                                   value="Login" id="login">
                        </div>
                    </form>
                </div>

                <!-- Modal footer -->


            </div>
        </div>
    </div>
    <!--    end login modal-->

    <section class="popular-course-area mt-5">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content col-lg-8">
                    <div class="title text-center">
                        <h1 class="">Instructor</h1>
                        <p>There is a moment in the life of any aspiring.</p>
                    </div>
                </div>
            </div>
            <div class="learn_content p-2">
                <div class="row ">
                    <div class="col-lg-6 col-sm-12 col-12">
                        <h4 class="text-primary mb-3">Joeel & Natalie Rivera</h4>
                        <p>Joeel and Natalie Rivera are professional speakers, trainers, and coaches.
                            Their mission is to provide tools that empower people to ignite their dreams,
                            unleash their potential and fulfill their purpose. Through their company, Transformation
                            Services, Inc., they provide digital content publishing, online courses,
                            and life coach training programs that act as a catalyst for personal empowerment.</p>
                        <div class="row d-flex justify-content-center text-center">
                            <div class="col-lg-3 col-sm- col-6">
                                <p><span><i class='fas fa-star-half-alt mr-1' style="color: #51be78 ;"></i></span><br>4.4
                                    Instructor Rating</p>
                            </div>
                            <div class="col-lg-3 col-sm- col-6">
                                <p><span><i class='fas fa-award mr-1' style="color: #51be78 ;"></i></span><br>92,514
                                    Reviews</p>
                            </div>
                            <div class="col-lg-3 col-sm- col-6">
                                <p><span><i class='fas fa-child mr-1' style="color: #51be78 ;"></i></span><br>304,281
                                    Students</p>
                            </div>
                            <div class="col-lg-3 col-sm- col-6">
                                <p><span><i class='fas fa-file-video mr-1' style="color: #51be78    ;"></i></span><br>85
                                    Courses</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-12 mt-5" id="ins_img">
                        <img src="img/instructor/maths_instructor.jpg" style="border-radius: 50%;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--    <div class="site-section">-->
    <!--        <div class="container">-->
    <!--            <div class="row mb-5 justify-content-center text-center">-->
    <!--                <div class="col-lg-4 mb-5">-->
    <!--                    <h2 class="section-title-underline mb-5">-->
    <!--                        <span>Why Academics Works</span>-->
    <!--                    </h2>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="row">-->
    <!--                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">-->
    <!---->
    <!--                    <div class="feature-1 border">-->
    <!--                        <div class="icon-wrapper bg-primary">-->
    <!--                            <span class="flaticon-mortarboard text-white"></span>-->
    <!--                        </div>-->
    <!--                        <div class="feature-1-content">-->
    <!--                            <h2>Personalize Learning</h2>-->
    <!--                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit morbi hendrerit elit</p>-->
    <!--                            <p><a href="#" class="btn btn-primary px-4 rounded-0">Learn More</a></p>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">-->
    <!--                    <div class="feature-1 border">-->
    <!--                        <div class="icon-wrapper bg-primary">-->
    <!--                            <span class="flaticon-school-material text-white"></span>-->
    <!--                        </div>-->
    <!--                        <div class="feature-1-content">-->
    <!--                            <h2>Trusted Courses</h2>-->
    <!--                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit morbi hendrerit elit</p>-->
    <!--                            <p><a href="#" class="btn btn-primary px-4 rounded-0">Learn More</a></p>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">-->
    <!--                    <div class="feature-1 border">-->
    <!--                        <div class="icon-wrapper bg-primary">-->
    <!--                            <span class="flaticon-library text-white"></span>-->
    <!--                        </div>-->
    <!--                        <div class="feature-1-content">-->
    <!--                            <h2>Tools for Students</h2>-->
    <!--                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit morbi hendrerit elit</p>-->
    <!--                            <p><a href="#" class="btn btn-primary px-4 rounded-0">Learn More</a></p>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->

    <div class="site-section">
        <div class="container">
            <div class="row mb-5 justify-content-center text-center">
                <div class="col-lg-6">
                    <h2 class="section-title-underline mb-3">
                        <span>Popular Courses</span>
                    </h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia, id?</p>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="owl-slide-3 owl-carousel">
                        <div class="course-1-item">
                            <figure class="thumnail">
                                <a href="course-single.php"><img src="images/course_1.jpg" alt="Image"
                                                                 class="img-fluid"></a>
                                <div class="price">Rs : 2000.00</div>
                                <div class="category"><h3>English</h3></div>
                            </figure>
                            <div class="course-1-content pb-4">
                                <h2>How To Create Mobile Apps Using Ionic</h2>
                                <div class="rating text-center mb-3">
                                    <span class="icon-star2 text-warning"></span>
                                    <span class="icon-star2 text-warning"></span>
                                    <span class="icon-star2 text-warning"></span>
                                    <span class="icon-star2 text-warning"></span>
                                    <span class="icon-star2 text-warning"></span>
                                </div>
                                <p class="desc mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique
                                    accusantium ipsam.</p>
                                <p><a href="course-single.php" class="btn btn-primary rounded-0 px-4">Enroll In This
                                        Course</a></p>
                            </div>
                        </div>

                        <div class="course-1-item">
                            <figure class="thumnail">
                                <a href="course-single.php"><img src="images/course_2.jpg" alt="Image"
                                                                 class="img-fluid"></a>
                                <div class="price">Rs : 1000.00</div>
                                <div class="category"><h3>Sinhala</h3></div>
                            </figure>
                            <div class="course-1-content pb-4">
                                <h2>How To Create Mobile Apps Using Ionic</h2>
                                <div class="rating text-center mb-3">
                                    <span class="icon-star2 text-warning"></span>
                                    <span class="icon-star2 text-warning"></span>
                                    <span class="icon-star2 text-warning"></span>
                                    <span class="icon-star2 text-warning"></span>
                                    <span class="icon-star2 text-warning"></span>
                                </div>
                                <p class="desc mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique
                                    accusantium ipsam.</p>
                                <p><a href="course-single.php" class="btn btn-primary rounded-0 px-4">Enroll In This
                                        Course</a></p>
                            </div>
                        </div>

                        <div class="course-1-item">
                            <figure class="thumnail">
                                <a href="course-single.php"><img src="images/course_3.jpg" alt="Image"
                                                                 class="img-fluid"></a>
                                <div class="price">Rs : 5000.00</div>
                                <div class="category"><h3>Maths</h3></div>
                            </figure>
                            <div class="course-1-content pb-4">
                                <h2>How To Create Mobile Apps Using Ionic</h2>
                                <div class="rating text-center mb-3">
                                    <span class="icon-star2 text-warning"></span>
                                    <span class="icon-star2 text-warning"></span>
                                    <span class="icon-star2 text-warning"></span>
                                    <span class="icon-star2 text-warning"></span>
                                    <span class="icon-star2 text-warning"></span>
                                </div>
                                <p class="desc mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique
                                    accusantium ipsam.</p>
                                <p><a href="courses-single.html" class="btn btn-primary rounded-0 px-4">Enroll In This
                                        Course</a></p>
                            </div>
                        </div>

                        <!--                        <div class="course-1-item">-->
                        <!--                            <figure class="thumnail">-->
                        <!--                                <a href="course-single.php"><img src="images/course_4.jpg" alt="Image"-->
                        <!--                                                                 class="img-fluid"></a>-->
                        <!--                                <div class="price">$99.00</div>-->
                        <!--                                <div class="category"><h3>English</h3></div>-->
                        <!--                            </figure>-->
                        <!--                            <div class="course-1-content pb-4">-->
                        <!--                                <h2>How To Create Mobile Apps Using Ionic</h2>-->
                        <!--                                <div class="rating text-center mb-3">-->
                        <!--                                    <span class="icon-star2 text-warning"></span>-->
                        <!--                                    <span class="icon-star2 text-warning"></span>-->
                        <!--                                    <span class="icon-star2 text-warning"></span>-->
                        <!--                                    <span class="icon-star2 text-warning"></span>-->
                        <!--                                    <span class="icon-star2 text-warning"></span>-->
                        <!--                                </div>-->
                        <!--                                <p class="desc mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique-->
                        <!--                                    accusantium ipsam.</p>-->
                        <!--                                <p><a href="course-single.php" class="btn btn-primary rounded-0 px-4">Enroll In This-->
                        <!--                                        Course</a></p>-->
                        <!--                            </div>-->
                        <!--                        </div>-->
                        <!---->
                        <!--                        <div class="course-1-item">-->
                        <!--                            <figure class="thumnail">-->
                        <!--                                <a href="course-single.php"><img src="images/course_5.jpg" alt="Image"-->
                        <!--                                                                 class="img-fluid"></a>-->
                        <!--                                <div class="price">$99.00</div>-->
                        <!--                                <div class="category"><h3>Web Design</h3></div>-->
                        <!--                            </figure>-->
                        <!--                            <div class="course-1-content pb-4">-->
                        <!--                                <h2>How To Create Mobile Apps Using Ionic</h2>-->
                        <!--                                <div class="rating text-center mb-3">-->
                        <!--                                    <span class="icon-star2 text-warning"></span>-->
                        <!--                                    <span class="icon-star2 text-warning"></span>-->
                        <!--                                    <span class="icon-star2 text-warning"></span>-->
                        <!--                                    <span class="icon-star2 text-warning"></span>-->
                        <!--                                    <span class="icon-star2 text-warning"></span>-->
                        <!--                                </div>-->
                        <!--                                <p class="desc mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique-->
                        <!--                                    accusantium ipsam.</p>-->
                        <!--                                <p><a href="course-single.php" class="btn btn-primary rounded-0 px-4">Enroll In This-->
                        <!--                                        Course</a></p>-->
                        <!--                            </div>-->
                        <!--                        </div>-->
                        <!---->
                        <!--                        <div class="course-1-item">-->
                        <!--                            <figure class="thumnail">-->
                        <!--                                <a href="course-single.php"><img src="images/course_6.jpg" alt="Image"-->
                        <!--                                                                 class="img-fluid"></a>-->
                        <!--                                <div class="price">$99.00</div>-->
                        <!--                                <div class="category"><h3>Mobile Application</h3></div>-->
                        <!--                            </figure>-->
                        <!--                            <div class="course-1-content pb-4">-->
                        <!--                                <h2>How To Create Mobile Apps Using Ionic</h2>-->
                        <!--                                <div class="rating text-center mb-3">-->
                        <!--                                    <span class="icon-star2 text-warning"></span>-->
                        <!--                                    <span class="icon-star2 text-warning"></span>-->
                        <!--                                    <span class="icon-star2 text-warning"></span>-->
                        <!--                                    <span class="icon-star2 text-warning"></span>-->
                        <!--                                    <span class="icon-star2 text-warning"></span>-->
                        <!--                                </div>-->
                        <!--                                <p class="desc mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique-->
                        <!--                                    accusantium ipsam.</p>-->
                        <!--                                <p><a href="course-single.php" class="btn btn-primary rounded-0 px-4">Enroll In This-->
                        <!--                                        Course</a></p>-->
                        <!--                            </div>-->
                        <!--                        </div>-->

                    </div>

                </div>
            </div>


        </div>
    </div>

    <!--    <section class="section-ap container mt-5 mb-5">-->
    <!--        <div class="learn_content container">-->
    <!--            <h3 class="text-center mb-2">What you'll learn</h3>-->
    <!--            <div class="row pt-3">-->
    <!--                <div class="col-lg-6 col-sm-6 col-12">-->
    <!--                    <div class="row">-->
    <!--                        <div class="col-2">-->
    <!--                            <span><i class='fas fa-check' style="color: #51be78;"></i></span>-->
    <!--                        </div>-->
    <!--                        <div class="col-10">-->
    <!--                            <p class="text-left">-->
    <!--                                Transform your own life while at the same time learn practical steps-->
    <!--                                and knowledge to become a powerful and successful Spiritual Life-->
    <!--                                coach.-->
    <!--                            </p>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="row">-->
    <!--                        <div class="col-2">-->
    <!--                            <span><i class='fas fa-check' style="color: #51be78;"></i></span>-->
    <!--                        </div>-->
    <!--                        <div class="col-10">-->
    <!--                            <p class="text-left">-->
    <!--                                Discover and identify your personal gifts to lead on purpose and-->
    <!--                                with clarity. </p>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="row">-->
    <!--                        <div class="col-2">-->
    <!--                            <span><i class='fas fa-check' style="color: #51be78;"></i></span>-->
    <!--                        </div>-->
    <!--                        <div class="col-10">-->
    <!--                            <p class="text-left">-->
    <!--                                Set a price point that creates and sustains a lucrative,-->
    <!--                                freedom-based career.</div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="col-lg-6 col-sm-6 col-12">-->
    <!--                    <div class="row">-->
    <!--                        <div class="col-2">-->
    <!--                            <span><i class='fas fa-check' style="color: #51be78;"></i></span>-->
    <!--                        </div>-->
    <!--                        <div class="col-10">-->
    <!--                            <p class="text-left">-->
    <!--                                aspects of the self to bring yourself into balance, in order to be a-->
    <!--                                congruent coach, and use this process to lead clients into lasting-->
    <!--                                transformations.-->
    <!--                            </p>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="row">-->
    <!--                        <div class="col-2">-->
    <!--                            <span><i class='fas fa-check' style="color: #51be78;"></i></span>-->
    <!--                        </div>-->
    <!--                        <div class="col-10">-->
    <!--                            <p class="text-left">-->
    <!--                                Connect with clients beyond the logic, by tapping into intuitive-->
    <!--                                awareness. </p>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        <div class="row mt-4" >-->
    <!--            <div class="col-lg-6 col-sm-6 col-12">-->
    <!--                <div class="">-->
    <!--                    <div class="embed-responsive embed-responsive-16by9">-->
    <!--                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/PjGkVCAo8Fw"-->
    <!--                                allowfullscreen></iframe>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-lg-6 col-sm-6 col-12 mt-2">-->
    <!--                <div class=" right-contents">-->
    <!--                    <ul>-->
    <!--                        <li>-->
    <!--                            <a class="justify-content-between d-flex" href="#">-->
    <!--                                <p>Trainer’s Name</p>-->
    <!--                                <span class="or">George Mathews</span>-->
    <!--                            </a>-->
    <!--                        </li>-->
    <!--                        <li>-->
    <!--                            <a class="justify-content-between d-flex" href="#">-->
    <!--                                <p>Course Fee </p>-->
    <!--                                <span>$230</span>-->
    <!--                            </a>-->
    <!--                        </li>-->
    <!--                        <li>-->
    <!--                            <a class="justify-content-between d-flex" href="#">-->
    <!--                                <p>Available Seats </p>-->
    <!--                                <span>15</span>-->
    <!--                            </a>-->
    <!--                        </li>-->
    <!--                        <li>-->
    <!--                            <a class="justify-content-between d-flex" href="#">-->
    <!--                                <p>Schedule </p>-->
    <!--                                <span>2.00 pm to 4.00 pm</span>-->
    <!--                            </a>-->
    <!--                        </li>-->
    <!--                    </ul>-->
    <!--                    <div class="button-group">-->
    <!--                        <a href="#" id="addToCart" type="button" class="btn-block mb-2" value="">Add to cart</a>-->
    <!--                        <a href="#" id="buyNow" type="button" class="btn-block mb-2" style="border-color: #f7631b" value="">Buy-->
    <!--                            now</a>-->
    <!--                        <p class="text-center">30-Day Money-Back Guarantee</p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </section>-->

    <div class="section-bg style-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h2 class="section-title-underline style-2">
                        <span>About Our University</span>
                    </h2>
                </div>
                <div class="col-lg-8">
                    <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem nesciunt quaerat ad
                        reiciendis perferendis voluptate fugiat sunt fuga error totam.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus assumenda omnis tempora
                        ullam alias amet eveniet voluptas, incidunt quasi aut officiis porro ad, expedita saepe
                        necessitatibus rem debitis architecto dolore? Nam omnis sapiente placeat blanditiis voluptas
                        dignissimos, itaque fugit a laudantium adipisci dolorem enim ipsum cum molestias? Quod quae
                        molestias modi fugiat quisquam. Eligendi recusandae officiis debitis quas beatae aliquam?</p>
                    <p><a href="#">Read more</a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- // 05 - Block -->
    <div class="site-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-4">
                    <h2 class="section-title-underline">
                        <span>Testimonials</span>
                    </h2>
                </div>
            </div>


            <div class="owl-slide owl-carousel">

                <div class="ftco-testimonial-1">
                    <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
                        <img src="images/person_1.jpg" alt="Image" class="img-fluid mr-3">
                        <div>
                            <h3>Allison Holmes</h3>
                            <span>Designer</span>
                        </div>
                    </div>
                    <div>
                        <p>&ldquo;Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque, mollitia. Possimus
                            mollitia nobis libero quidem aut tempore dolore iure maiores, perferendis, provident numquam
                            illum nisi amet necessitatibus. A, provident aperiam!&rdquo;</p>
                    </div>
                </div>

                <div class="ftco-testimonial-1">
                    <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
                        <img src="images/person_2.jpg" alt="Image" class="img-fluid mr-3">
                        <div>
                            <h3>Allison Holmes</h3>
                            <span>Designer</span>
                        </div>
                    </div>
                    <div>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque, mollitia. Possimus mollitia
                            nobis libero quidem aut tempore dolore iure maiores, perferendis, provident numquam illum
                            nisi amet necessitatibus. A, provident aperiam!</p>
                    </div>
                </div>

                <div class="ftco-testimonial-1">
                    <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
                        <img src="images/person_4.jpg" alt="Image" class="img-fluid mr-3">
                        <div>
                            <h3>Allison Holmes</h3>
                            <span>Designer</span>
                        </div>
                    </div>
                    <div>
                        <p>&ldquo;Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque, mollitia. Possimus
                            mollitia nobis libero quidem aut tempore dolore iure maiores, perferendis, provident numquam
                            illum nisi amet necessitatibus. A, provident aperiam!&rdquo;</p>
                    </div>
                </div>

                <div class="ftco-testimonial-1">
                    <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
                        <img src="images/person_3.jpg" alt="Image" class="img-fluid mr-3">
                        <div>
                            <h3>Allison Holmes</h3>
                            <span>Designer</span>
                        </div>
                    </div>
                    <div>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque, mollitia. Possimus mollitia
                            nobis libero quidem aut tempore dolore iure maiores, perferendis, provident numquam illum
                            nisi amet necessitatibus. A, provident aperiam!</p>
                    </div>
                </div>

                <div class="ftco-testimonial-1">
                    <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
                        <img src="images/person_2.jpg" alt="Image" class="img-fluid mr-3">
                        <div>
                            <h3>Allison Holmes</h3>
                            <span>Designer</span>
                        </div>
                    </div>
                    <div>
                        <p>&ldquo;Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque, mollitia. Possimus
                            mollitia nobis libero quidem aut tempore dolore iure maiores, perferendis, provident numquam
                            illum nisi amet necessitatibus. A, provident aperiam!&rdquo;</p>
                    </div>
                </div>

                <div class="ftco-testimonial-1">
                    <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
                        <img src="images/person_4.jpg" alt="Image" class="img-fluid mr-3">
                        <div>
                            <h3>Allison Holmes</h3>
                            <span>Designer</span>
                        </div>
                    </div>
                    <div>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque, mollitia. Possimus mollitia
                            nobis libero quidem aut tempore dolore iure maiores, perferendis, provident numquam illum
                            nisi amet necessitatibus. A, provident aperiam!</p>
                    </div>
                </div>

            </div>

        </div>
    </div>


    <!--    <div class="section-bg style-1" style="background-image: url('images/hero_1.jpg');">-->
    <!--      <div class="container">-->
    <!--        <div class="row">-->
    <!--          <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">-->
    <!--            <span class="icon flaticon-mortarboard"></span>-->
    <!--            <h3>Our Philosphy</h3>-->
    <!--            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis delectus ea? Dolore, amet reprehenderit.</p>-->
    <!--          </div>-->
    <!--          <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">-->
    <!--            <span class="icon flaticon-school-material"></span>-->
    <!--            <h3>Academics Principle</h3>-->
    <!--            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis delectus ea?-->
    <!--              Dolore, amet reprehenderit.</p>-->
    <!--          </div>-->
    <!--          <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">-->
    <!--            <span class="icon flaticon-library"></span>-->
    <!--            <h3>Key of Success</h3>-->
    <!--            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat quis delectus ea?-->
    <!--              Dolore, amet reprehenderit.</p>-->
    <!--          </div>-->
    <!--        </div>-->
    <!--      </div>-->
    <!--    </div>-->

    <!--    <div class="news-updates">-->
    <!--      <div class="container">-->
    <!--         -->
    <!--        <div class="row">-->
    <!--          <div class="col-lg-9">-->
    <!--             <div class="section-heading">-->
    <!--              <h2 class="text-black">News &amp; Updates</h2>-->
    <!--              <a href="#">Read All News</a>-->
    <!--            </div>-->
    <!--            <div class="row">-->
    <!--              <div class="col-lg-6">-->
    <!--                <div class="post-entry-big">-->
    <!--                  <a href="news-single.html" class="img-link"><img src="images/blog_large_1.jpg" alt="Image" class="img-fluid"></a>-->
    <!--                  <div class="post-content">-->
    <!--                    <div class="post-meta"> -->
    <!--                      <a href="#">June 6, 2019</a>-->
    <!--                      <span class="mx-1">/</span>-->
    <!--                      <a href="#">Admission</a>, <a href="#">Updates</a>-->
    <!--                    </div>-->
    <!--                    <h3 class="post-heading"><a href="news-single.html">Campus Camping and Learning Session</a></h3>-->
    <!--                  </div>-->
    <!--                </div>-->
    <!--              </div>-->
    <!--              <div class="col-lg-6">-->
    <!--                <div class="post-entry-big horizontal d-flex mb-4">-->
    <!--                  <a href="news-single.html" class="img-link mr-4"><img src="images/blog_1.jpg" alt="Image" class="img-fluid"></a>-->
    <!--                  <div class="post-content">-->
    <!--                    <div class="post-meta">-->
    <!--                      <a href="#">June 6, 2019</a>-->
    <!--                      <span class="mx-1">/</span>-->
    <!--                      <a href="#">Admission</a>, <a href="#">Updates</a>-->
    <!--                    </div>-->
    <!--                    <h3 class="post-heading"><a href="news-single.html">Campus Camping and Learning Session</a></h3>-->
    <!--                  </div>-->
    <!--                </div>-->
    <!---->
    <!--                <div class="post-entry-big horizontal d-flex mb-4">-->
    <!--                  <a href="news-single.html" class="img-link mr-4"><img src="images/blog_2.jpg" alt="Image" class="img-fluid"></a>-->
    <!--                  <div class="post-content">-->
    <!--                    <div class="post-meta">-->
    <!--                      <a href="#">June 6, 2019</a>-->
    <!--                      <span class="mx-1">/</span>-->
    <!--                      <a href="#">Admission</a>, <a href="#">Updates</a>-->
    <!--                    </div>-->
    <!--                    <h3 class="post-heading"><a href="news-single.html">Campus Camping and Learning Session</a></h3>-->
    <!--                  </div>-->
    <!--                </div>-->
    <!---->
    <!--                <div class="post-entry-big horizontal d-flex mb-4">-->
    <!--                  <a href="news-single.html" class="img-link mr-4"><img src="images/blog_1.jpg" alt="Image" class="img-fluid"></a>-->
    <!--                  <div class="post-content">-->
    <!--                    <div class="post-meta">-->
    <!--                      <a href="#">June 6, 2019</a>-->
    <!--                      <span class="mx-1">/</span>-->
    <!--                      <a href="#">Admission</a>, <a href="#">Updates</a>-->
    <!--                    </div>-->
    <!--                    <h3 class="post-heading"><a href="news-single.html">Campus Camping and Learning Session</a></h3>-->
    <!--                  </div>-->
    <!--                </div>-->
    <!--              </div>-->
    <!--            </div>-->
    <!--          </div>-->
    <!--          <div class="col-lg-3">-->
    <!--            <div class="section-heading">-->
    <!--              <h2 class="text-black">Campus Videos</h2>-->
    <!--              <a href="#">View All Videos</a>-->
    <!--            </div>-->
    <!--            <a href="https://vimeo.com/45830194" class="video-1 mb-4" data-fancybox="" data-ratio="2">-->
    <!--              <span class="play">-->
    <!--                <span class="icon-play"></span>-->
    <!--              </span>-->
    <!--              <img src="images/course_5.jpg" alt="Image" class="img-fluid">-->
    <!--            </a>-->
    <!--            <a href="https://vimeo.com/45830194" class="video-1 mb-4" data-fancybox="" data-ratio="2">-->
    <!--                <span class="play">-->
    <!--                  <span class="icon-play"></span>-->
    <!--                </span>-->
    <!--                <img src="images/course_5.jpg" alt="Image" class="img-fluid">-->
    <!--              </a>-->
    <!--          </div>-->
    <!--        </div>-->
    <!--      </div>-->
    <!--    </div>-->

    <!--    <div class="site-section ftco-subscribe-1" style="background-image: url('images/bg_1.jpg')">-->
    <!--      <div class="container">-->
    <!--        <div class="row align-items-center">-->
    <!--          <div class="col-lg-7">-->
    <!--            <h2>Subscribe to us!</h2>-->
    <!--            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,</p>-->
    <!--          </div>-->
    <!--          <div class="col-lg-5">-->
    <!--            <form action="" class="d-flex">-->
    <!--              <input type="text" class="rounded form-control mr-2 py-3" placeholder="Enter your email">-->
    <!--              <button class="btn btn-primary rounded py-3 px-4" type="submit">Send</button>-->
    <!--            </form>-->
    <!--          </div>-->
    <!--        </div>-->
    <!--      </div>-->
    <!--    </div> -->


    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <h2 class="mb-4">Widura</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae nemo minima qui dolor, iusto
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

</div>
<!-- .site-wrap -->


<!-- loader -->
<div id="loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#51be78"/>
    </svg>
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="custom/js/login.js"></script>


</body>

</html>
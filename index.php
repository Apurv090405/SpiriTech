<?php
$servername = "localhost";
$username = "";
$password = "";
$dbname = "spiritech";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$subject = $_POST['subject'];
$email = $_POST['email'];
$message = $_POST['message'];

// Insert data into the ContactUs table
$sql = "INSERT INTO contactus (first_name, last_name, subject, email, message) VALUES ('$first_name', '$last_name', '$subject', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "<script> alert('Submit Sucessfully'); </script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>SpriTech</title>
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
    <link rel="stylesheet" href="css/lightbox.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.15.0/font/bootstrap-icons.css">
    <link href="css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <div class="site-wrap">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>


        <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

            <div class="container-fluid">
                <div class="d-flex align-items-center">
                    <div class="site-logo"><a href="index.html">Spri<span>Tech</span> </a></div>
                    <div class="ml-auto">
                        <nav class="site-navigation position-relative text-right" role="navigation">
                            <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                                <li><a href="#home-section" class="nav-link">Home</a></li>
                                <li><a href="#schedule-section" class="nav-link">Image Galary</a></li>
                                <li><a href="#classes-section" class="nav-link">Activites</a></li>

                                <li><a href="#trainer-section" class="nav-link">Team</a></li>
                                <!-- <li><a href="#services-section" class="nav-link">Services</a></li> -->
                                <li><a href="#contact-section" class="nav-link">Contact</a></li>
                            </ul>
                        </nav>
                        <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a>
                    </div>

                </div>
            </div>

        </header>

        <a id="bgndVideo" class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=1_sBz81WHhE&ab_channel=GFXON',showYTLogo:false, showAnnotations: false, containment:'body', showControls: false, cc_load_policy: false, containment:'#home-section',autoPlay:true, mute:true, startAt:020, stopAt: 25, opacity:1}">
        </a>

        <div class="intro-section" id="home-section" style="background-color: #f2f2f2;">
            <div class="container">

                <div class="row align-items-center">
                    <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
                        <h1 class="mb-3">Spiritual Encryption, Techie's Decryption</h1>
                        <br>
                        <p class="text-center">
                            <a href="./membership.php" class="btn btn-outline-white py-3 px-5">Join Us</a>
                        </p>
                    </div>
                </div>

            </div>
        </div>

        <div class="site-section">
            <div class="container">

                <div class="row justify-content-center text-center mb-5">
                    <div class="col-md-8 section-heading">
                        <h2 class="heading mb-3">Our Aim</h2>
                        <p>SpiriTech, the spiritual club at the Department of Computer Science & Engineering, aims to integrate
                            spirituality and meditation into students' lives for enhanced education and self-growth. The club seeks
                            to address the need for values, guiding students toward becoming successful individuals in various
                            aspects of their lives.</p>
                    </div>
                </div>

                <!-- Slider -->
                <div class="owl-carousel nonloop-block-14 block-14" data-aos="fade">
                    <div class="slide" style="text-align: center;">
                        <div class="ftco-feature-1">
                            <img src="./images/self.svg" alt="Proud Image" style="width: 150px; height: 150px; display: inline-block;">
                            <div class="ftco-feature-1-text">
                                <h2>Self-awareness</h2>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind
                                    texts.</p>
                            </div>
                        </div>
                    </div>

                    <div class="slide" style="text-align: center;">
                        <div class="ftco-feature-1">
                            <img src="./images/time.svg" alt="Proud Image" style="width: 150px; height: 150px; display: inline-block;">
                            <div class="ftco-feature-1-text">
                                <h2>Time Management</h2>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind
                                    texts.</p>
                            </div>
                        </div>
                    </div>

                    <div class="slide" style="text-align: center;">
                        <div class="ftco-feature-1">
                            <img src="./images/cluture.svg" alt="Proud Image" style="width: 150px; height: 150px; display: inline-block;">
                            <div class="ftco-feature-1-text">
                                <h2>Cultural Appreciation</h2>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind
                                    texts.</p>
                            </div>
                        </div>
                    </div>

                    <div class="slide" style="text-align: center;">
                        <div class="ftco-feature-1">
                            <img src="./images/skill.svg" alt="Proud Image" style="width: 150px; height: 150px; display: inline-block;">
                            <div class="ftco-feature-1-text">
                                <h2>Soft Skills</h2>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind
                                    texts.</p>
                            </div>
                        </div>
                    </div>

                    <div class="slide" style="text-align: center;">
                        <div class="ftco-feature-1">
                            <img src="./images/ethics.svg" alt="Proud Image" style="width: 150px; height: 150px; display: inline-block;">
                            <div class="ftco-feature-1-text">
                                <h2>Ethics </h2>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind
                                    texts.</p>
                            </div>
                        </div>
                    </div>

                    <div class="slide" style="text-align: center;">
                        <div class="ftco-feature-1">
                            <img src="./images/yoga.svg" alt="Proud Image" style="width: 150px; height: 150px; display: inline-block;">
                            <div class="ftco-feature-1-text">
                                <h2>Relextion</h2>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind
                                    texts.</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <div class="bgimg" style="background-image: url('images/bg3.jpg');" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center justify-content-center text-center">
                    <div class="col-md-15">
                        <h2 class="">Spirituality is the key that unlocks the door to a balanced and purposeful life.</h2>
                        <p class="lead mx-auto desc mb-5">Embracing spirituality enables individuals to find equilibrium and meaning, guiding them on a path of fulfillment and
                            purpose.</p>
                    </div>
                </div>
            </div>
        </div>




        <div class="site-section" id="schedule-section">
            <div class="container">

                <div class="row justify-content-center text-center mb-5">
                    <div class="col-md-8 section-heading">
                        <!-- <span class="subheading">Some Pictures</span> -->
                        <h2 class="heading mb-3">Image Galary</h2>
                        <p>Capturing moments of serenity and growth on the path of self-discovery with Spiritech Club - where each image tells a
                            story of mindfulness, connection, and empowerment.</p>
                    </div>
                </div>

                <div class="owl-carousel nonloop-block-14 block-14" data-aos="fade">

                    <div class="slide" style="text-align: center;">
                        <div class="ftco-feature-1">
                            <img src="./images/yoga.svg" alt="Proud Image" style="width: 150px; height: 150px; display: inline-block;">
                        </div>
                    </div>

                    <div class="slide" style="text-align: center;">
                        <div class="ftco-feature-1">
                            <img src="./images/yoga.svg" alt="Proud Image" style="width: 150px; height: 150px; display: inline-block;">
                        </div>
                    </div>

                    <div class="slide" style="text-align: center;">
                        <div class="ftco-feature-1">
                            <img src="./images/yoga.svg" alt="Proud Image" style="width: 150px; height: 150px; display: inline-block;">
                        </div>
                    </div>

                    <div class="slide" style="text-align: center;">
                        <div class="ftco-feature-1">
                            <img src="./images/yoga.svg" alt="Proud Image" style="width: 150px; height: 150px; display: inline-block;">
                        </div>
                    </div>

                    <div class="slide" style="text-align: center;">
                        <div class="ftco-feature-1">
                            <img src="./images/yoga.svg" alt="Proud Image" style="width: 150px; height: 150px; display: inline-block;">
                        </div>
                    </div>

                    <div class="slide" style="text-align: center;">
                        <div class="ftco-feature-1">
                            <img src="./images/yoga.svg" alt="Proud Image" style="width: 150px; height: 150px; display: inline-block;">
                        </div>
                    </div>
                </div>
            </div>
        </div>






        <div class="bgimg" style="background-image: url('images/bg1.jpg');" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center justify-content-center text-center">
                    <div class="col-md-15">
                        <h2 class="">In the silence of meditation, we find the answers that our busy minds seek.</h2>
                        <p class="lead mx-auto desc mb-5">Through the practice of meditation, we discover profound insights and solutions that elude us in the noise of our daily
                            lives.</p>
                    </div>
                </div>
            </div>
        </div>





        <div class="site-section" id="classes-section">
            <div class="container">
                <div class="row justify-content-center text-center mb-5">
                    <div class="col-md-8  section-heading">
                        <!-- <span class="subheading"></span> -->
                        <h2 class="heading mb-3">Activites</h2>
                        <p>Embark on a transformative journey at Spiritech, where spirituality meets technology, fostering personal growth and
                            holistic development through engaging activities and timeless wisdom.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">

                        <div class="class-item d-flex align-items-center">
                            <img src="images/c1.jpg" alt="" style="width: 150px; height: 150px; object-fit: cover;">
                            <div class="class-item-text">

                                <h2>Class Name #1</h2>
                                <span>By </span>,
                                <span>30 minutes</span>
                            </div>
                        </div>

                        <div class="class-item d-flex align-items-center">
                            <img src="images/c2.jpg" alt="" style="width: 150px; height: 150px; object-fit: cover;">
                            <div class="class-item-text">

                                <h2>Class Name #2</h2>
                                <span>By </span>,
                                <span>30 minutes</span>
                            </div>
                        </div>

                        <div class="class-item d-flex align-items-center">
                            <img src="images/c3.jpg" alt="" style="width: 150px; height: 150px; object-fit: cover;">
                            <div class="class-item-text">

                                <h2>Class Name #3</h2>
                                <span>By </span>,
                                <span>30 minutes</span>
                            </div>
                        </div>

                        <div class="class-item d-flex align-items-center">
                            <img src="images/c4.jpg" alt="" style="width: 150px; height: 150px; object-fit: cover;">
                            <div class="class-item-text">

                                <h2>Class Name #4</h2>
                                <span>By </span>,
                                <span>30 minutes</span>
                            </div>
                        </div>

                        <div class="class-item d-flex align-items-center">
                            <img src="images/c5.jpg" alt="" style="width: 150px; height: 150px; object-fit: cover;">
                            <div class="class-item-text">

                                <h2>Class Name #5</h2>
                                <span>By </span>,
                                <span>30 minutes</span>
                            </div>
                        </div>


                    </div>
                    <div class="col-lg-6">

                        <div class="class-item d-flex align-items-center">
                            <img src="images/c5.jpg" alt="" style="width: 150px; height: 150px; object-fit: cover;">
                            <div class="class-item-text">

                                <h2>Class Name #1</h2>
                                <span>By </span>,
                                <span>30 minutes</span>
                            </div>
                        </div>

                        <div class="class-item d-flex align-items-center">
                            <img src="images/c4.jpg" alt="" style="width: 150px; height: 150px; object-fit: cover;">
                            <div class="class-item-text">

                                <h2>Class Name #2</h2>
                                <span>By </span>,
                                <span>30 minutes</span>
                            </div>
                        </div>

                        <div class="class-item d-flex align-items-center">
                            <img src="images/c1.jpg" alt="" style="width: 150px; height: 150px; object-fit: cover;">
                            <div class="class-item-text">

                                <h2> Class Name #3</h2>
                                <span>By </span>,
                                <span>30 minutes</span>
                            </div>
                        </div>

                        <div class="class-item d-flex align-items-center">
                            <img src="images/c2.jpg" alt="" style="width: 150px; height: 150px; object-fit: cover;">
                            <div class="class-item-text">

                                <h2>Class Name #4</h2>
                                <span>By </span>,
                                <span>30 minutes</span>
                            </div>
                        </div>

                        <div class="class-item d-flex align-items-center">
                            <img src="images/c3.jpg" alt="" style="width: 150px; height: 150px; object-fit: cover;">
                            <div class="class-item-text">

                                <h2>Class Name #5</h2>
                                <span>By Justin Daniel</span>,
                                <span>30 minutes</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>





        <div class="bgimg" style="background-image: url('images/bg2.jpg');" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center justify-content-center text-center">
                    <div class="col-md-15">
                        <h2 class="">"In the digital age, reclaim control over your narrative – learn the art of mindful social media engagement.</h2>
                        <p class="lead mx-auto desc mb-5">Empower yourself to navigate the digital landscape consciously, ensuring that social media enhances rather than hinders
                            personal growth.</p>
                    </div>
                </div>
            </div>
        </div>






        <div class="site-section" id="trainer-section">
            <div class="container">
                <div class="row justify-content-center text-center mb-5" data-aos="fade-up">
                    <div class="col-md-8  section-heading">
                        <span class="subheading"></span>
                        <h2 class="heading mb-3">Team</h2>
                        <p>"Empowered by the spirit of unity, Spiritech Club's dynamic team exemplifies leadership, innovation, and a collective
                            commitment to elevate each member's journey towards self-discovery and growth."</p>
                    </div>
                </div>


                <div class="row">

                    <div class="col-lg-3 mb-4 mb-lg-0 col-md-6 text-center" data-aos="fade-up" data-aos-delay="">
                        <div class="person">
                            <img src="images/p2.png" alt="" class="img-fluid">
                            <h3>Vaibhavi Patel</h3>
                            <p class="position">Faculty Coordinator</p>
                            <p></p>
                        </div>
                    </div>


                    <div class="col-lg-3 mb-4 mb-lg-0 col-md-6 text-center" data-aos="fade-up" data-aos-delay="100">
                        <div class="person">
                            <img src="images/p3.png" alt="" class="img-fluid">
                            <h3>Avani Khothariya</h3>
                            <p class="position">Faculty Coordinator</p>
                            <p></p>
                        </div>
                    </div>


                    <div class="col-lg-3 mb-4 mb-lg-0 col-md-6 text-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="person">
                            <img src="images/p4.png" alt="" class="img-fluid">
                            <h3>Apurv Chudasama</h3>
                            <p class="position">Student Coordinator</p>
                            <p></p>
                        </div>
                    </div>


                    <div class="col-lg-3 mb-4 mb-lg-0 col-md-6 text-center" data-aos="fade-up" data-aos-delay="300">
                        <div class="person">
                            <img src="images/p1.png" alt="" class="img-fluid">
                            <h3>Yash Nasit</h3>
                            <p class="position">Student Coordinator</p>
                            <p></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>





        <div class="site-section bg-light contact-wrap" id="contact-section">
            <div class="container">

                <div class="row justify-content-center text-center mb-5">
                    <div class="col-md-8  section-heading">
                        <span class="subheading">Get In Touch</span>
                        <h2 class="heading mb-3">Contact Us</h2>
                        <p>"Connect with Spiritech Club – your gateway to holistic development and spiritual exploration. Have questions, ideas, or
                            just want to say hello? We're here to listen. Reach out to us, and let the journey begin!"
                        </p>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-md-7">
                        <form method="POST" data-aos="fade" action="">
                            <div class="form-group row">
                                <div class="col-md-6 mb-3 mb-lg-0">
                                    <input type="text" class="form-control" placeholder="First name" name="first_name">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Last name" name="last_name">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input type="text" class="form-control" placeholder="Subject" name="subject">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input type="email" class="form-control" placeholder="Email" name="email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <textarea class="form-control" id="" cols="30" rows="10" name="message" placeholder="Write your message here."></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">

                                    <input type="submit" class="btn btn-primary py-3 px-5 btn-block" value="submit" name="submit">
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer-section">
            <div class="container" style="padding-bottom:2rem;">
                <div class="row">

                    <div class="col-md-1"></div>
                    <div class="col-md-4">
                        <div class="image">
                            <img draggable="false" class="tilt" src="./images/Spritech.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h3 class="text-dark">About SpriTech</h3>
                        <p>A transformative blend of spirituality and technology. Cultivating self-awareness, time management, and
                            soft skills, it empowers individuals for a purposeful journey of self-discovery.</p>
                    </div>

                </div>
            </div>
            <div class="row pt-5 mt-2 text-center" style="padding-top:0.5em; background-color: #fff;">
                <div class="col-md-12">
                    <div class=" pt-2">
                        <!-- Link back to Free-Template.co can't be removed. Template is licensed under CC BY 3.0. -->
                        <p class="copyright"><small>&copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> SpiriTech. All Rights Reserved.<br> Design by <a href="http://apurv.infinityfreeapp.com/" target="_blank">Apurv</a>
                            </small></p>
                    </div>
                </div>

            </div>
        </footer>



    </div>
    <!-- .site-wrap -->

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
    <script src="js/lightbox.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>
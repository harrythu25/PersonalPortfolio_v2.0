<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Harry Thu | Portfolio</title>
    <link rel="stylesheet" href="assets/vendors/animate.css/animate.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/vendors/jquery/jquery.min.js"></script>
    <script src="assets/js/loader.js"></script>
</head>

<body>
    <div class="hiro-loader"></div>
    <header class="hiro-header" id="top">
        <nav>
            <div class="container">
                <div class="hiro-nav">
                    <a href="index.html" class="nav-brand">
                        <img src="assets/images/logo.svg" alt="Hiro" class="logo">
                        <img src="assets/images/logo_white.svg" alt="Hiro" class="logo-white">
                    </a>
                    <button class="hiro-nav-popup-toggle">
                        <svg width="20px" height="18px" viewBox="0 0 20 18" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Hiro" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="hiro-agency" transform="translate(-964.000000, -37.000000)" fill="#FFFFFF">
                                    <g id="Menu" transform="translate(964.000000, 37.000000)">
                                        <g id="menu">
                                            <rect id="Rectangle" fill-rule="nonzero" x="-8.05281767e-14" y="7.50795322" width="19.9609942" height="2.4951462"></rect>
                                            <rect id="Rectangle" fill-rule="nonzero" x="-8.05281767e-14" y="14.9964327" width="19.9609942" height="2.4951462"></rect>
                                            <rect id="Rectangle" fill-rule="nonzero" x="-8.05281767e-14" y="0.0194736842" width="19.9609942" height="2.4951462"></rect>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </button>
                </div>
            </div>
        </nav>
    </header>
<div class="hiro-nav-popup-modal">
    <div class="hiro-nav-popup-modal-content">
        <div class="container">
            <div class="row">
                <div class="col-md-6 menu-wrapper">
                    <ul class="nav hiro-main-nav">
                        <li class="nav-item">
                            <a href="index.html" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="index.html#about" class="nav-link">About Me</a>
                        </li>
                        <li class="nav-item">
                            <a href="index.html#tech_stack" class="nav-link">Tech Stack</a>
                        </li>
                        <li class="nav-item">
                            <a href="index.html#contact" class="nav-link">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a href="resume" class="nav-link">Resume</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 blog-posts text-white ">
                    <h4 class="popup-blog-headng">Projects</h4>
                    <a href="titanic_project.html" class="media-link">
                        <div class="media mb-4">
                            <img src="assets/images/projects/kaggle_thumbnail.jpg" alt="blog" width="86px"
                                class="img-fluid mr-4">
                            <div class="media-body align-self-end">
                                <h5 class="popup-blog-post-title">Data Science </h5>
                                <h5 class="popup-blog-post-title">Titanic Dataset (Top 9%) </h5>

                            </div>
                        </div>
                    </a>
                    <a href="cafe_project.html" class="media-link">
                        <div class="media mb-4">
                            <img src="assets/images/projects/cafes_in_yangon/landing_page.jpg" alt="blog" width="86px" class="img-fluid mr-4">
                            <div class="media-body align-self-end">
                                <h5 class="popup-blog-post-title">Web Development</h5>
                                <h5 class="popup-blog-post-title">First Full Stack Project </h5>
                            </div>
                        </div>
                    </a>

                    <p><a href="index.html#projects" class="text-white link-hover-fx text-decoration-none" id="nav-right-btn">View
                            more</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
    <main class="contact-page-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4 offset-lg-2 contact-page-content-wrapper wow fadeInLeft">
                    <div class="contact-page-content">
                        <h4 class="contact-page-title">Lets Talk</h4>
                        <p class="contact-page-street-address">Building 7, Room 4 <br> 3rd Quarter, Hlaing Tsp <br> Yangon, Myanmar</p>
                        <p class="mb-3">MM: +95 421 004 559 <br> harrythu25@gmail.com</p>
                        <ul class="nav contact-social-links">
                            
                        </ul>
                    </div>
                    
                </div>
                <div class="col-md-6 col-lg-4 contact-page-form-wrapper wow fadeInRight">
                    <form action="connect.php" method="post">
                        <div class="form-group">
                            <label for="name" class="sr-only">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <label for="message" class="sr-only">Message</label>
                            <input type="text" class="form-control" id="message" name="message" placeholder="Message" required>
                        </div>
                        <div>
                            <button class="btn" type="Submit">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <footer class="hiro-footer wow fadeInUp">
        <div class="container d-flex flex-wrap justify-content-lg-between align-items-center">
            <p class="mb-0 footer-text">?? <a href="" target="_blank" rel="noopener noreferrer"
                    class="text-reset">HarryThu</a> 2020. All rights reserved.</p>
            <nav class="footer-nav nav">
                <!--<a href="#!" class="nav-link">Terms and Conditions</a>
                    <a href="#!" class="nav-link">Privacy Policy</a>
                    <a href="#!" class="nav-link">Cookie Policy</a>-->
            </nav>
        </div>
    </footer>
    <script src="assets/vendors/wowjs/wow.min.js"></script>
    <script src="assets/vendors/popper.js/popper.min.js"></script>
    <script src="assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
        new WOW().init();
    </script>
</body>

</html>
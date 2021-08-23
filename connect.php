<?php
    header( "refresh:5;url=index.html" );
    require_once 'pdoconfig.php';
    $name= $_POST['name'];
    $email= $_POST['email'];    
    $message= $_POST['message'];
 try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    //echo "Connected to $dbname at $host successfully.";
} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());}

    $my_Insert_Statement = $conn->prepare("INSERT INTO messages (name, email, message) VALUES (:name, :email, :message)");
    $my_Insert_Statement->bindParam(':name', $name);
    $my_Insert_Statement->bindParam(':email', $email);
    $my_Insert_Statement->bindParam(':message', $message);

  






?>


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

    <main class="contact-page-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4 offset-lg-2 contact-page-content-wrapper wow fadeInLeft">
                    <div class="contact-page-content">
                        
                        <p class="contact-page-street-address">
                            <?php   if ($my_Insert_Statement->execute()) {
                                    echo "<h2>Thank you for getting in touch!</h2>";
                                    echo "You will be redirected back to the home page in 5 seconds.";
                                    } else {
                                    echo "Unable to send message";
                                    }?>
                        </p>
                                                                                            
                        <ul class="nav contact-social-links">
                            
                        </ul>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </main>
    <footer class="hiro-footer wow fadeInUp">
        <div class="container d-flex flex-wrap justify-content-lg-between align-items-center">
            <p class="mb-0 footer-text">© <a href="" target="_blank" rel="noopener noreferrer"
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
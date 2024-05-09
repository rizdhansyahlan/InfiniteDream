<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infinite Dream</title>

    <!--Css-->
    <link rel="stylesheet" href="../2_css/c_esport.css">
    <link rel="stylesheet" href="../2_css/navbar.css">
    <link rel="stylesheet" href="../2_css/popup.css">
    <link rel="stylesheet" href="../2_css/footer.css">
    <link rel="stylesheet" href="../2_css/partners.css">

    <!--Font Google-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,300;12..96,400;12..96,500;12..96,600;12..96,700;12..96,800&family=Inter:wght@400;500;600;700;800&family=Kanit:wght@300;400;500&family=Krona+One&family=Montserrat:wght@400;700&family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">

    <!--
        font-family: 'Bricolage Grotesque';
        font-family: 'Inter';
        font-family: 'Kanit';
        font-family: 'Krona One';
        font-family: 'Montserrat';
        font-family: 'Ubuntu';
    -->

    <!--Font Awesome (icon)-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

</head>
<body>
    <div id="esport">
        <!--START HEADER-->
        <nav>
            <div class="logo">
                <a href="a_home.php#content">
                    <img src="../4_img/logo-navbar.png">
                </a>
            </div>

            <ul>
                <li><a href="a_home.php#content">HOME</a></li>
                <li><a href="b_activity.php">ACTIVITY</a></li>
                <li><a href="a_home.php#store">STORE</a></li>
                <li><a href="c_esport.php">ESPORT</a></li>
                <li><a href="e_contact-us.php">CONTACT US</a></li>
                <li  id="openPopup"><button>JOIN NOW</button></li>
            </ul>

            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>

        <div id="popup" class="popup">
            <div class="popup-content">
                <span class="close" id="closePopup">&times;</span>
                <h2>COMMUNITY REGISTRATION</h2>
                <form action="whatsapp.php" method="POST">
                    <div class="scrollable-content">
                        <h4>PERSONAL DATA</h4>
                        <label>Full Name</label>
                        <input type="text" id="name" name="full-name" required>
                        <label>Birth Date</label>
                        <input type="date" id="dob" name="dob" required>
                        <label>Phone Number</label>
                        <input type="tel" id="pnum" name="phone-number" pattern="[0-9]{10,12}" placeholder="08123456789" required>
                        <label>Email</label>
                        <input type="email" id="email" name="email" placeholder="example@gmail.com">
                        
                        <button type="submit">Register</button>
                    </div>
                </form>
            </div>
        </div>
        <!--END OF HEADER-->
        
        <!--START HERO-->
        <div id="back-marq">
            <div class="text-marq">
                <h1>LET'S JOIN</h1>
                <h1> OUR ENDLESS JOURNEY</h1>
                <p>if you're great at the games</p>
            </div>
            <div class="opacity"></div>
            <div class="img-marq">
                <div class="marquee">
                    <img src="../4_img/img_marq/marq_1.jpg" height="500"/>
                    <img src="../4_img/img_marq/marq_2.jpg" height="500"/>   
                    <img src="../4_img/img_marq/marq_3.jpg" height="500"/>
                    <img src="../4_img/img_marq/marq_4.jpg" height="500"/>
                    <img src="../4_img/img_marq/marq_5.jpg" height="500"/>  
                    <img src="../4_img/img_marq/marq_6.jpg" height="500"/>
                </div>
                <div class="marquee">
                    <img src="../4_img/img_marq/marq_1.jpg" height="500"/>
                    <img src="../4_img/img_marq/marq_2.jpg" height="500"/>   
                    <img src="../4_img/img_marq/marq_3.jpg" height="500"/>
                    <img src="../4_img/img_marq/marq_4.jpg" height="500"/>
                    <img src="../4_img/img_marq/marq_5.jpg" height="500"/>  
                    <img src="../4_img/img_marq/marq_6.jpg" height="500"/>
                </div>
            </div>
        </div>
        <!--END HERO-->

        <!--START MAIN-->
        <div id="main-esport">
            <!--START VISION-->
            <section class="vision">
                <div class="vision-text">
                    <h2>OUR VISION</h2>
                    <hr>
                    <p>Our values extend to the way we interact with our fanbase as well. We communicate in an encouraging way, showing our community that hard work and focus pays off, and that there is a path to creating the life others only dream of. We aim to entertain by not taking ourselves and our successes too seriously in the process. Talent is not enough. We pride ourselves with our ability to provide a surrounding of growth for our players, to allow them to reach their true potential. We do this through mental coaching, nutritional advice, and high-level coaches and training regiments.</p>
                </div>
    
                <div class="vision-img">
                    <img src="../4_img/esports.jpeg">
                    <img src="../4_img/esportspink.png">
                </div>
            </section>
            <!--END VISION-->

            <!--START TEAMS-->
            <section class="teams">
                <div class="teams-text">
                    <h1>DIVISION</h1>
                </div>
                <div class="teams-img">
                    <div class="card card-1">
                        <img src="../4_img/poster_valorant.png" />
                        <div class="info">
                            <h1>Valorant</h1>
                            <p>- Team Name -</p>
                            <p>- Team Name -</p>
                        </div>
                    </div>
                    <div class="card card-2">
                        <img src="../4_img/poster_ml.jpg" />
                        <div class="info">
                            <h1>Mobile Legends</h1>
                            <p>- Team Name -</p>
                            <p>- Team Name -</p>
                        </div>
                    </div>
                    <div class="card card-3">
                        <img src="../4_img/poster_csGO.png" />
                        <div class="info">
                            <h1>CS 2</h1>
                            <p>- Team Name -</p>
                            <p>- Team Name -</p>
                        </div>
                    </div>
                </div>
            </section>
            <!--END TEAMS-->

            <!-- START ACHIEVEMENT-->
            <section class="achievement">
                <div class="ach-text">
                    <h1>ACHIEVEMENT</h1>
                </div>
                <div class="achievement-content">
                    <div class="card-piala">
                        <div class="ach-img"><img src="../4_img/piala-mole.png"></div>
                        <div class="ach-img-name">
                            <h4>Turnament Warkop 2021</h4>
                            <p>First Place</p>
                            <p>- Infinite Dream Team -</p>
                            <p>17/11/2021</p>
                        </div>
                    </div>
                    <div class="card-piala">
                        <div class="ach-img"><img src="../4_img/piala-cs2.png"></div>
                        <div class="ach-img-name">
                            <h4>Turnament Warkop 2022</h4>
                            <p>First Place</p>
                            <p>- Infinite Dream Team -</p>
                            <p>12/11/2022</p>
                        </div>
                    </div>
                    <div class="card-piala">
                        <div class="ach-img"><img src="../4_img/piala-valo.png"></div>
                        <div class="ach-img-name">
                            <h4>Turnament Warkop 2023</h4>
                            <p>First Place</p>
                            <p>- Infinite Dream Team -</p>
                            <p>22/08/2023</p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END ACHIEVEMENT-->

            <!-- START PARTNERS -->
            <div class="partners">
                <h2>Powered by</h2>
            </div>
            <div class="logos">
                <div class="logos-slide">
                    <img src="../4_img/partners/aimlab_logo.png">
                    <img src="../4_img/partners/corsair_logo.png">
                    <img src="../4_img/partners/fahri_logo.png">
                    <img src="../4_img/partners/dhan_logo.png">
                    <img src="../4_img/partners/intel_logo.png">
                    <img src="../4_img/partners/logitech_logo.png">
                    <img src="../4_img/partners/mrbeast_logo.png">
                    <img src="../4_img/partners/nintendo_logo.png">
                    <img src="../4_img/partners/primegaming_logo.png">
                    <img src="../4_img/partners/razer_logo.png">
                    <img src="../4_img/partners/fantech_logo.png">
                    <img src="../4_img/partners/rexus_logo.png">
                    <img src="../4_img/partners/mountaindew.png">
                </div>
                <div class="logos-slide">
                    <img src="../4_img/partners/aimlab_logo.png">
                    <img src="../4_img/partners/corsair_logo.png">
                    <img src="../4_img/partners/fahri_logo.png">
                    <img src="../4_img/partners/dhan_logo.png">
                    <img src="../4_img/partners/intel_logo.png">
                    <img src="../4_img/partners/logitech_logo.png">
                    <img src="../4_img/partners/mrbeast_logo.png">
                    <img src="../4_img/partners/nintendo_logo.png">
                    <img src="../4_img/partners/primegaming_logo.png">
                    <img src="../4_img/partners/razer_logo.png">
                    <img src="../4_img/partners/fantech_logo.png">
                    <img src="../4_img/partners/rexus_logo.png">
                    <img src="../4_img/partners/mountaindew.png">
                </div>
            </div>
            <!--END PARTNERS -->

        </div>
        <!--END MAIN CONTENT-->

        <!--START FOOTER-->
        <footer>
            <div class="container">
                <div class="logo-footer">
                    <img src="../4_img/logo-footer.png" alt="logo-footer">
                </div>
                <div class="footer-content">
                    <h3>Community</h3>
                    <ul class="list">
                        <li><a href="a_home.php#aboutss">About</a></li>
                        <li><a href="b_activity.php">Activity</a></li>
                        <li><a href="c_esport.php">Esports</a></li>
                        <li><a href="a_home.php#store">Store</a></li>
                    </ul>
                </div>
                <div class="footer-content">
                    <h3>FAQ & Policy</h3>
                    <ul class="list">
                        <li><a href="../1_html/policies.php#">All Terms & Policies</a></li>
                        <li><a href="../1_html/policies.php#privacy-policy">Privacy Policy</a></li>
                        <li><a href="../1_html/policies.php#comgd">Community Guidelines</a></li>
                        <li><a href="../1_html/policies.php#faq">FAQ</a></li>
                    </ul>
                </div>
                <div class="footer-social">
                    <div class="footer-content">
                        <h3>Follow Us</h3>
                        <ul class="social-icons">
                            <li class="yt"><a href=""><i class="fab fa-youtube"></i></a></li>
                            <li class="discord"><a href=""><i class="fab fa-discord"></i></a></li>
                            <li class="instagram"><a href=""><i class="fab fa-instagram"></i></a></li>
                            <li class="whatsapp"><a href=""><i class="fab fa-whatsapp" ></i></a></li>
                        </ul>
                        
                    </div>
                    <div class="footer-content">
                        <div class="contacts">
                            <h3>LET'S GET IN TOUCH</h3>
                            <p>infinitedreamcom@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-bar">
                <p>Copyright &copy; 2023 Infinite Dream. All Rights Reserved</p>
            </div>
        </footer>
        <!--END FOOTER-->
        

    </div>

    <script src="../3_js/script.js"></script>
</body>
</html>
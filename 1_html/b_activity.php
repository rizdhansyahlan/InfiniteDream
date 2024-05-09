<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infinite Dream</title>

    <!--Css-->
    <link rel="stylesheet" href="../2_css/navbar.css">
    <link rel="stylesheet" href="../2_css/popup.css">
    <link rel="stylesheet" href="../2_css/b_activity.css">
    <link rel="stylesheet" href="../2_css/footer.css">
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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div id="activity">
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
        
        <!--START MAIN CONTENT-->
        <div class="activity-content">
            <div class="parent">
                <div class="child1">
                    <div class="div1">
                        <div class="div1-c">
                            <a href="../1_html/news.php">
                                <div class="div1-c-text"><p>Gathering Komunitas Game Indonesia</p></div>
                                <div class="div1-c-img"><div class="image news-1"></div></div>
                            </a>
                        </div>
                        <div class="div1-c">
                            <a href="../1_html/news.php">
                                <div class="div1-c-text"><p>Menghadiri Acara Gamers 2 Gamers Festival</p></div>
                                <div class="div1-c-img"><div class="image news-2"></div></div>
                            </a>
                        </div>
                    </div>
                    <div class="div2">
                        <a  href="https://youtu.be/4-F8GcwRUuU?si=VuEzu9rNc5EdFIXq" target="_blank">
                            <div class="div1-c-text"><p>Tutorial God of War</p></div>
                            <div class="div1-c-img"><a  href="https://youtu.be/4-F8GcwRUuU?si=VuEzu9rNc5EdFIXq" target="_blank" class="image news-3"></a></div>
                        </a>
                    </div>
                </div>
                <div class="child2">
                    <div class="div3">
                        <a href="../1_html/news.php">
                            <div class="div1-c-text"><p>Menghadiri Acara Jakarta Game Expo 2023</p></div>
                            <div class="div1-c-img"><div class="image news-4"></div></div>
                        </a>
                    </div>
                    <div class="div4">
                        <div class="div1-c">
                            <a href="../1_html/news.php">
                                <div class="div1-c-text"><p>Booth Game Indonesia di Motion Ime Festival</p></div>
                                <div class="div1-c-img"><div class="image news-5"></div></div>
                            </a>
                        </div>
                        <div class="div1-c">
                            <a href="../1_html/news.php">
                                <div class="div1-c-text"><p>Menonton M4 di Jakarta</p></div>
                                <div class="div1-c-img"><div class="image news-6"></div></div>
                            </a>
                        </div>
                    </div>
                    <div class="div5">
                        <div class="div1-c">
                            <a href="../1_html/news.php">
                                <div class="div1-c-text"><p>Menonton Valorant Challangeers Indonesia</p></div>
                                <div class="div1-c-img"><div class="image news-7"></div></div>
                            </a>
                        </div>
                        <div class="div1-c">
                            <a href="../1_html/news.php">
                                <div class="div1-c-text"><p>Seru-seruan Bersama Komunitas Board Game Indonesia</p></div>
                                <div class="div1-c-img"><div class="image news-8"></div></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>    
</body>
</html>
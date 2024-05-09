<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infinite Dream</title>

    <!--Css-->
    <link rel="stylesheet" href="../2_css/navbar.css">
    <link rel="stylesheet" href="../2_css/popup.css">
    <link rel="stylesheet" href="../2_css/policies.css">
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

</head>
<body>
    <div id="policies">
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

        <!-- START ALL TERMS POLICIES -->
        <div id="content">
            <div class="policies">
                <div class="policies-text">
                    <h1>TERMS OF SERVICE</h1>
                    <div class="user-conduct">
                        <h2>User Conduct</h2>
                        <h3>Acceptable Behaviour</h3>
                        <p>
                            <span>Respectful and inclusive communication.</span>
                            <span>Positive engagement and collaboration.</span>
                            <span>Fair play in all games without the use of cheat programs.</span>
                        </p>
                        <h3>Unacceptable Behaviour</h3>
                        <p>
                            <span>Scamming, cheating, or using cheat programs.</span>
                            <span>Disrespectful behavior towards other players within or outside the community.</span>
                            <span>Use of inappropriate language resulting in immediate warnings or bans by admins.</span>
                        </p>
                    </div>
                    <div class="account-registration">
                        <h2>Account Registration</h2>
                        <h3>Required Information</h3>
                        <p>
                            <span>Full name, birth date, phone number, and email.</span>
                            <span>Agreement to terms and policies.</span>
                        </p>
                        <h3>Account Suspension/Termination</h3>
                        <p>
                            <span>Violation of terms may result in suspension or termination.</span>
                            <span>Users will receive an email notification and be suspended/banned within 24 hours.</span>
                        </p>
                    </div>
                    <div class="intellectual-property">
                        <h2>Intellectual Property</h2>
                        <h3>Guidelines for Copyrighted Material</h3>
                        <p>
                            <span>Users must respect copyright laws.</span>
                            <span>Address intellectual property infringement issues promptly.</span>
                        </p>
                    </div>
                </div>
        
                <div id ="privacy-policy" class="title-text"><h1>PRIVACY POLICY</h1></div>
                <div class="privacy-policy">
                    <h2>Data Collection</h2>
                    <p>
                        <span>Information collected: Full name, birth date, phone number, email.</span>
                        <span>Purpose: For database use and distribution of information or news.</span>
                    </p>
                    <h2>Cookies</h2>
                    <p><span>No use of cookies or tracking technologies.</span></p>
                    <h2>Third Party Sharing</h2>
                    <p><span>User data is not shared with third parties.</span></p>
                </div>
                
                <div id="comgd" class="title-text"><h1>COMMUNITY GUIDELINES</h1></div>
                <div class="community-guidelines">
                    <h2>Allowed Communications</h2>
                    <p>
                        <span>Respectful and inclusive communication.</span>
                        <span>Strict prohibition of hate speech and bullying.</span>
                    </p>
                    <h2>Moderation Policy</h2>
                    <p>
                        <span>Consequences for guideline violations, including warnings, suspensions, or bans.</span>
                        <span>Users can report violations, and appeals will be considered.</span>
                    </p>
                    <h2>Community Contributions</h2>
                    <p>
                        <span>Recognition and rewards for positive contributions.</span>
                        <span>Process for reporting inappropriate content or behavior.</span>
                    </p>
                </div>
                <section>
                    <h1 class="faq-title">FAQ</h1>

                    <div id="faq" class="faq">
                        <div class="question">
                            <h3>How can I join the community?</h3>

                            <svg width="16" height="12" viewBox="-2.5 -5 75 60" preserveAspectRatio="none">
                                <path d="M0,0 l35,50 l35,-50" fill="none" stroke="white" stroke-linecap="round" stroke-width="7" />
                            </svg>

                        </div>
                        <div class="answer">
                            <p>
                                Simply hit the JOIN NOW button on our navigation bar or head to our Discord server.
                            </p>
                        </div>
                    </div>

                    <div class="faq">
                        <div class="question">
                            <h3>Does Infinite Dream charge a fee for membership?</h3>

                            <svg width="20" height="12" viewBox="-2.5 -5 75 60" preserveAspectRatio="none">
                                <path d="M0,0 l35,50 l35,-50" fill="none" stroke="white" stroke-linecap="round" stroke-width="7" />
                            </svg>

                        </div>
                        <div class="answer">
                            <p>
                                No. 
                            </p>
                        </div>
                    </div>

                    <div class="faq">
                        <div class="question">
                            <h3>Do esports teams have official merchandise?</h3>

                            <svg width="18" height="12" viewBox="-2.5 -5 75 60" preserveAspectRatio="none">
                                <path d="M0,0 l35,50 l35,-50" fill="none" stroke="white" stroke-linecap="round" stroke-width="7" />
                            </svg>

                        </div>
                        <div class="answer">
                            <p>
                                Yes, we have official merchandise available for purchase. Fans can buy t-shirts, hoodies, and other items to support their favorite teams.
                            </p>
                        </div>
                    </div>

                    <div class="faq">
                        <div class="question">
                            <h3>How does shipping work for esports merchandise purchased online?</h3>

                            <svg width="27" height="12" viewBox="-2.5 -5 75 60" preserveAspectRatio="none">
                                <path d="M0,0 l35,50 l35,-50" fill="none" stroke="white" stroke-linecap="round" stroke-width="7" />
                            </svg>

                        </div>
                        <div class="answer">
                            <p>
                                Shipping policies vary, but we provide standard and express shipping options. Delivery times depend on your location and the chosen shipping method.
                            </p>
                        </div>
                    </div>

                </section>
            </div>        
        </div>     

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
    <script src="../3_js/policies.js"></script>
</body>
</html>
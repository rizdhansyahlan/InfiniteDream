<!DOCTYPE html>
<html lang=""en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infinite Dream</title>
    <link rel="stylesheet" href="../2_css/e_contact-us.css">
    <link rel="stylesheet" href="../2_css/navbar.css">
    <link rel="stylesheet" href="../2_css/popup.css">
    <link rel="stylesheet" href="../2_css/footer.css">

     <!--Font Google-->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,300;12..96,400;12..96,500;12..96,600;12..96,700;12..96,800&family=Inter:wght@400;500;600;700;800&family=Kanit:wght@300;400;500&family=Krona+One&family=Montserrat:wght@400;700&family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>

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


    <div class="contactUS">
        <div class="title">
            <h2>Send Your Dream</h2>
        </div>
    <div class="box">
        <!-- form -->
        <div class="contact form">
            <h3>Give us a message</h3>
            <form action="#input-field1" method="POST">
            <?php 
                        $userEmail = "infinitedreamcom@gmail.com"; //first we leave email field blank
                        if(isset($_POST['subscribe'])){ //if subscribe btn clicked 
                            $fname = $_POST['firstname'];
                            $lname = $_POST['lastname'];
                            $email = $_POST['emailcs'];
                            $phone = $_POST['phonenumber'];
                            $dream = $_POST['message'];
                            if(filter_var($userEmail, FILTER_VALIDATE_EMAIL)){ //validating user email
                                $subject = "Member Dream";
                                $message = "Hi, Infinite Dream Community! 
                    I am, $fname $lname 
                    Email : $email
                    Phone : $phone
                    Dream : $dream "  ;
                                $sender = "From: infinitedreamcom@gmail.com";
                                //php function to send mail
                                if(mail($userEmail, $subject, $message, $sender)){
                                    ?>
                                        <!-- show sucess message once email send successfully -->
                                        <script>
                                            showPopupSuccess();
                                        </script>
                                    <?php
                                    $userEmail = "";
                                    }
                                else{
                                    ?>
                                    <!-- show error message if somehow mail can't be sent -->
                                    <script>
                                        showPopupErrorEmail();
                                    </script>
                                    <?php
                                }
                            }else{
                                ?>
                                <!-- show error message if user entered email is not valid -->
                                <script>
                                    showPopupError();
                                </script>
                            <?php
                            }
                        }
                        ?>
                <div class="formbox">
                    <div class="row50">
                        <div class="InputBox">
                            <span>First Name</span>
                            <input type="text" placeholder="Indiana" name="firstname" id="firstname">
                        </div>
                        <div class="InputBox">
                            <span>Last Name</span>
                            <input type="text" placeholder="Jones" name="lastname" id="lastname">
                        </div>
                    </div>

                    <div class="row50">
                        <div class="InputBox">
                            <span>Email</span>
                            <input type="email" placeholder="example@gmail.com" name="emailcs" id="emailcs" id="input-field1">
                        </div>
                        <div class="InputBox">
                            <span>Phone Number</span>
                            <input type="text" placeholder="08123456789" name="phonenumber" id="phonenumber">
                        </div>
                    </div>

                </div>
                <div class="row100">
                    <div class="InputBox">
                        <span>Message</span>
                        <textarea placeholder="Write Your Dream" name="message" id="message"></textarea>
                    </div>
                </div>  
                <div class="row100">
                    <div class="buttons">
                        <a><button name="subscribe" href="#input-field1">Send</button></a>
                    </div>
                </div>
            </form>
        </div>
        

        <!-- info box -->
        <div class="contact info">
            <h3>Contact Info</h3>
            <div class="infobox">
                <div>
                    <span><ion-icon name="location"></ion-icon></span>
                    <p>Warung Idan Kp. Pedurenan Jalan H. Basar RT005/006 No.30 Jatiluhur, Jatiasih, Kota Bekasi, Jawa Barat</p>
                </div>
                <div>
                    <span><ion-icon name="mail-open"></ion-icon></span>
                    <a href="mailto:infinitedreamcom@gmail.com">infinitedreamcom@gmail.com</a>
                </div>   
                <div>
                    <span><ion-icon name="call"></ion-icon></span>
                    <a href="tel:087877476007">087877476007</a>
                </div>
                <!-- Social Media Links-->
                <ul class="sci">
                    <li class="yt"><a href=""><i class="fab fa-youtube"></i></a></li>
                    <li class="discord"><a href=""><i class="fab fa-discord"></i></a></li>
                    <li class="instagram"><a href=""><i class="fab fa-instagram"></i></a></li>
                    <li class="whatsapp"><a href=""><i class="fab fa-whatsapp" ></i></a></li>
                </ul>
            </div>
        </div>

         

        <!-- map -->
        <div class="contact map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.524006734463!2d106.94811077573249!3d-6.326070161902265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e699381674b5aa7%3A0x59c701bfaa6eaa77!2sWarung%20idan!5e0!3m2!1sid!2sid!4v1702470463047!5m2!1sid!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
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

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="../3_js/script.js"></script>
</body>
</html>
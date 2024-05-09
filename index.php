<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infinite Dream</title>

    <!--Css-->
    <link rel="stylesheet" href="../2_css/navbar.css">
    <link rel="stylesheet" href="../2_css/popup.css">
    <link rel="stylesheet" href="../2_css/a_home-about.css">
    <link rel="stylesheet" href="../2_css/about-right-2.css">
    <link rel="stylesheet" href="../2_css/a_home.css">
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
    <div id="home">
        <!--START HEADER-->
        <nav>
            <div class="logo">
                <a href="index.php#content">
                    <img src="../4_img/logo-navbar.png">
                </a>
            </div>

            <ul>
                <li><a href="index.php#content">HOME</a></li>
                <li><a href="../b_activity.php">ACTIVITY</a></li>
                <li><a href="index.php#store">STORE</a></li>
                <li><a href="../c_esport.php">ESPORT</a></li>
                <li><a href="../e_contact-us.php">CONTACT US</a></li>
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

        <!-- START MAIN CONTENT-->
        <div class="home-content">
            <div class="opacity"></div>
        </div>
        <div class="social-media">
            <a href="#" style="--color: #ff0000">
                <i class="fa-brands fa-youtube"></i>
            </a>
            <a href="#"  style="--color: #5661f5;">
                <i class="fa-brands fa-discord"></i>
            </a>
            <a href="#" style="--color: #c0007a">
                <i class="fa-brands fa-instagram"></i>
            </a>
            <a href="#" style="--color: #25d366">
                <i class="fa-brands fa-whatsapp"></i>
            </a>
        </div>
        
        <div id="content">
            <!--START HOME-->
            <div class="home-content-box">
                <div class="home-text">
                    <h1>INFINITE DREAM</h1>
                    <h3>ESTABLISHED IN 2023</h4>
                    <p>Infinite Dream™ is an Indonesian based gaming community built 
                        at the crossroads of entertainment, competitive esports, and merchandise.
                        Our mission is to give every gamer something to look forward to, 
                        something to get behind, and something that they can call their own.</p>
                </div>
            </div>
            <!--END HOME-->

            <!--START ABOUT-->
            <div class="about-us" id="aboutss">
                <div class="about-us-content">
                    <div class="title-about">
                        <h1>ABOUT US</h1>
                    </div>

                    <div class="about-content">
                        <div class="about-left">
                            <button id="btn-a1">About Us</button>
                            <button id="btn-a2">Founder</button>
                        </div>
                        <div id="about-1" class="about-right-1">
                            <p style="text-indent: 45px;">Welcome to our community, where gaming enthusiasts gather to share experiences, knowledge, and the boundless spirit of gaming. Founded with the goal of creating a friendly and inclusive space for gamers of all levels, we value the diversity of games and foster friendships through our shared hobby. Join us to explore the gaming world together in a community full of enthusiasm and support. Happy gaming, and embrace your gaming adventures with us!</p> <br>
                            <p style="text-indent: 45px;">Our community is more than just a virtual space; it's a hub of creativity and collaboration. Whether you're into multiplayer battles, immersive storytelling, or competitive esports, you'll find like-minded individuals ready to engage in lively discussions and friendly competitions. We believe in the power of gaming to connect people across borders and backgrounds, transcending language barriers through the universal language of play.</p> <br>
                            <p style="text-indent: 45px;">At the heart of our community are dedicated moderators and members who contribute to maintaining a positive and respectful atmosphere. We organize regular events, tournaments, and game nights to enhance the sense of camaraderie among our members. It's not just about gaming; it's about building lasting connections and fostering a supportive environment for everyone to thrive in their gaming journey.</p>
                        </div>
                        <div id="about-2" class="about-right-2">
                            <p>OUR TEAM</p>
                            <div class="about-team">
                                <div class="box box-1" style="--img :url(../4_img/team-1.jpg);" data-text="Fahri"></div> 
                                <div class="box box-2" style="--img :url(../4_img/team-2.jpg);" data-text="Rizdhan"></div> 
                                <div class="box box-3" style="--img :url(../4_img/team-3.jpg);" data-text="Deizra"></div> 
                                <div class="box box-4" style="--img :url(../4_img/team-4.jpg);" data-text="Iqbal"></div> 
                                <div class="box box-5" style="--img :url(../4_img/team-5.jpg);" data-text="Erlangga"></div> 
                            </div>
                            <div class="about-team-responsive">
                                <div class="boxxi" style="--img :url(../4_img/team-1.jpg);"><div>Fahri</div></div> 
                                <div class="boxxi" style="--img :url(../4_img/team-2.jpg);"><div>Rizdhan</div></div> 
                                <div class="boxxi" style="--img :url(../4_img/team-3.jpg);"><div>Deizra</div></div> 
                                <div class="boxxi" style="--img :url(../4_img/team-4.jpg);"><div>Iqbal</div></div> 
                                <div class="boxxi" style="--img :url(../4_img/team-5.jpg);"><div>Erlangga</div></div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--END ABOUT-->

            <!--START BENEFIT-->
            <div class="benefit-content">
                <div class="benefit-content-box">
                    <div class="benefit-img">
                        <img src="../4_img/stick-ps.png" alt="Benefit Vector">
                    </div>
                    <div class="benefit-text">
                        <p class="benefit-title">There are several benefits when joining our community</p>
                        <ul>
                            <li>
                                <div class="benefit-icon">
                                    <i class="fa-regular fa-comments" style="color: #270e59;"></i>
                                    <div><p>Knowledge Exchange</p></div>
                                </div>
                                <p class="explanation">Our community is a hub for sharing insights and experiences. Access tips, tricks, and guidance from seasoned players to elevate your gaming skills and understanding.</p>
                            </li>
                            <li>
                                <div class="benefit-icon">
                                    <i class="fa-solid fa-gamepad" style="color: #270e59;"></i>
                                    <div><p>Recommended Games</p></div>
                                </div>
                                <p class="explanation">Receive top game recommendations directly from our community. Discover games that align with your interests and preferences, along with reviews and insights from fellow community members.</p> 
                            </li>
                            <li>
                                <div class="benefit-icon">
                                    <i class="fa-solid fa-dungeon" style="color: #270e59;"></i>
                                    <div><p>Tournaments and Special Events</p></div>
                                </div>
                                <p class="explanation">We regularly organize tournaments and special events for community members. This is the perfect chance to showcase your skills, win prizes, and celebrate achievements together.</p>
                            </li>
                            <li>
                                <div class="benefit-icon">
                                    <i class="fa-solid fa-headphones" style="color: #270e59;"></i>
                                    <div><p>Exclusive Content</p></div>
                                </div>
                                <p class="explanation">Gain access to exclusive content, sneak peeks, and special features not available to the public. So, be part of the community and enjoy exciting content that can only be experienced by members.</p>
                            </li>
                            <li>
                                <div class="benefit-icon">
                                    <i class="fa-solid fa-percent" style="color: #270e59;"></i>
                                    <div><p>Special Discount</p></div>
                                </div>
                                <p class="explanation">Membership in our game community grants exclusive access to discounts, special offers, and the latest promotions from our partners and sponsors. Enjoy unique perks as a community member.</p>
                            </li>
                            <li>
                                <div class="benefit-icon">
                                    <i class="fa-regular fa-handshake" style="color: #270e59;"></i>
                                    <div><p>Networking Opportunities</p></div>
                                </div>
                                <p class="explanation">Connect with fellow gamers and industry enthusiasts, opening doors to potential collaborations, partnerships, and opportunities within the gaming community.</p>
                            </li>
                        </ul>
                    </div>  
                </div>              
            </div>
            <!--END BENEFIT-->

            <!--START ACTIVITY-->
            <div class="activity-content">
                <div class="activity-content-box">
                    <div class="activity-title">
                        <h4>ACTIVITY</h4>
                        <div><a href="../1_html/b_activity.html">See All -></a></div>
                    </div>
                    <div class="activity-box">
                        <div class="box">
                            <span><img src="../4_img/watch-party.jpg"></span>
                            <div class="box-text"><p>Watch party tournament</p></div>
                        </div>
                        <div class="box">
                            <span><iframe src="https://www.youtube.com/embed/JTyilgjaYtA" title="A YouTube video" frameborder="0" allowfullscreen></iframe></span>
                            <div class="box-text"><p>Tutorial some games from our member</p></div>
                        </div>
                        <div class="box">
                            <span><img src="../4_img/tournament-warkop.jpg"></span>
                            <div class="box-text"><p>participated in several tournaments</p></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--END ACTIVITY-->

            <!--START PLAY-W-US-->
            <div class="lets">
                <h1>- LET'S PLAY WITH US -</h1>
            </div>
            <div class="p-w-u">
                <div class="p-w-u-content">
                    <div class="buttons">
                        <button class="btn" id="btn-1" onclick="toggleFilter(1)"></button>
                        <button class="btn" id="btn-2" onclick="toggleFilter(2)"></button>
                        <button class="btn" id="btn-3" onclick="toggleFilter(3)"></button>
                        <button class="btn" id="btn-4" onclick="toggleFilter(4)"></button>
                    </div>
                    <div class="buttons2">
                        <p>Mobile Legends</p>
                        <p>Valorant</p>
                        <p>Genshin Impact</p>
                        <p>Minecraft</p>
                    </div>

                    <div class="content">
                        <div class="div-1" id="div-1">
                            <div class="game-content">
                                <div class="left">
                                    <h2>MOBILE LEGENDS : BANG-BANG</h2>
                                    <p class="about">ABOUT THE GAME</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur tempora quam possimus. Maiores dignissimos animi voluptatibus, officiis voluptatem perspiciatis porro nobis. A nemo hic rerum est error, consequuntur in omnis.</p>
                                    <div class="install">
                                        <p>Install Now</p>
                                        <div>
                                            <a href="#"><img src="../4_img/games/play-store.png" width="25px"></a>
                                            <a href="#"><img src="../4_img/games/app-store.png" width="25px"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="middle"><img src="../4_img/games/Miya.png" width="690px"></div>
                                <div class="right">
                                    <p align="right">RELEASED TRAILER</p>
                                    <iframe src="https://www.youtube.com/embed/-hV3ZaBKRsM" width="280px" height="160px" title="Way of the Outlaw | Ixia | New Hero Ixia's Cinematic Trailer | Mobile Legends: Bang Bang" frameborder="0" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="div-2" id="div-2">
                            <div class="game-content">
                                <div class="left">
                                    <h2>VALORANT</h2>
                                    <p class="about">ABOUT THE GAME</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur tempora quam possimus. Maiores dignissimos animi voluptatibus, officiis voluptatem perspiciatis porro nobis. A nemo hic rerum est error, consequuntur in omnis.</p>
                                    <div class="install">
                                        <p>Install Now</p>
                                        <div>
                                            <a href="#"><img src="../4_img/games/windows.png" width="25px"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="middle"><img src="../4_img/games/Jett.png" width="730px"></div>
                                <div class="right">
                                    <p align="right">RELEASED TRAILER</p>
                                    <iframe src="https://www.youtube.com/embed/u5SLW6SkR7I" width="280" height="160" title="VALORANT ARES21 RETAKE30 16x9 30 en US MASTER FINAL IND" frameborder="0" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="div-3" id="div-3">
                            <div class="game-content">
                                <div class="left">
                                    <h2>GENSHIN IMPACT</h2>
                                    <p class="about">ABOUT THE GAME</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur tempora quam possimus. Maiores dignissimos animi voluptatibus, officiis voluptatem perspiciatis porro nobis. A nemo hic rerum est error, consequuntur in omnis.</p>
                                    <div class="install">
                                        <p>Install Now</p>
                                        <div>
                                            <a href="#"><img src="../4_img/games/windows.png" width="25px"></a>
                                            <a href="#"><img src="../4_img/games/play-store.png" width="25px"></a>
                                            <a href="#"><img src="../4_img/games/app-store.png" width="25px"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="middle"><img src="../4_img/games/Aether-Lumine.png" width="870px"></div>
                                <div class="right">
                                    <p align="right">RELEASED TRAILER</p>
                                    <iframe src="https://www.youtube.com/embed/TAlKhARUcoY" width="280" height="160" title="A YouTube video" frameborder="0" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="div-4" id="div-4">
                            <div class="game-content">
                                <div class="left">
                                    <h2>MINECRAFT</h2>
                                    <p class="about">ABOUT THE GAME</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur tempora quam possimus. Maiores dignissimos animi voluptatibus, officiis voluptatem perspiciatis porro nobis. A nemo hic rerum est error, consequuntur in omnis.</p>
                                    <div class="install">
                                        <p>Install Now</p>
                                        <div>
                                            <a href="#"><img src="../4_img/games/windows.png" width="25px"></a>
                                            <a href="#"><img src="../4_img/games/play-store.png" width="25px"></a>
                                            <a href="#"><img src="../4_img/games/app-store.png" width="25px"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="middle"><img src="../4_img/games/Steve.png" width="480px"></div>
                                <div class="right">
                                    <p align="right">RELEASED TRAILER</p>
                                    <iframe src="https://www.youtube.com/embed/Rla3FUlxJdE" width="280" height="160" title="A YouTube video" frameborder="0" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--END PLAY-W-US-->

            <div id="store">
                <!--START TOPUP-->
                <section class="topup">
                    <div class="topup-opacity">
                        <div class="topup-img">
                            <img src="../4_img/top-up-back.png">
                        </div>
                        <div class="topup-content">
                            <div class="topup-text">
                                <h2><span>TOP UP</span> YOUR GAME HERE</h2>
                                <p>Visit our website to top up various types of games more <span>FASTER</span>, <span>CHEAPER</span>, and <span>SAFER</span></p>
                            </div>
                            <div class="buttons">
                                <a href="../topup/logintopup.php"><button>TOP-UP</button></a>
                            </div>
                        </div>
                    </div>
                </section>
                <!--END TOPUP-->
    
    
                <!--START SHOP-->
                <section class="merch-shop">
                    <div class="merch-content">
                        <div class="merch-text">
                            <h2>GET YOUR <span>EXCLUSIVE MERCH</span> HERE</h2>
                            <p>Visit our website to buy various types of Merch</p>
                        </div>
                        <div class="buttons">
                            <a href="../shop/merch.html"><button>SHOP</button></a>
                        </div>
                    </div>
                    <div class="merch-img">
                        <img class="a" src="../4_img/merch-img.png">
                    </div>
                </section>
                <!--END SHOP-->
            </div>


            <!--START SUBSCRIPTION-->
            <div class="subs-content">
                <div class="subs-back"></div>
                <div class="subs-content-box">
                    <h3>ENTER YOUR EMAIL TO GET MORE INFORMATION</h3>
                    <p>You will get more information about Infinite Dream</p>
                    <p>and some discount for our merch</p>
                    <div class="input">
                        <form action="/uas_wp7/subs/kirim.php" method="POST">
                        <div class="input-group">
                            <input placeholder="example@gmail.com" type="email" id="input-field" name="email">
                            <button class="submit-button" name="subscribe" href="#input-field" type="submit"><span>SUBS</span></button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <script>
                if (window.history.replaceState) {
                    window.history.replaceState(null, null, window.location.href);
                }
            </script>
            <!--END SUBSCRIPTION-->

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
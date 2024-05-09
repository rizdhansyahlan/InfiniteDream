<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infinite Dream</title>
    
    <!--Css-->
    <link rel="stylesheet" href="../2_css/navbar.css">
    <link rel="stylesheet" href="../2_css/popup.css">
    <link rel="stylesheet" href="../2_css/a_home.css">
    <link rel="stylesheet" href="../2_css/footer.css">
    <link rel="stylesheet" href="../2_css/news.css">

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

    <!--START NEWS-->
    <div id="news">
        <div class="container-lol">
            <h1 class="heading-1">the infinite dream</h1>
            <div class="sub-heading">
                <p>Saterday, <span>june 26, 2021</span></p>
                <p class="importent">your right to know</p>
            </div>
        </div>

        <div class="homes">
            <div class="left">
                <img src="../4_img/activity/Gathering Komunitas Game Indonesia.jpg" class="home-img" alt="Paper photo">

                <h2 class="heading-2">
                    Gathering Komunitas Game Indonesia
                </h2>
            </div>

            <div class="right">
                <h3 class="heading-3">latest Activity</h3>
                <div class="lists">
                    <div class="list">
                        <img src="../4_img/activity/Menghadiri acara gamers 2 gamers festival.jpg" alt="photo 1">
                        <p>Menghadiri acara gamers 2 gamers festival</p>
                    </div>

                    <div class="list">
                        <img src="../4_img/activity/Menghadiri acara Jakarta Game EXPO 2023.jpeg" alt="photo 2">
                        <p>Menghadiri acara Jakarta Game EXPO 2023</p>
                    </div>

                    <div class="list">
                        <img src="../4_img/activity/Mengunjungi boot game Indonesia di event MotionIme Festival.jpg" alt="photo 3">
                        <p>Mengunjungi boot game Indonesia di event MotionIme Festival</p>
                    </div>

                    <div class="list">
                        <img src="../4_img/activity/Menonton sekaligus Mndukung Tim indonesia Di ajang M4 MLBB.jpeg" alt="photo 4">
                        <p>Menonton sekaligus Mndukung Tim indonesia Di ajang M4 MLBB</p>
                    </div>
                </div>
            </div>
        </div>

        <article>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos suscipit labore nihil voluptatum recusandae facere dicta veritatis iusto tempore, debitis officia qui nostrum repellendus autem numquam obcaecati sunt itaque in repudiandae expedita omnis saepe modi explicabo error! Sunt quaerat vitae omnis eaque culpa nihil sequi velit ullam fugiat, cupiditate atque quasi eum obcaecati, cumque officiis iure ipsam! Inventore voluptate dignissimos nemo! In exercitationem rerum sunt quo maxime consequatur ab accusamus explicabo voluptatem ratione. Eveniet hic, quibusdam repellendus illum quas provident corrupti dolores assumenda quis explicabo rerum reiciendis, tempore expedita iure ab numquam, facilis officia pariatur veritatis iste mollitia quam neque.</p>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente sint assumenda, alias blanditiis tempora quae, ea necessitatibus magnam velit culpa expedita optio voluptatem. Ad tenetur iure quisquam inventore! In sunt error quis magni quibusdam quos alias id odio eius eum, nostrum odit voluptates iste delectus harum labore nulla est quo?</p>

            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam aliquid molestiae, dolore cupiditate iusto cumque et sit praesentium magni fuga! Saepe neque rerum, illo possimus quasi ipsum nostrum sapiente sequi harum asperiores unde pariatur officia magni tempore, ipsa molestias odit eligendi aspernatur sunt soluta dolores suscipit? Modi consectetur porro similique. Eaque magnam quae doloribus voluptates pariatur nulla beatae non tempore nisi, explicabo sequi. Quisquam blanditiis aliquam optio culpa! Placeat fugiat a aliquid fuga accusamus non minus reiciendis quia delectus! Maxime, facere laborum, reprehenderit aut obcaecati cumque cupiditate quam a ex consectetur velit ipsa? Repellat dolor voluptate esse, placeat eius veniam quae atque sapiente sunt autem. Quod ea ducimus illo voluptatum eveniet in assumenda voluptates veritatis numquam magnam consequuntur sunt explicabo, harum dolorum nostrum laborum fugiat velit! Perferendis consectetur totam voluptatem commodi sapiente quas? Modi voluptas laborum officia atque consequuntur quos ipsum incidunt vero corrupti fuga maiores, enim at ex dolores!</p>
        </article>
    </div>  
    <!--END NEWS-->  

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
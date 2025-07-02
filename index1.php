<html>

<head>
    <title>Prabin-Photography</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <script src="https://kit.fontawesome.com/b8f6f13c30.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
    .dropdown {
        display: inline-block;
        position: relative;
    }

    .dropbtn {
        padding: 16px;
        font-size: 16px;
        border: none;
        cursor: pointer;
        color: #3498db;
        border-radius: 5px;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        min-width: 160px;
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        z-index: 1;
        border-radius: 5px;
        padding: 10px 0;
    }

    .dropdown-content a {
        color: #333;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        transition: color 0.3s;
        margin-bottom: 4px;
        /* Added small gap */
    }

    .dropdown-content a:hover {
        color: #3498db;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }
    </style>
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="brand-name">
                    <a href="index.php">Prabin.</a>
                </div>
                <nav class="nav">
                    <ul>
                        <li><a href="#home-section">Home</a></li>
                        <li><a href="#about-section">About</a></li>
                        <li><a href="#service-section">Services</a></li>
                        <li><a href="#">Works</a></li>
                        <li><a href="contact.php">Contact</a></li>


                    </ul>
                </nav>
                <nav class="nav">
                    <ul>

                        <font color='white'>Hello <?php session_start(); echo $_SESSION['name'];?></font>

                        <li class="dropdown">
                            <a href="#" class="dropbtn">Profile</a>
                            <div class="dropdown-content">
                                <a href="profile.php">View Profile</a>
                                <a href="edit_profile.php">Edit Profile</a>
                                <a href="logout.php">Logout</a>
                            </div>
                        </li>
                    </ul>
                </nav>

                <div class="Profile">

                </div>



    </header>
    <section id="home-section">
        <div class="shape-01">

        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="home-content">
                    <h4>I'm Prabin Babu Basel</h4>
                    <h1>Photographer</h1>

                </div>

            </div>

        </div>
        <a href="#" class="scroll-down">
            <img src="arr.webp" alt="scroll Down">
        </a>

    </section>

    <section id="about-section">
        <div class="container">
            <div class="row">
                <div class="about-img">
                    <div class="img-box">
                        <div class="shape-02">

                        </div>
                        <img src="th.jpg" alt="about me">
                    </div>

                </div>
                <div class="about-content">
                    <div class="row">
                        <div class="section-title">
                            <h1>About Me</h1>
                        </div>

                    </div>
                    <P>

                        At our studio, we believe in capturing moments that
                        last a lifetime. We are passionate about photography and strive to create
                        breathtaking visuals that tell unique stories. Whether it's a wedding, family
                        portrait, corporate event, or any special occasion, we are dedicated to
                        preserving the magic of your cherished moments.

                    </P>
                    <div class="stats">
                        <div class="row">
                            <div class="stat-box">
                                <h2>2 years</h2>
                                <h5>Experience</h5>
                            </div>
                            <div class="stat-box">
                                <h2>1</h2>
                                <h5>Projects Done</h5>
                            </div>
                            <div class="stat-box">
                                <h2>5</h2>
                                <h5>Happy Clients</h5>
                            </div>

                            <div class="stat-box">
                                <h2>50</h2>
                                <h5>All Shoots</h5>
                            </div>


                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <sectiom id="service-section">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h1>What I Do?</h1>
                </div>
            </div>
            <diV class="row">
                <div class="service-item">
                    <div class="service-item-inner">
                        <img src="wedding.jpg" alt="service">
                        <div class="overlay">
                            <h4>Wedding Photography</h4>
                        </div>
                    </div>
                </div>
                <div class="service-item">
                    <div class="service-item-inner">
                        <img src="prot.jpg" alt="service">
                        <div class="overlay">
                            <h4>Protrait Photography</h4>
                        </div>
                    </div>
                </div>
                <div class="service-item">
                    <div class="service-item-inner">
                        <img src="fa.jpg" alt="service">
                        <div class="overlay">
                            <h4>Fashion Photography</h4>
                        </div>
                    </div>
                </div>
                <div class="service-item">
                    <div class="service-item-inner">
                        <img src="tra.jpg" alt="service">
                        <div class="overlay">
                            <h4>Travel Photography</h4>
                        </div>
                    </div>
                </div>
                <div class="service-item">
                    <div class="service-item-inner">
                        <img src="wild.jpg" alt="service">
                        <div class="overlay">
                            <h4>Wild Photography</h4>
                        </div>
                    </div>
                </div>
                <div class="service-item">
                    <div class="service-item-inner">
                        <img src="eve.jpg" alt="service">
                        <div class="overlay">
                            <h4>Event Photography</h4>
                        </div>
                    </div>
                </div>
            </diV>
        </div>
    </sectiom>

    <hr>
    <div class="footer-content">


        <ul class="socials">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
        </ul>
    </div>
    <div class="footer-bottom">
        <p>copyright &copy;2020 www.prabinphotography.com designed by <span class="prat">PRABIN</span></p>
    </div>
</body>

</html>
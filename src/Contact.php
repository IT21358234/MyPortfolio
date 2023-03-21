<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width = device-width, initial-scale=1.0">
    <title>MY PORTFOLIO - Home</title>
    <link rel="stylesheet" href="../style/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,700;0,800;1,100;1,200;1,300;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>

<body>
    <section class="header">
        <nav>
            <div id="max_logo">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="../images/logo_white.png"></div>
            <div id="min_logo">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="../images/logo_white.png"></div>
            <h1 style="color:rgb(145, 117, 255); font-size:30px;"></h1>
            <div class="header-bar" id="sideBar">
                <ul>
                    <li><a href="Home.html">HOME</a></li>
                    <li><a href="">ABOUT</a></li>
                    <li><a href="">SERVICES</a></li>
                    <li><a href="#">CONTACT</a></li>
                    <li><a href="">BLOG</a></li>
                </ul>
            </div>
            <div class="min-header-bar dropdown">
                <button class="dropbtn" style="text-align:right;"><i class="fa fa-bars"></i></i> 
				</button>
                <div class="dropdown-content">
                    <li><a href="#">HOME</a></li>
                    <li><a href="">ABOUT</a></li>
                    <li><a href="">SERVICES</a></li>
                    <li><a href="Contact.html">CONTACT</a></li>
                    <li><a href="">BLOG</a></li>
                </div>
            </div>
        </nav>
    </section>
    <section class="body-con">
        <div class="con-body-1">
            <?php
                $name=$_GET["name"];
                $email=$_GET["email"];
                $contact=$_GET["contactNo"];
                $subject=$_GET["subject"];
                $msg=$_GET["msg"];
            ?>
            <h1 style="font-size: 43px;">Hello <span style="color: red;"><?php echo $name?></span></h1>
            <h2 style="margin-bottom: 30px;">Your Messege Was Reserved.<br></h2>

            <p style="font-size: 25px;">Hi <span style="color: red;"><?php echo $name?></span>!<br> Thank you for contact us. <br>We are sending a reply to your email which is <span style="color: red;"><?php echo $email?></span>.</p>
            <?php
                echo $name."<br>".$email . "<br>" . $contact . "<br>" . $subject;
            ?>
        </div>
        <div class="ab">
            <h2 style="margin-bottom: 30px; font-size: 43px;">Contact Details</h2>
            <div class="con-border">
                <div class="contact">
                    <img class="con" src="../images/location.png">
                    <h3 style="margin-top: 20px;"> Address</h3>
                </div>
                <div class="contact" style="margin-left: 50px;">
                    <h5><br>390/A/2,<br>Jaya Mawatha,<br>Kandana,</h5>
                </div>
            </div>
            <div class="con-border">
                <div class="contact">
                    <img class="con" src="../images/phone-1.png">
                    <h3 style="margin-top: 20px;"> Phone</h3>
                </div>
                <div class="contact" style="margin-left: 50px;">
                    <h5><br>+94769276950</h5>
                </div>
            </div>
            <div class="con-border">
                <div class="contact">
                    <img class="con" src="../images/email.png">
                    <h3 style="margin-top: 20px;"> Email</h3>
                </div>
                <div class="contact" style="margin-left: 50px;">
                    <h5><br>nilankasanjana803@gmail.com</h5>
                </div>
            </div>
        </div>
    </section>
    <hr style="width:70%; margin-left: auto; margin-right: auto;margin-bottom: 30px; border-color: red;">
    <section class="map">
        <h1 style="font-size: 43px;">Connect Us Via Social Media</h1>
        <div class="social-div" style="display:flex; margin-top: 20px;">
            <a href="https://www.facebook.com/nilanka.sanjana/"><img class="social" src="../images/fb.png"></a>
            <a href="https://twitter.com/Nilanka_SN"><img class="social" src="../images/twitter.png"></a>
            <a href="https://www.linkedin.com/in/sanjana-nilanka-02091319a/"><img class="social" src="../images/linkedin.png"></a>
            <a href="https://www.instagram.com/nilanka_snp/"><img class="social" src="../images/insta.png"></a>
            <a href="https://wa.me/+94769276950"><img class="social" src="../images/whatsapp.png"></a>
        </div>

    </section>
    <hr style="width:70%; margin-left: auto; margin-right: auto;margin-bottom: 30px; border-color: red;">
    <section class="map">
        <h1 style="font-size: 43px; margin-bottom: 20px;">Our Location</h1>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d989.8930082150031!2d79.92478582914092!3d7.059465999681354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf629bed94b900719!2zN8KwMDMnMzQuMSJOIDc5wrA1NSczMS4yIkU!5e0!3m2!1sen!2slk!4v1670411724251!5m2!1sen!2slk"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
    <hr>
    <section>
        <p style="text-align: center; color: white; margin-bottom: 30px;">Copyright ©2022-2023 novaWEB, All Rights Reserved. </p>
    </section>
</body>

</html>
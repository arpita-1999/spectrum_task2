<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>SpectrumWeb</title>
</head>
<body>
<!--------Header section-------->
    <section class="header">
        <nav>
            <a href="index.html"><img src="images/tablogo0crop.png" class="logo"></a>
            <div class="nav-links" id="navLinks">
               <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="">HOME</a></li>
                    <li><a href="#a">ABOUT US</a></li>
                    <li><a href="#p">PROJECTS</a></li>
                    <li><a href="#e">EVENTS</a></li>
                    <li><a href="#c">CONTACT</a></li>
                    <li><a href="logout.php">LOG OUT</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
    </section>
    <hr><br><hr>
    <!-------About the club section------->
    <section class="about">
        <h1 id="a">ABOUT US</h1>
        <p>SPECTRUM ,Technical society of COLLEGE OF ENGINEERING AND TECHNOLOGY, BHUBANESWAR,a place for all technical enthusiasts to learn, discover and innovate new things in the field of Technology and Design. The name of the club " SPECTRUM ", a contribution of our alumni of 2015 batch, is particularly used to describe the characteristic colors of visible light after passing through a prism, similarly students of CET consist of different skills within them and Spectrum acts like a prism, Spectrum recognises their skills helps them to strengthen it.</p>
        <p>This club was established by " Bikram Keshari Panda (2015 batch) ".Spectrum got its recognition in the year 2016 and got its workspace, funding and other facilities. Primarily this was his idea to have an electronics society in our college but with the efforts of other members we established two other wings - Software and Design.The other seniors who had their valuable contribution for this initiative were: Ankit Mishra, Zighnesh Biswal, Abhishek Dash, Avinash Nayak, Tapan Kumar Pal, Krutikesh Sahoo, Abhilash Das.</p>
        <h2>OUR WINGS</h2>
        <p style="text-align: center;">Our club SPECTRUM is so named as it provides us with different wings emitted by the hardwork from our members, showing homologous transitions between Hardware, Software and Designing.</p>
        <div class="row">
            <div class="wing-col">
                <h5>HARDWARE</h5>
                <p>The HARDWARE team of the Club mainly focuses on VLSI, Embedded Systems and PCB Design. We have developed many projects with implementation and testing of circuits, components, systems, etc.</p>
                <img src="images/hardware0.png" style="height: 100px; width: 100px;">
            </div>
            <div class="wing-col">
                <h5>SOFTWARE</h5>
                <p>The SOFTWARE team is seeking for growth in the domains of WebDev, AppDev, Competitive Coding, AI&ML. Through coordination, we quickly develop feasible solutions for a better outcome.</p>
                <img src="images/soft.png" style="height: 100px; width: 100px;">
            </div>
            <div class="wing-col">
                <h5>DESIGN</h5>
                <p>The DESIGN Wing of our Club has proven their creativity in UI/UX Poster Designing. We believe visual communication is a major tool to connect minds and enhance various creative projects.</p>
                <img src="images/dezign.png" style="height: 100px; width: 100px;">
            </div>
        </div>
    </section>
    <hr><br><hr>
<!---------Projects section-------->
    <section class="projects">
        <h1 id="p">PROJECTS</h1>
        <p style="text-align: center;">We've created several projects and our members have been presented as well as awarded at various national and international platforms.</p>
        <div class="row">
            <div class="project-col">
                <img src="images/voting0.png">
                <p>Fingerprint-based Voting Application</p>
            </div>
            <div class="project-col">
                <img src="images/Solar-power.png">
                <p>Solar Mobile Phone Charger Circuit</p>
            </div>
            <div class="project-col">
                <img src="images/weather.png">
                <p>Scientific Weather Forecasting Systems</p>
            </div>
            <div class="project-col">
                <img src="images/dooraccess.png">
                <p>RFID Based Door Access Control System</p>
            </div>
            <div class="project-col">
                <img src="images/health.png">
                <p>Smart Health Prediction Application</p>
            </div>
            <div class="project-col">
                <img src="images/employee-management.png">
                <p>Advanced Employee Management System</p>
            </div>
        </div>
    </section>
    <hr><br><hr>
<!--------Upcoming Events section-------->
    <section class="events">
        <h1 id="e">EVENTS</h1>
        <p style="text-align: center;">Our club motivates its members by arranging special events like bootcamps, hackathons, tech-fests, seminars and many more. Please stay tuned to know more about upcoming events & grab hands on experience about technology.</p>
        <div class="row1">
            <img src="images/comingsoon.png">
        </div>
    </section>
    <hr><br><hr>
<!--------Footer (contact info)-------->
    <section class="footer">
        <h3 id="c">CONTACT US</h3>
        <p>Do you want to join our club?</p>
        <div class="icons">
            <div class="iconicon">
                <i class="fa fa-university"></i>
                <p>College Of Engineering And Technology,<br>Ghatikia, Bhubaneswar - 751003</p>
            </div>
            <div class="iconicon">
                <i class="fa fa-envelope"></i>
            <p>spectrumclub.cetb@gmail.com</p>
            </div>
            <div class="iconicon">
                <i class="fa fa-phone-square"></i>
                <p>+91-8249063374</p>
            </div>            
        </div>
        <p>You can reach us anytime through our social media handles.</p>
        <div class="icons">
            <a href="https://www.facebook.com/spCETrum"><i class="fa fa-facebook"></i></a>
            <a href="https://www.instagram.com/spectrum.cetb/?hl=en"><i class="fa fa-instagram"></i></a>
            <a href="https://www.linkedin.com/in/spectrum-cet-3b71431b1/"><i class="fa fa-linkedin"></i></a>
            <a href="https://github.com/Spectrum-CETB"><i class="fa fa-github"></i></a>
        </div>
    </section>
<!------JavaScript for Toggle Menu------->
<script>
    var navLinks = document.getElementById("navLinks");
    function showMenu(){
        navLinks.style.right = "0";
    }
    function hideMenu(){
        navLinks.style.right = "-200px";
    }
</script>
</body>
</html>
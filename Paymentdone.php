<?php
$selectedCourseName = ($_GET['course'] ?? '');
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>ImangiNationInkAbout Us </title>
    <link rel="stylesheet" href="StyleSheet1.css">
    <link rel="stylesheet" href="stylesheet5.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;1&display=swap"
        rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://fontawesome.com/v4/icons/">
</head>

<body>
    <section class="header">
        <nav>
            <div>
                <img id="logo" width="90" src="LOGO.png" position="left" alt="ImagiNationInk logo">
            </div>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="aboutus.html">AboutUs</a></li>
                    <li><a href="">OurService</a></li>
                    <li><a href="">Assignments</a></li>
                    <li><a href="">LearningTool</a></li>
                    <li><a href="Contact.html">ContactUs</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>

        <section class="heading">

            <div>
                <h1 style="color:rgb(255, 255, 255);">Payment is Complete thank for chosing us</h1>
                <p style="color:rgb(255, 255, 255);">
                    thank you for your successful payment
                    There are exciting days ahead! Thank you for choosing us!<br>
                    As always, it is our pleasure to serve you. Blessings for the season!

                </p>
                <a href="courses/course.php?course=<?php echo $selectedCourseName; ?>">Continue to courses</a>
            </div>
            <div class="container">

        </section>

    </section>

</body>

</html>
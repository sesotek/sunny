<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
<link rel="stylesheet" type="text/css" href="css/sundial_clean.css" />
<!-- Google Analitics -->
<?php require("includes/ga.php"); ?>
</head>

<body>
<script type="text/javascript">
<!--
function refreshAll() {
    refreshImgs();
}

function refreshImgs(){
    var uniqueNum = new Date().getTime();
    document.images["img_croppedDial"].src="images/last_dial.jpg"+"?"+uniqueNum;
    setTimeout('refreshImgs()', 30000);
}

if(document.images) window.onload=refreshAll;

// -->
</script>
<div id="div_banner" class="banner">
   <a href="http://sunny.astro.washington.edu"/><img class="banner_img" src="images/header.jpg"/></a>
    <span id="clockCurrentTime" class="clock_time"></span>
</div>

<!-- Menu Box -->
<?php require("includes/menubox.php"); ?>

<div id="div_main" class="main">

	<div id="div_croppedDial" class="div_with_image">
    <a href="images/last_frame.jpg" target="_blank">
	    <img class="main_img" src="images/last_dial.jpg" width="100%" id="img_croppedDial" alt="UW Astronomy Sundial" />
    </a>
	</div>

<div id="sundialinfo" class="main_text">
<p>
SundialCam brings you a live view, updated once per minute during daylight hours, of a large wall sundial in Seattle, sundial capital of North America. If you blow up the image, your eye can even detect the slight shift from one minute to the next! We apologize if the sun isn't shining because of either clouds or nighttime; in such a case watch our time lapse movies and explore our website. We will be improving our images, adding time lapses, and upgrading the website as time goes on, so check back again. Feedback is appreciated - see the bottom of this page.
</p>
<p>
Latitude 47&deg; 39' 10.0" N <br>
Longitude 122&deg; 18' 40.4" W <br>
Wall faces 36.57&deg; to the west of due south - it is this southwestward-facing aspect that leads to the asymmetrical design and the dial mainly working in the afternoon.<br>
</p>
    <img class="main_img" src="images/sundial.png" width="600" alt="Sundial diagram"/>

<h3 class="main_h">To read the time</h3>

<p>
<ol>
    <li>Read the long shadow cast by the gnomon tube on the wall; this is local solar time. If it is the season when clocks are set one hour ahead to Pacific Daylight Time (PDT) (now the second Sunday in March to the first Sunday in November), read the lower ends of the hour lines; for Pacific Standard Time (PST), read the upper ends.</li>

    <li>To find clock time, adjust your reading by the amount shown on this plot:</li>
</ol>

    <img class="main_img" src="images/equationoftime.png" width="600" alt="Equation of time plot"/>
</p>

<h3 class="main_h">How the Sundial Works</h3>

<p>
As the sun moves daily from east to west, the gnomon's shadow follows a path from left to right, ending at the sunset line. The shadow indicates the hour of day; when it is local solar noon, the sun is due south and the shadow is exactly vertical. The daily paths vary through the seasons. In summer the sun is higher in the sky and the gnomon ball's shadow falls lower on the sundial, while in winter the sun is lower and the shadow falls higher. Paths are shown for the winter solstice (December 21st), the spring and autumn equinoxes (March 20th and September 23rd), and the summer solstice (June 21st). More information is <a href="http://sunny.astro.washington.edu/astrodial.php">here</a>.
</p>
</div>
    

</div>

<!-- footer -->
<?php require("includes/footer.php"); ?>

</body>

</html>

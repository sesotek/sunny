<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
<title>SundialCam</title>
<link rel="stylesheet" type="text/css" href="css/sundial_clean.css" />
<?php
require("includes/ga.php");
?>
</head>

<body>
<div id="div_banner" class="banner">
   <a href="http://sunny.astro.washington.edu"/><img class="banner_img" src="images/header.jpg"/></a>
    <span id="clockCurrentTime" class="clock_time"></span>
</div>

<!-- Menu Box -->
<?php require("includes/menubox.php"); ?>

<div class="main">
    <h1 class="main">Astronomy of the Sundial</h1>
<div class="main_text">
<p>
Latitude    47&deg; 39' 10.0" N <br>
Longitude  122&deg; 18' 40.4" W <br>
Wall faces  36.57&deg; to the west of due south. (It is this southwestward-facing aspect that leads to the asymmetrical design and the dial mainly working in the afternoon.)
</p>

<h3 class="main_h">To read the time</h3>

<p>
<ol>
    <li>Read the long shadow cast by the gnomon tube on the wall; this is local solar time. If it is the season when clocks are set one hour ahead to Pacific Daylight Time (PDT) (now the second Sunday in March to the first Sunday in November), read the lower ends of the hour lines; for Pacific Standard Time (PST), read the upper ends.</li>

    <li>To find clock time, adjust your reading by the amount shown on this plot</li>

	<img class="main_img" src="images/equationoftime.png" width="500" alt="Equation of time plot"/>

<p>Example: For a date of May 9th, the plot indicates that the sun is 6 minutes slower than clock time (dots on the curve are at 5-day intervals, e.g. May 5th, May 10th, May 15th, etc). Since Daylight Time is in effect, read the shadow on the lower scale. If the sundial reads 1:30 on this scale, add 6 minutes and the time is thus 1:36 PDT.</p></li>
</ol>

    <img class="main_img" src="images/sundial.png" width="500" alt="Sundial diagram"/>

<h3 class="main_h">How the Sundial Works</h3>
<p>
As the sun moves daily from east to west, the gnomon's shadow follows a path from left to right, ending at the sunset line. The shadow indicates the hour of day; when it is local solar noon, the sun is due south and the shadow is exactly vertical. The daily paths vary through the seasons. In summer the sun is higher in the sky and the gnomon ball's shadow falls lower on the sundial, while in winter the sun is lower and the shadow falls higher. Paths are shown for the winter solstice (December 21st), the spring and autumn equinoxes (March 20th and September 23rd), and the summer solstice (June 21st).
</p>

<h3 class="main_h">The Analemma</h3>
<p>
The figure-eight-shaped curve in the sundial's center, called the analemma (see diagram), is a plot of the location on each day throughout the year of the gnomon ball's shadow at noon. When the center of this shadow falls on the analemma, the time is exactly 12:00 PST, or 1:00 PDT. At this time also, the date can be read by noting the position of the shadow relative to the dots on the analemma, each of which corresponds to a date as shown on the diagram. At times other than noon, the date can only be estimated.
</p>

    <img class="main_img" src="images/analem.gif" alt="Analemma figure"/>

<h3 class="main_h">Why does sundial time differ from clock time?</h3>

<p>
The adjustment on the graph (see above) is caused by the combination of the following effects:
</p>
<ul>
    <li>Seattle and all others in the Pacific time zone keep a clock time based on the solar time at the arbitrary longitude of 120&deg; W, which happens to pass through the town of Chelan, Washington. However, Seattle is located 2&deg; 19' to the west of this longitude, and thus at any instant the sun in Seattle indicates a time 9.2 minutes earlier than the sun in Chelan.</li>
    <li>Our clocks run uniformly, but solar time either lags or leads clock time because the apparent speed of the sun across the sky varies slightly throughout the year. This variation is caused by the small noncircularity of the earth's orbit around the sun (in January we are 3% closer to the sun than in July), and by the 23.4&deg; tilt of the earth's rotation axis. The combination of these effects is called the equation of time and varies between roughly 15 minutes fast to 15 minutes slow throughout the year, depending only on the date (more information <a href="http://en.wikipedia.org/wiki/Equation_of_time">here</a> and <a href="http://www.sundials.co.uk/equation.htm">here</a>).
    </li>
</ul>

<h3 class="main_h">Mottos</h3>
<p>
Sundials traditionally have mottos and this dial's motto is 
</p>
<p>
<i>What you seek is but a shadow </i>
</p>

<p>This was thought to be appropriate for a place of scholarship such as a university. This motto is based on one seen in Yorkshire, England in the form of "What thou seekest is but a shadow." The origin of this phrase is not known.</p>

<p>It was further felt that some acknowledgment should be made to the problematic aspects of a sundial located in Seattle, and so the plaque also has the ditty:</p>

<p><i>I thrive on the sun<br>
Can't work in the rain<br>
So if I'm beclouded<br>
Please come back again.
</i></p>
</div>
</div>

<div id="div_footer" class="footer">
<div>
    <a href="mailto:imsmith@uw.edu">Ian Smith</a> and <a href="mailto:woody@astro.washington.edu">Woody Sullivan</a>, Last revision: Nov 2011
</div>
</div>

</body>
</html>

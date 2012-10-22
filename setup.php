<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
<title>SundialCam</title>
<link rel="stylesheet" type="text/css" href="css/sundial_clean.css" />
<!-- Google Analitics -->
<?php require("includes/ga.php"); ?>

</head>

<body>

<div id="div_banner" class="banner">
   <a href="http://sunny.astro.washington.edu"/><img class="banner_img" src="images/header.jpg"/></a>
    <span id="clockCurrentTime" class="clock_time"></span>
</div>

<!-- Menu Box -->
<?php require("includes/menubox.php"); ?>


<div class="main">
    <h1 class="main">SundialCam Setup</h1>
<div class="main_text">
<p>
Ian Smith, Woody Sullivan 2011
</p>

	    <img class="main_img" src="images/sundialcam_wideintro_600px.jpg" width="600" alt="View from window" />
<p>
Physics/Astronomy Building sundial information:<br>
Latitude    47&deg; 39' 10.0" N <br>
Longitude  122&deg; 18' 40.4" W <br>
Wall Azimuth:  36&deg; 34' W of S<br>
Gnomon:  aligned with the North celestial pole<br>
</p>

<p>
<h3 class="main_h">Goals</h3>
Our goals for the project are to create time-lapses of the dial and to keep a live webcam. Time-lapses of notable dial events such as the daily path of the shadow during solstices and equinoxes and the annual path along the analemma are to be used for education at the UW, and we keep the videos on the web for the general public and enthusiasts. Recording the images every minute also allows us to check the sundial for accuracy.
</p>

        <img class="main_img" src="images/introdial.jpg" width="600" alt="Cropped view of dial" />

<p>
<h3 class="main_h">Design Requirements</h3>
Our project had to fit within some constraints. It required a clear view of the dial, which we achieved by setting up the camera directly across the street in the northwest corner of the top floor of Hitchcock Hall. We are extremely grateful to Prof. Jennifer Nemhauser and her students in the Dept. of Biology for hosting our equipment in a corner of their lab.<br>
For our equipment we required a camera, an intervalometer (a device to signal the camera to take images at invervals), a place for image storage, and a web server.<br>
Because we set up our camera in an active biology research lab, we faced the stricter constraints of limited physical space, and keeping our image storage offsite. More restrictively, the setup needed to be quiet so others could work in the room without being annoyed. Additionally, the webcam and offsite storage required a permanent network connection. Finally, our budget limit was around $1000.
</p>


        <img class="main_img" src="images/map_directions.png" width="550" alt="Campus map" />


<p>
<h3 class="main_h">Our Setup</h3>
The equipment we decided on was a Linux netbook to act as the intervalometer, the web server, and as temporary image storage. Bash scripts use gphoto2 to control a camera to take an image once per minute and download it off the camera onto the hard drive. More scripts crop and copy the images to the web directory for display on the web. And cron jobs schedule uploading of images to offsite storage.
        
        <img class="main_img" src="images/setup_edited.jpg" width="300" alt="Our setup in lab" />

Apache HTTPD is used as a the web server, with the time-lapses served by youtube, to put less burden on the netbook.<br>
The camera is a Canon Powershot SX110IS 9MP with 10x optical zoom. This camera was chosen because it was the only camera found that communicates with gphoto2 that is also quiet enough to use in the lab space. Unfortunately, the focus can not be controlled via gphoto2 for this model, so the camera can only be used at the widest angle, yielding about 0.25MP of image for the dial. We will soon be testing a new camera model to get a higher-resolution view of the dial.<br>
We save every image in full that is taken during daylight hours. At about 5MB/image, 1 image/minute, we take nearly 350,000 images/year, for a total of around 2TB/year of storage requirements. Two external hard drives in a RAID 1 volume provide our  offsite backups.<br>

<h3 class="main_h">Problems</h3>
Our setup is not without its problems. As mentioned, the camera won't focus at high zoom levels, so we are currently restricted to a 0.25MP view of the dial. This is unacceptably low resolution, which we plan to remedy with a new camera. A detail of the low resolution problem is seen below.

<br><br>
        <img class="main_img_inline" src="images/zoomNikon.jpg" height="300" alt="Zoomed view from Nikon DSLR" />
        <img class="main_img_inline" src="images/zoomCanon.jpg" height="300" alt="Zoomed view from Canon point-and-shoot" />
<br>

Our camera produces the image on the right, while zooming in with 10x optical zoom produces the much better quality image on the left.<br><br>

Another problem for our setup is that the camera changes position as sunlight comes and goes throughout the day. Direct sunlight causes thermal expansion of either the plastic and aluminum tripod, or the metal windowsill on which the tripod stands. All-day time-lapses show the camera obviously leaning back and forth over the span of hours. We hope to fix this by mounting the camera to a shelf attached to the wall.<br>
The glare off the window can also be seen in the images from time to time. A proper lens hood should fix this.
</p>

<p>
<h3 class="main_h">Future</h3>
In the future, after fixing the problems outlined above, we plan on the following improvements to our setup. Auto-generated, up-to-the-minute time-lapses on the website would be a neat way to see how the sun has moved since the beginning of the day. We are also considering writing software so as to actually detect the shadow's position in the image to read the time and date according to the sun. We could also superimpose other grids of lines on the images so that more quantities could be read, for example, solar declination, accurate date, hours until sunset, length of daylight, etc. Removing the trees from the image is another possibility if trimming their tops is not approved by the UW arborist. A better camera will undoubtedly give the greatest increase in quality to the project as a whole, and is our next order of business. Finally, we will continue to record the entire annual cycle and will produce many more time-lapses in the coming months. Stay tuned!
</p>

</div>
</div>
<!-- footer -->
<?php require("includes/footer.php"); ?>

</body>
</html>

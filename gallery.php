<?php
?>
<!DOCTYPE html>
<html>
<head>
<style> 

</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="gallery.css">
</head>
<body><div class="bg-img">
<div id="navbar">
    
    <a target="_blank" href="http://www.tezu.ernet.in" style="float:left">Tezpur University</a>
      <a href="front.php" style="float:middle">HOME</a>
      <a href="gallery.php" style="float:middle">Gallery</a>
      <a target="_blank" href="commitee.php" style="float:middle">Committee</a>
      <a target="_blank" href="ALUMINI/redirect.php" style="float:middle">INSERT</a>
      <a target="_blank" href="contactus.php" style="float:middle">Contact us</a>
    </div>
    <div class="content">  
<br>

<h1 align="center"><b><u>Sweet Memories</u></b></strong></i></h1>
<br>
<div class="w3-content w3-section" style="max-width:500px">
  <img class="mySlides w3-animate-fading" src="IMG/background.png" style="width:100%">
  <img class="mySlides w3-animate-fading" src="IMG/alumnii.png" style="width:100%">
  <img class="mySlides w3-animate-fading" src="IMG/distinguished.jpg" style="width:100%">
  <img class="mySlides w3-animate-fading" src="IMG/convo.jpg" style="width:100%">
  <img class="mySlides w3-animate-fading" src="IMG/communityhall.jpg" style="width:100%">
  <img class="mySlides w3-animate-fading" src="IMG/councilhall.png" style="width:100%">
  <img class="mySlides w3-animate-fading" src="IMG/press.jpg" style="width:100%">
  <img class="mySlides w3-animate-fading" src="IMG/goal.jpg" style="width:100%">
  <img class="mySlides w3-animate-fading" src="IMG/civil.jpg" style="width:100%">
  <img class="mySlides w3-animate-fading" src="IMG/bhom.jpg" style="width:100%">
</div>
<br>
<br><br><br>
<div class="a">
<video width="400" controls>
<source src="IMG/antirag.mp4" type="video/mp4">
</video>
<video width="400" controls>
<source src="IMG/breakthrough.mp4" type="video/mp4">
</video>

<video width="400" controls>
<source src="IMG/breakthrough.mp4" type="video/mp4">
</video>
</div>
</div>
<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 9000);    
}
</script>
</body>
</html>

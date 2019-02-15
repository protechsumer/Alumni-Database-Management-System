<?php
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="front.css">
</head>
<body>
<div class="bg">
<div class="header">
<p>
  <img src="IMG/logo.png" align="left" style="width:90px;height:90px;">
  <pre><font size="22"><b>Alumni Association of Tezpur University</b></font></pre>
  <h5 align="right"><font size="4">Specialized Knowledge promotes creativity</font></h5></i>
  </p>
</div>
<ul>
<div class="topnav">
  <a target="_blank" href="http://www.tezu.ernet.in" style="float:left">Tezpur University</a>
  <a href="front.php" style="float:middle">HOME</a>
  <a target="_blank" href="gallery.php" style="float:middle">Gallery</a>
  <a target="_blank" href="commitee.php" style="float:middle">Committee</a>
  <a target="_blank" href="ALUMINI/redirect.php" style="float:middle">INSERT</a>
  <a target="_blank" href="contactus.php" style="float:middle">Contact us</a>
</div>
</ul>
<div class="row">
  <div class="leftcolumn">
    <div class="card">
    <div class="bo">
      <h2 align="middle" style="font-family:Castellar"><strong><u><font color="White">Welcome to TUAA</font></u></strong></i></h2>
      <div class="fakeimg" style="height:200px;" color="blue;">
      <p style="text-align:justify" font-family="Cursive" style="font-size:160%;" >
      <font color="Maroon"><br><i><b>The Tezpur University Alumni Association was formed in September 
      2000 with the primary objective of providing an opportunity to the alumni of this University to take active 
      interest in the all around progress and development of the University. The Association came into being 
      mainly as the outcome of initiatives and keen interest of Prof. P. Bhattacharyya, The then Vice Chancellor of
      Tezpur University and Prof. P. K. Brahma of Department of Electronics. Prof. Brahma was the first working President
      of TUAA.<br><br>The current Working President of TUAA is Prof. D. Deka, Dept. of Energy, Tezpur University.
      TUAA is advancing forward with the motive of amalgamating experience with education by connecting Tezpur University
      with it's alumni.</font></b></i></div></p>
    </div></div>
    <div class="cardd">
    <div class="boo">
      <div class="container">
  <img src="IMG/books.jpg" height="100" width="1200">
  <button class="btn" style="float:middle"><a href="search.php">SEARCH</a></button>
  <button class="btnn" style="float:middle"><a href="insert1.php">REGISTER</a></button>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="leftcolumn">
<h3 align="middle" style="font-family:Times New Roman">Follow us on : </h3>
<p align="center">
<a href="https://www.facebook.com/TezpurUniversity/" title="Facebook">
<img id="myImg" src="IMG/facebook.png" width="80" height="80">
<a href="https://twitter.com/TezpurUniv" title="Twitter">
<img  id="myImg" src="IMG/twitter.jpg" width="80" height="80">
<a href="https://www.youtube.com/c/TezpurUniversity94" title="Youtube">
<img id="myImg" src="IMG/youtube.png" width="80" height="80">
</a>
</div>
<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">×</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>
<script>
// Get the modal
var modal = document.getElementById('myModal');
// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}
</script>
</div>
</div>
</div>
</body>
</html>

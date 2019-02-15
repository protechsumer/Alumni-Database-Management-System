<?php
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="insert1.css">
</head>
<body>
<div class="bg-img">
<div id="navbar">
<a target="_blank" href="http://www.tezu.ernet.in" style="float:left">Tezpur University</a>
  <a href="front.php" style="float:middle">HOME</a>
  <a target="_blank" href="gallery.php" style="float:middle">Gallery</a>
  <a target="_blank" href="commitee.php" style="float:middle">Committee</a>
  <a target="_blank" href="ALUMINI/redirect.php" style="float:middle">INSERT</a>
  <a target="_blank" href="contactus.php" style="float:middle">Contact us</a>
</div>
<div class="content">
<br>
<h1 align="middle" style="font-family:Castellar"><u>Search for Alumni</u></h1>
<form class="container" action="view.php" name="view" method="POST">
<p align="middle">

<label for="Roll_No"><b>Enter the roll no to be searched</b></label>
<input placeholder="Enter roll No" name="Roll_no" type="text" size="20" maxlength="12" id="Roll_no" required>

<button type="submit" class="btn">SUBMIT</button></p>
</form>
</body>
</html>


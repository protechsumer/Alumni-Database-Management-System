<?php
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="insert1.css">
</head>
<body >
<div class="bg-img">
<div id="navbar">
<a target="_blank" href="http://www.tezu.ernet.in" style="float:left">Tezpur University</a>
  <a href="front.php" style="float:middle">HOME</a>
  <a target="_blank" href="gallery.php" style="float:middle">Gallery</a>
  <a target="_blank" href="commitee.php" style="float:middle">Committee</a>
  <a href="ALUMINI/redirect.php" style="float:middle">INSERT</a>
  <a target="_blank" href="contactus.php" style="float:middle">Contact us</a>
</div>
<div class="content">
<br>
<h1 align="middle" style="font-family:Castellar"><u>Alumni Registration Form</u></h1>
<form action="registration.php" class="container" name="registration" method="POST">
<p align="middle">
<label for="Roll_no"><b>Roll No</b></label>
<input type="text" placeholder="Enter roll No" name="Roll_no" size="20" maxlength="12" id="Roll_no" required>

<label for="Password"><b>Password</b></label>
<input type="text" placeholder="Enter password" name="Password" type="text" size="20" maxlength="20" id="Password" required>

<label for="Fname"><b>First Name</b></label>
<input type="text" placeholder="Enter first name" name="Fname" type="text" size="20" maxlength="15" id="Fname" required>

<label for="Lname"><b>Last Name</b></label>
<input type="text" placeholder="Enter last name" name="Lname" type="text" size="20" maxlength="15" id="Lname" required>

<label for="Year_of_passing"><b>Year of passing</b></label>
<input type="text" placeholder="Enter year of passing" name="Year_of_passing" type="number" size="20" maxlength="38" id="Year_of_passing" required>

<label for="P_code"><b>Program code</b></label>
<input type="text" placeholder="Enter program code" name="P_code" type="text" size="20" maxlength="10" id="P_code" required>

<button type="submit" class="btn">SUBMIT</button></p>
</form>
</div>
</div>
</body>
</html>

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
  <a href="../front.php" style="float:middle">HOME</a>
  <a target="_blank" href="../gallery.php" style="float:middle">Gallery</a>
  <a target="_blank" href="../commitee.php" style="float:middle">Committee</a>
  <a href="redirect.php" style="float:middle">INSERT</a>
  <a target="_blank" href="../contactus.php" style="float:middle">Contact us</a>
</div>
<div class="content">
<br>
<h1 align="middle" style="font-family:Castellar"><u>Alumni's current information.</u></h1>
<form action="insertcurrent1.php" class="container" name="insertcurrent1" method="POST">
<p align="middle">
<label for="Roll_no"><b>Roll No</b></label>
<input type="text" placeholder="Enter roll No" name="Roll_no" size="20" maxlength="12" id="Roll_no" required>

<label for="Designation"><b>Designation</b></label>
<input placeholder="Enter designation" name="Designation" type="text" size="20" maxlength="20" id="Designation" required>

<label for="Company"><b>Company</b></label>
<input placeholder="Enter company" name="Company" type="text" size="20" maxlength="30" id="Company" required>

<label for="University"><b>University</b></label>
<input placeholder="Enter university" name="University" type="text" size="20" maxlength="30" id="University" required>

<label for="Course_of_study"><b>Course of study</b></label>
<input placeholder="Enter course of study" name="Course_of_study" type="text" size="20" maxlength="20" id="Course_of_study" required>

<label for="Current_address"><b>Current address</b></label>
<input placeholder="Enter current address" name="Current_address" type="text" size="20" maxlength="60" id="Current_address" required>

<button type="submit" class="btn">SUBMIT</button></p>
</form>
</div>
</div>
</body>
</html>

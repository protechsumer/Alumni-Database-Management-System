<?php
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../insert1.css">
</head>
<body>
<div class="bg-img">
<div id="navbar">
<a target="_blank" href="http://www.tezu.ernet.in" style="float:left">Tezpur University</a>
  <a href="../front.php" style="float:middle">HOME</a>
  <a target="_blank" href="../gallery" style="float:middle">Gallery</a>
  <a target="_blank" href="../commitee.php" style="float:middle">Committee</a>
  <a href="redirect.php" style="float:middle">INSERT</a>
  <a target="_blank" href="../contactus.php" style="float:middle">Contact us</a>
</div>
<div class="content">
<br>
<h1 align="middle" style="font-family:Castellar"><u>Alumni's personal information.</u></h1>
<form class="container" action="insertpersonal1.php" name="insertpersonal1" method="POST">
<p align="middle">

<label for="Roll_No"><b>Roll No</b></label>
<input placeholder="Enter roll No" name="Roll_no" type="text" size="20" maxlength="12" id="Roll_no">
    
<label for="DOB"><b>Date of birth</b></label>    
<input placeholder="Enter date of birth" name="DOB" type="text" size="20" maxlength="20" id="DOB">
    
<label for="Sex"><b>Gender</b></label>
    <input placeholder="Enter gender<" name="Sex" type="text" size="20" maxlength="10" id="sex">
    
    <label for="Permanent_address"><b>Permanent address</b></label>
    <input placeholder="Enter permanent address" name="Permanent_address" type="text" size="20" maxlength="60" id="Permanent_address">
    
    <label for="Phone_no"><b>Phone number</b></label>
    <input placeholder="Enter phone number" name="Phone_no" type="number" size="20" maxlength="20" id="Phone_no">
    <br><br><br>
    <label for="Email"><b>Email</b></label>
    <input placeholder="Enter email" name="Email" type="text" size="20" maxlength="30" id="Email">
    
    <label for="Interests"><b>Interests</b></label>
    <input placeholder="Enter interests" name="Interests" type="text" size="20" maxlength="30" id="Interests">
    
<button type="submit" class="btn">SUBMIT</button></p>
</form>
</body>
</html>
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
  <a target="_blank" href="../gallery" style="float:middle">Gallery</a>
  <a target="_blank" href="../commitee.php" style="float:middle">Committee</a>
  <a href="redirect.php" style="float:middle">INSERT</a>
  <a target="_blank" href="../contactus.php" style="float:middle">Contact us</a>
</div>
<div class="content">
<br>
<h1 align="middle" style="font-family:Castellar"><u>Alumni's past information.</u></h1>
<form action="insertpast1.php" class="container" name="insertpast1" method="POST">

<p align="middle">

    <label for="Roll_no"><b>Roll No</b></label>
    <input placeholder="Enter roll No" name="Rollno" type="text" size="20" maxlength="10" id="Rollno">
   
    <label for="Dno"><b> Department number</b></label>
    <input placeholder="Enter department number" name="Dno" type="text" size="20" maxlength="10" id="Dno">
    
    <label for="Dname"><b>Department name</b></label>
    <input placeholder="Enter department name" name="Dname" type="text" size="20" maxlength="35" id="Dname">
    
    <label for="Pcode"><b>Program code</b></label>
    <input placeholder="Enter program code" name="Pcode" type="text" size="20" maxlength="10" id="Pcode">
    
    <label for="Pname"><b>Program name</b></label>
    <input placeholder="Enter program name" name="Pname" type="text" size="20" maxlength="15" id="Pname">
  
    <label for="Pduration"><b>Program duration</b></label>
    <input placeholder="Enter program duration" name="Pduration" type="number" size="20" maxlength="10" id="Pduration">
   <br><br><br>
    <label for="Year_of_passing"><b>Year of passing</b></label>
    <input placeholder=" Enter year of passing" name="Year_of_passing" type="number" size="20" maxlength="10" id="Year_of_passing">
<br><br><br>
    <button type="submit" class="btn">SUBMIT</button></p>
</form>
</div>
</div>
</body>
</html>
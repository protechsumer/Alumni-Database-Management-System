<?php
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="insert1.css">
<style>
.container {
    position: relative;
    width: 100%;
    max-width: 400px;
}
.container img {
    width: 10%;
    height: 10;
}
.container .btn {
    position: absolute;
    top: 50%;
    left: 40%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    background-color: #f1f1f1;
    color: black;
    font-size: 18px;
    padding: 10px 40px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    text-align: center;
}
.container .btnn {
    position: absolute;
    top: 50%;
    left:30%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    background-color: #f1f1f1;
    color: black;
    font-size: 18px;
    padding: 10px 40px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    text-align: center;
}
.container .btn:hover {
    background-color: black;
    color: white;
}
.container .btnn:hover {
    background-color: black;
    color: white;
}
/* visited link */
a:visited {
    color: Teal;
}
/* mouse over link */
a:hover {
    color: White;
}
/* selected link */
a:active {
    color: blue;
}
</style>
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
<h1 align="middle" style="font-family:Castellar"><u>Insert alumni's information.</u></h1>
<div class="container">
<img  height="50%" width="50%">
<button class="btnn" style="float:middle"><a href="../insert1.php">Registration</a></button>
</div>

<div class="container">
<img  height="50%" width="50%">
<button class="btnn" style="float:middle"><a href="insertpast.php">Past Information</a></button>
</div>
  
<div class="container">
<img  height="50%" width="50%">
<button class="btnn" style="float:middle"><a href="insertcurrent.php">Present Information</a></button>
</div>

<div class="container">
<img  height="50%" width="50%">
<button class="btnn" style="float:middle"><a href="insertpersonal.php">Personal Information</a></button>
</div>
</div>
</body>
</html>
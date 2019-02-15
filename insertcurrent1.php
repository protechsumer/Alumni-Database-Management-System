<html>
<head>
</head>
<body>
<?php include('../dbcon.php'); ?>
<?php
$stSQL0="SELECT * from ALUMINI where Rollno='".$_POST["Roll_no"]."'";
$sparse0=oci_parse($conn,$stSQL0);
$sexecute0=oci_execute($sparse0);
$row0=oci_fetch_all($sparse0,$result0);
echo $row0;
if($row0)
{
  $stSQL1="SELECT * from CURRENT_INFO where Roll_no='".$_POST["Roll_no"]."'";
  $sparse1=oci_parse($conn,$stSQL1);
  $sexecute1=oci_execute($sparse1);
  $row1=oci_fetch_all($sparse1,$result1);
  if($row1){
    echo "CURRENT INFORMATION OF REQUESTED ROLLNO ALREADY EXIST";
  }
  else
  {
  $strSQL="INSERT INTO CURRENT_INFO(Roll_no,Designation,Company,University,Course_of_study,Current_address)
  VALUES('".$_POST["Roll_no"]."','".$_POST["Designation"]."','".$_POST["Company"]."','".$_POST["University"]."','".$_POST["Course_of_study"]."','".$_POST["Current_address"]."')";
  $objParse = oci_parse($conn, $strSQL);
  $objExecute = oci_execute($objParse);
  echo"<script>alert('Commit Completed');</script>";
  header("location: redirect.php");
  }
}
else
{
    echo "First REGISTER YOURSELF";
}
?>
</body>
</html>
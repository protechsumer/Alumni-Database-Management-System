
<?php include('../dbcon.php'); 

$stSQL0="SELECT * from ALUMINI where Rollno='".$_POST["Roll_no"]."'";
$sparse0=oci_parse($conn,$stSQL0);
$sexecute0=oci_execute($sparse0);
$row0=oci_fetch_all($sparse0,$result0);
echo $row0;
if($row0)
{
  $stSQL1="SELECT * from PERSONAL_INFO where Roll_no='".$_POST["Roll_no"]."'";
  $sparse1=oci_parse($conn,$stSQL1);
  $sexecute1=oci_execute($sparse1);
  $row1=oci_fetch_all($sparse1,$result1);
  if($row1){
    echo "CURRENT INFORMATION OF REQUESTED ROLLNO ALREADY EXIST";
  }
  else
  {
  $strSQL="INSERT INTO PERSONAL_INFO(Roll_no,DOB,Gender,Permanent_address,Phone_no,Email,Interests)
  VALUES('".$_POST["Roll_no"]."','".$_POST["DOB"]."','".$_POST["Sex"]."','".$_POST["Permanent_address"]."','".$_POST["Phone_no"]."','".$_POST["Email"]."','".$_POST["Interests"]."')";
  $objParse = oci_parse($conn, $strSQL);
  $objExecute = oci_execute($objParse);
  oci_commit($conn);
  echo"<script>alert('Commit Completed');</script>";
  header("location: redirect.php");
  }
}
else
{
    echo "First REGISTER YOURSELF";
}
?>
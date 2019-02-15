<html>
<head></head>
<body>
<?php include('dbcon.php'); ?>
<br><br>
<?php

$stSQL0="SELECT * from ALUMINI where Rollno='".$_POST["Roll_no"]."'";
$sparse0=oci_parse($conn,$stSQL0);
$sexecute0=oci_execute($sparse0);
$row0=oci_fetch_all($sparse0,$result0);
echo $row0;
if($row0)
{
    echo "ROLLNO ALREADY REGISTERED";
}
else
{

 $strSQL="INSERT INTO ALUMINI(Rollno,Password,Fname,Lname,Year_of_passing,P_code)
         VALUES('".$_POST["Roll_no"]."','".$_POST["Password"]."','".$_POST["Fname"]."','".$_POST["Lname"]."','".$_POST["Year_of_passing"]."','".$_POST["P_code"]."')";
$objParse = oci_parse($conn, $strSQL);
$objExecute = oci_execute($objParse);
if($objExecute)
{
    oci_commit($conn);
    oci_free_statement($objParse);
    //echo "Commit__completed";
    echo"<script>alert('Commit Completed');</script>";
    header("location: front.php");
}
else
{
    oci_rollback($conn); 
    $m = oci_error($objParse);
    echo "Error Save [".$m['message']."]";
}
}
?>
</body>
</html>
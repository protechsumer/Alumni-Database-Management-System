<html>
<head></head>
<body>
<?php include('../dbcon.php'); ?>
<?php
$stSQL0="SELECT * from ALUMINI where Rollno='".$_POST["Rollno"]."'";
$sparse0=oci_parse($conn,$stSQL0);
$sexecute0=oci_execute($sparse0);
$row0=oci_fetch_all($sparse0,$result0);
echo $row0;
if($row0)
{
$stSQL1="SELECT * from department where dno='".$_POST["Dno"]."'";
$sparse1=oci_parse($conn,$stSQL1);
$sexecute1=oci_execute($sparse1);
$row1=oci_fetch_all($sparse1,$result1);

$RESULT1 = array();
if($row1){
    $RESULT1['message']="Committed"; 
    echo "\n\nCommit__completed\n\n";
}else{
    $strSQL3="INSERT INTO department(dno,dname)
         VALUES('".$_POST["Dno"]."','".$_POST["Dname"]."')";
$objParse3 = oci_parse($conn, $strSQL3);
$objExecute3 = oci_execute($objParse3);

if($objExecute3) 
{
    oci_commit($conn);
    oci_free_statement($objParse3);
    echo "Commit__completed";
}
else
{
    oci_rollback($conn); 
    $m = oci_error($objParse3);
    echo "Error Save [".$m['message']."]";
}
}
$stSQL2="SELECT * from programme where pcode='".$_POST["Pcode"]."'";
$sparse2=oci_parse($conn,$stSQL2);
$sexecute2=oci_execute($sparse2);
$row2=oci_fetch_all($sparse2,$result2);

$RESULT2 = array();
if($row2){
    $RESULT2['message']="Committed";
    echo "\n\nCommit__completed\n\n";
}else{
$strSQL1="INSERT INTO programme(pcode,pname,pduration,d_no)
         VALUES('".$_POST["Pcode"]."','".$_POST["Pname"]."','".$_POST["Pduration"]."','".$_POST["Dno"]."')";
$objParse1 = oci_parse($conn, $strSQL1);
$objExecute1 = oci_execute($objParse1);
if($objExecute1) 
{
    oci_commit($conn);
    oci_free_statement($objParse1);
    echo"<script>alert('Commit Completed');</script>";
   header("location: redirect.php");
}
else
{
    oci_rollback($conn); 
    $m = oci_error($objParse1);
    echo "Error Save [".$m['message']."]";
}
}
}
else
{
    echo "First REGISTER YOURSELF";
}
?>
</body>
</html>
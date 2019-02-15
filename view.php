
<?php
include('dbcon.php');
$sqlt="Select P_code from ALUMINI WHERE Rollno='".$_POST["Roll_no"]."'";
$parset=oci_parse($conn,$sqlt);
oci_execute($parset);
$datat = oci_fetch_array($parset);
$sql = "SELECT Rollno,Fname,Lname,DOB,Gender,Email,Phone_no,Pname,Year_of_passing,Designation,Current_address,Permanent_address
  FROM ALUMINI,CURRENT_INFO,PERSONAL_INFO,PROGRAMME  WHERE Alumini.Rollno='".$_POST["Roll_no"]."' AND Current_info.Roll_no='".$_POST["Roll_no"]."' AND Personal_info.Roll_no='".$_POST["Roll_no"]."' AND Programme.Pcode='$datat[0]'";
 // $sql="SELECT Rollno,Fname,Lname,DOB,Gender,Email,Phone_no,Year_of_passing,Designation,Current_Address, FROM ALUMINI,PERSONAL_INFO where ALUMINI.Rollno='".$_POST["Roll_no"]."' AND PERSONAL_INFO.Roll_no='".$_POST["Roll_no"]."'";

  $parse=oci_parse($conn,$sql);
    oci_execute($parse);
    while($data = oci_fetch_array($parse)){
    ?>
    
    <!DOCTYPE html>
    <html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="view.css">
    <style> 
body, html {
    height: 100%;
    margin: 0;
}

.bg {
    /* The image used */
    background-image: url("IMG/study.jpg");

    /* Full height */
    height: 200%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;

}
.by{
    color:white;
}
</style>
    </head>
    <body>
    <div class="bg"> 
        <br>
        <br>
        <div class="by">
        <h1 align="middle" style="font-family:Castellar font-color:white">Information of <?php echo $_POST["Roll_no"] ?><h1>
</div>
            <br>
        <table border="1" style="width:70%; margin-top:20px; color:Teal;" align="center">
            <tr>
                <th>Roll No</th>
                <td><?php echo $data[0];?></td>
            </tr>
            <tr>
                <th>FName</th>
                <td><?php echo $data[1];?></td>
            </tr>
            <tr>
                <th>Lname</th>
                <td><?php echo $data[2];?></td>
            </tr>
            <tr>
                <th>DOB</th>
                <td><?php echo $data[3];?></td>
            </tr>
            <tr>
                <th>Gender</th>
                <td><?php echo $data[4];?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?php echo $data[5];?></td>
            </tr>
            <tr>
                <th>Phone no.</th>
                <td><?php echo $data[6];?></td>
            </tr>
            <tr>
                <th>Programme</th>
                <td><?php echo $data[7];?></td>
            </tr>    
            <tr>
                <th>Year_of_passing</th>
                <td><?php echo $data[8];?></td>
            </tr>
            <tr>
                <th>Designation</th>
                <td><?php echo $data[9];?></td>
            </tr>
            <tr>
                <th>Current_address</th>
                <td><?php echo $data[10];?></td>
            </tr>
            <tr>
                <th>Permanent_address</th>
                <td><?php echo $data[11];?></td>
            </tr>                 
        </table>
    <?php
    }
?>
</div>
</body>
</html>

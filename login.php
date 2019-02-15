<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <h1 align="center">ALUMINI Login</h1>
    <form action="logine.php" method="POST">
        <table align="center">
            <tr>
                <td>Roll No</td>
                <td><input type="text" name="Rollno" required></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="Password" required></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit"  name="submit" value="submit"></td>
            </tr>
        </table>
    </form>  
</body>
</html>
<?php
    session_start();
    include('dbcon.php');
    if( isset($_POST['submit'])){
        $stSQL0="SELECT * from ALUMINI where Password='".$_POST["Password"]."'  AND  Rollno='".$_POST["Rollno"]."'";
        $sparse0=oci_parse($conn,$stSQL0);
        $sexecute0=oci_execute($sparse0);
        $row0=oci_fetch_all($sparse0,$result0);
      //  echo $stid;
      //  echo $rollno;
       // echo $password;
        echo $row0;
       // echo "$RESULT";
        if($row0){
        echo "Login Successfully";
        header("location: ALUMINI/aluminidash.php");
        }else{
        echo "Username or password is incorrect.";
        }
    }
    else{
        echo "NOT SET";
}
?>

<?php
    session_start();
    include('dbcon.php');
    if( isset($_POST['submit']) ){
        $rollno =$_POST['Rollno'];
        $password =$_POST['Password'];
        $sql="SELECT * from ALUMINI where ROLLNO = :roll AND PASSWORD = :pass";
        $stid = oci_parse($conn, $sql);  
        //$stid = oci_parse($conn, 'SELECT * from ALUMINI where ROLLNO = $rollno AND PASSWORD = $password;');  
        oci_bind_by_name($stid, ':roll', $rollno);
        oci_bind_by_name($stid, ':pass', $password);
        oci_execute($stid);
        $RESULT = array();
        $row = oci_fetch_all($stid, $RESULT);
      //  echo $stid;
        echo $rollno;
        echo $password;
        echo $row;
       // echo "$RESULT";
        if($row){
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
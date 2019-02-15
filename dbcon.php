<?php
$conn = oci_connect("guest","guest","localhost/XE");

if (!$conn) {
    die("Database Connection Error\n");
 }
 
 else
 {
     echo "Database is connected\n";
 }
?>
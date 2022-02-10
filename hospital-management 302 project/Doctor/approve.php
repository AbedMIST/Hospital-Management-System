<?php

$con = oci_connect("abed", "abed201914011", "localhost/XE");

$id = $_GET['id'];
$query = "UPDATE Appointment SET Appoint_Status='Approved' where Patient_Id=$id";
$stid = oci_parse($con, $query);
oci_execute($stid);
header('Location:appoint.php');

?>
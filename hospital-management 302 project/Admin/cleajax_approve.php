<?php

$con = oci_connect("abed", "abed201914011", "localhost/XE");

$id = $_POST['id'];
$query = "UPDATE Cleaner SET Cleaner_Status='Approved' where Cleaner_Id=$id";
$stid = oci_parse($con, $query);
oci_execute($stid);
$query="UPDATE Cleaner SET Cleaner_Id=Cleaner_Id.nextval where Cleaner_Id=$id";
$stid = oci_parse($con, $query);
oci_execute($stid);


?>
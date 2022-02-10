<?php

$con = oci_connect("abed", "abed201914011", "localhost/XE");

$id = $_POST['id'];
$query = "DELETE  from Pharmacist  where Pharmacist_Id=$id";
$stid = oci_parse($con, $query);
oci_execute($stid);

?>
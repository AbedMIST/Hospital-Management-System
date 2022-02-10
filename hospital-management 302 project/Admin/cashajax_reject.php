<?php

$con = oci_connect("abed", "abed201914011", "localhost/XE");

$id = $_POST['id'];
$query = "DELETE  from Cashier  where Cashier_Id=$id";
$stid = oci_parse($con, $query);
oci_execute($stid);

?>
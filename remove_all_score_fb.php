<?php
include 'configdb.php';

$sql1 = "DELETE from point where LENGTH(id)='16'";
if ($conn->query($sql1) === TRUE) {} else {}

$sql2 = "DELETE from point where id='undefined'";
if ($conn->query($sql2) === TRUE) {} else {}
?>
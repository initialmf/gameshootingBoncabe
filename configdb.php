<?php
//session_start();

$dbhost = "localhost"; // replace dengan database host kamu
$dbuser = "id19270176_admin"; // replace dengan databae user kamu
$dbpass = "D@gadu88D@gadu88"; // replace dengan database pass kamu
$dbname = "id19270176_game"; // replace dengan database name kamu
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
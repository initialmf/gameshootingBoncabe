<?php

$plnama = $_GET['plnama'];
$fbname = $_GET['fbname'];
$fbid = $_GET['fbid'];

echo $plnama . "-" . $fbname . "-" . $fbid;

$id = "";
$nama = "";
include 'configdb.php';
date_default_timezone_set('Asia/Jakarta');
$date = new DateTime("now", new DateTimeZone('Asia/Jakarta') );
$now = $date->format('H');
$date_now_for_insert = $date->format('Y-m-d H:i:s');
    $sql = "UPDATE point SET id='$fbid', nama='$fbname', tgl='$date_now_for_insert' where nama='$plnama'";
    if ($conn->query($sql) === TRUE) {
        setcookie("plid", $id, time() + (86400 * 30), "/"); // 86400 = 1 day
        setcookie("plnama", $nama, time() + (86400 * 30), "/"); // 86400 = 1 day
        header("Location: notify.php");
    } else {
        header("Location: notify.php");
    }


?>
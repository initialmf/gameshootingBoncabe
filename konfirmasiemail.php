<?php

include 'configdb.php';

$email="";
$email = isset($_GET['email']) ? $_GET['email'] : '';
$email = !empty($_GET['email']) ? $_GET['email'] : '';
    
$status="Active";
    

if($email != "" || !empty($email) || $email != null)
{
       $sql = "update point set status='$status' WHERE nama='$email'";
       if ($conn->query($sql) === TRUE) {
            $message = "Proses verifikasi email berhasil";
            echo "<script type='text/javascript'>alert('$message');</script>";
            echo "<script type='text/javascript'>
                setTimeout(function(){
                    window.location.href = 'notify.php';
                }, 1000);
            </script>";
       } else {
          header("Location: notify.php");
       }
}

?>
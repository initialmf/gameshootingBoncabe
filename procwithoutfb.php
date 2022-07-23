<?php
include 'configdb.php';

$email = $_POST['email'];
$nama = $_POST['nama'];
$data_jumlah=0;

$score = $_GET['score'];

$id_fhoto = $_COOKIE['valuephoto'];

$status='Active';

if($score == 0)
{
    $message = "You must play game , and get point for save account and point";
    echo "<script type='text/javascript'>alert('$message');</script>";
    echo "<script type='text/javascript'>
        setTimeout(function(){
            window.location.href = 'notify.php';
        }, 500);
    </script>";
}
else if($id_fhoto == "")
{
    if($score != 0)
    {
        $message = "You must fill your photo";
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo "<script type='text/javascript'>
            setTimeout(function(){
                window.location.href = 'notify.php?score=$score';
            }, 500);
        </script>";
    }
    else if($score == 0)
    {
        $message = "You must fill your photo";
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo "<script type='text/javascript'>
            setTimeout(function(){
                window.location.href = 'notify.php';
            }, 500);
        </script>";
    }
}
else if($email == "")
{
    if($score != 0)
    {
        $message = "You must fill your email";
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo "<script type='text/javascript'>
            setTimeout(function(){
                window.location.href = 'notify.php?score=$score';
            }, 500);
        </script>";
    }
    else if($score == 0)
    {
        $message = "You must fill your email";
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo "<script type='text/javascript'>
            setTimeout(function(){
                window.location.href = 'notify.php';
            }, 500);
        </script>";
    }
}
else if($nama == "")
{
    if($score != 0)
    {
        $message = "You must fill your name";
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo "<script type='text/javascript'>
            setTimeout(function(){
                window.location.href = 'notify.php?score=$score';
            }, 500);
        </script>";
    }
    else if($score == 0)
    {
        $message = "You must fill your name";
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo "<script type='text/javascript'>
            setTimeout(function(){
                window.location.href = 'notify.php';
            }, 500);
        </script>";
    }
}
else if($score != 0 && $email != ""  && $nama != ""  && $id_fhoto != "")
{
    include 'configdb.php';
                                                
    date_default_timezone_set('Asia/Jakarta');
    $date = new DateTime("now", new DateTimeZone('Asia/Jakarta') );
    $now = $date->format('H');
    $date_now_for_insert = $date->format('Y-m-d H:i:s');
    
    $sql = "INSERT INTO point (id, email, nama, poin, tgl, status)
        VALUES ('$id_fhoto', '$email', '$nama', '$score', '$date_now_for_insert', '$status')";
    if ($conn->query($sql) === TRUE) {
                                    
        $sql = "update point set status='$status',nama='$nama',id='$id_fhoto' WHERE email='$email'";
        if ($conn->query($sql) === TRUE) {
            setcookie("plid", $id_fhoto, time() + (86400 * 30), "/"); // 86400 = 1 day
            setcookie("plnama", $nama, time() + (86400 * 30), "/"); // 86400 = 1 day
            setcookie("nama_user_boncashoot", $nama);
            header("Location: notify.php");
        } else {
            header("Location: notify.php");
        }
                                    
    } else {
        header("Location: notify.php");
    }

}



        
        
        
?>
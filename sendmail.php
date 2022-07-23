<?php

    $to="";
    $to = isset($_COOKIE['nama_user_boncashoot']) ? $_COOKIE['nama_user_boncashoot'] : '';
    $to = !empty($_COOKIE['nama_user_boncashoot']) ? $_COOKIE['nama_user_boncashoot'] : '';
    
    
    

    if($to != "" || !empty($to) || $to != null)
    {
         $subject = "This is subject";
         
         $message = "<h1>Email anda berhasil terdaftar untuk game Boncabe .</h1>";
		 $message .= "<a href='https://djawz.com/GAME/REVISISCOREWITHOUTFB/konfirmasiemail.php?email=".$to."'><h2 style='padding-left:10px;margin-left:10px;padding-top:-5px;margin-top:-5px;'>' KLIK DISINI UNTUK KONFIRMASI '</h2></a>";
         $message .= "<br>";
		 $message .= "<img src='https://djawz.com/APITES/tes.png' width='250' height='250'>";
		 $message .= "<br>";
		 
		 
         
         $header = "From:boncabeshootgame@kobe.com \r\n";
         $header .= "Cc:afgh@somedomain.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            
            $message = "Proses verifikasi telah di kirim ke email anda , segera konfirmasi";
            echo "<script type='text/javascript'>alert('$message');</script>";
            echo "<script type='text/javascript'>
                setTimeout(function(){
                    window.location.href = 'notify.php';
                }, 1000);
            </script>";
            
         }else {
            $message = "Proses verifikasi gagal , periksa kembali email anda";
            echo "<script type='text/javascript'>alert('$message');</script>";
            echo "<script type='text/javascript'>
                setTimeout(function(){
                    window.location.href = 'notify.php';
                }, 1000);
            </script>";
         }
    }

?>
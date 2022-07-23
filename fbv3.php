<?php
include 'configdb.php';

$fbname = $_GET['fbname'];
$fbid = $_GET['fbid'];
$fbpoin = $_GET['fbpoint'];
$status='Active';


date_default_timezone_set('Asia/Jakarta');
$date = new DateTime("now", new DateTimeZone('Asia/Jakarta') );
$now = $date->format('H');
$date_now_for_insert = $date->format('Y-m-d H:i:s');
echo "<script type='text/javascript'>alert('$fbname');</script>";

$sql = "SELECT count(nama) AS total FROM point
                    where nama='$fbname' and status IS NOT NULL";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    if($row['total'] > 0)
    {
            $sql = "INSERT INTO point (id, nama, poin, tgl, status)
                        VALUES ('$fbid', '$fbname', '$fbpoin', '$date_now_for_insert', '$status')";
            if ($conn->query($sql) === TRUE) {
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
    }
    if($row['total'] == 0)
    {
        
            $sql = "INSERT INTO point (id, nama, poin, tgl, status)
                        VALUES ('$fbid', '$fbname', '$fbpoin', '$date_now_for_insert', '$status')";
            if ($conn->query($sql) === TRUE) {
                    
                     $to = $fbname;
                     $subject = "This is subject";
                     $message = "<h1>Email anda berhasil terdaftar untuk game Boncabe .</h1>";
                     $message .= "<br>";
            		 $message .= "<img src='https://djawz.com/APITES/tes.png' width='250' height='250'>";
            		 $message .= "<br>";
            		 
                     $header = "From:boncabeshootgame@kobe.com \r\n";
                     $header .= "Cc:afgh@somedomain.com \r\n";
                     $header .= "MIME-Version: 1.0\r\n";
                     $header .= "Content-type: text/html\r\n";
                     $retval = mail ($to,$subject,$message,$header);
                     
                     if( $retval == true ) {
                        
                        $message = "Email anda baru saja terdaftar di game ini , silahkan cek email anda untuk info detail";
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
                    
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            
                    
    }
}
    
?>

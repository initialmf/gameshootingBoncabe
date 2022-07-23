<?php
session_start();
require_once ('connection.php');

$username = $_POST['username'];
$password = $_POST['password'];





            include 'DBConfig.php';


             $conn = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);
                         
                         
             $Sql_Query = "select * from userpoint where username='$username' and password='$password'";
             $check = mysqli_fetch_array(mysqli_query($conn,$Sql_Query));
             if(isset($check)){
                $sql = "select * from userpoint where username='$username' and password='$password'";
                $result = mysqli_query($db, $sql);
                while ($excel = mysqli_fetch_assoc($result)) 
                {
                    
                    $plid = $excel['id'];
                    $plnama = $excel['username'];
                    $plnama_account = $excel['nama'];
                    
                    
                    setcookie("plid", $plid, time() + (86400 * 30), "/"); // 86400 = 1 day
                    setcookie("plnama", $plnama, time() + (86400 * 30), "/"); // 86400 = 1 day
                    setcookie("plnama_account", $plnama_account, time() + (86400 * 30), "/"); // 86400 = 1 day
                    
                    
                    
                    
                    $message = "LOGIN BERHASIL";
                    echo "<script type='text/javascript'>
                    alert('$message');
                    </script>";
                    
                    
                    header('Location: notify.php');
                }
                
                
            
             }
             else{
            	$message = "USER TIDAK TERDAFTAR";
                echo "<script type='text/javascript'>
                alert('$message');
                window.location.href = 'notify.php';
                </script>";
                
             }
?>
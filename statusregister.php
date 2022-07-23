<?php
include 'configdb.php';

    $kosong= NULL;
    
    $id="";
    $id = isset($_COOKIE['nama_user_boncashoot']) ? $_COOKIE['nama_user_boncashoot'] : '';
    $id = !empty($_COOKIE['nama_user_boncashoot']) ? $_COOKIE['nama_user_boncashoot'] : '';
    
    
    

    if($id != "" || !empty($id) || $id != null)
    {
        $sql = "SELECT count(nama) AS total FROM point
            where nama='$id' and status IS NULL";
        $result = mysqli_query($conn, $sql);
        
        
        while ($row = mysqli_fetch_assoc($result)) {
            if($row['total'] > 0)
            {
        ?>
                <?php echo ('<p style="color: red;">Akun anda belum terverifikasi</p>' ); ?>
                <?php echo ('<p style="color: red;padding-top:-20px;margin-top:-20px;">sehingga point anda untuk tidak masuk terdaftar di papan skor</p>' ); ?>
                <?php echo ('<a href="sendmail.php"><h3 style="font-weight: bold;color: #008000;padding-top:-5px;margin-top:-5px;">verifikasikan sekarang</h3></a>' ); ?>
         <?php       
            }
        }
    }

?>
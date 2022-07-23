<?php
include 'configdb.php';

    $id="";
    $id = isset($_COOKIE['nama_user_boncashoot']) ? $_COOKIE['nama_user_boncashoot'] : '';
    $id = !empty($_COOKIE['nama_user_boncashoot']) ? $_COOKIE['nama_user_boncashoot'] : '';
    
    
    

    if($id != "" || !empty($id) || $id != null)
    {
        $sql = "SELECT id, tgl, nama, SUM(poin) as poin, count(nama) AS total FROM point
            where nama='$id' 
                GROUP BY id
                    ORDER BY poin DESC limit 1";
        $no = 0;
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            
        ?>
            <?php echo ('<p class="myscore">Poin Totalku: ' . $row['poin'] . '</p>' ); ?>
        <?php
        }
    }

?>
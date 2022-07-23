<?php
include 'configdb.php';



$sql = "SELECT id, tgl, email, nama, SUM(poin) as poin FROM point
WHERE status IS NOT NULL
    GROUP BY email, id 
        ORDER BY poin DESC limit 10";
        
$no = 0;
$result = mysqli_query($conn, $sql);
echo ('<table class="bmar">');
while ($row = mysqli_fetch_assoc($result)) {
?>
    <tr>
        <?php
        if($row['id'] != "01" && $row['id'] != "02" && $row['id'] != "03" && $row['id'] != "04" && $row['id'] != "05")
        {
        ?>
        <td style="padding-left: 20px;padding-top:15px;"><img src="//graph.facebook.com/<?php echo ($row['id']); ?>/picture"></td>
        <?php
        }
        ?>
        
        
        <?php
        if($row['id'] == "01")
        {
        ?>
        <td style="padding-left: 20px;padding-top:15px;"><img src="assets/avatars/1.png" width="60" height="60"></td>
        <?php
        }
        ?>
        
        
        <?php
        if($row['id'] == "02")
        {
        ?>
        <td style="padding-left: 20px;padding-top:15px;"><img src="assets/avatars/2.png" width="60" height="60"></td>
        <?php
        }
        ?>
        
        
        
        <?php
        if($row['id'] == "03")
        {
        ?>
        <td style="padding-left: 20px;padding-top:15px;"><img src="assets/avatars/3.png" width="60" height="60"></td>
        <?php
        }
        ?>
        
        
        
        <?php
        if($row['id'] == "04")
        {
        ?>
        <td style="padding-left: 20px;padding-top:15px;"><img src="assets/avatars/4.png" width="60" height="60"></td>
        <?php
        }
        ?>
        
        
        <?php
        if($row['id'] == "05")
        {
        ?>
        <td style="padding-left: 20px;padding-top:15px;"><img src="assets/avatars/5.png" width="60" height="60"></td>
        <?php
        }
        ?>
        
        <td style="padding-left: 20px;padding-top:15px;"><?php echo ('<strong style="color: #FF4500;">' . $row['poin'] . ' Points</strong><br><p style="font-weight: bold;font-size: 15px;">' . $row['nama'] . '</p>'); ?></td>
    </tr>
<?php
}
echo ('</table>');
?>
<table>
</table>
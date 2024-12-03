<?php
 include "db_go.php";
 
 $batch = $_POST['batch'];
 $sql = "select * from tb_proof where pr_batch=".$batch;
 $result = mysqli_query($conn,$sql) ;
 while($row = mysqli_fetch_array($result)){
?>

<table bordered='0' width='100%'>
<tr>
    <td width="300"><img src="images/<?php echo $row['pr_image']; ?>">
    <td style="padding:20px;">
    <p>RESI:<?php echo $row['pr_resi']; ?></p>
    <p>TANGGAL:<?php echo $row['pr_tanggal']; ?></p>
    <p>BARANG:<?php echo $row['pr_barang']; ?></p>
    <p>STATUS:<?php echo $row['pr_status']; ?></p>
    </td>
</tr>
</table>
 
<?php } ?>
 <link rel="stylesheet" href="layout/assets/css/style.css">


<?php 
include  "app/photos.php"; ?>
<?php 
$kat = new photo;
$rows = $kat->tampil();

?>

<table class="tampil">
 	<h2></h2>
<tr><th>ID PEMESANAN</th>
<th>TANGGAL SELESAI</th>
<th>TIPE FOTO</th>

 		<?php foreach ($rows as $row) { ?>
	<tr>
		<td><?php echo $row['post_id']; ?></td>
			<td><?php echo $row['tanggal']; ?></td>
		<td><?php echo $row['teks']; ?></td>
 		<td class="aksa">
 		 <a href="post_edit.php?id=<?php echo $row['id'];?>"> EDIT</a>  
		<a href="post_proses.php? delete-id=<?php echo $row['id'];?>"> DELETE</a></td>
	
 	</tr>
 <?php } ?>
</table>	
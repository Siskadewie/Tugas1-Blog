 <link rel="stylesheet" href="layout/assets/css/style.css">


<?php 
include  "app/album.php"; ?>
<?php 
$kat = new album;
$rows = $kat->tampil();

?>

<table class="tampil">
 	<h2></h2>
<tr><th>ID PENGIRIMAN</th>
<th>ALAMAT PENGIRIM</th>
<th>EMAIL</th>

 		<?php foreach ($rows as $row) { ?>
	<tr>
		
		<td><?php echo $row['id']; ?></td>
		<td><?php echo $row['name']; ?></td>
		<td><?php echo $row['teks']; ?></td>
 		<td class="aksa">
 		 <a href="post_edit.php?id=<?php echo $row['id'];?>"> EDIT</a>  
		<a href="post_proses.php? delete-id=<?php echo $row['id'];?>"> DELETE</a></td>
	
 	</tr>
 <?php } ?>
</table>	
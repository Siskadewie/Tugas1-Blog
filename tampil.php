
   <link rel="stylesheet" href="layout/assets/css/style.css">

<?php 
include  "app/category.php"; ?>
<?php 
$kat = new category();
$rows = $kat->tampil();

?>

<table class="tampil">
 	<h2></h2>
<tr><th>NO</th>
<th>Kategori Foto</th>
<th>Keterangan</th>

 		<?php foreach ($rows as $row) { ?>
	<tr>
		<td><?php echo $row['id']; ?></td>
		<td><?php echo $row['name']; ?></td>
		<td><?php echo $row['teks']; ?></td>
 		<td class="aksa">
 		 <a href="category_edit.php?id=<?php echo $row['id'];?>"> EDIT</a>  
		<a href="category_proses.php? delete-id=<?php echo $row['id'];?>"> DELETE</a></td>
	
 	</tr>
 <?php } ?>
</table>	

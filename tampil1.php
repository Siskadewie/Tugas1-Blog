 <link rel="stylesheet" href="layout/assets/css/style.css">


<?php 
include  "app/post.php"; ?>
<?php 
$kat = new post;
$rows = $kat->tampil();

?>

<table class="tampil">
 	<h2></h2>
<tr><th>NO</th>
<th>TANGGAL</th>
<th>SLUG</th>
<th>JUDUL PHOTO</th>

 		<?php foreach ($rows as $row) { ?>
	<tr>
		
		<td><?php echo $row['id']; ?></td>
		<td><?php echo $row['tanggal']; ?></td>
		<td><?php echo $row['slug']; ?></td>
		<td><?php echo $row['title']; ?></td>
 		<td class="aksa">
 		 <a href="post_edit.php?id=<?php echo $row['id'];?>"> EDIT</a>  
		<a href="post_proses.php? delete-id=<?php echo $row['id'];?>"> DELETE</a></td>
	
 	</tr>
 <?php } ?>
</table>	
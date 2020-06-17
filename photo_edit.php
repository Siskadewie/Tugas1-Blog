 <link rel="stylesheet" href="layout/assets/css/style.css">
  
 
<div class="utama">
    	<div class="kepala">
			<?php include "header.php" ?>
		</div>
<form action="photo_proses.php" method="POST">
	<table>
		<tr>
			<td>ID PEMESANAN</td>
			<td><input type="text" name="post_id" value=" <?php echo  $row ['post_id'];?>"></td>
			
		</tr>
	<tr>
			<td>TANGGAL SELESAI</td>
			<td><input type="date" name="tanggal" value=" <?php echo  $row ['tanggal'];?>"></td>
			
		</tr>
		<tr>
			<td>TIPE FOTO</td>
			<td><input type="text" name="teks" value=" <?php echo  $row ['teks'];?>"></td>
			
		</tr>

		<tr>
			<td></td>
			<td><input type="submit" name="t_simpan" value="simpan"></td>
		</tr>
			
	</table>
</form>

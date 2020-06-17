 <link rel="stylesheet" href="layout/assets/css/style.css">
  
 
<div class="utama">
    	<div class="kepala">
			<?php include "header.php" ?>
		</div>
<form action="post_proses.php" method="POST">
	<table>
		<tr>
			<td>ID PELANGGAN</td>
			<td><input type="text" name="cat_id"></td>
			
		</tr>

		<tr>
			<td>TANGGAL BOOKING</td>
			<td><input type="date" name="tanggal"></td>
			
		</tr>

		<tr>
			<td>ATAS NAMA</td>
			<td><input type="text" name="slug"></td>
			
		</tr>
		<tr>
			<td>PEMBAYARA</td>
			<td><input type="text" name="title"></td>
			
		</tr>


		<tr>
			<td></td>
			<td><input type="submit" name="t_simpan" value="simpan"></td>
		</tr>
			
	</table>
</form>

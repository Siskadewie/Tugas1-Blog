 <link rel="stylesheet" href="layout/assets/css/style.css">
  
 
<div class="utama">
    	<div class="kepala">
			<?php include "header.php" ?>
		</div>
<form action="category_proses.php" method="POST">
	<table>

		<tr>
			<td>ID</td>
			<td><input type="text" name="id"></td>
			
		</tr>

		<tr>
			<td>KATEGORI FOTO</td>
			<td><input type="text" name="name"></td>
			
		</tr>
		<tr>
			<td>PAKET FOTO</td>
			<td><input type="text" name="teks"></td>
			
		</tr>

		<tr>
			<td></td>
			<td><input type="submit" name="t_simpan" value="simpan"></td>
		</tr>
			
	</table>
</form>

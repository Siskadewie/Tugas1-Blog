<link rel="stylesheet" href="layout/assets/css/style.css">
<link rel="stylesheet" href="layout/assets/css/login.css">

		<div class="utama">
    	<div class="kepala">
			<?php include "header.php" ?>
		</div>
    <!--ini untuk menu-->
		<div class="siska-dewi">
			<?php include "menu.php" ?>
		</div>
<?php
session_start();
session_destroy();

header("location: login.php");
?>
<div class="footer">
			<?php include "footer.php" ?>
		</div>

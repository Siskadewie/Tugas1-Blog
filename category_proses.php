<?php 

include "app/category.php";
 $kat = new category();

 if ($_POST['t_simpan']){
$kat->input ();

header("location:index.php");
}


 if ($_POST['t_edit']){
$kat->update ();

header("location:tampil.php");
}
 if ($_GET['delete-id']){
$kat->delete ($_GET['delete-id']);

header("location:tampil.php");
 ?>
 
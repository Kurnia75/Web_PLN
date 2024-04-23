<?php
  	mysql_connect("localhost","root","") or die (mysql_error()); 
  	mysql_select_db ("db_pln");

	$id_tarif = $_POST['id_tarif']++;
    $kode = $_POST['kode'];
    $daya = $_POST['daya'];
    $tarif_perKWH = $_POST['tarif_perKWH'];
    $beban = $daya * $tarif_perKWH;

	$query = ("UPDATE tbl_tarif SET daya='$daya', tarif_perKWH='$tarif_perKWH', beban='$beban' WHERE id_tarif='$id_tarif'");
	$ubah = mysql_query($query);
	if($ubah){
		echo '<script type="text/javascript"> window.alert("Data berhasil disimpan !"); document.location.href="tarif.php"; </script>';
	  } ?>
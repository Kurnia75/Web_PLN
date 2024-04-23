<?php
  	mysql_connect("localhost","root","") or die (mysql_error()); 
  	mysql_select_db ("db_pln");

    $id_pelanggan = $_POST['id_pelanggan'];
    $id_tarif = $_POST['id_tarif'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];

	$query = ("UPDATE tbl_pelanggan SET id_tarif='$id_tarif', nama='$nama', alamat='$alamat' WHERE id_pelanggan='$id_pelanggan'");
	$ubah = mysql_query($query);
	if($ubah){
		echo '<script type="text/javascript"> window.alert("Data berhasil disimpan !"); document.location.href="pelanggan.php"; </script>';
	  } ?>
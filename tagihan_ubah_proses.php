<?php
  	mysql_connect("localhost","root","") or die (mysql_error()); 
  	mysql_select_db ("db_pln");

	  $id_tagihan = $_POST['id_tagihan'];
    $id_pelanggan = $_POST['id_pelanggan'];
    $pemakaian = $_POST['pemakaian'];
    $tagihan_bulanan = $_POST['tagihan_bulanan'];
    $tagihan_tahunan = $_POST['tagihan_tahunan'];
    $status_tagihan = $_POST['status_tagihan'];

	$query = ("UPDATE tbl_tagihan SET id_pelanggan='$id_pelanggan', pemakaian='$pemakaian', tagihan_bulanan='$tagihan_bulanan', tagihan_tahunan='$tagihan_tahunan', status_tagihan='$status_tagihan' WHERE id_tagihan='$id_tagihan'");
	$ubah = mysql_query($query);
	if($ubah){
		echo '<script type="text/javascript"> window.alert("Data berhasil disimpan !"); document.location.href="tagihan.php"; </script>';
	  } ?>
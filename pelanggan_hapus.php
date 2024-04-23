<?php
  	mysql_connect("localhost","root","") or die (mysql_error()); 
  	mysql_select_db ("db_pln");

  	$id_pelanggan = $_GET['id_pelanggan'];
	$query = "DELETE FROM tbl_pelanggan WHERE id_pelanggan = '$id_pelanggan' ";
	$delete = mysql_query($query); 
					
	if($delete){
		echo '<script type="text/javascript"> window.alert("Data berhasil dihapus !"); document.location.href="pelanggan.php"; </script>';
	}  		
?>
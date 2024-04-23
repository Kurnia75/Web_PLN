<?php
  	mysql_connect("localhost","root","") or die (mysql_error()); 
  	mysql_select_db ("db_pln");

  	$id_pembayaran = $_GET['id_pembayaran'];
	$query = "DELETE FROM tbl_pembayaran WHERE id_pembayaran = '$id_pembayaran' ";
	$delete = mysql_query($query); 
					
	if($delete){
		echo '<script type="text/javascript"> window.alert("Data berhasil dihapus !"); document.location.href="pembayaran.php"; </script>';
	}  		
?>

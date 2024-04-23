<?php
  	mysql_connect("localhost","root","") or die (mysql_error()); 
  	mysql_select_db ("db_pln");

  	$id_tagihan = $_GET['id_tagihan'];
	$query = "DELETE FROM tbl_tagihan WHERE id_tagihan = '$id_tagihan' ";
	$delete = mysql_query($query); 
					
	if($delete){
		echo '<script type="text/javascript"> window.alert("Data berhasil dihapus !"); document.location.href="tagihan.php"; </script>';
	}  		
?>
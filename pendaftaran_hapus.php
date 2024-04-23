<?php
  	mysql_connect("localhost","root","") or die (mysql_error()); 
  	mysql_select_db ("db_pln");

  	$IdPelanggan = $_GET['IdPelanggan'];
	$query = "DELETE FROM login WHERE IdPelanggan = '$IdPelanggan' ";
	$delete = mysql_query($query); 
					
	if($delete){
		echo '<script type="text/javascript"> window.alert("Data berhasil dihapus !"); document.location.href="pendaftaran.php"; </script>';
	}  		
?>
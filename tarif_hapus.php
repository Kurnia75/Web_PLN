<?php 
    error_reporting(1); 
    session_start(); 
    mysql_connect("localhost","root","") or die (mysql_error()); 
    mysql_select_db("db_pln") or die ("Tidak ada database"); 
?>

<?php if($_SESSION['TypeUser']=='admin') { ?>

<?php 
	mysql_connect("localhost","root","") or die (mysql_error()); 
	mysql_select_db ("db_pln"); 
	
	$id_tarif = $_GET['id_tarif'];
	$query = "DELETE FROM tbl_tarif WHERE id_tarif = '$id_tarif' ";
	$delete = mysql_query($query);  
					
	if($delete){
		echo '<script type="text/javascript"> window.alert("Data berhasil dihapus !"); document.location.href="tarif.php"; </script>';
	}  		
?>

<?php } else { ?>
	<script> alert('Harus login dulu !'); window.location = 'index.php'; </script>
<?php } ?>
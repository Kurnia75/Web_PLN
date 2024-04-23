<?php 
	session_start();
	session_destroy();
	echo '<script type="text/javascript"> window.alert("Logout Berhasil !"); document.location.href="index.php"; </script>';
?>
<?php
    mysql_connect("localhost","root","") or die (mysql_error()); 
    mysql_select_db ("db_pln"); 

   $IdPelanggan  	= $_POST['IdPelanggan'];
							$UserName	= $_POST['UserName'];
							$Password		= $_POST['Password'];
							$TypeUser		= $_POST['TypeUser'];
							$Fullname		= $_POST['Fullname'];
   $simpan = mysql_query("INSERT INTO login (IdPelanggan, UserName, Password, TypeUser, Fullname) VALUES ('$IdPelanggan', '$UserName', '$Password', '$TypeUser', '$Fullname');");
							if($simpan) {
								echo '<script type="text/javascript"> window.alert("Data berhasil disimpan !"); document.location.href="pendaftaran.php"; </script>';
    } 
?>
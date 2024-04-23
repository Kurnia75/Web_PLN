<?php
  	mysql_connect("localhost","root","") or die (mysql_error()); 
  	mysql_select_db ("db_pln");

    $IdPelanggan = $_POST['IdPelanggan'];
    $UserName = $_POST['UserName'];
    $Password = $_POST['Password'];
    $TypeUser = $_POST['TypeUser'];
     $Fullname = $_POST['Fullname'];

	$query = ("UPDATE login SET UserName='$UserName', Password='$Password', TypeUser='$TypeUser', Fullname='$Fullname' WHERE IdPelanggan='$IdPelanggan'");
	$ubah = mysql_query($query);
	if($ubah){
		echo '<script type="text/javascript"> window.alert("Data berhasil disimpan !"); document.location.href="pendaftaran.php"; </script>';
	  } ?>
	  
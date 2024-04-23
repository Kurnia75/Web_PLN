<?php
    mysql_connect("localhost","root","") or die (mysql_error()); 
    mysql_select_db ("db_pln"); 

    $id_tarif = $_POST['id_tarif']++;
    $kode = $_POST['kode'];
    $daya = $_POST['daya'];
    $tarif_perKWH = $_POST['tarif_perKWH'];
    $beban  = $_POST['daya']*$_POST['tarif_perKWH'];
                            
    $simpan = mysql_query("INSERT INTO tbl_tarif (id_tarif, kode, daya, tarif_perKWH, beban) VALUES ('$id_tarif', '$kode', '$daya', '$tarif_perKWH', '$beban');");
    if($simpan) {
        echo '<script type="text/javascript"> window.alert("Data berhasil disimpan !"); document.location.href="tarif.php"; </script>';
    } 
?>
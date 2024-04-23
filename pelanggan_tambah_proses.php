<?php
    mysql_connect("localhost","root","") or die (mysql_error()); 
    mysql_select_db ("db_pln"); 

    $id_pelanggan = $_POST['id_pelanggan'];
    $id_tarif = $_POST['id_tarif'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
                            
    $simpan = mysql_query("INSERT INTO tbl_pelanggan (id_pelanggan, id_tarif, nama, alamat) VALUES ('$id_pelanggan', '$id_tarif', '$nama', '$alamat');");
    if($simpan) {
        echo '<script type="text/javascript"> window.alert("Data berhasil disimpan !"); document.location.href="pelanggan.php"; </script>';
    } 
?>
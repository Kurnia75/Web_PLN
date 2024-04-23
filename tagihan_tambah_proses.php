<?php
    mysql_connect("localhost","root","") or die (mysql_error()); 
    mysql_select_db ("db_pln"); 

    $id_tagihan = $_POST['id_tagihan'];
    $id_pelanggan = $_POST['id_pelanggan'];
    $pemakaian = $_POST['pemakaian'];
    $tagihan_bulanan = $_POST['tagihan_bulanan'];
    $tagihan_tahunan = $_POST['tagihan_tahunan'];
    $status_tagihan = $_POST['status_tagihan'];
                            
    $simpan = mysql_query("INSERT INTO tbl_tagihan (id_tagihan, id_pelanggan, pemakaian, tagihan_bulanan, tagihan_tahunan, status_tagihan) VALUES ('$id_tagihan', '$id_pelanggan', '$pemakaian', '$tagihan_bulanan', '$tagihan_tahunan', '$status_tagihan');");
    if($simpan) {
        echo '<script type="text/javascript"> window.alert("Data berhasil disimpan !"); document.location.href="tagihan.php"; </script>';
    } 
?>
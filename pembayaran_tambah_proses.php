<?php
    mysql_connect("localhost","root","") or die (mysql_error()); 
    mysql_select_db ("db_pln"); 

    $id_pembayaran = $_POST['id_pembayaran'];
    $id_tagihan = $_POST['id_tagihan'];
    $tanggal_bayar = $_POST['tanggal_bayar'];
    $pemakaian      = $_POST['pemakaian'];
    $biaya_denda = $_POST['biaya_denda'];
    $biaya_admin = $_POST['biaya_admin'];
   $total_bayar = $_POST['pemakaian']+$_POST['biaya_denda']+$_POST['biaya_admin'];
    $status_pembayaran = $_POST['status_pembayaran'];
                            
    $simpan = mysql_query("INSERT INTO tbl_pembayaran (id_pembayaran, id_tagihan, tanggal_bayar, pemakaian, biaya_denda, biaya_admin, total_bayar, status_pembayaran) VALUES ('$id_pembayaran', '$id_tagihan', '$tanggal_bayar', '$pemakaian', '$biaya_denda', '$biaya_admin', '$total_bayar', '$status_pembayaran');");
    if($simpan) {
        echo '<script type="text/javascript"> window.alert("Data berhasil disimpan !"); document.location.href="pembayaran.php"; </script>';
    } 
?>
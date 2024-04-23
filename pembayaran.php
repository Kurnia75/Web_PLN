<?php 
    error_reporting(1); 
    session_start(); 
    mysql_connect("localhost","root","") or die (mysql_error()); 
    mysql_select_db("db_pln") or die ("Tidak ada database"); 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" type="image/x-icon" href="images/fav1.png" />
<meta charset="UTF-8" />
<link rel="icon" type="image/x-icon" href="images/favicon.png" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PLN</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<!-- templatemo 352 station shop -->
<!-- 
Station Shop Template 
http://www.templatemo.com/preview/templatemo_352_station_shop 
-->
<link href="css/tabel.css" rel="stylesheet" type="text/css" />
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "top_nav", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>

<link rel="stylesheet" type="text/css" media="all" href="css/jquery.dualSlider.0.2.css" />

<script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
<script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="js/jquery.timers-1.2.js" type="text/javascript"></script>
<script src="js/jquery.dualSlider.0.3.min.js" type="text/javascript"></script>

<script type="text/javascript">
    
    $(document).ready(function() {
        
        $(".carousel").dualSlider({
            auto:true,
            autoDelay: 6000,
            easingCarousel: "swing",
            easingDetails: "easeOutBack",
            durationCarousel: 1000,
            durationDetails: 600
        });
        
    });
    
</script>

</head>

<body>

<div id="templatemo_wrapper">
	<div id="templatemo_header">
    
    	<div id="site_title">
        	<h1><a href="#">PLN</a></h1>
        </div>
        
        <div id="header_right">
  <?php if(($_SESSION['TypeUser']=='admin') || ($_SESSION['TypeUser']=='user')) { ?>
        
      <?php } else { ?>
        <li><a href="login.php"><img src="images/login.png" width="20" height="35" title="Login"></a></li>
      <?php } ?>
		</div>
        
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_header -->
    
    <div id="templatemo_menu">
    	<div id="top_nav" class="ddsmoothmenu">
            <ul>
             <li><a href="index.php" ><strong>Beranda</strong></a></li>
               
                <?php if(($_SESSION['TypeUser']=='admin') || ($_SESSION['TypeUser']=='user')) { ?>
        
      <?php } else { ?>
       <li><a href="pendaftaran.php"><strong>Pendaftaraan</strong></a></li>
      <?php } ?>
               
               <li><a href="tarif.php"><strong>Tarif</strong></a></li>
               <li><a href="pelanggan.php"><strong>Pelanggan</strong></a></li>
               <li><a href="tagihan.php"><strong>Tagihan</strong></a></li>
               <li><a href="pembayaran.php"class="selected"><strong>Pembayaran</strong></a></li>
                  <?php if($_SESSION['TypeUser']=='admin') { ?>
               <li><a href="#"><strong>Laporan</strong></a>
                    <ul>
           <li><a href="laporan_tarif_view.php">Laporan Tarif</a></li>
          <li><a href="laporan_pelanggan_view.php">Laporan Pelanggan</a></li>
          <li><a href="laporan_tagihan_view.php">Laporan Tagihan</a></li>
            <li><a href="laporan_pembayaran_view.php">Laporan Pembayaran</a></li>
            <?php } ?>
                  </ul>
                  
                   <?php if(($_SESSION['TypeUser']=='admin') || ($_SESSION['TypeUser']=='user')) { ?>
        <li><a href="logout.php" onClick="return logout()"><img src="images/logout.png" width="25" height="40" title="Logout"></a></li>
      <?php } else { ?>
        
      <?php } ?>
                 
               
            </ul>
            <br style="clear: left" />
        </div> <!-- end of ddsmoothmenu -->
        <div id="menu_second_bar">
        	<div id="top_shopping_cart">
        	<marquee direction="right" behavior="alternate" scrollamount="2" width="300" scrolldelay="10" style="float:left;"> Selamat Datang<strong> PLN Kurnia Juanugraha</strong>  </marquee>
            </div>
        	
      </form>
            <div class="cleaner"></div>
    	</div>
    </div> <!-- END of templatemo_menu -->
    
    <div id="templatemo_middle" class="carousel">
    	<div class="panel">
				
				<div class="details_wrapper">
					
					<div class="details">
					
						<div class="detail">
                            <h2><a href="#">PLN</a></h2>
							 <p>PLN adalah singkatan dari kata Perusahaan Listrik Negara.  Istilah Perusahaan Listrik Negara apabila disingkat yaitu menjadi PLN. Akronim  PLN (Perusahaan Listrik Negara) merupakan singkatan/akronim resmi dalam Bahasa Indonesia.. </p>
                            
                        </div><!-- /detail -->
                        
                        <div class="detail">
                            <h2><a href="#">Perusahaan Listrik Negara</a></h2>
                            <p>PT. PLN (Persero) adalah sebuah BUMN yang mengurusi semua aspek kelistrikan yang ada di Indonesia...</p>
                            
                        </div><!-- /detail -->
                        
                        <div class="detail">
                            <h2><a href="#">Direktur Utama</a></h2>
                            <p> Direktur Utamanya adalah Sofyan Basir (sebelumnya adalah Direktur Utama Bank Rakyat Indonesia), menggantikan Nur Pamudji.</p>
						</div><!-- /detail -->
						
					</div><!-- /details -->
					
				</div><!-- /details_wrapper -->
				
				<div class="paging">
					<div id="numbers"></div>
					<a href="javascript:void(0);" class="previous" title="Previous" >Previous</a>
					<a href="javascript:void(0);" class="next" title="Next">Next</a>
				</div><!-- /paging -->
				
				
			</div><!-- /panel -->
	
			<div class="backgrounds">
				
				<div class="item item_1">
                    <img src="images/slider/pln.jpg" alt="Slider 01" />
                </div><!-- /item -->
                
                <div class="item item_2">
                    <img src="images/slider/pln2.jpg" alt="Slider 02" />
                </div><!-- /item -->
                
                <div class="item item_3">
                    <img src="images/slider/pln3.png" alt="Slider 03" />
                </div><!-- /item -->
				
			</div><!-- /backgrounds -->
    </div> <!-- END of templatemo_middle -->
   
        <div id="content" class="float_r">
        	<center><h1>PLN Kurnia Juanugraha</h1></center>
         <p style="float:left; margin-bottom:0px; font-weight:bold;">Data Pembayaran</p>
        <?php if($_SESSION['TypeUser']=='admin') { ?>
        <a class="add" href="pembayaran_tambah.php" style="float:right;">Tambah Data</a>
        <?php } ?>
        <br style="clear:both;">
         <form method="post" action="pembayaran_hasil_pencarian.php" style="float: right; color: #000;">
                                        <select name="kategori" id="kategori" style="padding: 3.5px;" required="">
                                            <option value="">Pilih kategori pencarian :</option>
                                            <option value="id_pembayaran">ID Pembayaran</option>
                                            <option value="id_tagihan">ID Tagihan</option>
                                            <option value="tanggal_bayar">Tanggal Bayar</option>
                                            <option value="pemakaian">pemakaian</option>
                                            <option value="biaya_denda">Biaya Denda</option>
                                            <option value="biaya_admin">Biaya Admin</option>
                                            <option value="status_pembayaran">Status Pembayaran</option>
                                        </select>
                                        <input type="text" name="cari" placeholder="Pencarian" required="">
                                        <input type="submit" name="submit" value="Cari" class="btn btn-primary btn-sm" style="padding-top: 3px;">
                                    </form><br><br>
        <hr>
        <br>
        <table cellspacing="0">
                <tbody>
                <tr>
                                            <th>ID Pembayaran</th>
                                            <th>ID Tagihan</th>
                                            <th>Tanggal Bayar</th>
                                            <th>Pemakaian</th>
                                            <th>Biaya Denda</th>
                                            <th>Biaya Admin</th>
                                            <th width="100">Total Bayar</th>
                                            <th>Status Pembayaran</th>

                    
                    <?php if($_SESSION['TypeUser']=='admin') { ?>
                    <th width="95" colspan="3">Aksi</th>
                    <?php } ?>
                </tr>
                </thead>
                                    <tbody>
                                        <?php 
                                        $query = mysql_query("SELECT * FROM tbl_pembayaran");
                                        $jumlah = mysql_num_rows($query);
                                        if ($jumlah == 0) {
                                            echo "<tr><td colspan=7>Tidak ada data dalam tabel ini !</td></tr>";
                                        }
                                        while ($data = mysql_fetch_assoc($query)) { ?>
                                            <tr>
                                                <td><?php echo $data['id_pembayaran'];?></td>
                                                <td><?php echo $data['id_tagihan'];?></td>
                                                <td><?php echo date("Y/M/D", strtotime($data['tanggal_bayar']));?></td>
                                                <td><?php echo $data['pemakaian'];?></td>
                                                <td><?php echo "Rp. " . number_format($data['biaya_denda'], "0", ",", ".");?></td>
                                                <td><?php echo "Rp. " . number_format($data['biaya_admin'], "0", ",", ".");?></td>
                                                <td align="center"><?php echo"Rp.".     $data['total_bayar'];?></td>
                                                <td><?php echo $data['status_pembayaran'];?></td>
                        <?php if($_SESSION['TypeUser']=='admin') { ?>
                         <td align="center"><a href="pembayaran_cetak.php?id_pembayaran=<?php echo $data['id_pembayaran'];?>" style="color:#F90;"><img src="images/images-1.png" width="15" height="15" title="Cetak"></a></td>
                        <td align="center"><a href="pembayaran_ubah.php?id_pembayaran=<?php echo $data['id_pembayaran'];?>" style="color:#F90;"><img src="images/edit.png" width="15" height="15" title="Ubah"></a></td>
                        <td align="center"><a href="pembayaran_hapus.php?id_pembayaran=<?php echo $data['id_pembayaran'];?>" onClick="return hapus()" style="color:#F00;"><img src="images/delete.png" width="15" height="15" title="Hapus"></a></td>
                        <?php } ?> 
                    </tr>
                <?php } ?>
                </tbody>
                </table>

            	
			
    	<center>Copyright © 2018 <a href="#">Kurnia Juanugraha</a></center>
    </div> <!-- END of templatemo_footer -->
    
</div> <!-- END of templatemo_wrapper -->

</body>
</html>
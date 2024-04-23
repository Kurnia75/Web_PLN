<?php 
    error_reporting(1); 
    session_start(); 
    mysql_connect("localhost","root","") or die (mysql_error()); 
    mysql_select_db("db_pln") or die ("Tidak ada database"); 

    $id_tarif=$_GET['id_tarif'];
    $query=mysql_query("SELECT * FROM tbl_tarif WHERE id_tarif='$id_tarif';");
    $data1=mysql_fetch_array($query); 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" type="image/x-icon" href="images/fav1.png" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PLN</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<!-- templatemo 352 station shop -->
<!-- 
Station Shop Template 
http://www.templatemo.com/preview/templatemo_352_station_shop 
-->
<link rel="stylesheet" type="text/css" href="css/tambahubah.css" />
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
               
               <li><a href="tarif.php"class="selected"><strong>Tarif</strong></a></li>
               <li><a href="pelanggan.php"><strong>Pelanggan</strong></a></li>
               <li><a href="tagihan.php"><strong>Tagihan</strong></a></li>
               <li><a href="pembayaran.php"><strong>Pembayaran</strong></a></li>
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
        	<marquee direction="right" behavior="alternate" scrollamount="2" width="300" scrolldelay="10" style="float:left;"> Selamat Datang<strong> PLN Kurnia juanugraha</strong>  </marquee>
            </div>
        	 <div id="templatemo_search">
				<form action="hasil_pencarian_jadwalpraktek.php" method="post" id="sitesearch">
				<input type="text" value="Cari Data" name="Hari" id="Hari" title="Hari" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
                  <input type="submit" name="submit" value=" Cari Data" alt="search" id="search" title="Cari Data" class="sub_btn"  />
      
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
        	<h1>PLN</h1>
    
             <div id="tambahubah">
        
            
				<form name="tambah" method="post" action="tarif_ubah_proses.php">
    				<fieldset>
        				<legend align="center">Ubah Data Tarif</legend>
                       <div class="group-input" style="margin-bottom: 15px;">
                                            <label>ID Tarif :</label>
                                            <input type="text" name="id_tarif" class="form-control" readonly="" value="<?php echo $data1['id_tarif']; ?>">
                                        </div>
                                        <div class="group-input" style="margin-bottom: 15px;">
                                            <label>Kode :</label>
                                            <input type="text" name="kode" class="form-control" readonly="" value="<?php echo $data1['kode']; ?>">
                                        </div>
                                        <div class="group-input" style="margin-bottom: 15px;">
                                            <label>Daya Listrik :</label>
                                            <select name="tarif_perKWH" class="form-control" required="">
                                                <option value="<?php echo $data1['tarif_perKWH']; ?>">Pilih Daya</option>
                                                <option value="3500">480 wat</option>
                                                <option value="5000">900 wat</option>
                                                <option value="6500">1300 wat</option>
                                            </select><br>
                                            <input type="text" name="daya" class="form-control" required="" placeholder="Daya Terpakai" value="<?php echo $data1['daya']; ?>">
                                        </div>
                                        <div class="group-input" style="margin-bottom: 15px;">
						<input type="submit" value="Simpan">
						<input type="reset" value="Reset">
        			</fieldset>
				</form>


            </div>
            	
			
    	<center>Copyright © 2017 <a href="#">Kurnia Juanugraha</a></center>
    </div> <!-- END of templatemo_footer -->
    
</div> <!-- END of templatemo_wrapper -->

</body>
</html>
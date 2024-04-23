<?php 
    error_reporting(1); 
    session_start(); 
    mysql_connect("localhost","root","") or die (mysql_error()); 
    mysql_select_db("db_poliklinik") or die ("Tidak ada database"); 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="UTF-8" />
<link rel="icon" type="image/x-icon" href="images/favicon.png" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MR.</title>
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
        	<h1><a href="#">Station Shop</a></h1>
        </div>
        
        <div id="header_right">
 <?php if(($_SESSION['TypeUser']=='admin') || ($_SESSION['TypeUser']=='user')) { ?>
        <a class="logout" href="logout.php" onClick="return logout()">Logout</a>
    <?php } else { ?>
        <a class="login" href="login.php">Login</a>
    <?php } ?>
		</div>
        
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_header -->
    
    <div id="templatemo_menu">
    	<div id="top_nav" class="ddsmoothmenu">
            <ul>
               <li><a href="index.php" class="selected">Home</a></li>
                <li><a href="#">Input Data</a>
                    <ul>
                        <li><a href="pasien.php">Pasien</a></li>
                        <li><a href="dokter.php">Dokter</a></li>
                        <li><a href="pegawai.php">Pegawai</a></li>
                  </ul>
                </li>
                <li><a href="#">Input Data 2</a>
                    <ul>
                        <li><a href="poliklinik.php">Poliklinik</a></li>
                        <li><a href="jadwalpraktek.php">Jadwal Peraktek</a></li>
                        <li><a href="pemeriksaan.php">Pemeriksaan</a></li>
                        <li><a href="resep.php">Resep</a></li>
                        <li><a href="obat.php">Obat</a></li>
                        <li><a href="jenisbiaya.php">Jenis Biaya</a></li>
                  </ul>
                </li>
                <li><a href="pendaftaran.php">Pendaftaraan</a></li>
            </ul>
            <br style="clear: left" />
        </div> <!-- end of ddsmoothmenu -->
        <div id="menu_second_bar">
        	<marquee direction="right" behavior="alternate" scrollamount="2" width="300" scrolldelay="10" style="float:left;"> Selamat Datang<strong> Di Andi Klinik Centre</strong>  </marquee>
        	 <div class="fl_right">
			 <div id="templatemo_search">
				<form action="hasil_pencarian.php" method="post" id="sitesearch">
				<input type="text" value="Cari Data" name="nama_pas" id="nama_pas" title="nama_pas" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
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
							<h2><a href="#">Dokter</a></h2>
                            <p>Dokter yang baik bisa menyembuhkan penyakit, dokter yang hebat menyembuhkan pasien yang terkena penyakit. </p>
							<a href="#" title="Read more" class="more">Lihat</a>
						</div><!-- /detail -->
						
						<div class="detail">
							<h2><a href="#">Klinik</a></h2>
                            <p>Istirahat ketika Anda lelah. Menyegarkan dan memperbaharui diri, tubuh, pikiran, dan semangat Anda. Lalu kembali bekerja..</p>
							
						</div><!-- /detail -->
						
						<div class="detail">
							<h2><a href="#">Poliklinik</a></h2>
                            <p>Balai pengobatan umum (tidak untuk perawatan atau pasien menginap).</p>
						</div><!-- /detail -->
						
					</div><!-- /details -->
					
				</div><!-- /details_wrapper -->
				
				<div class="paging">
					<div id="numbers"></div>
					<a href="javascript:void(0);" class="previous" title="Previous" >Previous</a>
					<a href="javascript:void(0);" class="next" title="Next">Next</a>
				</div><!-- /paging -->
				
				<a href="javascript:void(0);" class="play" title="Turn on autoplay">Play</a>
				<a href="javascript:void(0);" class="pause" title="Turn off autoplay">Pause</a>
				
			</div><!-- /panel -->
	
			<div class="backgrounds">
				
				<div class="item item_1">
					<img src="images/slider/klinik.jpg" alt="Slider 01" />
				</div><!-- /item -->
				
				<div class="item item_2">
					<img src="images/slider/klinik1.jpg" alt="Slider 02" />
				</div><!-- /item -->
				
				<div class="item item_3">
					<img src="images/slider/klinik2.png" alt="Slider 03" />
				</div><!-- /item -->
				
			</div><!-- /backgrounds -->
    </div> <!-- END of templatemo_middle -->
    
    <div id="templatemo_main">
   		<div id="sidebar" class="float_l">
        	<div class="sidebar_box"><span class="bottom"></span>
            	<h3>Jam Dinding</h3>   
                <div class="content"> 
		<embed style="margin-bottom:1%;" src="swf/den1.swf" type="application/x-shockwave-flash" width="220" height="250" wmode="transparent" align="middle" quality="high"> 	

                	<ul class="sidebar_list">
                    	
                    </ul>
                </div>
            </div>
            <div class="sidebar_box"><span class="bottom"></span>
            	<h3>Best Sellers </h3>   
                <div class="content"> 
                	<div class="bs_box">
                      
                        <div class="cleaner"></div>
                    </div>
                </div>
            </div>
        </div>
        <div id="content" class="float_r">

    
      
<?php
$nama_pas = $_POST['nama_pas']; //get the Merk value from mobil
$q = "SELECT * from pasien where nama_pas like '%$nama_pas%'or no_pasien like '%$nama_pas%' or alm_pas like '%$nama_pas%'"; //query to get the search result
$result = mysql_query($q); //execute the query $q

echo "<center>";
echo "<h2><b>HASIL PENCARIAN DATA PASIEN</b></h2>";
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "

<td><font color='#'>No Pasien</font></td>
<td><font color='#'>Nama Pasien</font></td>
<td><font color='#'>Alamat Pasien</font></td>
<td><font color='#'>Telepon Pasien</font></td>
<td><font color='#'>Tanggal Lahir</font></td>
<td><font color='#'>Jenis Kelamin</font></td>
<td><font color='#'>Tanggal Registrasi</font></td>
</tr>";
while ($data = mysql_fetch_array($result)) {  //fetch the result from query into an array
echo "
<tr>
<td>".$data['no_pasien']."</td>
<td>".$data['nama_pas']."</td>
<td>".$data['alm_pas']."</td>
<td>".$data['telp_pas']."</td>
<td>".$data['tgl_lahir_pas']."</td>
<td>".$data['jens_kel_pas']."</td>
<td>".$data['tgl_registrasi']."</td>



</tr>";
}
echo "</table>";


?>



            	
			
    <center>Copyright © 2017 <a href="#">Mr.Klinik Centre</a></center>
    </div> <!-- END of templatemo_footer -->
    
</div> <!-- END of templatemo_wrapper -->

</body>
</html>
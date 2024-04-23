<?php
  session_start();
  mysql_connect("localhost","root","") or die (mysql_error()); 
  mysql_select_db("db_pln"); 
  
  $cekuser = mysql_query("SELECT * FROM login WHERE UserName = '$_POST[UserName]' and Password='$_POST[Password]'");
  $jumlah = mysql_num_rows($cekuser);
  $hasil = mysql_fetch_array($cekuser);  
  if($jumlah){
   $_SESSION['TypeUser'] = $hasil['TypeUser'];
   ?> <script type="text/javascript"> window.alert("Login Berhasil !"); document.location.href="index.php"; </script>
   <?php } else { ?>
   <script type="text/javascript"> window.alert("Username atau Password Salah !"); document.location.href="login.php"; </script>
   <?php } ?>
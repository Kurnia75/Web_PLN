<?php
mysql_connect("localhost","root","");
mysql_select_db("db_pln");
$sql = mysql_query("select * from tbl_pembayaran order by id_pembayaran");
?>

<center><h2>LAPORAN PEMBAYARAN</h2></center>
<center>
<table width="100%" border="1" bgcolor="#000000">
      <tr bgcolor="#FFFFFF"  height="40">
	   <th width="5%" scope="col">No</th>
        <th width="5%" scope="col">ID Pembayaran</th>
        <th width="11%" scope="col">ID Tagihan</th>
        <th width="12%" scope="col">Tanggal Bayar</th>
        <th width="15%" scope="col">pemakaian</th>
		<th width="12%" scope="col">Biaya Denda</th>
		<th width="12%" scope="col">Biaya Admin</th>
		<th width="12%" scope="col">Biaya Admin</th>
		<th width="11%" scope="col">Status Pembayaran</th>
      </tr>
	  
<?php
$i=1;
while ($data = mysql_fetch_array($sql)) {
	echo "<tr bgcolor=white>
	<td align=center>$i</td>
    <td align=center>$data[id_pembayaran]</td>
	<td align=center>$data[id_tagihan]</td>
	<td align=center>$data[tanggal_bayar]</td>
	<td align=center>$data[pemakaian]</td>
	<td align=center>$data[biaya_denda]</td>
	<td align=center>$data[biaya_admin]</td>
	<td align=center>$data[total_bayar]</td>
	
	<td align=center>$data[status_pembayaran]</td>
	</tr>";
    $i++;
}
echo "</table>";
?>
</table></center>
<center>
		<a href><img src="images/images-1.png" width="50" height="50"  type="submit" name="button" id="button" value="Print" onclick="print()" />
        <form method="get" action="includes/laporan_excel.php">
		<h3 class="panel active"><a href="pembayaran.php" style="text-align:left">Kembali</a></h3>
        </form>
	</center>

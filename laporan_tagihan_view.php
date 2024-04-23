<?php
mysql_connect("localhost","root","");
mysql_select_db("db_pln");
$sql = mysql_query("select * from tbl_tagihan order by id_tagihan");
?>

<center><h2>LAPORAN TAGIHAN</h2></center>
<center>
<table width="100%" border="1" bgcolor="#000000">
      <tr bgcolor="#FFFFFF"  height="40">
	   <th width="5%" scope="col">No</th>
        <th width="5%" scope="col">ID Tagihan</th>
        <th width="11%" scope="col">ID Pelanggan</th>
        <th width="12%" scope="col">Pemakaian</th>
        <th width="12%" scope="col">Tahun Tagihan</th>
        <th width="15%" scope="col">Bulan Tagihan</th>
		<th width="12%" scope="col">status Tagihan</th>
      </tr>
	  
<?php
$i=1;
while ($data = mysql_fetch_array($sql)) {
	echo "<tr bgcolor=white>
	<td align=center>$i</td>
    <td align=center>$data[id_tagihan]</td>
	<td align=center>$data[id_pelanggan]</td>
	<td align=center>$data[pemakaian]</td>
	<td align=center>$data[tagihan_bulanan]</td>
	<td align=center>$data[tagihan_tahunan]</td>
	<td align=center>$data[status_tagihan]</td>
	</tr>";
	 $i++;

}
echo "</table>";
?>
</table></center>
<center>
		<a href><img src="images/images-1.png" width="50" height="50"  type="submit" name="button" id="button" value="Print" onclick="print()" />
        <form method="get" action="includes/laporan_excel.php">
		<h3 class="panel active"><a href="tagihan.php" style="text-align:left">Kembali</a></h3>
        </form>
	</center>

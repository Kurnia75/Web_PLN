<?php
mysql_connect("localhost","root","");
mysql_select_db("db_pln");
$sql = mysql_query("select * from tbl_pelanggan order by id_pelanggan");
?>

<center><h2>LAPORAN PELANGGAN</h2></center>
<center>
<table width="100%" border="1" bgcolor="#000000">
      <tr bgcolor="#FFFFFF"  height="40">
      	<th width="5%" scope="col">No</th>
        <th width="5%" scope="col">ID Pelanggan</th>
        <th width="15%" scope="col">ID Tarif</th>
        <th width="11%" scope="col">Nama Pelanggan</th>
        <th width="12%" scope="col">Alamat Pelanggan</th>
        
      </tr>
<?php
$i=1;
$id_pelanggan=10001;
while ($data = mysql_fetch_array($sql)) {
	echo "<tr bgcolor=white>
	<td align=center>$i</td>
    <td align=center>$id_pelanggan</td>
	<td align=center>$data[id_tarif]</td>
	<td align=center>$data[nama]</td>
	<td align=center>$data[alamat]</td>
	</td>
	</tr>";
	$i++;
    $id_pelanggan++;
}
echo "</table>";
?>

		<a href><img src="images/images-1.png" width="50" height="50"  type="submit" name="button" id="button" value="Print" onclick="print()" />

        <form method="get" action="includes/laporan_excel.php">
		<h3 class="panel active"><a href="pelanggan.php" style="text-align:left">Kembali</a></h3>

		</form>
        </form>
	</center>

<?php
mysql_connect("localhost","root","");
mysql_select_db("db_pln");
$sql = mysql_query("select * from tbl_tarif order by id_tarif");
?>

<center><h2>LAPORAN TARIF</h2></center>
<center>
<table width="100%" border="1" bgcolor="#000000">
      <tr bgcolor="#FFFFFF"  height="40">
		<th width="5%" scope="col">No</th>
        <th width="5%" scope="col">ID Tarif</th>
        <th width="11%" scope="col">Kode Tarif</th>
        <th width="12%" scope="col">Daya Terpakai</th>
        <th width="15%" scope="col">Tarif PerKWH</th>
		 <th width="15%" scope="col">Beban</th>
		 
      </tr>
<?php
$i=1;
while ($data = mysql_fetch_array($sql)) {
	echo "<tr bgcolor=white>
	<td align=center>$i</td>
    <td align=center>$data[id_tarif]</td>
	<td align=center>$data[kode]</td>
	<td align=center>$data[daya]</td>
	<td align=center>Rp.$data[tarif_perKWH]</td>
	<td align=center>$data[beban]</td>
	
	</td>
	</tr>";
    $i++;
	}
?>
</table></center>
<center>
		<a href><img src="images/images-1.png" width="50" height="50"  type="submit" name="button" id="button" value="Print" onclick="print()" />
        <form method="get" action="includes/laporan_excel.php">
		<h3 class="panel active"><a href="tarif.php" style="text-align:left">Kembali</a></h3>
		</form>
        </form>
	</center>

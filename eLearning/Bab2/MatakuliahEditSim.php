<?php
include "inc.koneksidb.php";
	
# Baca variabel Form (If Register Global ON)
$TxtMatakuliah = @$_POST['TxtMatakuliah'];
$TxtKodeH  	   = @$_POST['TxtKodeH'];
# Validasi Form
if (trim($TxtMatakuliah)=="") {
	echo "Matakuliah masih kosong, ulangi kembali";
}
else {
	$sql = "UPDATE matakuliah SET nm_matakuliah='$TxtMatakuliah'
			WHERE kd_matakuliah='$TxtKodeH'";
	mysqli_query( $koneksi,$sql) 
		  or die ("SQL Error: ".mysql_error());
		  
	echo "DATA MATAKULIAH TELAH DIPERBARUI";
	include "MatakuliahTampil.php";
}
?>

<?php
include "inc.koneksidb.php";
	
# Baca variabel Form (If Register Global ON)
$TxtKode 		= @$_POST['TxtKode'];
$TxtMatakuliah 	= @$_POST['TxtMatakuliah'];

# Validasi Form
if (trim($TxtKode)=="") {
	echo "Kode masih kosong, ulangi kembali";
}
elseif (trim($TxtMatakuliah)=="") {
	echo "Matakuliah masih kosong, ulangi kembali";
}
else {
	$sql = "INSERT INTO matakuliah(kd_matakuliah, nm_matakuliah)
			VALUES ('$TxtKode','$TxtMatakuliah')"; 
	mysqli_query($koneksi,$sql) 
		  or die ("SQL Error: ".mysql_error());
		  
	echo "Data Matakuliah <b> $TxtMatakuliah </b> telah disimpan";
	include "MatakuliahAddFm.php";
}
?>

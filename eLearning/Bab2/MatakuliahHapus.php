<?php
include "inc.koneksidb.php";

# Baca variabel URL (If Register Global ON)
$kdhapus = @$_POST['kdhapus'];
	
$sql = "DELETE FROM matakuliah WHERE kd_matakuliah='$kdhapus'";
mysqli_query($koneksi,$sql) 
		  or die ("SQL Error".mysql_error());

echo "Data berhasil dihapus";
include "MatakuliahTampil.php";
?>

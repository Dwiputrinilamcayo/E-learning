<?php 
include "inc.koneksidb.php";
?>
<html>
<head>
<title>Tampilkan Soal Kuis</title>
</head>
<body>
<table width="500" border="0" cellpadding="2" cellspacing="1" bgcolor="#CCFF99">
  <tr> 
    <td colspan="4" bgcolor="#CCFF33">
	 <b>DAFTAR SEMUA SOAL KUIS</b></td>
  </tr>
  <tr> 
    <td width="24"><b>No</b></td>
    <td width="315"><b>Pertanyaan Soal</b></td>
    <td width="45"><b>Kunci</b></td>
    <td width="95" align="center"><b>Pilihan</b></td>
  </tr>
  <?php 
	$sql = "SELECT * FROM kuis ORDER BY id_kuis";
	$qry = mysql_query($sql, $koneksi) 
		 or die ("SQL Error".mysql_error());
	while ($data=mysql_fetch_array($qry)) {
	$no++;
  ?>
  <tr bgcolor="#FFFFFF"> 
    <td><?php echo $no; ?></td>
    <td><?php echo $data['soal']; ?></td>
    <td><?php echo $data['kunci']; ?></td>
    <td align="center">
	  <a href="SoalEditFm.php?idubah=<?= $data[id_kuis]; ?>" target="_self">Ubah</a> 
      | <a href="SoalHapus.php?idhapus=<? echo $data[id_kuis]; ?>">Hapus</a></td>
  </tr>
  <?php
  }
  ?>
  <tr> 
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center"><a href="SoalAddFm.php">Tambah</a></td>
  </tr>
</table>
 </body>
</html>

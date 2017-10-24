<?php

class sekolah {
	var $Nama_sekolah;
	var $Kepala_sekolah;
	var $Perpustakaan;
	var $Kantin;
	var $Jurusan;

	function "akreditasi_baik"();{
	return "Akreditasi_Baik";
}
	function "akreditasi_buruk"();{
	return "Akreditasi_Buruk";
}
}

$Sekolah_idaman = new sekolah();
$Sekolah_idaman ->Nama_sekolah="SMK Assalaam";
$Sekolah_idaman ->Kepala_sekolah="H.M.Luthfi Almanfaluthi";
$Sekolah_idaman ->Perpustakaan="1";
$Sekolah_idaman ->Kantin="5";
$Sekolah_idaman ->Jurusan="TKR,TSM,RPL";

echo $Sekolah_idaman ->Nama_sekolah;
echo "<br />"
echo $Sekolah_idaman ->Kepala_sekolah;
echo "<br />"
echo $Sekolah_idaman ->Perpustakaan;
echo "<br />"
echo $Sekolah_idaman ->Kantin;
echo "<br />"
echo $Sekolah_idaman ->Jurusan;

echo $Sekolah_idaman -> akreditasi_baik();
echo "<br />"
echo $Sekolah_idaman -> akreditasi_buruk();
}
?>

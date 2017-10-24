<?php
require_once'orang.php';
$orang = new orang ('Wenti Ayu Marliyanti','Bandung','XI RPL1','SMK Assalaam','RPL');
echo "Nama.. ".$orang->get_nama();
echo"<br>Tempat Lahir.. ".$orang->get_tempatlahir();
echo"<br>Kelas.. ".$orang->get_kelas();
echo"<br>Sekolah.. ".$orang->get_sekolah();
echo"<br>Jurusan.. ".$orang->get_jurusan();

?>
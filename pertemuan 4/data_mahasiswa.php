<?php 
require_once('class_mahasiswa.php');
$mahasiswa = new Mahasiswa(12345, "Budi",3.0);
echo $mahasiswa->predikat_ipk();

?>
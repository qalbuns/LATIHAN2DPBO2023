<?php

include "Mahasiswa.php";
include "Human.php";
include "SivitasAkademik.php";

$pelajar = new SivitasAkademik();
$pelajar2 = new SivitasAkademik();

$pelajar->setNim("1904335");
$pelajar->setNama("Bubu");
$pelajar->setJk("Perempuan");
$pelajar->setFk("FPMIPA");
$pelajar->setProdi("Ilmu Komputer");
$pelajar->setNik("320429xxx");
$pelajar->setNama2("Bubu");
$pelajar->setJk2("Perempuan");
$pelajar->setAsal("UPI");
$pelajar->setEmail("bubuwashere@upi.edu");

$pelajar2->setNim("1903453");
$pelajar2->setNama("Piah");
$pelajar2->setJk("Perempuan");
$pelajar2->setFk("FIB");
$pelajar2->setProdi("Sastra Inggris");
$pelajar2->setNik("320497xxx");
$pelajar2->setNama2("Piah");
$pelajar2->setJk2("Perempuan");
$pelajar2->setAsal("UNPAD");
$pelajar2->setEmail("kuehpiah@unpad.edu");



echo "-----------------------------------------------------<br/>";

echo "NIM : ". $pelajar->getNim(). "<br/>";
echo "Nama : ". $pelajar->getNama(). "<br/>";
echo "Jenis Kelamin : ". $pelajar->getJk(). "<br/>";
echo "Fakultas : ". $pelajar->getFk(). "<br/>";
echo "Prodi : ". $pelajar->getProdi(). "<br/>";
echo "NIK : ". $pelajar->getNik(). "<br/>";
echo "Nama : ". $pelajar->getNama2(). "<br/>";
echo "Jenis Kelamin : ". $pelajar->getJk2(). "<br/>";
echo "Asal Universitas : ". $pelajar->getAsal(). "<br/>";
echo "Email_edu : ". $pelajar->getEmail(). "<br/>";


echo "-----------------------------------------------------<br/>";

echo "NIM : ". $pelajar2->getNim(). "<br/>";
echo "Nama : ". $pelajar2->getNama(). "<br/>";
echo "Jenis Kelamin : ". $pelajar2->getJk(). "<br/>";
echo "Fakultas : ". $pelajar2->getFk(). "<br/>";
echo "Prodi : ". $pelajar2->getProdi(). "<br/>";
echo "NIK : ". $pelajar2->getNik(). "<br/>";
echo "Nama : ". $pelajar2->getNama2(). "<br/>";
echo "Jenis Kelamin : ". $pelajar2->getJk2(). "<br/>";
echo "Asal Universitas : ". $pelajar2->getAsal(). "<br/>";
echo "Email_edu : ". $pelajar2->getEmail(). "<br/>";

echo "-----------------------------------------------------<br/>";




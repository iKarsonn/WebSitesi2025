<?php
// Değişkenler
$dogru_mail = "b231210054@ogr.sakarya.edu.tr";
$dogru_sifre = "b231210054";

// Formdan gelen değerler
$kullanici_adi = $_POST["kullanici_adi"] ?? '';
$sifre = $_POST["sifre"] ?? '';

// Kontrol
if ($kullanici_adi === $dogru_mail && $sifre === $dogru_sifre) {
    // Başarılı girişte yönlendirme
    header("Location: html/hakkimda.html");
    exit;
} else {
    // Geri yönlendir
    header("Location: login.html");
    exit;
}
?>

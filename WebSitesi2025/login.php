<?php
// Doğru kullanıcı bilgileri
$dogru_mail = "b231210054@ogr.sakarya.edu.tr";
$dogru_sifre = "b231210054";

// POST verilerini al
$kullanici_adi = $_POST["kullanici_adi"] ?? '';
$sifre = $_POST["sifre"] ?? '';

// Boş kontrol
if (empty($kullanici_adi) || empty($sifre)) {
    header("Location: login.html");
    exit;
}

// Doğrulama
if ($kullanici_adi === $dogru_mail && $sifre === $dogru_sifre) {
    header("Location: html/hakkimda.html");
    exit;
} else {
    echo "<script>alert('Hatalı kullanıcı adı veya şifre'); window.location.href='login.html';</script>";
    exit;
}
?>

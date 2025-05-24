<?php
// Değişkenler
$dogru_mail = "b2412100001@sakarya.edu.tr";
$dogru_sifre = "b2412100001";

// Formdan gelen değerler
$kullanici_adi = $_POST["kullanici_adi"] ?? '';
$sifre = $_POST["sifre"] ?? '';

// Kontrol
if ($kullanici_adi === $dogru_mail && $sifre === $dogru_sifre) {
    echo "<h2>Hoşgeldiniz " . htmlspecialchars($sifre) . "</h2>";
} else {
    // Geri yönlendir
    header("Location: login.html");
    exit;
}
?>
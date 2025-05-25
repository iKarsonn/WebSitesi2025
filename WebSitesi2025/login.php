<?php
// Doğru kullanıcı bilgileri
$dogru_mail = "b231210054@ogr.sakarya.edu.tr";
$dogru_sifre = "b231210054";

// POST verilerini al ve temizle
$kullanici_adi = isset($_POST["kullanici_adi"]) ? trim($_POST["kullanici_adi"]) : '';
$sifre = isset($_POST["sifre"]) ? trim($_POST["sifre"]) : '';

// Boş kontrol
if (empty($kullanici_adi) || empty($sifre)) {
    header("Location: login.html");
    exit;
}

// Küçük harfe çevir (email kontrolü için)
$kullanici_adi_lower = strtolower($kullanici_adi);
$dogru_mail_lower = strtolower($dogru_mail);

// Doğrulama
if ($kullanici_adi_lower === $dogru_mail_lower && $sifre === $dogru_sifre) {
    // Başarılı giriş
    // Mail kısmından sadece kullanıcı numarasını almak için @ öncesini kes
    $kullanici_numarasi = explode('@', $kullanici_adi)[0];
    header("Location: html/hakkimda.html?hosgeldin=" . urlencode($kullanici_numarasi));
    exit;
} else {
    // Başarısız giriş
    echo "<script>alert('Hatalı kullanıcı adı veya şifre'); window.location.href='login.html';</script>";
    exit;
}
?>

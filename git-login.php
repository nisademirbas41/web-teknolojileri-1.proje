<?php
// Kullanıcı adı ve şifre kontrolü için verileri alıyoruz
$email = $_POST['email'];
$password = $_POST['password'];

// Kullanıcı adı: b251210003@sakarya.edu.tr
// Şifre: b251210003
$dogru_email = "b251210003@sakarya.edu.tr";
$dogru_sifre = "b251210003";

if ($email == $dogru_email && $password == $dogru_sifre) {
    // Giriş başarılıysa kullanıcıyı karşıla
    echo "<div style='text-align:center; margin-top:50px; font-family:sans-serif;'>";
    echo "<h1>Hoşgeldiniz 'b251210003'</h1>";
    echo "<p>Giriş işleminiz başarıyla tamamlandı.</p>";
    echo "<a href='index.html'>Ana Sayfaya Dönmek İçin Tıklayın</a>";
    echo "</div>";
} else {
    // Giriş başarısızsa hata ver ve login sayfasına geri gönder
    header("Location: login.html");
    exit();
}
?>
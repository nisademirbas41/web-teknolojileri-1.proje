<?php
// b2412100001 kısmını kendi okul numaranla güncellemeyi unutma
$dogru_email = "b2412100001@sakarya.edu.tr";
$dogru_sifre = "b2412100001";

if ($_POST) {
    $gelen_email = $_POST['email'];
    $gelen_sifre = $_POST['sifre'];

    if ($gelen_email == $dogru_email && $gelen_sifre == $dogru_sifre) {
        header("Location: hosgeldiniz.php?no=b2412100001");
    } else {
        echo "<script>alert('Hatalı Giriş Bilgileri!'); window.location.href='login.php';</script>";
    }
}
?>
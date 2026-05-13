<?php

$dogru_email = "b251210003@sakarya.edu.tr";
$dogru_sifre = "b251210003";

if ($_POST) {
    $gelen_email = $_POST['email'];
    $gelen_sifre = $_POST['sifre'];

    if ($gelen_email == $dogru_email && $gelen_sifre == $dogru_sifre) {
        header("Location: hosgeldiniz.php?no=b251210003");
    } else {
        echo "<script>alert('Hatalı Giriş Bilgileri!'); window.location.href='login.php';</script>";
    }
}
?>
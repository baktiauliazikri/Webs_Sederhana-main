<?php
// Ambil data dari form
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$phone = htmlspecialchars($_POST['phone']);

// Validasi nomor telepon, jika diperlukan

// Pesan yang ingin dikirim
$message = "Halo, nama saya $name. Saya ingin bertanya tentang produk Anda. Email saya adalah $email dan nomor telepon saya adalah $phone.";

// Nomor WhatsApp tujuan
$whatsappNumber = '+62 815-1102-1618';

// Buat URL WhatsApp
$url = "https://api.whatsapp.com/send?phone=" . $whatsappNumber . "&text=" . urlencode($message);

// Redirect ke URL WhatsApp
header("Location: $url");
exit();
?>

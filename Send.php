<?php
include "Send.php";

$akunemail  = 'hermawati.corp@gmail.com'; // Akun email yang digunakan untuk registrasi di aplikasi sms gateway
$passakun   = 'ambassador90'; // Password yang digunakan untuk registrasi di aplikasi sms gateway
$id         = '305'; //Device ID yang tertera pada aplikasi sms gateway di handphone android

$smsGateway = new SmsGateway($akunemail,$passakun);

$deviceID = 52616;
$number = isset($_POST['nomor']);
$message = isset($_POST['isi_pesan']);

$options = [
'send_at' => strtotime('+1 minutes'), // +1 silakan rubah untuk mengatur waktu pengiriman dalam menit
'expires_at' => strtotime('+1 hour') // +1 silakan rubah maksimal sms terkirim ke penerima
];

echo"
<center><h1>Kirim Pesan Berhasil</h1><br />
<a href='input.php'>Kembali</a></center>
";
?>

$email_api	= urlencode("bagas@yahoo.com");
$passkey_api	= urlencode("xxxxxx");
$no_hp_tujuan	= urlencode("081234567890");
$isi_pesan	= urlencode("Coba kirim SMS");

$url	= "https://reguler.medansms.co.id/sms_api.php?action=kirim_sms&email=".$email_api."&passkey=".$passkey_api."&no_tujuan=".$no_hp_tujuan."&pesan=".$isi_pesan;
$result = file_get_contents($url);
$data	= explode("~~~", $result);

echo $data[0]; //1=SUKSES, selain itu GAGAL
echo $data[1]; //Jumlah Nomor Tujuan Valid
echo $data[2]; //Jumlah Nomor Tujuan yang dapat dikirim SMS
echo $data[3]; //Total Kredit yang digunakan
echo $data[4]; //Sisa Kredit
echo $data[5]; //Jenis Paket SMS (1=SMS Gratis, 0=SMS Reguler/SMS Center/SMS Masking

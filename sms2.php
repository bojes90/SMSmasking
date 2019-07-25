
logo-dark
Home
Produk & Harga
Plugin
Dokumentasi API
Solusi Bisnis
Pembayaran
Kontak
Login/Daftar Baru
Dokumentasi API
Home Dokumentasi API
Catatan :
- Seluruh Request Type API dalam bentuk $_GET / $_POST
- Gunakan Parameter json=1 untuk Output dalam format JSON
- ID Kirim hanya tampil jika menggunakan Parameter json=1
- Gunakan Tanda Koma, jika pengiriman SMS lebih dari 1 Nomor Tujuan
Kirim SMS
SMS Reguler
 https://reguler.medansms.co.id/sms_api.php?action=kirim_sms&email=#Email_Anda&passkey=#Passkey_Anda&no_tujuan=#NoHPTujuan&pesan=#IsiPesan
 https://reguler.medansms.co.id/sms_api.php?action=kirim_sms&email=#Email_Anda&passkey=#Passkey_Anda&no_tujuan=#NoHPTujuan_1,#NoHPTujuan_2,#NoHPTujuan_3&pesan=#IsiPesan
 https://reguler.medansms.co.id/sms_api.php?action=kirim_sms&email=#Email_Anda&passkey=#Passkey_Anda&no_tujuan=#NoHPTujuan&pesan=#IsiPesan&json=1
SMS Center
 https://center.medansms.co.id/sms_api.php?action=kirim_sms&email=#Email_Anda&passkey=#Passkey_Anda&no_tujuan=#NoHPTujuan&pesan=#IsiPesan
 https://center.medansms.co.id/sms_api.php?action=kirim_sms&email=#Email_Anda&passkey=#Passkey_Anda&no_tujuan=#NoHPTujuan_1,#NoHPTujuan_2,#NoHPTujuan_3&pesan=#IsiPesan
 https://center.medansms.co.id/sms_api.php?action=kirim_sms&email=#Email_Anda&passkey=#Passkey_Anda&no_tujuan=#NoHPTujuan&pesan=#IsiPesan&json=1
 https://center.medansms.co.id/sms_api.php?action=kirim_sms&email=#Email_Anda&passkey=#Passkey_Anda&no_tujuan=#NoHPTujuan&pesan=#IsiPesan&id_port=#ID_Port
Catatan :
Jika Anda memiliki lebih dari 1 No.Center, dan Anda menggunakan API tanpa menyertakan #ID_Port, maka pengiriman akan dilakukan secara bergantian diantara No.Center yang anda miliki

SMS Masking
 https://masking.medansms.co.id/sms_api.php?action=kirim_sms&email=#Email_Anda&passkey=#Passkey_Anda&no_tujuan=#NoHPTujuan&pesan=#IsiPesan
 https://masking.medansms.co.id/sms_api.php?action=kirim_sms&email=#Email_Anda&passkey=#Passkey_Anda&no_tujuan=#NoHPTujuan&pesan=#IsiPesan&json=1
Contoh Request API via Browser :
 https://reguler.medansms.co.id/sms_api.php?action=kirim_sms&email=bagas@yahoo.com&passkey=xxxxxx&no_tujuan=081234567890&pesan=MedanSMS
 https://center.medansms.co.id/sms_api.php?action=kirim_sms&email=bagas@yahoo.com&passkey=xxxxxx&no_tujuan=081234567890&pesan=MedanSMS&id_port=1
 https://center.medansms.co.id/sms_api.php?action=kirim_sms&email=bagas@yahoo.com&passkey=xxxxxx&no_tujuan=081234567890&pesan=MedanSMS&id_port=1,2 
Contoh Script PHP ( 1 ):
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
Contoh Script PHP ( 2 ):
function SendAPI_SMS($url){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
return $response;
}

$email_api	= urlencode("bagas@yahoo.com");
$passkey_api	= urlencode("xxxxxx");
$no_hp_tujuan	= urlencode("081234567890");
$isi_pesan	= urlencode("Coba kirim SMS");

$url	= "https://reguler.medansms.co.id/sms_api.php?action=kirim_sms&email=".$email_api."&passkey=".$passkey_api."&no_tujuan=".$no_hp_tujuan."&pesan=".$isi_pesan;
$result	= SendAPI_SMS($url);
$data = explode("~~~", $result);

echo $data[0]; //1=SUKSES, selain itu GAGAL
echo $data[1]; //Jumlah Nomor Tujuan Valid 
echo $data[2]; //Jumlah Nomor Tujuan yang dapat dikirim SMS
echo $data[3]; //Total Kredit yang digunakan
echo $data[4]; //Sisa Kredit
echo $data[5]; //Jenis Paket SMS (1=SMS Gratis, 0=SMS Reguler/SMS Center/SMS Masking

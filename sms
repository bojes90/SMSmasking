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

function SendAPI_SMS($url){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response  = curl_exec($ch);
	curl_close($ch);
	return $response;
}

$email_api    = urlencode("bagas@yahoo.com");
$passkey_api  = urlencode("xxxxxx");
$no_hp_tujuan = urlencode("08139641xxxxxx,08139642xxxxxx");
$isi_pesan    = urlencode("Coba kirim SMS");

$url          = "https://reguler.medansms.co.id/sms_api.php?action=kirim_sms&email=".$email_api."&passkey=".$passkey_api."&no_tujuan=".$no_hp_tujuan."&pesan=".$isi_pesan."&json=1";
$result       = SendAPI_SMS($url);

//Contoh Balasan API :
	[{
	  "status": 1,
	  "jumlah_tujuan": 2,
	  "jumlah_dikirim": 2,
	  "kredit_digunakan": 2,
	  "sisa_kredit": 8381,
	  "jenis_paket": 0,
	  "id_kirim": [{
		"nomor_tujuan": "08139641xxxxxx",
		"id_kirim_detail": "3c841dde0b022ca036523f50aa489d99"
	  }, {
		"nomor_tujuan": "08139642xxxxxx",
		"id_kirim_detail": "f5938238b4d2b6d4aa196cc5933d59ee"
	  }]
	}]					
					
		

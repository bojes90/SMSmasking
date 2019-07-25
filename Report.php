$email_api	= urlencode("bagas@yahoo.com");
$passkey_api	= urlencode("xxxxxx");
$id_kirim	= urlencode("83972ed851a0285c157b4f3d4736533b");
						
$url		= "https://reguler.medansms.co.id/sms_api.php?action=laporan_pengiriman&email=".$email_api."&passkey=".$passkey_api."&id_kirim=".$id_kirim;
$result 	= file_get_contents($url);
						
//Contoh Balasan API :

[{
  "id_kirim": "83972ed851a0285c157b4f3d4736533b",
  "no_tujuan": "081396413851",
  "tgl_kirim": "25-Apr-2019\/11:40:57",
  "laporan_pengiriman": "Terkirim"
}]



<?php

$banner ="\033[94m─────────▀▀▀▀▀▀\033[93m──────────▀▀▀▀▀▀▀
\033[94m──────▀▀▀▀▀▀▀▀▀▀▀▀▀\033[93m───▀▀▀▀▀▀▀▀▀▀▀▀▀
\033[94m────▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀\033[93m──────────▀▀▀
\033[94m───▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀\033[93m──────────────▀▀
\033[94m──▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀\033[93m──────────────▀▀
\033[94m─▀▀▀▀▀▀▀▀▀▀▀▀───▀▀▀▀▀▀▀\033[93m───────────────▀▀
\033[94m─▀▀▀▀▀▀▀▀▀▀▀─────▀▀▀▀▀▀▀\033[93m──────────────▀▀
\033[94m─▀▀▀▀▀▀▀▀▀▀▀▀───▀▀▀▀▀▀▀▀\033[93m──────────────▀▀
\033[94m─▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀\033[93m───────────────▀▀
\033[94m─▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀\033[93m───────────────▀▀
\033[94m─▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀\033[93m───────────────▀▀
\033[94m──▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀\033[93m───────────────▀▀
\033[94m───▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀\033[93m───────────────▀▀▀
\033[94m─────▀▀▀▀▀▀▀▀▀▀▀▀▀\033[93m───────────────▀▀▀
\033[94m──────▀▀▀▀▀▀▀▀▀▀▀\033[93m───▀▀▀────────▀▀▀
\033[94m────────▀▀▀▀▀▀▀▀▀\033[93m──▀▀▀▀▀────▀▀▀▀
\033[94m───────────▀▀▀▀▀▀\033[93m───▀▀▀───▀▀▀▀
\033[94m─────────────▀▀▀▀▀\033[93m─────▀▀▀▀
\033[94m────────────────▀▀▀\033[93m──▀▀▀▀
\033[94m──────────────────▀▀\033[93m▀▀
\033[94m───────────────────▀\033[93m▀

\033[91m[#] \033[93mSpamsms22 \033[91m[#]

\033[95m=============================================\n
\033[95mauthor : \033[91mBLANK (Albimo22-Team)
\033[95mgithub : \033[91mhttps://github.com/RRC7F77/Spamsms22\n
\033[95m=============================================\n";

function send($phone) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://dz-tools.my.id/prank/otp-codashop-telkomsel");
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "msisdn=$phone&accept=sms");
		$asw = curl_exec($ch);
        curl_close($ch);
        //echo $asw."\n";
        if (preg_match('/otp_attempt_left/', $asw)) {
        	echo "\033[92msukses mengirim spam\n\n";
        }else{
        	echo "\033[91mgagal mengirim spam\n\n";
        }
}

system('clear');
echo $banner;
echo "\n";
echo "\033[92mMasukkan Nomor\n\033[00mInput : ";
$nomor = trim(fgets(STDIN));
sleep(1);
echo "\033[91m\nHANYA UNTUK 10000 KALI SPAM DALAM 1 NOMOR";
sleep(2);
echo "\n\n\033[92mRESULTS\n\n";
sleep(1);
$execute = send($nomor);
print $execute;
echo "\033[93mingin mengulang ?\n\033[00(y/n :";
$pill = trim(fgets(STDIN));
if($pill == 'y') {
	system('clear');
	echo $banner;
	echo "\n";
	echo "\033[92mMasukkan Nomor\n\033[00mInput : ";
	$nomor = trim(fgets(STDIN));
	sleep(1);
	echo "\033[91m\nHANYA UNTUK 10000 KALI SPAM DALAM 1 NOMOR";
	sleep(2);
	echo "\n\n\033[92mRESULTS\n\n";
	sleep(1);
	$execute = send($nomor);
	print $execute;
	}else{
		echo "\n\n\033[91mTERIMA KASIH \033[93mTELAH GUNAKAN \033[92mTOOLS INI\n";
		exit;
		}
?>

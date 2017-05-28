<?
include("str_replace.php");
$fp1 = fopen('value1.php', 'w+');
$fp2 = fopen('../config.php', 'w+');
flock($fp1, LOCK_EX); // Блокирование файла для записи
flock($fp2, LOCK_EX); // Блокирование файла для записи
$file_conf="Configuration v.1.9.1 for LandingPage: ";
$last_edit="Last edition by ".date('d.m.Y, h:i:s');
$create="Created by ConfigLand";
$power1="Powered by Igor Sayutin";
$power2="http://it-senior.pp.ua";
$text="<?php\n/* ".str_repeat("* ", 22)."\n";
$text.=" * ".str_pad($file_conf, 41, " ", STR_PAD_BOTH)." *\n";
$text.=" * ".str_pad($_SERVER['SERVER_NAME'], 41, " ", STR_PAD_BOTH)." *\n";
$text.=" * ".str_pad($last_edit, 41, " ", STR_PAD_BOTH)." *\n";
$text.=" ".str_repeat("* ", 22)."*/\n\n";
$text2=$text."session_start();\nrequire_once(\"config/class/functions.class.php\");\n";
$text2.='$remote_addr=Config::GetRealIp();'."\n";
$text2.='$country_code = Config::tabgeo_country_v4($remote_addr);'."\n";
$text2.='if ($remote_addr=="127.0.0.1") $remote_addr="localhost";'."\n";
$text2.="if (stripos($"."_SERVER['PHP_SELF'], \"index\"))\n\t{\n\t\tforeach("."$"."_GET as "."$"."key => $"."value) "."$"."_SESSION['utms'][$"."key] = $"."value;\n\t";
$text2.="\tif ($"."_SERVER['HTTP_REFERER']!=\"\") $"."_SESSION['referer']=$"."_SERVER['HTTP_REFERER'];\n\t\telse $"."_SESSION['referer']=\"Не определен.\";}\n";
$text2.='else '."\n\t".'if (isset($_SESSION[\'utms\'])) foreach ($_SESSION[\'utms\'] as $key => $value) $utm.="<tr><td><b>".str_pad($key, 14, " ", STR_PAD_RIGHT)."</b> </td><td> {$value}</td></tr>\n";'."\n\n";
$text2.='if (Config::is_mobile()) $device="Мобильный"; else $device="Стационарный";'."\n";

$text2.='$user_agent=$_SERVER[\'HTTP_USER_AGENT\'];'."\n";
$text2.='$browser=Config::user_browser($user_agent);'."\n";
$text2.='$os=Config::getOS($user_agent);'."\n\n";
if ($_FILES["upsel_pic"]["name"]!="") move_uploaded_file($_FILES["upsel_pic"]["tmp_name"], "../".$_POST['upsel_dir']."/".$_FILES["upsel_pic"]["name"]);

 foreach($_POST as $key => $value) {
	$value = str_replace("'", "\'", $value);
	
	
	if (($key=="contact_email") AND ($value=="")) $value=$_POST['email'];
  
		$s="$".$key." = "."'{$value}';\n";
		$s2="$".$key." = \"".config($value)."\";\n";


	$text.=$s; 
	$text2.=$s2;
}
if ($_POST['price_old_select']=='1') 		{$text.="$"."price_old = floor(($"."price_new/(100-$"."skidka))*100);\n"; $text2.="$"."price_old = floor(($"."price_new/(100-$"."skidka))*100);\n";}
else {$text.="$"."skidka = 100-floor(($"."price_new/$"."price_old)*100);\n"; $text2.="$"."skidka = 100-floor(($"."price_new/$"."price_old)*100);\n";}
if ($_FILES["upsel_pic"]["name"]!=""){
$text.="$"."upsel_pic = '{$_FILES["upsel_pic"]["name"]}';\n"; 
$text2.="$"."upsel_pic = '{$_FILES["upsel_pic"]["name"]}';\n";
}

//$footer.='$os=getOS($_SERVER[\'HTTP_USER_AGENT\']);'."\n";
$footer.="\n/* ".str_repeat("* ", 22)."\n";
$footer.=" * ".str_pad($create, 41, " ", STR_PAD_BOTH)." *\n";
$footer.=" * ".str_pad($power1, 41, " ", STR_PAD_BOTH)." *\n";
$footer.=" * ".str_pad($power2, 41, " ", STR_PAD_BOTH)." *\n";
$footer.=" ".str_repeat("* ", 22)."*/\n\n";
$text.="{$footer}?>\n";
$sender=config($_POST['sender']);
$text2.="$"."header=\"Content-type: text/html;charset=utf-8\\"."r\\"."nFrom: "."{"."$"."sender"."}"."\\"."r\\"."n\";\n";
$text2.="\n{$footer}\n?>\n";
fwrite($fp1, $text);
fwrite($fp2, $text2);
flock($fp1, LOCK_UN); // Снятие блокировки
flock($fp2, LOCK_UN); // Снятие блокировки
fclose($fp1);
fclose($fp2);
unlink('value.php');
rename("value1.php", "value.php");
$suces_url="Location: options.php?save=1#".$_POST['button_ref'];
header($suces_url);
?>
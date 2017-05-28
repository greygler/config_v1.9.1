<? 
function config($str)
	{
		include("value.php");
			$str = str_replace('"', '\"', $str);
			$str = str_replace("%product%", '{$product}', $str);
			$str = str_replace("%valuta%", '{$valuta}', $str);
			$str = str_replace("%price_new%", '{$price_new}', $str);
			$str = str_replace("%price_old%", '{$price_old}', $str);
			$str = str_replace("%skidka%", '{$skidka}', $str);
			$str = str_replace("%sender%", '{sender}', $str);
			$str = str_replace("%date%", "\"."."date('m.d.Y H:i:s')".".\"", $str);
			$str = str_replace("%ip%", "{".'$remote_addr'."}", $str);
			$str = str_replace("%host%", "{".'$_SERVER[\'HTTP_HOST\']'."}", $str);
			$str = str_replace("%lang%", "{".'$_SERVER[\'HTTP_ACCEPT_LANGUAGE\']'."}", $str);
			$str = str_replace("%agent%", "{".'$user_agent'."}", $str);
			$str = str_replace("%device%", '{$device}', $str);
			$str = str_replace("%os%", '{$os}', $str);
			$str = str_replace("%country_code%", '{$country_code}', $str);
			$str = str_replace("%browser%", '{$browser}', $str);
			$str = str_replace("%refer%", "{".'$_SESSION[\'referer\']'."}", $str);
			$str = str_replace("%comment%", '{$comment}', $str);
			$str = str_replace("%utm%", '{$utm}', $str);
			$str = str_replace("%city%", '{$_POST[\'city\']}', $str);
			$str = str_replace("%utm_campaign%", "{".'$_SESSION[\'utms\'][\'utm_campaign\']'."}", $str);
			$str = str_replace("%utm_source%", "{".'$_SESSION[\'utms\'][\'utm_source\']'."}", $str);
			$str = str_replace("%utm_medium%", "{".'$_SESSION[\'utms\'][\'utm_medium\']'."}", $str);
			$str = str_replace("%utm_content%", "{".'$_SESSION[\'utms\'][\'utm_content\']'."}", $str);
			$str = str_replace("%utm_term%", "{".'$_SESSION[\'utms\'][\'utm_term\']'."}", $str);
			return $str;
	}
?>
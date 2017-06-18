<?php
/* * * * * * * * * * * * * * * * * * * * * * * 
 *  Configuration v.1.9.1 for LandingPage:   *
 *               confugurator                *
 *   Last edition by 18.06.2017, 11:28:21    *
 * * * * * * * * * * * * * * * * * * * * * * */

session_start();
require_once("config/class/functions.class.php");
$remote_addr=Config::GetRealIp();
$country_code = Config::tabgeo_country_v4($remote_addr);
if ($remote_addr=="127.0.0.1") $remote_addr="localhost";
if (stripos($_SERVER['PHP_SELF'], "index"))
	{
		foreach($_GET as $key => $value) $_SESSION['utms'][$key] = $value;
		if ($_SERVER['HTTP_REFERER']!="") $_SESSION['referer']=$_SERVER['HTTP_REFERER'];
		else $_SESSION['referer']="Не определен.";}
else 
	if (isset($_SESSION['utms'])) foreach ($_SESSION['utms'] as $key => $value) $utm.="<tr><td><b>".str_pad($key, 14, " ", STR_PAD_RIGHT)."</b> </td><td> {$value}</td></tr>\n";

if (Config::is_mobile()) $device="Мобильный"; else $device="Стационарный";
$user_agent=$_SERVER['HTTP_USER_AGENT'];
$browser=Config::user_browser($user_agent);
$os=Config::getOS($user_agent);

$valuta = "грн.";
$price_new = "599";
$price_old_select = "1";
$skidka = "53";
$mask_phone = "_ua";
$head_index64 = "";
$head_thanks64 = "";
$body_index64 = "";
$body_thanks64 = "";
$product = "Наименование продукта";
$email = "Ваш_email";
$sender = "Наименование продукта <noreply@confugurator>";
$subject = "Заказ товара - Наименование продукта";
$comment = "";
$message64 = "";
$seller = "ООО «Рога и копыта»,  ОГРН 458788856458";
$seller_adress = "г. Мухосральск, ул. Веселых Тараканов,  д. 11 ";
$contact_phone1 = "Телефон1";
$contact_phone2 = "Телефон2";
$contact_phone3 = "Телефон3";
$contact_email = "Контактный e-mail";
$script = "1";
$country_script = "UA";
$auditoria = "w";
$title = "Ваш товар";
$tovar = "1";
$vsego = "10";
$delay2 = "10";
$delay1 = "30";
$modal = "1";
$modal_title = "Понравилось это предложение?";
$modal_text = "Мы расскажем Вам все об Название Вашего товара, предложим наилучшие условия и ознакомим с подходящими акционными предложениями!";
$modal_text2 = "Оператор перезвонит Вам через 15-30 минут.";
$button = "ПЕРЕЗВОНИТЬ МНЕ";
$modal_delay = "30";
$upsel = "0";
$product_id_crm = "42";
$key_crm = "9ef4d26ea5e96179a98c8d8502cb4c34";
$crm = "testcrm";
$country_crm = "UA";
$office_crm = "1";
$delivery_crm = "1";
$payment_crm = "4";
$price_old = floor(($price_new/(100-$skidka))*100);
$header="Content-type: text/html;charset=utf-8\r\nFrom: {$sender}\r\n";


/* * * * * * * * * * * * * * * * * * * * * * * 
 *           Created by ConfigLand           *
 *          Powered by Igor Sayutin          *
 *          http://it-senior.pp.ua           *
 * * * * * * * * * * * * * * * * * * * * * * */


?>

<?
/* * * * * * * * * * * * * * * * * * * * * * * 
 *      Configuration for LandingPage:       *
 *   Last edition by 22.09.2016, 09:55:44    *
 * * * * * * * * * * * * * * * * * * * * * * */

$valuta = 'грн';
$price_new = '0';
$skidka = '0';
$product = 'Продукт';
$email = "";
$email_sender = "{$product} <noreply@{$_SERVER['HTTP_HOST']}";
$email_subject = "Заказ товара - {$product}";
$email_message = "текст";
$key = '';
$crm = '';
$product_id = '';
$comment = '';
$price_old = floor(($price_new/(100-$skidka))*100);

/* * * * * * * * * * * * * * * * * * * * * * * 
 *           Created by ConfigLand           *
 *          Powered by Igor Sayutin          *
 *          http://it-senior.pp.ua           *
 * * * * * * * * * * * * * * * * * * * * * * */

?>

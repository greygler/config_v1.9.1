<?php
/* * * * * * * * * * * * * * * * * * * * * * * 
 *  Configuration v.1.9.1 for LandingPage:   *
 *               confugurator                *
 *   Last edition by 28.05.2017, 01:29:22    *
 * * * * * * * * * * * * * * * * * * * * * * */

$valuta = 'грн.';
$price_new = '599';
$price_old_select = '1';
$skidka = '53';
$mask_phone = '_ua';
$head_index = '';
$head_thanks = '';
$body_index = '';
$body_thanks = '';
$product = 'Наименование продукта';
$email = 'Ваш_email';
$sender = '%product% <noreply@%host%>';
$subject = 'Заказ товара - %product%';
$comment = '';
$message = '<table border="0"><td colspan="2" height="40" ><p align="center"><i>Информация о покупателе:</i></td></tr><tr><td><b>IP покупателя:</b></td><td>%ip%</td></tr><tr><td><b>Страна (по IP):</b></td><td> %country_code%</td></tr>
<tr><td><b>Город (по IP):</b></td><td> %city%</td></tr><tr><td><b>Установленный язык:</b> </td><td>%lang%</td></tr><tr><td><b>Браузер: </b> </td><td>%browser%</td></tr><tr><td><b>Устройство:</b></td><td>%device%</td></tr><tr><td><b>ОС:</b></td><td>%os%</td></tr><tr><td><b>Реферер:</b></td><td>%refer%</td></tr><tr><td colspan="2"><p align="center"><b>UTM-метки: </b></p> </tr>%utm%</tr><tr><td><b>Комментарий к заказу:  </b></td><td><p>%comment%</p></td></tr></table>
';
$seller = 'ООО «Рога и копыта»,  ОГРН 458788856458';
$seller_adress = 'г. Мухосральск, ул. Веселых Тараканов,  д. 11 ';
$contact_phone1 = 'Телефон1';
$contact_phone2 = 'Телефон2';
$contact_phone3 = 'Телефон3';
$contact_email = 'Контактный e-mail';
$script = '1';
$country_script = 'UA';
$auditoria = 'w';
$title = 'Ваш товар';
$tovar = '1';
$vsego = '10';
$delay2 = '10';
$delay1 = '30';
$modal = '1';
$modal_title = 'Понравилось это предложение?';
$modal_text = 'Мы расскажем Вам все об Название Вашего товара, предложим наилучшие условия и ознакомим с подходящими акционными предложениями!';
$modal_text2 = 'Оператор перезвонит Вам через 15-30 минут.';
$button = 'ПЕРЕЗВОНИТЬ МНЕ';
$modal_delay = '30';
$upsel = '0';
$product_id_crm = '42';
$key_crm = '9ef4d26ea5e96179a98c8d8502cb4c34';
$crm = 'testcrm';
$country_crm = 'UA';
$office_crm = '1';
$delivery_crm = '1';
$payment_crm = '4';
$price_old = floor(($price_new/(100-$skidka))*100);

/* * * * * * * * * * * * * * * * * * * * * * * 
 *           Created by ConfigLand           *
 *          Powered by Igor Sayutin          *
 *          http://it-senior.pp.ua           *
 * * * * * * * * * * * * * * * * * * * * * * */

?>
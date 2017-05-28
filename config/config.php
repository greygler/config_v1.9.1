<? 
$filename = "value.php";

if (file_exists($filename)) include ($filename);
 ?>

 <script type="text/javascript" src="js/script_form.js"></script>
<fieldset>
    <legend><h2>&#160;<i class="fa fa-money"></i>&#160;Ценообразование:&#160; </h2></legend>
	<label for="valuta">Валюта: <span></span> <em>*</em></label><input required id="valuta" type="text" name="valuta" value="<?= $valuta; ?>" placeholder="Валюта для цены - грн, руб, и т.д. Размещается во всех местах ленда">
	 <label for="price_new">Новая цена: <span></span> <em>*</em></label><input required id="price_new" type="text" name="price_new" value="<?=  $price_new ?>" placeholder="Новая цена. Размещается во всех местах ленда">
	  <label for="price_old_select">Установка старой цены: </label>
	  <select id="price_old_select" name="price_old_select" onchange="price_old_select_func(); return true;">
 
    <option <? if ($price_old_select==1) echo "selected"; ?> value="1">Считать автоматически, по скидке</option>
    <option <? if ($price_old_select==0) echo "selected"; ?> value="0">Задать старую цену вручную</option>
      </select>
	 
	 <label for="skidka">Скидка, %: <span>(%skidka%)</span> <em>*</em></label><input  <? if ($price_old_select!='1') echo ("disabled") ?> required id="skidka" type="text" name="skidka" value="<?=  $skidka ?>" placeholder="Скидка. Старая цена будет считаться автоматически">
	
	
	<label for="price_old">Cтарая цена: <span></span> <em>*</em></label><input  <?if ($price_old_select!='0') echo ("disabled") ?> required id="price_old" type="text" name="price_old" value="<?=  $price_old ?>" placeholder="Старая цена. Размещается во всех местах ленда">
	 
	 <!--	 Дополнительная переменная в разделе ЦЕНООБРАЗОВАНИЕ -->

	  
	 
	
  </fieldset>
  <fieldset>
  <? $mask_no="Маска номера: "; ?>
    <legend><h2>&#160;<i class="fa fa-phone"></i>&#160;Маска номера покупателя:&#160; </h2></legend>
	  <label for="mask_phone">Маска номера покупателя: </label>
	  <select id="mask_phone" name="mask_phone" >
		<option <? if ($mask_phone=="-") echo "selected"; ?> value="-">Отключено</option>
		<option <? if ($mask_phone=="_ru") echo "selected"; ?> value="_ru"><?= $mask_no; ?>+7 (___) ___-__-__</option>
		<option <? if ($mask_phone=="_ru8") echo "selected"; ?> value="_ru8"><?= $mask_no; ?>8 (___) ___-__-__</option>
		<option <? if ($mask_phone=="_ua") echo "selected"; ?> value="_ua"><?= $mask_no; ?>+38 (0__) ___-__-__</option>
		<option <? if ($mask_phone=="_by") echo "selected"; ?> value="_by"><?= $mask_no; ?>+37 (5__) ___-__-__</option>
      </select>
  </fieldset>
  <fieldset>
  <legend><h2>&#160;<i class="fa fa-code"></i>&#160;Коды:&#160;</h2></legend>
	 <label for="head_index">Блок head для Index:<span><br>Код для размещения в тегах<br><strong>&#8249;head&#8250; Ваш код &#8249;&#47;head&#8250;</strong><br>индексной страницы<br>Здесь размещают пиксели, META-теги, ссылки на JS для аналитики и пр.</span></label><textarea rows="5" id="head_index" name="head_index" cols="70"><?= str_replace("<br />", "\n", $head_index); ?></textarea></p>
	 <label for="head_thanks">Блок head для Thanks: <span><br>Код для размещения в тегах<br><strong>&#8249;head&#8250; Ваш код &#8249;&#47;head&#8250;</strong><br>страницы "Спасибо"<br>Здесь размещают пиксели, META-теги, ссылки на JS для аналитики и пр.</span></label><textarea rows="5" id="head_thanks" name="head_thanks" cols="70"><?= str_replace("<br />", "\n", $head_thanks); ?></textarea></p>
	 <label for="body_index">Блок body для Index: <span><br>Код для размещения в тегах<br><strong>&#8249;body&#8250; Ваш код &#8249;&#47;body&#8250;</strong><br>индексной страницы<br>Здесь можно разместить код ретаргетинга, счетчиков Яндекс, Вконтакте, Mail-ru, Google-аналитику</span></label><textarea rows="5" id="body_index" name="body_index" cols="70"><?= str_replace("<br />", "\n", $body_index); ?></textarea></p>
	 <label for="body">Блок body для Thanks: <span><br>Код для размещения в тегах<br><strong>&#8249;body&#8250; Ваш код &#8249;&#47;body&#8250;</strong><br>страницы "Спасибо"<br>Здесь можно разместить код ретаргетинга, счетчиков Яндекс, Вконтакте, Mail-ru, Google-аналитику</span></label><textarea rows="5" id="body_thanks" name="body_thanks" cols="70"><?= str_replace("<br />", "\n", $body_thanks); ?></textarea></p>
	 
	  <!--	 Дополнительная переменная в разделе КОДЫ -->
	  </fieldset> 
	  <fieldset>
	 <legend><h2>&#160;<i class="fa fa-envelope"></i>&#160;Отправка информации о покупке:&#160;</h2></legend> 
	 <label for="product">Название: <span>(%product%)</span> <em>*</em></label><input required id="product" type="text" name="product" value="<?=  $product ?>" placeholder="Наименование продукта, которое будет указано в заголовке и тексте письма">
     <label for="email">E-mail: <em>*</em></label><input required id="email" type="text" name="email" value="<?=  $email ?>" placeholder="E-mail, на который будут приходить уведомления о покупке.">
	 <label for="sender">Отправитель: <span>(%sender%)</span> <em>*</em></label><input required id="sender" type="text" name="sender" value="<?=  str_replace("<br />", "\n", $sender) ?>" placeholder="Имя и адрес отправителя, от которого будут приходить уведомления о покупке.">
	 	 
	 <label for="subject">Заголовок письма: <em>*</em></label><input required id="subject" type="text" name="subject" value="<?=  $subject ?>" placeholder="Заголовок письма, которое будет уведомлять Вас о покупке.">
	 
	 
    <label for="comment">Комментарий: <span><br>(%comment%), Комментарий к заказу, который автоматически добавится в письмо о покупке<br>А также добавлен в Вашу СРМ систему, (Если ленд подключен) </span></label><textarea rows="5" id="comment" name="comment" cols="70"><?= str_replace("<br />", "\n", $comment); ?></textarea></p>
	
	<label for="message">Текст письма: <span><br>Текст письма, который будет добавлен к оповещению о покупателе.<br>Может содержать дополнительные переменные.<br><strong>Инструкция в документации</strong></label><textarea rows="5" id="message" name="message" cols="70"><?= str_replace("<br />", "\n", $message); ?></textarea></p>
	 <!--	 Дополнительная переменная в разделе Отправка информации о покупке -->
  </fieldset> 
  
  <fieldset>
	 <legend><h2>&#160;<i class="fa fa-info-circle"></i>&#160;Информация о продавце :&#160;</h2></legend> 
	 
	  <label for="seller">Продавец: </label><input id="seller" type="text" name="seller" value="<?=  $seller ?>" placeholder="Информация о продавце, ИНН, ОГРН и пр. ">
	<label for="seller_adress">Адрес продавца: </label><input id="seller_adress" type="text" name="seller_adress" value="<?=  $seller_adress ?>" placeholder="Адрес продавца (опционально)">
	 <label for="contact_phone1">Контактный телефон 1: </label><input id="contact_phone1" type="text" name="contact_phone1" value="<?=  $contact_phone1 ?>" placeholder="Контактный телефон продавца 1">
	 <label for="contact_phone2">Контактный телефон 2: </label><input id="contact_phone2" type="text" name="contact_phone2" value="<?=  $contact_phone2 ?>" placeholder="Контактный телефон продавца 2">
	 <label for="contact_phone3">Контактный телефон 3: </label><input id="contact_phone3" type="text" name="contact_phone3" value="<?=  $contact_phone3 ?>" placeholder="Контактный телефон продавца 3">
	 <label for="contact_email">Контактный E-mail:<br><span>Оставьте поле пустым, если контактный Е-mail совпадает с Е-mail для отправки собщений</span> </label><input id="contact_email" type="text" name="contact_email" value="<?=  $contact_email ?>" placeholder="Контактный E-mail продавца"></p>
	
   
  </fieldset> 
  
    <fieldset>
	 <legend><h2>&#160;<i class="fa fa-line-chart"></i>&#160;Скрипт повышения конверсии :&#160;</h2></legend> 
<small>Скрипт, генерирующий всплывающие окна с информацией о покупателях на сайте</small></p>

	  <label for="script">Активность: </label>
	  <select id="script" name="script" onchange="script1(); return true;">
 
    <option <? if ($script==1) echo "selected"; ?> value="1">Включено</option>
    <option <? if ($script==0) echo "selected"; ?> value="0">Выключено</option>
      </select>
	  <br>
	
	
	  
	  <label for="country_script">Страна: </label>
	  <select  <?if ($script!='1') echo ("disabled") ?>  id="country_script" name="country_script">
    <option <? if (($country_script=="") OR ($country_script=="auto")) echo "selected"; ?> value="auto">Авто (по IP посетителя)</option>
    <option <? if ($country_script=="RU") echo "selected"; ?> value="RU">Россия</option>
    <option <? if ($country_script=="UA") echo "selected"; ?> value="UA">Украина</option>
      </select>
	 <br>
	
	 <label   <?if ($script!='1') echo ("disabled") ?>  for="auditoria">Аудитория: </label>
	  <select <?if ($script!='1') echo ("disabled") ?> id="auditoria" name="auditoria">
    <option <? if (($auditoria=="") OR ($auditoria=="all")) echo "selected"; ?> value="all">Смешанная</option>
    <option <? if ($auditoria=="m") echo "selected"; ?> value="m">Мужчины</option>
    <option <? if ($auditoria=="w") echo "selected"; ?> value="w">Женщины</option>
      </select>
	
	 <br>
	
	<label for="title">Наименование: </label><input id="title" <?if ($script!='1') echo ("disabled") ?> type="text" name="title" value="<?
if ($title=="") echo $product; else echo $title;	  ?>" placeholder="Наименование продукта во всплывающем окне">

<label for="tovar">Колличество шт в покупке: </label><input <?if ($script!='1') echo ("disabled") ?> id="tovar" type="text" name="tovar" value="<?
if ($tovar=="") echo "1"; else echo $tovar;	  ?>" placeholder="Максимaльное количество шт товара в покупке">

<label for="vsego">Колличество окон: </label><input id="vsego" <?if ($script!='1') echo ("disabled") ?> type="text" name="vsego" value="<?
if ($vsego=="") echo "10"; else echo $vsego;	  ?>" placeholder="Количество сгенерированных покупателей">
<label for="delay2">Задержка в секундах перед первым показом: </label><input id="delay2" <?if ($script!='1') echo ("disabled") ?> type="text" name="delay2" value="<? if ($delay2=="") echo "10"; else echo $delay2;	  ?>" placeholder="задержка в секундах перед показом первого уведомления">
<label for="delay1">Задержка в сeкундах между показами: </label><input  <?if ($script!='1') echo ("disabled") ?> id="delay1" type="text" name="delay1" value="<? if ($delay1=="") echo "30"; else echo $delay1;	  ?>" placeholder="Задержка в секундах между показами уведомлений">

</p>
  
  </fieldset> 
  
  
   <fieldset>
	 <legend><h2>&#160;<i class="fa fa-check-square"></i>&#160;Скрипт "Перезвоните мне" :&#160;</h2></legend> 
<small>Скрипт призыва к действию - оставить посетителю свой телефон и имя</small></p>

	  <label for="modal">Активность: </label>
	  <select id="modal" name="modal" onchange="script2(); return true;">
 
    <option <? if ($modal==1) echo "selected"; ?> value="1">Включено</option>
    <option <? if ($modal==0) echo "selected"; ?> value="0">Выключено</option>
      </select>
	  <br>
	
	
	  
	  
	
	<label for="modal_title">Заголовок окна: </label><input id="modal_title" <?if ($modal!='1') echo ("disabled") ?> type="text" name="modal_title" value="<?
if ($modal_title=="") echo "Понравилось это предложение?"; else echo $modal_title;	  ?>" placeholder="Заголовок окна">

<label for="modal_text">Текст окна: </label><input <?if ($modal!='1') echo ("disabled") ?> id="modal_text" type="text" name="modal_text" value="<?
if ($modal_text=="") echo "Мы расскажем Вам все об {$product}, предложим наилучшие условия и ознакомим с подходящими акционными предложениями!"; else echo $modal_text;	  ?>" placeholder="Текст окна">
<label for="modal_text2">Подпись окна: </label><input <?if ($modal!='1') echo ("disabled") ?> id="modal_text2" type="text" name="modal_text2" value="<?
if ($modal_text2=="") echo "Оператор перезвонит Вам через 15-30 минут."; else echo $modal_text2;	  ?>" placeholder="Подпись окна">

<label for="button">Призыв к действию: </label><input id="button" <?if ($modal!='1') echo ("disabled") ?> type="text" name="button" value="<?
if ($button=="") echo "ПЕРЕЗВОНИТЬ МНЕ"; else echo $button;	  ?>" placeholder="Кнопка призыва к действию">

<label for="modal_delay">Задержка в секундах перед показом: </label><input id="modal_delay" <?if ($modal!='1') echo ("disabled") ?> type="text" name="modal_delay" value="<? if ($modal_delay=="") echo "30"; else echo $modal_delay;	  ?>" placeholder="задержка в секундах перед первым показом">


</p>
  
  </fieldset> 
  
  
  
  <fieldset>
	 <legend><h2>&#160;<i class="fa fa-cart-plus"></i>&#160;Допродажа на странице "СПАСИБО." :&#160;</h2></legend> 
<small>Допродажа, с возможностью переадресации на сайт с допродажей</small></p>

	  <label for="upsel">Активность: </label>
	  <select id="upsel" name="upsel" onchange="script3(); return true;">
 
    <option <? if ($upsel==1) echo "selected"; ?> value="1">Включено</option>
    <option <? if ($upsel==0) echo "selected"; ?> value="0">Выключено</option>
      </select>
	  <br>
	
	<label for="upsel_title">Заголовок допродажи: </label><input id="upsel_title" <? if ($upsel!='1') echo ("disabled") ?> type="text" name="upsel_title" value="<? if ($upsel_title=="") echo "C {$product} обычно покупают"; else echo $upsel_title;	  ?>" placeholder="Заголовок допродажи">
	
	<label <? if ($upsel!='1') echo ("disabled") ?> for="upsel_dir">Каталог для размещения: </label>
	  <select id="upsel_dir" name="upsel_dir" <? if ($upsel!='1') echo ("disabled") ?> >
	
<?	
$dir = ".."; $dh  = opendir($dir); while (false !== ($filename = readdir($dh))) { $files[] = $filename; } sort($files); 
foreach ($files as $key => $value) if ((is_dir ( $value )) AND ($value!=".")  AND ($value!="..")) echo ("<option value=\"{$value}\">{$value}</option>");
?>

 </select>
 <label for="upsel_pic">Картинка: </label>
 <input id="upsel_pic" <? if ($upsel!='1') echo ("disabled") ?> type="file" name="upsel_pic" accept="image/*" size="20" <? if ($upsel_pic=="") echo ("required") ?> >
 <? if (($upsel_pic!="") AND ($upsel_dir!="")) {echo ("<p id=\"upsel_pic_p\" ");  if ($upsel!='1') echo ("disabled"); echo(">Выбранная картинка:<br><img width=\"100\" src=\"../{$upsel_dir}/{$upsel_pic}\"></p>\n<input type=\"hidden\" name=\"upsel_pic\" value=\"{$upsel_pic}\"><br>" ); } ?>

 <label for="upsel_pic_h">Высота картинки: </label><input <?if ($upsel!='1') echo ("disabled") ?> id="upsel_pic_h" type="text" name="upsel_pic_h" value="<? if ($upsel_pic_h=="") echo "150"; else echo $upsel_pic_h;	  ?>" placeholder="Высота картинки">
 
<label for="upsel_url">Ссылка на сайт допродажи: </label><input <?if ($upsel!='1') echo ("disabled") ?> id="upsel_url" type="text" name="upsel_url" value="<?=$upsel_url; ?>" placeholder="Ссылка на сайт допродажи. Если ссылка не нужна - оставьте поле пустым">

<label for="upsel_url_title">Подпись ccылки: </label><input required <?if ($upsel!='1') echo ("disabled") ?> id="upsel_url_title" type="text" name="upsel_url_title" value="<? if (($upsel_url=="") AND ($upsel_url_title=="")) echo "Заказывайте у менеджера при звонке"; else echo $upsel_url_title;	  ?>" placeholder="Подпись ccылки на сайт с допродажей">

<label for="upsel_delay">Задержка в секундах переадресации: </label><input id="upsel_delay" <?if ($upsel!='1') echo ("disabled") ?> type="text" name="upsel_delay" value="<? if ($upsel_delay!="") echo $upsel_delay;	  ?>" placeholder="Задержка в секундах переадресации на сайт допродажи. Пусто - отключено">


</p>
  
  </fieldset> 
  
  <fieldset>
	 <legend id="idcrm"><h2>&#160;<i class="fa fa-connectdevelop"></i>&#160;Отправка информации в LP-СRМ:&#160;</h2></legend> 
	 
	 <? if ($key_crm=="") { ?>
	  <label for="product_id_crm">Продукт: </label><input disabled id="product_id_crm" type="text" name="product_id_crm" value="<?=  $product_id_crm ?>" placeholder="Будет доступен после ввода Ключа доступа и учетной записи. Нажмите ОБНОВИТЬ">
	 <? } else { 
		$data = array(
		'key' => $key_crm, //Ваш секретный токен 
		);
		 
		// запрос
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, 'http://'.$crm.'.lp-crm.biz/api/getProducts.html');
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
		$out = curl_exec($curl);
		curl_close($curl);
		//$out – ответ сервера
	    $jout=json_decode($out, true);
		if ($jout['status']=='error') echo ('<label for="product_id_crm">Ошибка: </label><input disabled id="product_id_crm" type="text" name="product_id_crm" value="" placeholder="'.$jout['message'].'">');
		else {
	 ?>
	  <label for="product_id_crm">Продукт: </label>
	  <select id="product_id_crm" name="product_id_crm">
	  <? foreach ( $jout['data'] as $key => $value) {
		  echo ('<option ');
		  if ($product_id_crm==$value['id']) echo "selected "; 
		  echo('value="'.$value['id'].'">'.$value['name'].'</option>'."\n"); 
	  } ?>
      </select>
	 <? } } ?>
	
	 <label for="key_crm">Ключ доступа: </label><input id="key_crm" type="text" name="key_crm" value="<?=  $key_crm ?>" placeholder="Ключ доступа к Вашей LP_CRM-системе.">
	 <label for="crm">Учетная запись LP-СRМ: </label><input id="crm" type="text" name="crm" value="<?=  $crm ?>" placeholder="Учетная запись Вашей LP-СRМ - ВАША_УЧЕТНАЯ_ЗАПИСЬ.lp-crm.biz.">
	 <label for="country_crm">Страна: </label>
	  <select id="country_crm" name="country_crm">
    <option <? if (($country_crm=="") OR ($country_script=="auto")) echo "selected"; ?> value="auto">Авто (по IP посетителя)</option>
    <option <? if ($country_crm=="RU") echo "selected"; ?> value="RU">Россия</option>
    <option <? if ($country_crm=="UA") echo "selected"; ?> value="UA">Украина</option>
      </select>
	  <label for="office_crm">Офис: </label><input id="office_crm" type="text" name="office_crm" value="<?=  $office_crm ?>" placeholder="ID офиса  (Можно оставить пустым)">
	   <label for="delivery_crm">Способ доставки: </label><input id="delivery_crm" type="text" name="delivery_crm" value="<?=  $delivery_crm ?>" placeholder="ID способа доставки  (Можно оставить пустым)">
	   <label for="payment_crm">Способ оплаты: </label><input id="payment_crm" type="text" name="payment_crm" value="<?=  $payment_crm ?>" placeholder="ID способа оплаты  (Можно оставить пустым)"> 
	<button  class="button25" type="submit" value="idcrm" name="button_ref"><i class="fa fa-refresh fa-spin fa-lg fa-fw"></i> Обновить</button>
	 <br>
    
  </fieldset> 
  <div style="font-size:10px; float: right;">&copy; Igor Sayutin, <a href="http://it-senior.pp.ua">http://it-senior.pp.ua</a> 2015-<?= date("Y") ?></div>
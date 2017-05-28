<?php 
include('config.php');
$name = stripslashes(htmlspecialchars($_POST['name']));
$phone = stripslashes(htmlspecialchars($_POST['phone']));

if(empty($phone)){
echo '<h1 style="color:red;">Пожалуйста заполните все поля</h1>';
echo '<meta http-equiv="refresh" content="2; url=http://'.$_SERVER['SERVER_NAME'].'">';
}
else{
	
	if ($key_crm!="") {
// формируем массив с товарами в заказе (если товар один - оставляйте только первый элемент массива)
$products_list = array(
    1 => array( 
            'product_id' => $product_id_crm,    //код товара (из каталога CRM)
            'price'      => $price_new, //цена товара 1
            'count'      => '1'                      //количество товара 1
    ),  
    
);
$products_crm = urlencode(serialize($products_list));
 if ($country_crm=="auto")  $country_crm = Config::tabgeo_country_v4($ip);
// параметры запроса
$data = array(
    'key'             => $key_crm, //Ваш секретный токен
    'order_id'        => number_format(round(microtime(true)*10),0,'.',''), //идентификатор (код) заказа (*автоматически*)
    'country'         => $country_crm,                      // Географическое направление заказа
    'office'          => $office_crm,                   // Офис (id в CRM)
    'products'        => $products_crm,                 // массив с товарами в заказе
    'bayer_name'      => $name,             // покупатель (Ф.И.О)
    'phone'           => $phone,           // телефон
    'email'           => $_GET['email'],           // электронка
    'comment'         => $comment,    // комментарий
    'site'            => $_SERVER['SERVER_NAME'],  // сайт отправляющий запрос
    'ip'              => $_SERVER['REMOTE_ADDR'],  // IP адрес покупателя
    'delivery'        => $delivery_crm,        // способ доставки (id в CRM)
    'delivery_adress' => "г. ".$_POST['city'], // адрес доставки
    'payment'         => $payment_crm,          // вариант оплаты (id в CRM)
    'utm_source'      => $_SESSION['utms']['utm_source'],  // utm_source 
    'utm_medium'      => $_SESSION['utms']['utm_medium'],  // utm_medium 
    'utm_term'        => $_SESSION['utms']['utm_term'],    // utm_term   
    'utm_content'     => $_SESSION['utms']['utm_content'], // utm_content    
    'utm_campaign'    => $_SESSION['utms']['utm_campaign'] // utm_campaign
);
 
// запрос
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'http://'.$crm.'.lp-crm.biz/api/addNewOrder.html');
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
$out = curl_exec($curl);
curl_close($curl);
//$out – ответ сервера в формате JSON	
$jout=json_decode($out); $m1=$jout -> status; foreach($jout ->message as $val) { $m2=$m2.$val; } $mess="<tr><td ><b>Ответ LP-СРМ:</b></td><td> {$m1},</td></tr><tr>\n<td><br>Сообщение LP-CRM: {$m2}</td></tr>";	
	}	
	
	
	
	
$success_url = 'form-ok.php?name='.$name.'&phone='.$phone.'';
$message1 = "<table border=\"0\">
<tr><td colspan=\"2\" ><b>Товар:</b><font size=\"5\" color=\"#FF0000\"> {$product}</font></td></tr><tr><td><b>Цена:&nbsp; </b></td><td >{$price_new} {$valuta}</td></tr>
<tr><td><b>Старая цена:&nbsp; </b></td><td >{$price_old} {$valuta}</td></tr>
<tr><td><b>Скидка:&nbsp; </b></td><td >{$skidka} %</td></tr>
<tr><td ><b>Покупатель:</b></td><td>{$name}</td></tr><tr><td ><b>Телефон: </b></td><td>{$phone}</td></tr><tr><td ><b>Сайт продажи:</b></td><td>{$_SERVER['HTTP_HOST']}</td></tr>
<tr><td ><b>Время: </b></td><td>".date('m.d.Y H:i:s')."</td></tr><tr></table>";
$message = $message1.$message."{$mess}";
$verify = mail($email,$subject,$message,$header);
if ($verify == 'true'){
    header('Location: '.$success_url);
    echo '<h1 style="color:green;">Поздравляем! Ваш заказ принят!</h1>';
    exit;
}
else 
    {
    echo '<h1 style="color:red;">Произошла ошибка!</h1>';
    }
}
?>

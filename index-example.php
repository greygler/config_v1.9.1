<? include ('config.php'); ?>

<head>
  <title>Конфигуратор - образец ленда</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" ></script> <!-- Если не установлен jQuery -->
<script> var ip = "<?= $remote_addr ?>";</script> <!-- Устанавливаем IP посетителя -->


<?= $head_index ?> <!-- Блок счетчиков head -->

</head>
<body>

<?= $body_index  ?> <!-- Блок счетчиков body -->

Телефоны продавца
<p><?= $contact_phone1 ?></p>
<p><?= $contact_phone2 ?></p>

<p>Доставка в г. <span class="geocity"></span> в течении 3-4 дней</p>

Новая цена <?= $price_new ?> <?= $valuta ?> <br>

Старая цена <?= $price_old ?> <?= $valuta ?> <br>

Скидка <?= $skidka ?>% <br>

<!-- Образец формы -->
 <form method="post" action="zakaz.php" class="orderformcdn" onsubmit="if(this.name.value==''){alert('Введите Ваше имя!');return false}if(this.phone.value==''){alert('Введите Ваш номер телефона!');return false}return true;">
<input class="phone" type="text" name="phone" placeholder="Телефон">
<input type="text" name="name" placeholder="Ваше имя">
 <input type="submit"  value="ЗАКАЗАТЬ"> 
</form>



<!-- Футер -->

    
        <?= $seller ?><br><?= $seller_adress ?><br><!-- Продавец -->
		E-mail: <?= $contact_email  ?> <!-- Контактный email продавца -->
		 
<? include("config/polit.php") ?>




<!-- / Политика конфиденциальности -->




<?  include ("config/footer.php"); // Дополнительная часть скриптов, ставим перед </body> ?>
</body>
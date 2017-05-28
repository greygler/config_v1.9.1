<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
  <head>
    <? include("head.php") ?>
  </head>
  <body>
  <center>
  <h1>Конфигуратор настроек v.1.9.1 для<br><?= $_SERVER['SERVER_NAME'] ?></h1>
    <form class="form" action="autoring.php" method="POST">
  <fieldset>
    <legend><h2>Авторизуйтесь: </h2></legend>
   <label for="login">Login: <em>*</em></label><input required id="login" type="text" name="login">
    <label for="password">Password: <em>*</em></label><input required id="password" type="password" name="password">
    <label for="product">Действие: <em>*</em></label><select style="width: 254px;" size="1" name="product">
	<option  selected value="config">Конфигурация</option>
	<option value="password">Сменить пароль</option>
	</select>
	<? if ($_GET['pass']==1) echo ('<p><div class="nologin">ЛОГИН ИЛИ ПАРОЛЬ НЕ ВЕРНЫЙ!<br>Попробуйте еще раз.</div>');
       if ($_GET['pass']==2) echo ('<p><div class="nologin">Вы сменили пароль!<br>Авторизуйтесь снова.</div>');
	   if ($_GET['pass']==3) echo ('<p><div class="nologin">Смена пароля не возможна!<br>Вы ввели не правильный пароль!<br>Авторизуйтесь снова.</div>');
	   ?>	
	
  </fieldset>
<p><input type="submit" value="&#10004; Авторизоваться"></p><br>
</form>
</center>
      </body>
</html>
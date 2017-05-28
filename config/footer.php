<?= $body_index  ?>
<script>
$(document).ready(function(){
<? if ($mask_phone!="-"){ ?>
$('<script src="config/js/jquery.maskedinput.js">').appendTo('head');
$('<script src="config/js/mask<?= $mask_phone ?>.js">').appendTo('head');
<? } ?>
$('<script src="config/js/geobase.js">').appendTo('head');

<? if ($head_index!=""){ ?>
('<?= $head_index ?>').appendTo('head');
<? } ?>
});

</script> 



<? 
if ($modal) { ?>
<script>
$(document).ready(function(){
$('<link href="config/css/modal.css" type="text/css" rel="stylesheet"/>').appendTo('head');

});
$(function () {
    function TemplateRefresh() {
        ModalRefresh();
    }

    $(window).resize(function () {
        TemplateRefresh();
    });
    TemplateRefresh();

    /* -----------------------------------------------------------------------------------------
     * Modal Refresh
     */
    function ModalRefresh() {
        if ($('.modal').is(':visible')) {
            var modalBlock = $('.modal:visible .modal-block'),
                width = parseInt(modalBlock.width()),
                height = parseInt(modalBlock.height());
            if ($(window).height() > height + 20) {
                modalBlock.addClass('modal-top').removeClass('margin-t-b').css('margin-top', -1 * (height / 2));
            }
            else {
                modalBlock.addClass('margin-t-b').removeClass('modal-top');
            }
            if ($(window).width() > width) {
                modalBlock.addClass('modal-left').removeClass('margin-l').css('margin-left', -1 * (width / 2));
            }
            else {
                modalBlock.addClass('margin-l').removeClass('modal-left');
            }
        }
    }


    /* -----------------------------------------------------------------------------------------
     * Modal Show
     */
    $(document).on('click', 'a[modal]', function(){
        var modalWindow = $('div#' + $(this).attr('modal'));
        if (modalWindow.length){
            modalWindow.fadeIn('fast');
            $('body').addClass('modal-show');
            ModalRefresh();
            return false;
        }
    });


    /* -----------------------------------------------------------------------------------------
     * Modal Hide
     */
    function ModalHide() {
        $('.modal:visible').fadeOut('fast', function(){
            $('body').removeClass('modal-show');
        });
    }

    $(document)
        .on('click', '.icon-close, .modal', function (event) {
            if (event.target != this)
                return false;
            else
                ModalHide();
        })
        .on('keydown', function (key) {
            if (key.keyCode == 27)
                ModalHide();
        })
        .on('click', '.modal > *', function (event) {
            event.stopPropagation();
            return true;
        })
        .on('submit', '#kmacb-form form', function () {
            var name = $('#kmacb-form form input[name=name]').val(),
                phone = $('#kmacb-form form input[name=phone]').val();
            $('form:first input[name=name]').val(name);
            $('form:first input[name=phone]').val(phone);
            $('form:first').submit();
            $('form:first input[name=name]').val('');
            $('form:first input[name=phone]').val('');
			return false;
        });


	try {
		//var kmainputs = kmacb();
		//$('#kmacb-form form').append(kmainputs);
		//$('body').append('<div id="kmacb"><a title="Перезвонить мне" href="#" modal="kmacb-form"><div class="kmacb-circle"></div><div class="kmacb-circle-fill"></div><div class="kmacb-img-circle"></div></a></div>');

		setTimeout(
			function start_kmacb() {
                $('body').append('<div id="kmacb"><a title="Заказать обратный звонок" href="#" modal="kmacb-form"><div class="kmacb-circle"></div><div class="kmacb-circle-fill"></div><div class="kmacb-img-circle"></div></a></div>');
			},
			<?= $modal_delay ?>000
		);
	}
	catch (e) {}
});
</script> 

<div id="kmacb-form" class="modal">
    <div class="modal-block">
        <div class="icon-close"></div>
        <div class="title"><?= $modal_title ?></div>
        <div class="content">
            <div class="padding">
                <p><?= $modal_text ?></p>
               <form method="POST" action="zakaz.php" onsubmit="if(this.name.value==''){alert('Введите Ваше имя');return false}if(this.phone.value==''){alert('Введите Ваш номер телефона');return false}return true;">
                    <input type="text" name="name" required placeholder="Ваше имя" />
                    <input class="phone" type="text" name="phone" required placeholder="Ваш номер телефона" /><br>
					
                    <input type="submit" value="<?= $button ?>" />
                    
                </form> 
                <p class="bold"><?= $modal_text2 ?></p>
            </div>
        </div>
    </div>
</div>
	
<? }


if ($script) {


 
//$title="Продукт";
$price=$price_new; 
//$valuta="грн";
$pol=$auditoria;// m или w, пустое значение - имена смешиваются
if (($country_script=="") OR ($country_script=="auto")) $country=$country_code; 
else $country=$country_script;

//$vsego=10;
$name_w = array("Татьяна", "Светлана", "Елена", "Алина", "Екатерина", "Дарья", "Анжела", "Кристина", "Мирослава","Валерия","Маргарита","Евгения","Александра","Виктория","Анастасия","Мария","Ольга","Карина","Ксения","Наталья","Марина","Светлана","Вера");
$surname_w = array("Смирновa","Абрамовa","Авдеевa","Блиновa","Большаковa","Волковa","Дмитриевa","Зуевa","Капустинa","Котовa","Макаровa","Моисеевa","Никоновa","Осиповa","Поповa","Русаковa","Селезнёвa","Соболевa","Трофимовa","Федотовa","Черновa","Щукинa","Репникова","Носова","Лебедьева","Журавлева","Сазонова","*******");
$surname_n = array("Кравец","Кравченко","Ковальчук","Матвиенко","Удовиченко","Мережко","Полищук","Вдовиченко","Бутенко","Дзюба","Гончарук","Кондратюк","Рубан","Лавренко","Овчаренко","Косенко","Тимченко","Сербиненко","Прокопенко","Кавун","Голуб","Маланюк","Пилипенко","Сердюк","Говоруха","Верховодько","Ткаченко","Лещенко","Собчак","Гузенко","Горобец","Воробей","Тимошенко","Романюк","Мишкевич","Винич","Бутко","Казакевич","Котвич","Клочко","Горбенко","Авдиенко","Мусиенко","Енченко","Луценко","Дудченко","Верховодько","Шульженко","Кондратенко","Гордиенко","Колодий","Мороз","Сазоненко","*******");
$name_m = array("Игорь","Владимир","Алексей","Андрей","Сергей","Вячеслав","Максим","Григорий","Георгий","Валерий","Михаил","Евгений","Александр","Виктор","Анатолий","Дмитрий","Олег","Павел","Петр","Контантин","Роман","Антон");
$surname_m = array("Смирнов","Абрамов","Авдеев","Блинов","Большаков","Волков","Дмитриев","Зуев","Капустин","Котов","Макаров","Моисеев","Никонов","Осипов","Попов","Русаков","Селезнёв","Соболев","Трофимов ","Федотов","Чернов","Щукин","Репников","*******");
$city_ua=array("Киев","Харьков","Одесса","Днепр","	Запорожье","Львов","Кривой Рог","Николаев","Мариуполь","Винница","Херсон","Чернигов","Полтава","Черкассы","Хмельницкий","Сумы","Житомир","Черновцы","Ровно","Каменское ","Крапивницкий","Ивано-Франковск","Кременчуг","Тернополь","Луцк","Белая Церковь","Никополь","Бердянск","Павлоград","Каменец-Подольский");
$city_ru=array("Москва","Санкт-Петербург","Новосибирск","Екатеринбург","Нижний Новгород","Казань","Челябинск","Омск","Самара","Ростов-на-Дону","Уфа","Красноярск","Пермь","Воронеж","Волгоград","Краснодар","Саратов","Тюмень","Тольятти","Ижевск","Барнаул","Иркутск","Ульяновск","Хабаровск","Ярославль");
if ($country=="UA") $city=$city_ua; else
if ($country=="RU") $city=$city_ru; else $city=array_merge ($city_ua, $city_ru);

if ($pol=="m") { $name=$name_m; $surname_all=array_merge($surname_m, $surname_n);} else
if ($pol=="w") { $name=$name_w; $surname_all=array_merge($surname_w, $surname_n);} else  
	{$name=array_merge($name_w, $name_m) ; $surname_all=$surname_n; }
?>



<script>
$(document).ready(function(){
$('<link rel="stylesheet" href="config/css/uved.css">').appendTo('head');

var i = 0;
function yved(){
i=1;
$('.yved:nth-child('+i+')').fadeIn(500).delay(5000).fadeOut(500);//В этой строчке в мс 500 - время анимации появления, 5000 - время задержки, 500 - время затухания уведомления соответсвенно
}
setTimeout(function(){
setInterval(
function(){
i=i+1;
if(i><?= $vsego ?>) i=1;// количество уведомлений
$('.yved:nth-child('+i+')').fadeIn(500).delay(5000).fadeOut(500);//В этой строчке в мс 500 - время анимации появления, 5000 - время задержки, 500 - время затухания уведомления соответсвенно
},30000);//25000 - задержка в мс между показами уведомлений
yved();
},10000);//10000 - задержка в мс перед показом первого уведомления
});

</script> 
	<div class="yvedw">
	<? for ($i=1; $i<=$vsego; $i++) { 
	$yved=mt_rand(1, 2); 
	if ($tovar>1) {
		$kvo=mt_rand(1, $tovar);
	$sht= "(".$kvo." шт.)";
	
	} else $kvo=1; ?>
		<div class="yved yvedf<?= $yved ?>">
			<img src="config/images/yico<?= $yved ?>.png" alt="" class="yvedi">
			<div class="yvedvt"><div class="yvedt"><?= "{$name[array_rand($name)]} {$surname_all[array_rand($surname_all)]}" ?> <br>г. <? if ($i==1) echo('<span class="geocity"></span>'); else echo $city[array_rand($city)] ?>,<br><? if ($yved==1) { ?> только что заказал(а) <?= $title ?>	<? if ($sht!=1) echo (" {$sht} ");  ?> на <?= $price*$kvo ?> <?= $valuta ?><? } else {?> оставил(а) заявку на обратный звонок<? } ?>.</div></div>
		</div>
	<? } ?>
		
	</div>	
	
	
<? } ?>
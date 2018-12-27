<?php 
function convertCurrency($amount, $from, $to){
	  $conv_id = "{$from}_{$to}";
	  $string = file_get_contents("http://free.currencyconverterapi.com/api/v3/convert?q=$conv_id&compact=ultra");
	  $json_a = json_decode($string, true);

	  return $amount * round($json_a[$conv_id], 4);
	}
	$amount = $_GET['from'];
	$from = $_GET['fromName'];
	$to = $_GET['toName'];
	// echo(convertCurrency($amount, "$from", "$to"));

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Currency conversion - Конвертация валюты - Valyuta ayirboshlash</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<style type="text/css">
		body{
			background: url("image/1.jpg");
			background-size: 100%;
			background-repeat: repeat-y;
		}
		.container{
			width: 1000px;
			margin-top: 100px;
			background: black;
			color: white;
			text-align: center;
			padding: 30px;
		}
		.currensy{
			/*width: 200px*/
		}
		tr{
			cursor: pointer;
		}
		.hidden{
			display: none;
		}
		input{
			width: 100%
		}
		#fromValue{
			cursor: pointer;
		}
		.table td, .table th{
			padding-right: 5px;
			padding-left: 5px;
		}
		.title{
			margin-bottom: 20px
		}
	</style>
</head>
<body>
	<!-- <img src="image/converter.jpg" style="height: 650px;width: 400px"> -->
	<div class="container">
		<h3 class="title">Currency conversion - Конвертация валюты</h3>
		<form action="" method="GET">
			<div class="row">
				<div class="col-md-2">
					<!-- <span id="fromValue">1</span><span id="fromVal"></span> -->
					<input type="number" id="from" name="from" value="<?=(isset($_GET['from']))?$_GET['from']:'1'?>" class="form-control">
				</div>
				<div class="col-md-3">
					<div style="list-style: none;">
						<div style="position: relative;">
							<input type="text" name="fromText" class="form-control" id="fromText" value="<?=(isset($_GET['fromText']))?$_GET['fromText']:''?>" placeholder="Check country">
							<input type="hidden" name="fromName" id="fromName" class="form-control" value="<?=(isset($_GET['fromName']))?$_GET['fromName']:''?>">
							<div id="fromTextValue" class="hidden" style="position: absolute;top: 30px;background: orange;height:200px;overflow-y: scroll;">
								<table class="table" align="center" width="90%" cellspacing="0" border="0">
								    <tbody>
								        <tr>
								            <th>Страна</th>
								            <th>Валюта</th>
								            <th>Символ</th>
								            <th>Код</th>
								        </tr>
								        <tr>
								            <th>А</th>
								            <th> </th>
								            <th> </th>
								            <th> </th>
								        </tr>
								        <tr>
								            <td>Австралия</td>
								            <td>Австралийский доллар</td>
								            <td>AUD</td>
								            <td>36</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Австрия</td>
								            <td bgcolor="#897508">Шиллинг</td>
								            <td bgcolor="#897508">ATS</td>
								            <td bgcolor="#897508">40</td>
								        </tr>
								        <tr>
								            <td>Азербайджан</td>
								            <td>Азербайджанский манат</td>
								            <td>AZM</td>
								            <td>31</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Албания</td>
								            <td bgcolor="#897508">Лек</td>
								            <td bgcolor="#897508">ALL</td>
								            <td bgcolor="#897508">8</td>
								        </tr>
								        <tr>
								            <td>Алжир</td>
								            <td>Алжирский динар</td>
								            <td>DZD</td>
								            <td>12</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Американское Самоа, Соединенные Штаты Америки, Гаити, Гуам, Панама, Пуэрто – Рико.</td>
								            <td bgcolor="#897508">Доллар США</td>
								            <td bgcolor="#897508">USD</td>
								            <td bgcolor="#897508">840</td>
								        </tr>
								        <tr>
								            <td>Ангилья, Антигуа и Барбуда, Гренада, Доминика, Монтсеррат, Сент – Винсент и Гренадины, Сент – Китс и Невис, Сент – Люсия</td>
								            <td>Восточно – карибский доллар</td>
								            <td>XCD</td>
								            <td>951</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Ангола</td>
								            <td bgcolor="#897508">Новая кванза</td>
								            <td bgcolor="#897508">AON</td>
								            <td bgcolor="#897508">24</td>
								        </tr>
								        <tr>
								            <td>Андорра</td>
								            <td>Андоррская песета</td>
								            <td>ADP</td>
								            <td>20</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Андорра, Гваделупа, Мартиника, Монако, Реюньон, Сен – Пьер и Микелон, Франция, Французская Гвиана, Французские Южные Территории</td>
								            <td bgcolor="#897508">Французский франк</td>
								            <td bgcolor="#897508">FRF</td>
								            <td bgcolor="#897508">250</td>
								        </tr>
								        <tr>
								            <td>Андорра, Испания</td>
								            <td>Испанская песета</td>
								            <td>ESP</td>
								            <td>724</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Аргентина</td>
								            <td bgcolor="#897508">Аргентинское песо</td>
								            <td bgcolor="#897508">ARS</td>
								            <td bgcolor="#897508">32</td>
								        </tr>
								        <tr>
								            <td>Армения</td>
								            <td>Армянский драм</td>
								            <td>AMD</td>
								            <td>51</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Аруба</td>
								            <td bgcolor="#897508">Арубанский гульден</td>
								            <td bgcolor="#897508">AWG</td>
								            <td bgcolor="#897508">533</td>
								        </tr>
								        <tr>
								            <td>Афганистан</td>
								            <td>Афгани</td>
								            <td>AFA</td>
								            <td>4</td>
								        </tr>
								        <tr>
								            <th>Б</th>
								            <th> </th>
								            <th> </th>
								            <th> </th>
								        </tr>
								        <tr>
								            <td>Багамские острова</td>
								            <td>Багамский доллар</td>
								            <td>BSD</td>
								            <td>44</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Бангладеш</td>
								            <td bgcolor="#897508">Така</td>
								            <td bgcolor="#897508">BDT</td>
								            <td bgcolor="#897508">50</td>
								        </tr>
								        <tr>
								            <td>Барбадос</td>
								            <td>Барбадосский доллар</td>
								            <td>BBD</td>
								            <td>52</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Бахрейн</td>
								            <td bgcolor="#897508">Бахрейнский динар</td>
								            <td bgcolor="#897508">BHD</td>
								            <td bgcolor="#897508">48</td>
								        </tr>
								        <tr>
								            <td>Беларусь</td>
								            <td>Белорусский рубль</td>
								            <td>BYB</td>
								            <td>112</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Белиз</td>
								            <td bgcolor="#897508">Белизский доллар</td>
								            <td bgcolor="#897508">BZD</td>
								            <td bgcolor="#897508">84</td>
								        </tr>
								        <tr>
								            <td>Бельгия</td>
								            <td>Бельгийский франк</td>
								            <td>BEF</td>
								            <td>56</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Бенин, Буркина – Фасо, Кот дивуар, Мали, Нигер, Сенегал, Того</td>
								            <td bgcolor="#897508">Франк КФА ВСЕАО</td>
								            <td bgcolor="#897508">XOF</td>
								            <td bgcolor="#897508">952</td>
								        </tr>
								        <tr>
								            <td>Бермудские острова</td>
								            <td>Бермудский доллар</td>
								            <td>BMD</td>
								            <td>60</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Болгария</td>
								            <td bgcolor="#897508">Лев</td>
								            <td bgcolor="#897508">BGL</td>
								            <td bgcolor="#897508">100</td>
								        </tr>
								        <tr>
								            <td>Боливия</td>
								            <td>Боливиано</td>
								            <td>BOB</td>
								            <td>68</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Ботсвана</td>
								            <td bgcolor="#897508">Пула</td>
								            <td bgcolor="#897508">BWP</td>
								            <td bgcolor="#897508">72</td>
								        </tr>
								        <tr>
								            <td>Бразилия</td>
								            <td>Бразильский реал</td>
								            <td>BRL</td>
								            <td>986</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Бруней Даруссалам</td>
								            <td bgcolor="#897508">Брунейский доллар</td>
								            <td bgcolor="#897508">BND</td>
								            <td bgcolor="#897508">96</td>
								        </tr>
								        <tr>
								            <td>Буве, остров, Норвегия, острова Свальбард (Шпицберген) и Ян Майен</td>
								            <td>Норвежская крона</td>
								            <td>NOK</td>
								            <td>578</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Бурунди</td>
								            <td bgcolor="#897508">Бурундийский франк</td>
								            <td bgcolor="#897508">BIF</td>
								            <td bgcolor="#897508">108</td>
								        </tr>
								        <tr>
								            <td>Бутан</td>
								            <td>Нгултрум</td>
								            <td>BTN</td>
								            <td>64</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Бутан</td>
								            <td bgcolor="#897508">Индийская рупия</td>
								            <td bgcolor="#897508">INR</td>
								            <td bgcolor="#897508">356</td>
								        </tr>
								        <tr>
								            <th>В</th>
								            <th> </th>
								            <th> </th>
								            <th> </th>
								        </tr>
								        <tr>
								            <td>Вануату</td>
								            <td>Вату</td>
								            <td>VUV</td>
								            <td>548</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Ватикан, Италия, Сан – Марино</td>
								            <td bgcolor="#897508">Итальянская лира</td>
								            <td bgcolor="#897508">ITL</td>
								            <td bgcolor="#897508">380</td>
								        </tr>
								        <tr>
								            <td>Венгрия</td>
								            <td>Форинт</td>
								            <td>HUF</td>
								            <td>348</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Венесуэла</td>
								            <td bgcolor="#897508">Боливар</td>
								            <td bgcolor="#897508">VEB</td>
								            <td bgcolor="#897508">862</td>
								        </tr>
								        <tr>
								            <td>Восточный Тимор</td>
								            <td>Тиморское эскудо</td>
								            <td>TPE</td>
								            <td>626</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Восточный Тимор, Индонезия</td>
								            <td bgcolor="#897508">Рупия</td>
								            <td bgcolor="#897508">IDR</td>
								            <td bgcolor="#897508">360</td>
								        </tr>
								        <tr>
								            <td>Вьетнам</td>
								            <td>Донг</td>
								            <td>VND</td>
								            <td>704</td>
								        </tr>
								        <tr>
								            <th>Г</th>
								            <th> </th>
								            <th> </th>
								            <th> </th>
								        </tr>
								        <tr>
								            <td>Габон, Камерун, Конго, Центрально – Африканская Республика, Чад, Экваториальная Гвинея, Южная Африка</td>
								            <td>Франк КФА ВЕАС</td>
								            <td>XAF</td>
								            <td>950</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Гаити</td>
								            <td bgcolor="#897508">Гурд</td>
								            <td bgcolor="#897508">HTG</td>
								            <td bgcolor="#897508">332</td>
								        </tr>
								        <tr>
								            <td>Гайана</td>
								            <td>Гайанский доллар</td>
								            <td>GYD</td>
								            <td>328</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Гамбия</td>
								            <td bgcolor="#897508">Даласи</td>
								            <td bgcolor="#897508">GMD</td>
								            <td bgcolor="#897508">270</td>
								        </tr>
								        <tr>
								            <td>Гана</td>
								            <td>Седи</td>
								            <td>GHC</td>
								            <td>288</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Гватемала</td>
								            <td bgcolor="#897508">Кетсаль</td>
								            <td bgcolor="#897508">GTQ</td>
								            <td bgcolor="#897508">320</td>
								        </tr>
								        <tr>
								            <td>Гвинея</td>
								            <td>Гвинейский франк</td>
								            <td>GNF</td>
								            <td>324</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Гвинея – Бисау</td>
								            <td bgcolor="#897508">Песо Гвинеи – Бисау</td>
								            <td bgcolor="#897508">GWP</td>
								            <td bgcolor="#897508">624</td>
								        </tr>
								        <tr>
								            <td>Германия</td>
								            <td>Немецкая марка</td>
								            <td>DEM</td>
								            <td>280</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Гибралтар</td>
								            <td bgcolor="#897508">Гибралтарский фунт</td>
								            <td bgcolor="#897508">GIP</td>
								            <td bgcolor="#897508">292</td>
								        </tr>
								        <tr>
								            <td>Гондурас</td>
								            <td>Лемпира</td>
								            <td>HNL</td>
								            <td>340</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Гонконг</td>
								            <td bgcolor="#897508">Гонконгский доллар</td>
								            <td bgcolor="#897508">HKD</td>
								            <td bgcolor="#897508">344</td>
								        </tr>
								        <tr>
								            <td>Гренландия, Фарерские острова</td>
								            <td>Датская крона</td>
								            <td>DKK</td>
								            <td>208</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Греция</td>
								            <td bgcolor="#897508">Драхма</td>
								            <td bgcolor="#897508">GRD</td>
								            <td bgcolor="#897508">300</td>
								        </tr>
								        <tr>
								            <td>Грузия</td>
								            <td>Лари</td>
								            <td>GEL</td>
								            <td>981</td>
								        </tr>
								        <tr>
								            <th>Д</th>
								            <th> </th>
								            <th> </th>
								            <th> </th>
								        </tr>
								        <tr>
								            <td>Дания</td>
								            <td>Датская крона</td>
								            <td>DKK</td>
								            <td>208</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Джибути</td>
								            <td bgcolor="#897508">Франк Джибути</td>
								            <td bgcolor="#897508">DJF</td>
								            <td bgcolor="#897508">262</td>
								        </tr>
								        <tr>
								            <td>Доминиканская Республика</td>
								            <td>Доминиканское песо</td>
								            <td>DOP</td>
								            <td>214</td>
								        </tr>
								        <tr>
								            <th>Е</th>
								            <th> </th>
								            <th> </th>
								            <th> </th>
								        </tr>
								        <tr>
								            <td>Египет</td>
								            <td>Египетский фунт</td>
								            <td>EGP</td>
								            <td>818</td>
								        </tr>
								        <tr>
								            <th>З</th>
								            <th> </th>
								            <th> </th>
								            <th> </th>
								        </tr>
								        <tr>
								            <td>Заир</td>
								            <td>Новый заир</td>
								            <td>ZRN</td>
								            <td>180</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Замбия</td>
								            <td bgcolor="#897508">Квача (замбийская)</td>
								            <td bgcolor="#897508">ZMK</td>
								            <td bgcolor="#897508">894</td>
								        </tr>
								        <tr>
								            <td>Западная Сахара</td>
								            <td>Марокканский дирхам</td>
								            <td>MAD</td>
								            <td>504</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Зимбабве</td>
								            <td bgcolor="#897508">Доллар Зимбабве</td>
								            <td bgcolor="#897508">ZWD</td>
								            <td bgcolor="#897508">716</td>
								        </tr>
								        <tr>
								            <th>И</th>
								            <th> </th>
								            <th> </th>
								            <th> </th>
								        </tr>
								        <tr>
								            <td>Индия</td>
								            <td>Индийская рупия</td>
								            <td>INR</td>
								            <td>356</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Израиль</td>
								            <td bgcolor="#897508">Шекель</td>
								            <td bgcolor="#897508">ILS</td>
								            <td bgcolor="#897508">376</td>
								        </tr>
								        <tr>
								            <td>Иордания</td>
								            <td>Иорданский динар</td>
								            <td>JOD</td>
								            <td>400</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Ирак</td>
								            <td bgcolor="#897508">Иракский динар</td>
								            <td bgcolor="#897508">IQD</td>
								            <td bgcolor="#897508">368</td>
								        </tr>
								        <tr>
								            <td>Иран</td>
								            <td>Иранский риал</td>
								            <td>IRR</td>
								            <td>364</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Ирландия</td>
								            <td bgcolor="#897508">Ирландский фунт</td>
								            <td bgcolor="#897508">IEP</td>
								            <td bgcolor="#897508">372</td>
								        </tr>
								        <tr>
								            <td>Исландия</td>
								            <td>Исландская крона</td>
								            <td>ISK</td>
								            <td>352</td>
								        </tr>
								        <tr>
								            <th>Й</th>
								            <th> </th>
								            <th> </th>
								            <th> </th>
								        </tr>
								        <tr>
								            <td>Йемен</td>
								            <td>Йеменский риал</td>
								            <td>YER</td>
								            <td>886</td>
								        </tr>
								        <tr>
								            <th>К</th>
								            <th> </th>
								            <th> </th>
								            <th> </th>
								        </tr>
								        <tr>
								            <td>Кабо – Верде</td>
								            <td>Эскудо Кабо – Верде</td>
								            <td>CVE</td>
								            <td>132</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Казахстан</td>
								            <td bgcolor="#897508">Тенге (казахский)</td>
								            <td bgcolor="#897508">KZT</td>
								            <td bgcolor="#897508">398</td>
								        </tr>
								        <tr>
								            <td>Каймановы острова</td>
								            <td>Доллар Каймановых островов</td>
								            <td>KYD</td>
								            <td>136</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Камбоджа</td>
								            <td bgcolor="#897508">Риель</td>
								            <td bgcolor="#897508">KHR</td>
								            <td bgcolor="#897508">116</td>
								        </tr>
								        <tr>
								            <td>Канада</td>
								            <td>Канадский доллар</td>
								            <td>CAD</td>
								            <td>124</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Катар</td>
								            <td bgcolor="#897508">Катарский риал</td>
								            <td bgcolor="#897508">QAR</td>
								            <td bgcolor="#897508">634</td>
								        </tr>
								        <tr>
								            <td>Кения</td>
								            <td>Кенийский шиллинг</td>
								            <td>KES</td>
								            <td>404</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Кипр</td>
								            <td bgcolor="#897508">Кипрский фунт</td>
								            <td bgcolor="#897508">CYP</td>
								            <td bgcolor="#897508">196</td>
								        </tr>
								        <tr>
								            <td>Киргизстан</td>
								            <td>Сом (киргизский)</td>
								            <td>KGS</td>
								            <td>417</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Китай</td>
								            <td bgcolor="#897508">Китайский юань</td>
								            <td bgcolor="#897508">CNY</td>
								            <td bgcolor="#897508">156</td>
								        </tr>
								        <tr>
								            <td>Колумбия</td>
								            <td>Колумбийское песо</td>
								            <td>COP</td>
								            <td>170</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Коморские острова</td>
								            <td bgcolor="#897508">Франк Коморских островов</td>
								            <td bgcolor="#897508">KMF</td>
								            <td bgcolor="#897508">174</td>
								        </tr>
								        <tr>
								            <td>Корея, демократическая народная республика</td>
								            <td>Северо – корейская вона</td>
								            <td>KPW</td>
								            <td>408</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Корея, республика</td>
								            <td bgcolor="#897508">Вона</td>
								            <td bgcolor="#897508">KRW</td>
								            <td bgcolor="#897508">410</td>
								        </tr>
								        <tr>
								            <td>Коста – Рика</td>
								            <td>Костариканский колон</td>
								            <td>CRC</td>
								            <td>188</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Куба</td>
								            <td bgcolor="#897508">Кубинское песо</td>
								            <td bgcolor="#897508">CUP</td>
								            <td bgcolor="#897508">192</td>
								        </tr>
								        <tr>
								            <td>Кувейт</td>
								            <td>Кувейтский динар</td>
								            <td>KWD</td>
								            <td>414</td>
								        </tr>
								        <tr>
								            <th>Л</th>
								            <th> </th>
								            <th> </th>
								            <th> </th>
								        </tr>
								        <tr>
								            <td>Лаос</td>
								            <td>Кип</td>
								            <td>LAK</td>
								            <td>418</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Латвия</td>
								            <td bgcolor="#897508">Латвийский лат</td>
								            <td bgcolor="#897508">LVL</td>
								            <td bgcolor="#897508">428</td>
								        </tr>
								        <tr>
								            <td>Лесото</td>
								            <td>Лоти</td>
								            <td>LSL</td>
								            <td>426</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Лесото, Намибия, Южная Африка</td>
								            <td bgcolor="#897508">Рэнд</td>
								            <td bgcolor="#897508">ZAR</td>
								            <td bgcolor="#897508">710</td>
								        </tr>
								        <tr>
								            <td>Либерия</td>
								            <td>Либерийский доллар</td>
								            <td>LRD</td>
								            <td>430</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Ливан</td>
								            <td bgcolor="#897508">Ливанский фунт</td>
								            <td bgcolor="#897508">LBP</td>
								            <td bgcolor="#897508">422</td>
								        </tr>
								        <tr>
								            <td>Ливийская Арабская Джамахирия</td>
								            <td>Ливийский динар</td>
								            <td>LYD</td>
								            <td>434</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Литва</td>
								            <td bgcolor="#897508">Литовский лит</td>
								            <td bgcolor="#897508">LTL</td>
								            <td bgcolor="#897508">440</td>
								        </tr>
								        <tr>
								            <td>Лихтенштейн</td>
								            <td>Швейцарский франк</td>
								            <td>CHF</td>
								            <td>756</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Люксембург</td>
								            <td bgcolor="#897508">Люксембургский франк</td>
								            <td bgcolor="#897508">LUF</td>
								            <td bgcolor="#897508">442</td>
								        </tr>
								        <tr>
								            <th>М</th>
								            <th> </th>
								            <th> </th>
								            <th> </th>
								        </tr>
								        <tr>
								            <td>Маврикий</td>
								            <td>Маврикийская рупия</td>
								            <td>MUR</td>
								            <td>480</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Мавритания</td>
								            <td bgcolor="#897508">Угия</td>
								            <td bgcolor="#897508">MRO</td>
								            <td bgcolor="#897508">478</td>
								        </tr>
								        <tr>
								            <td>Мадагаскар</td>
								            <td>Малагасийский франк</td>
								            <td>MGF</td>
								            <td>450</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Макао</td>
								            <td bgcolor="#897508">Патака</td>
								            <td bgcolor="#897508">MOP</td>
								            <td bgcolor="#897508">446</td>
								        </tr>
								        <tr>
								            <td>Македония</td>
								            <td>Денар</td>
								            <td>MKD</td>
								            <td>807</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Малави</td>
								            <td bgcolor="#897508">Квача (малавийская)</td>
								            <td bgcolor="#897508">MWK</td>
								            <td bgcolor="#897508">454</td>
								        </tr>
								        <tr>
								            <td>Малайзия</td>
								            <td>Малайзийский ринггит</td>
								            <td>MYR</td>
								            <td>458</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Мальдивы</td>
								            <td bgcolor="#897508">Руфия</td>
								            <td bgcolor="#897508">MVR</td>
								            <td bgcolor="#897508">462</td>
								        </tr>
								        <tr>
								            <td>Мальта</td>
								            <td>Мальтийская лира</td>
								            <td>MTL</td>
								            <td>470</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Марокко</td>
								            <td bgcolor="#897508">Марокканский дирхам</td>
								            <td bgcolor="#897508">MAD</td>
								            <td bgcolor="#897508">504</td>
								        </tr>
								        <tr>
								            <td>Международный валютный фонд</td>
								            <td>СДР (специальные права заимствования)</td>
								            <td>XDR</td>
								            <td>960</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Мексика</td>
								            <td bgcolor="#897508">Мексиканское песо</td>
								            <td bgcolor="#897508">MXN</td>
								            <td bgcolor="#897508">484</td>
								        </tr>
								        <tr>
								            <td>Мозамбик</td>
								            <td>Метикал</td>
								            <td>MZM</td>
								            <td>508</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Молдова</td>
								            <td bgcolor="#897508">Молдавский лей</td>
								            <td bgcolor="#897508">MDL</td>
								            <td bgcolor="#897508">498</td>
								        </tr>
								        <tr>
								            <td>Монголия</td>
								            <td>Тугрик</td>
								            <td>MNT</td>
								            <td>496</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Мьянма (Бирма)</td>
								            <td bgcolor="#897508">Кьят</td>
								            <td bgcolor="#897508">MMK</td>
								            <td bgcolor="#897508">104</td>
								        </tr>
								        <tr>
								            <th>Н</th>
								            <th> </th>
								            <th> </th>
								            <th> </th>
								        </tr>
								        <tr>
								            <td>Намибия</td>
								            <td>Доллар Намибии</td>
								            <td>NAD</td>
								            <td>516</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Непал</td>
								            <td bgcolor="#897508">Непальская рупия</td>
								            <td bgcolor="#897508">NPR</td>
								            <td bgcolor="#897508">524</td>
								        </tr>
								        <tr>
								            <td>Нигерия</td>
								            <td>Найра</td>
								            <td>NGN</td>
								            <td>566</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Нидерландские Антильские острова</td>
								            <td bgcolor="#897508">Нидерландский антильский гульден</td>
								            <td bgcolor="#897508">ANG</td>
								            <td bgcolor="#897508">532</td>
								        </tr>
								        <tr>
								            <td>Нидерланды</td>
								            <td>Нидерландский гульден</td>
								            <td>NLG</td>
								            <td>528</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Никарагуа</td>
								            <td bgcolor="#897508">Золотая кордоба</td>
								            <td bgcolor="#897508">NIO</td>
								            <td bgcolor="#897508">558</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Ниуэ, Новая Зеландия, острова Кука, Питкэрн, остров, Токелау</td>
								            <td bgcolor="#897508">Новозеландский доллар</td>
								            <td bgcolor="#897508">NZD</td>
								            <td bgcolor="#897508">554</td>
								        </tr>
								        <tr>
								            <th>О</th>
								            <th> </th>
								            <th> </th>
								            <th> </th>
								        </tr>
								        <tr>
								            <td>Объединенные Арабские Эмираты</td>
								            <td>Дирхам (ОАЭ)</td>
								            <td>AED</td>
								            <td>784</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Оман</td>
								            <td bgcolor="#897508">Оманский риал</td>
								            <td bgcolor="#897508">OMR</td>
								            <td bgcolor="#897508">512</td>
								        </tr>
								        <tr>
								            <td>Остров Святой Елены</td>
								            <td>Фунт острова Святой Елены</td>
								            <td>SHP</td>
								            <td>654</td>
								        </tr>
								        <tr>
								            <th>П</th>
								            <th> </th>
								            <th> </th>
								            <th> </th>
								        </tr>
								        <tr>
								            <td>Пакистан</td>
								            <td>Пакистанская рупия</td>
								            <td>PKR</td>
								            <td>586</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Панама</td>
								            <td bgcolor="#897508">Бальбоа</td>
								            <td bgcolor="#897508">PAB</td>
								            <td bgcolor="#897508">590</td>
								        </tr>
								        <tr>
								            <td>Папуа – Новая Гвинея</td>
								            <td>Кина</td>
								            <td>PGK</td>
								            <td>598</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Парагвай</td>
								            <td bgcolor="#897508">Гуарани</td>
								            <td bgcolor="#897508">PYG</td>
								            <td bgcolor="#897508">600</td>
								        </tr>
								        <tr>
								            <td>Перу</td>
								            <td>Новый соль</td>
								            <td>PEN</td>
								            <td>604</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Польша</td>
								            <td bgcolor="#897508">Злотый</td>
								            <td bgcolor="#897508">PLN</td>
								            <td bgcolor="#897508">985</td>
								        </tr>
								        <tr>
								            <td>Португалия</td>
								            <td>Португальское эскудо</td>
								            <td>PTE</td>
								            <td>620</td>
								        </tr>
								        <tr>
								            <th>Р</th>
								            <th> </th>
								            <th> </th>
								            <th> </th>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Российская Федерация</td>
								            <td bgcolor="#897508">Российский рубль</td>
								            <td bgcolor="#897508">RUB</td>
								            <td bgcolor="#897508">810</td>
								        </tr>
								        <tr>
								            <td>Руанда</td>
								            <td>Франк Руанды</td>
								            <td>RWF</td>
								            <td>646</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Румыния</td>
								            <td bgcolor="#897508">Лей</td>
								            <td bgcolor="#897508">ROL</td>
								            <td bgcolor="#897508">642</td>
								        </tr>
								        <tr>
								            <th>С</th>
								            <th> </th>
								            <th> </th>
								            <th> </th>
								        </tr>
								        <tr>
								            <td>Сальвадор</td>
								            <td>Сальвадорский колон</td>
								            <td>SVC</td>
								            <td>222</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Самоа</td>
								            <td bgcolor="#897508">Тала</td>
								            <td bgcolor="#897508">WST</td>
								            <td bgcolor="#897508">882</td>
								        </tr>
								        <tr>
								            <td>Сан – Томе и Принсипи</td>
								            <td>Добра</td>
								            <td>STD</td>
								            <td>678</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Саудовская Аравия</td>
								            <td bgcolor="#897508">Саудовский риял</td>
								            <td bgcolor="#897508">SAR</td>
								            <td bgcolor="#897508">682</td>
								        </tr>
								        <tr>
								            <td>Свазиленд</td>
								            <td>Лилангени</td>
								            <td>SZL</td>
								            <td>748</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Сейшельские острова</td>
								            <td bgcolor="#897508">Сейшельская рупия</td>
								            <td bgcolor="#897508">SCR</td>
								            <td bgcolor="#897508">690</td>
								        </tr>
								        <tr>
								            <td>Сингапур</td>
								            <td>Сингапурский доллар</td>
								            <td>SGD</td>
								            <td>702</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Сирийская Арабская Республика</td>
								            <td bgcolor="#897508">Сирийский фунт</td>
								            <td bgcolor="#897508">SYP</td>
								            <td bgcolor="#897508">760</td>
								        </tr>
								        <tr>
								            <td>Словакия</td>
								            <td>Словацкая крона</td>
								            <td>SKK</td>
								            <td>703</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Словения</td>
								            <td bgcolor="#897508">Толар</td>
								            <td bgcolor="#897508">SIT</td>
								            <td bgcolor="#897508">705</td>
								        </tr>
								        <tr>
								            <td>Соединенное королевство Великобритания</td>
								            <td>Фунт стерлингов</td>
								            <td>GBP</td>
								            <td>826</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Соломоновы острова</td>
								            <td bgcolor="#897508">Доллар Соломоновых островов</td>
								            <td bgcolor="#897508">SBD</td>
								            <td bgcolor="#897508">90</td>
								        </tr>
								        <tr>
								            <td>Сомали</td>
								            <td>Сомалийский шиллинг</td>
								            <td>SOS</td>
								            <td>706</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Страны – участницы Европейского Союза</td>
								            <td bgcolor="#897508">Евро</td>
								            <td bgcolor="#897508">EUR</td>
								            <td bgcolor="#897508">978</td>
								        </tr>
								        <tr>
								            <td>Судан</td>
								            <td>Суданский динар</td>
								            <td>SDD</td>
								            <td>736</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Суринам</td>
								            <td bgcolor="#897508">Суринамский гульден</td>
								            <td bgcolor="#897508">SRG</td>
								            <td bgcolor="#897508">740</td>
								        </tr>
								        <tr>
								            <td>Сьерра – Леоне</td>
								            <td>Леоне</td>
								            <td>SLL</td>
								            <td>694</td>
								        </tr>
								        <tr>
								            <th>Т</th>
								            <th> </th>
								            <th> </th>
								            <th> </th>
								        </tr>
								        <tr>
								            <td>Таджикистан</td>
								            <td>Таджикский рубл</td>
								            <td>TJR</td>
								            <td>762</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Таиланд</td>
								            <td bgcolor="#897508">Бат</td>
								            <td bgcolor="#897508">THB</td>
								            <td bgcolor="#897508">764</td>
								        </tr>
								        <tr>
								            <td>Тайвань, провинция Китая</td>
								            <td>Новый Тайваньский доллар</td>
								            <td>TWD</td>
								            <td>901</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Танзания</td>
								            <td bgcolor="#897508">Танзанийский шиллинг</td>
								            <td bgcolor="#897508">TZS</td>
								            <td bgcolor="#897508">834</td>
								        </tr>
								        <tr>
								            <td>Тонга</td>
								            <td>Паанга</td>
								            <td>TOP</td>
								            <td>776</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Тринидад и Тобаго</td>
								            <td bgcolor="#897508">Доллар Тринидада и Тобаго</td>
								            <td bgcolor="#897508">TTD</td>
								            <td bgcolor="#897508">780</td>
								        </tr>
								        <tr>
								            <td>Тунис</td>
								            <td>Тунисский динар</td>
								            <td>TND</td>
								            <td>788</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Туркменистан</td>
								            <td bgcolor="#897508">Манат</td>
								            <td bgcolor="#897508">TMM</td>
								            <td bgcolor="#897508">795</td>
								        </tr>
								        <tr>
								            <td>Турция</td>
								            <td>Турецкая лира</td>
								            <td>TRL</td>
								            <td>792</td>
								        </tr>
								        <tr>
								            <th>У</th>
								            <th> </th>
								            <th> </th>
								            <th> </th>
								        </tr>
								        <tr>
								            <td>Уганда</td>
								            <td>Угандийский шиллинг</td>
								            <td>UGX</td>
								            <td>800</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Узбекистан</td>
								            <td bgcolor="#897508">Узбекский сум</td>
								            <td bgcolor="#897508">UZS</td>
								            <td bgcolor="#897508">860</td>
								        </tr>
								        <tr>
								            <td>Украина</td>
								            <td>Гривна</td>
								            <td>UAH</td>
								            <td>980</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Уругвай</td>
								            <td bgcolor="#897508">Уругвайское песо</td>
								            <td bgcolor="#897508">UYU</td>
								            <td bgcolor="#897508">858</td>
								        </tr>
								        <tr>
								            <th>Ф</th>
								            <th> </th>
								            <th> </th>
								            <th> </th>
								        </tr>
								        <tr>
								            <td>Фиджи</td>
								            <td>Доллар Фиджи</td>
								            <td>FJD</td>
								            <td>242</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Филиппины</td>
								            <td bgcolor="#897508">Филиппинское песо</td>
								            <td bgcolor="#897508">PHP</td>
								            <td bgcolor="#897508">608</td>
								        </tr>
								        <tr>
								            <td>Финляндия</td>
								            <td>Марка</td>
								            <td>FIM</td>
								            <td>246</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Фолклендские (Мальвинские) острова</td>
								            <td bgcolor="#897508">Фунт Фолклендских островов</td>
								            <td bgcolor="#897508">FKP</td>
								            <td bgcolor="#897508">238</td>
								        </tr>
								        <tr>
								            <td>Французская Полинезия, Новая Каледония, Уоллис и Футуна, острова</td>
								            <td>Франк КФП</td>
								            <td>XPF</td>
								            <td>953</td>
								        </tr>
								        <tr>
								            <th>Х</th>
								            <th> </th>
								            <th> </th>
								            <th> </th>
								        </tr>
								        <tr>
								            <td>Хорватия</td>
								            <td>Куна</td>
								            <td>HRK</td>
								            <td>191</td>
								        </tr>
								        <tr>
								            <th>Ч</th>
								            <th> </th>
								            <th> </th>
								            <th> </th>
								        </tr>
								        <tr>
								            <td>Чад</td>
								            <td>Франк КФА ВЕАС</td>
								            <td>XAF</td>
								            <td>950</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Чешская Республика</td>
								            <td bgcolor="#897508">Чешская крона</td>
								            <td bgcolor="#897508">CZK</td>
								            <td bgcolor="#897508">203</td>
								        </tr>
								        <tr>
								            <td>Чили</td>
								            <td>Чилийское песо</td>
								            <td>CLP</td>
								            <td>152</td>
								        </tr>
								        <tr>
								            <th>Ш</th>
								            <th> </th>
								            <th> </th>
								            <th> </th>
								        </tr>
								        <tr>
								            <td>Швеция</td>
								            <td>Шведская крона</td>
								            <td>SEK</td>
								            <td>752</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Швейцария</td>
								            <td bgcolor="#897508">Швейцарский франк</td>
								            <td bgcolor="#897508">CHF</td>
								            <td bgcolor="#897508">756</td>
								        </tr>
								        <tr>
								            <td>Шри – Ланка</td>
								            <td>Шри–Ланкийская рупия</td>
								            <td>LKR</td>
								            <td>144</td>
								        </tr>
								        <tr>
								            <th>Э</th>
								            <th> </th>
								            <th> </th>
								            <th> </th>
								        </tr>
								        <tr>
								            <td>Эквадор</td>
								            <td>Сукре</td>
								            <td>ECS</td>
								            <td>218</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Эстония</td>
								            <td bgcolor="#897508">Крона</td>
								            <td bgcolor="#897508">EEK</td>
								            <td bgcolor="#897508">233</td>
								        </tr>
								        <tr>
								            <td>Эфиопия</td>
								            <td>Эфиопский быр</td>
								            <td>ETB</td>
								            <td>230</td>
								        </tr>
								        <tr>
								            <th>Ю</th>
								            <th> </th>
								            <th> </th>
								            <th> </th>
								        </tr>
								        <tr>
								            <td>Югославия</td>
								            <td>Югославский динар</td>
								            <td>YUN</td>
								            <td>890</td>
								        </tr>
								        <tr>
								            <th>Я</th>
								            <th> </th>
								            <th> </th>
								            <th> </th>
								        </tr>
								        <tr>
								            <td>Ямайка</td>
								            <td>Ямайский доллар</td>
								            <td>JMD</td>
								            <td>388</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Япония</td>
								            <td bgcolor="#897508">Иена</td>
								            <td bgcolor="#897508">JPY</td>
								            <td bgcolor="#897508">392</td>
								        </tr>
								    </tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-2"><button id="send" sum="" class="btn btn-default">=</button></div>
				<div class="col-md-2">
					<!-- <span id="toValue">1</span><span id="toVal"></span> -->
					<input type="number" id="to" name="to" value="<?=(isset($_GET['from'])&&isset($_GET['fromName'])&&isset($_GET['toName']))?convertCurrency($_GET['from'], $_GET['fromName'], $_GET['toName']):1?>" class="form-control">
				</div>
				<div class="col-md-3">
					<div style="list-style: none;">
						<div style="position: relative;">
							<input type="text" name="toText" class="form-control" id="toText" value="<?=(isset($_GET['toText']))?$_GET['toText']:''?>" placeholder="Check country">
							<input type="hidden" name="toName" id="toName" class="form-control" value="<?=(isset($_GET['toName']))?$_GET['toName']:''?>">
							<div id="toTextValue" class="hidden" style="position: absolute;top: 30px;background: orange;height:200px;overflow-y: scroll;">
								<table class="table" align="center" width="90%" cellspacing="0" border="0">
								    <tbody>
								        <tr>
								            <th>Страна</th>
								            <th>Валюта</th>
								            <th>Символ</th>
								            <th>Код</th>
								        </tr>
								        <tr>
								            <th>А</th>
								            <th> </th>
								            <th> </th>
								            <th> </th>
								        </tr>
								        <tr>
								            <td>Австралия</td>
								            <td>Австралийский доллар</td>
								            <td>AUD</td>
								            <td>36</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Австрия</td>
								            <td bgcolor="#897508">Шиллинг</td>
								            <td bgcolor="#897508">ATS</td>
								            <td bgcolor="#897508">40</td>
								        </tr>
								        <tr>
								            <td>Азербайджан</td>
								            <td>Азербайджанский манат</td>
								            <td>AZM</td>
								            <td>31</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Албания</td>
								            <td bgcolor="#897508">Лек</td>
								            <td bgcolor="#897508">ALL</td>
								            <td bgcolor="#897508">8</td>
								        </tr>
								        <tr>
								            <td>Алжир</td>
								            <td>Алжирский динар</td>
								            <td>DZD</td>
								            <td>12</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Американское Самоа, Соединенные Штаты Америки, Гаити, Гуам, Панама, Пуэрто – Рико.</td>
								            <td bgcolor="#897508">Доллар США</td>
								            <td bgcolor="#897508">USD</td>
								            <td bgcolor="#897508">840</td>
								        </tr>
								        <tr>
								            <td>Ангилья, Антигуа и Барбуда, Гренада, Доминика, Монтсеррат, Сент – Винсент и Гренадины, Сент – Китс и Невис, Сент – Люсия</td>
								            <td>Восточно – карибский доллар</td>
								            <td>XCD</td>
								            <td>951</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Ангола</td>
								            <td bgcolor="#897508">Новая кванза</td>
								            <td bgcolor="#897508">AON</td>
								            <td bgcolor="#897508">24</td>
								        </tr>
								        <tr>
								            <td>Андорра</td>
								            <td>Андоррская песета</td>
								            <td>ADP</td>
								            <td>20</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Андорра, Гваделупа, Мартиника, Монако, Реюньон, Сен – Пьер и Микелон, Франция, Французская Гвиана, Французские Южные Территории</td>
								            <td bgcolor="#897508">Французский франк</td>
								            <td bgcolor="#897508">FRF</td>
								            <td bgcolor="#897508">250</td>
								        </tr>
								        <tr>
								            <td>Андорра, Испания</td>
								            <td>Испанская песета</td>
								            <td>ESP</td>
								            <td>724</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Аргентина</td>
								            <td bgcolor="#897508">Аргентинское песо</td>
								            <td bgcolor="#897508">ARS</td>
								            <td bgcolor="#897508">32</td>
								        </tr>
								        <tr>
								            <td>Армения</td>
								            <td>Армянский драм</td>
								            <td>AMD</td>
								            <td>51</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Аруба</td>
								            <td bgcolor="#897508">Арубанский гульден</td>
								            <td bgcolor="#897508">AWG</td>
								            <td bgcolor="#897508">533</td>
								        </tr>
								        <tr>
								            <td>Афганистан</td>
								            <td>Афгани</td>
								            <td>AFA</td>
								            <td>4</td>
								        </tr>
								        <tr>
								            <th>Б</th>
								            <th> </th>
								            <th> </th>
								            <th> </th>
								        </tr>
								        <tr>
								            <td>Багамские острова</td>
								            <td>Багамский доллар</td>
								            <td>BSD</td>
								            <td>44</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Бангладеш</td>
								            <td bgcolor="#897508">Така</td>
								            <td bgcolor="#897508">BDT</td>
								            <td bgcolor="#897508">50</td>
								        </tr>
								        <tr>
								            <td>Барбадос</td>
								            <td>Барбадосский доллар</td>
								            <td>BBD</td>
								            <td>52</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Бахрейн</td>
								            <td bgcolor="#897508">Бахрейнский динар</td>
								            <td bgcolor="#897508">BHD</td>
								            <td bgcolor="#897508">48</td>
								        </tr>
								        <tr>
								            <td>Беларусь</td>
								            <td>Белорусский рубль</td>
								            <td>BYB</td>
								            <td>112</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Белиз</td>
								            <td bgcolor="#897508">Белизский доллар</td>
								            <td bgcolor="#897508">BZD</td>
								            <td bgcolor="#897508">84</td>
								        </tr>
								        <tr>
								            <td>Бельгия</td>
								            <td>Бельгийский франк</td>
								            <td>BEF</td>
								            <td>56</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Бенин, Буркина – Фасо, Кот дивуар, Мали, Нигер, Сенегал, Того</td>
								            <td bgcolor="#897508">Франк КФА ВСЕАО</td>
								            <td bgcolor="#897508">XOF</td>
								            <td bgcolor="#897508">952</td>
								        </tr>
								        <tr>
								            <td>Бермудские острова</td>
								            <td>Бермудский доллар</td>
								            <td>BMD</td>
								            <td>60</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Болгария</td>
								            <td bgcolor="#897508">Лев</td>
								            <td bgcolor="#897508">BGL</td>
								            <td bgcolor="#897508">100</td>
								        </tr>
								        <tr>
								            <td>Боливия</td>
								            <td>Боливиано</td>
								            <td>BOB</td>
								            <td>68</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Ботсвана</td>
								            <td bgcolor="#897508">Пула</td>
								            <td bgcolor="#897508">BWP</td>
								            <td bgcolor="#897508">72</td>
								        </tr>
								        <tr>
								            <td>Бразилия</td>
								            <td>Бразильский реал</td>
								            <td>BRL</td>
								            <td>986</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Бруней Даруссалам</td>
								            <td bgcolor="#897508">Брунейский доллар</td>
								            <td bgcolor="#897508">BND</td>
								            <td bgcolor="#897508">96</td>
								        </tr>
								        <tr>
								            <td>Буве, остров, Норвегия, острова Свальбард (Шпицберген) и Ян Майен</td>
								            <td>Норвежская крона</td>
								            <td>NOK</td>
								            <td>578</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Бурунди</td>
								            <td bgcolor="#897508">Бурундийский франк</td>
								            <td bgcolor="#897508">BIF</td>
								            <td bgcolor="#897508">108</td>
								        </tr>
								        <tr>
								            <td>Бутан</td>
								            <td>Нгултрум</td>
								            <td>BTN</td>
								            <td>64</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Бутан</td>
								            <td bgcolor="#897508">Индийская рупия</td>
								            <td bgcolor="#897508">INR</td>
								            <td bgcolor="#897508">356</td>
								        </tr>
								        <tr>
								            <th>В</th>
								            <th> </th>
								            <th> </th>
								            <th> </th>
								        </tr>
								        <tr>
								            <td>Вануату</td>
								            <td>Вату</td>
								            <td>VUV</td>
								            <td>548</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Ватикан, Италия, Сан – Марино</td>
								            <td bgcolor="#897508">Итальянская лира</td>
								            <td bgcolor="#897508">ITL</td>
								            <td bgcolor="#897508">380</td>
								        </tr>
								        <tr>
								            <td>Венгрия</td>
								            <td>Форинт</td>
								            <td>HUF</td>
								            <td>348</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Венесуэла</td>
								            <td bgcolor="#897508">Боливар</td>
								            <td bgcolor="#897508">VEB</td>
								            <td bgcolor="#897508">862</td>
								        </tr>
								        <tr>
								            <td>Восточный Тимор</td>
								            <td>Тиморское эскудо</td>
								            <td>TPE</td>
								            <td>626</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Восточный Тимор, Индонезия</td>
								            <td bgcolor="#897508">Рупия</td>
								            <td bgcolor="#897508">IDR</td>
								            <td bgcolor="#897508">360</td>
								        </tr>
								        <tr>
								            <td>Вьетнам</td>
								            <td>Донг</td>
								            <td>VND</td>
								            <td>704</td>
								        </tr>
								        <tr>
								            <th>Г</th>
								            <th> </th>
								            <th> </th>
								            <th> </th>
								        </tr>
								        <tr>
								            <td>Габон, Камерун, Конго, Центрально – Африканская Республика, Чад, Экваториальная Гвинея, Южная Африка</td>
								            <td>Франк КФА ВЕАС</td>
								            <td>XAF</td>
								            <td>950</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Гаити</td>
								            <td bgcolor="#897508">Гурд</td>
								            <td bgcolor="#897508">HTG</td>
								            <td bgcolor="#897508">332</td>
								        </tr>
								        <tr>
								            <td>Гайана</td>
								            <td>Гайанский доллар</td>
								            <td>GYD</td>
								            <td>328</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Гамбия</td>
								            <td bgcolor="#897508">Даласи</td>
								            <td bgcolor="#897508">GMD</td>
								            <td bgcolor="#897508">270</td>
								        </tr>
								        <tr>
								            <td>Гана</td>
								            <td>Седи</td>
								            <td>GHC</td>
								            <td>288</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Гватемала</td>
								            <td bgcolor="#897508">Кетсаль</td>
								            <td bgcolor="#897508">GTQ</td>
								            <td bgcolor="#897508">320</td>
								        </tr>
								        <tr>
								            <td>Гвинея</td>
								            <td>Гвинейский франк</td>
								            <td>GNF</td>
								            <td>324</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Гвинея – Бисау</td>
								            <td bgcolor="#897508">Песо Гвинеи – Бисау</td>
								            <td bgcolor="#897508">GWP</td>
								            <td bgcolor="#897508">624</td>
								        </tr>
								        <tr>
								            <td>Германия</td>
								            <td>Немецкая марка</td>
								            <td>DEM</td>
								            <td>280</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Гибралтар</td>
								            <td bgcolor="#897508">Гибралтарский фунт</td>
								            <td bgcolor="#897508">GIP</td>
								            <td bgcolor="#897508">292</td>
								        </tr>
								        <tr>
								            <td>Гондурас</td>
								            <td>Лемпира</td>
								            <td>HNL</td>
								            <td>340</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Гонконг</td>
								            <td bgcolor="#897508">Гонконгский доллар</td>
								            <td bgcolor="#897508">HKD</td>
								            <td bgcolor="#897508">344</td>
								        </tr>
								        <tr>
								            <td>Гренландия, Фарерские острова</td>
								            <td>Датская крона</td>
								            <td>DKK</td>
								            <td>208</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Греция</td>
								            <td bgcolor="#897508">Драхма</td>
								            <td bgcolor="#897508">GRD</td>
								            <td bgcolor="#897508">300</td>
								        </tr>
								        <tr>
								            <td>Грузия</td>
								            <td>Лари</td>
								            <td>GEL</td>
								            <td>981</td>
								        </tr>
								        <tr>
								            <th>Д</th>
								            <th> </th>
								            <th> </th>
								            <th> </th>
								        </tr>
								        <tr>
								            <td>Дания</td>
								            <td>Датская крона</td>
								            <td>DKK</td>
								            <td>208</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Джибути</td>
								            <td bgcolor="#897508">Франк Джибути</td>
								            <td bgcolor="#897508">DJF</td>
								            <td bgcolor="#897508">262</td>
								        </tr>
								        <tr>
								            <td>Доминиканская Республика</td>
								            <td>Доминиканское песо</td>
								            <td>DOP</td>
								            <td>214</td>
								        </tr>
								        <tr>
								            <th>Е</th>
								            <th> </th>
								            <th> </th>
								            <th> </th>
								        </tr>
								        <tr>
								            <td>Египет</td>
								            <td>Египетский фунт</td>
								            <td>EGP</td>
								            <td>818</td>
								        </tr>
								        <tr>
								            <th>З</th>
								            <th> </th>
								            <th> </th>
								            <th> </th>
								        </tr>
								        <tr>
								            <td>Заир</td>
								            <td>Новый заир</td>
								            <td>ZRN</td>
								            <td>180</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Замбия</td>
								            <td bgcolor="#897508">Квача (замбийская)</td>
								            <td bgcolor="#897508">ZMK</td>
								            <td bgcolor="#897508">894</td>
								        </tr>
								        <tr>
								            <td>Западная Сахара</td>
								            <td>Марокканский дирхам</td>
								            <td>MAD</td>
								            <td>504</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Зимбабве</td>
								            <td bgcolor="#897508">Доллар Зимбабве</td>
								            <td bgcolor="#897508">ZWD</td>
								            <td bgcolor="#897508">716</td>
								        </tr>
								        <tr>
								            <th>И</th>
								            <th> </th>
								            <th> </th>
								            <th> </th>
								        </tr>
								        <tr>
								            <td>Индия</td>
								            <td>Индийская рупия</td>
								            <td>INR</td>
								            <td>356</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Израиль</td>
								            <td bgcolor="#897508">Шекель</td>
								            <td bgcolor="#897508">ILS</td>
								            <td bgcolor="#897508">376</td>
								        </tr>
								        <tr>
								            <td>Иордания</td>
								            <td>Иорданский динар</td>
								            <td>JOD</td>
								            <td>400</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Ирак</td>
								            <td bgcolor="#897508">Иракский динар</td>
								            <td bgcolor="#897508">IQD</td>
								            <td bgcolor="#897508">368</td>
								        </tr>
								        <tr>
								            <td>Иран</td>
								            <td>Иранский риал</td>
								            <td>IRR</td>
								            <td>364</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Ирландия</td>
								            <td bgcolor="#897508">Ирландский фунт</td>
								            <td bgcolor="#897508">IEP</td>
								            <td bgcolor="#897508">372</td>
								        </tr>
								        <tr>
								            <td>Исландия</td>
								            <td>Исландская крона</td>
								            <td>ISK</td>
								            <td>352</td>
								        </tr>
								        <tr>
								            <th>Й</th>
								            <th> </th>
								            <th> </th>
								            <th> </th>
								        </tr>
								        <tr>
								            <td>Йемен</td>
								            <td>Йеменский риал</td>
								            <td>YER</td>
								            <td>886</td>
								        </tr>
								        <tr>
								            <th>К</th>
								            <th> </th>
								            <th> </th>
								            <th> </th>
								        </tr>
								        <tr>
								            <td>Кабо – Верде</td>
								            <td>Эскудо Кабо – Верде</td>
								            <td>CVE</td>
								            <td>132</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Казахстан</td>
								            <td bgcolor="#897508">Тенге (казахский)</td>
								            <td bgcolor="#897508">KZT</td>
								            <td bgcolor="#897508">398</td>
								        </tr>
								        <tr>
								            <td>Каймановы острова</td>
								            <td>Доллар Каймановых островов</td>
								            <td>KYD</td>
								            <td>136</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Камбоджа</td>
								            <td bgcolor="#897508">Риель</td>
								            <td bgcolor="#897508">KHR</td>
								            <td bgcolor="#897508">116</td>
								        </tr>
								        <tr>
								            <td>Канада</td>
								            <td>Канадский доллар</td>
								            <td>CAD</td>
								            <td>124</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Катар</td>
								            <td bgcolor="#897508">Катарский риал</td>
								            <td bgcolor="#897508">QAR</td>
								            <td bgcolor="#897508">634</td>
								        </tr>
								        <tr>
								            <td>Кения</td>
								            <td>Кенийский шиллинг</td>
								            <td>KES</td>
								            <td>404</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Кипр</td>
								            <td bgcolor="#897508">Кипрский фунт</td>
								            <td bgcolor="#897508">CYP</td>
								            <td bgcolor="#897508">196</td>
								        </tr>
								        <tr>
								            <td>Киргизстан</td>
								            <td>Сом (киргизский)</td>
								            <td>KGS</td>
								            <td>417</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Китай</td>
								            <td bgcolor="#897508">Китайский юань</td>
								            <td bgcolor="#897508">CNY</td>
								            <td bgcolor="#897508">156</td>
								        </tr>
								        <tr>
								            <td>Колумбия</td>
								            <td>Колумбийское песо</td>
								            <td>COP</td>
								            <td>170</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Коморские острова</td>
								            <td bgcolor="#897508">Франк Коморских островов</td>
								            <td bgcolor="#897508">KMF</td>
								            <td bgcolor="#897508">174</td>
								        </tr>
								        <tr>
								            <td>Корея, демократическая народная республика</td>
								            <td>Северо – корейская вона</td>
								            <td>KPW</td>
								            <td>408</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Корея, республика</td>
								            <td bgcolor="#897508">Вона</td>
								            <td bgcolor="#897508">KRW</td>
								            <td bgcolor="#897508">410</td>
								        </tr>
								        <tr>
								            <td>Коста – Рика</td>
								            <td>Костариканский колон</td>
								            <td>CRC</td>
								            <td>188</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Куба</td>
								            <td bgcolor="#897508">Кубинское песо</td>
								            <td bgcolor="#897508">CUP</td>
								            <td bgcolor="#897508">192</td>
								        </tr>
								        <tr>
								            <td>Кувейт</td>
								            <td>Кувейтский динар</td>
								            <td>KWD</td>
								            <td>414</td>
								        </tr>
								        <tr>
								            <th>Л</th>
								            <th> </th>
								            <th> </th>
								            <th> </th>
								        </tr>
								        <tr>
								            <td>Лаос</td>
								            <td>Кип</td>
								            <td>LAK</td>
								            <td>418</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Латвия</td>
								            <td bgcolor="#897508">Латвийский лат</td>
								            <td bgcolor="#897508">LVL</td>
								            <td bgcolor="#897508">428</td>
								        </tr>
								        <tr>
								            <td>Лесото</td>
								            <td>Лоти</td>
								            <td>LSL</td>
								            <td>426</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Лесото, Намибия, Южная Африка</td>
								            <td bgcolor="#897508">Рэнд</td>
								            <td bgcolor="#897508">ZAR</td>
								            <td bgcolor="#897508">710</td>
								        </tr>
								        <tr>
								            <td>Либерия</td>
								            <td>Либерийский доллар</td>
								            <td>LRD</td>
								            <td>430</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Ливан</td>
								            <td bgcolor="#897508">Ливанский фунт</td>
								            <td bgcolor="#897508">LBP</td>
								            <td bgcolor="#897508">422</td>
								        </tr>
								        <tr>
								            <td>Ливийская Арабская Джамахирия</td>
								            <td>Ливийский динар</td>
								            <td>LYD</td>
								            <td>434</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Литва</td>
								            <td bgcolor="#897508">Литовский лит</td>
								            <td bgcolor="#897508">LTL</td>
								            <td bgcolor="#897508">440</td>
								        </tr>
								        <tr>
								            <td>Лихтенштейн</td>
								            <td>Швейцарский франк</td>
								            <td>CHF</td>
								            <td>756</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Люксембург</td>
								            <td bgcolor="#897508">Люксембургский франк</td>
								            <td bgcolor="#897508">LUF</td>
								            <td bgcolor="#897508">442</td>
								        </tr>
								        <tr>
								            <th>М</th>
								            <th> </th>
								            <th> </th>
								            <th> </th>
								        </tr>
								        <tr>
								            <td>Маврикий</td>
								            <td>Маврикийская рупия</td>
								            <td>MUR</td>
								            <td>480</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Мавритания</td>
								            <td bgcolor="#897508">Угия</td>
								            <td bgcolor="#897508">MRO</td>
								            <td bgcolor="#897508">478</td>
								        </tr>
								        <tr>
								            <td>Мадагаскар</td>
								            <td>Малагасийский франк</td>
								            <td>MGF</td>
								            <td>450</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Макао</td>
								            <td bgcolor="#897508">Патака</td>
								            <td bgcolor="#897508">MOP</td>
								            <td bgcolor="#897508">446</td>
								        </tr>
								        <tr>
								            <td>Македония</td>
								            <td>Денар</td>
								            <td>MKD</td>
								            <td>807</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Малави</td>
								            <td bgcolor="#897508">Квача (малавийская)</td>
								            <td bgcolor="#897508">MWK</td>
								            <td bgcolor="#897508">454</td>
								        </tr>
								        <tr>
								            <td>Малайзия</td>
								            <td>Малайзийский ринггит</td>
								            <td>MYR</td>
								            <td>458</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Мальдивы</td>
								            <td bgcolor="#897508">Руфия</td>
								            <td bgcolor="#897508">MVR</td>
								            <td bgcolor="#897508">462</td>
								        </tr>
								        <tr>
								            <td>Мальта</td>
								            <td>Мальтийская лира</td>
								            <td>MTL</td>
								            <td>470</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Марокко</td>
								            <td bgcolor="#897508">Марокканский дирхам</td>
								            <td bgcolor="#897508">MAD</td>
								            <td bgcolor="#897508">504</td>
								        </tr>
								        <tr>
								            <td>Международный валютный фонд</td>
								            <td>СДР (специальные права заимствования)</td>
								            <td>XDR</td>
								            <td>960</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Мексика</td>
								            <td bgcolor="#897508">Мексиканское песо</td>
								            <td bgcolor="#897508">MXN</td>
								            <td bgcolor="#897508">484</td>
								        </tr>
								        <tr>
								            <td>Мозамбик</td>
								            <td>Метикал</td>
								            <td>MZM</td>
								            <td>508</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Молдова</td>
								            <td bgcolor="#897508">Молдавский лей</td>
								            <td bgcolor="#897508">MDL</td>
								            <td bgcolor="#897508">498</td>
								        </tr>
								        <tr>
								            <td>Монголия</td>
								            <td>Тугрик</td>
								            <td>MNT</td>
								            <td>496</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Мьянма (Бирма)</td>
								            <td bgcolor="#897508">Кьят</td>
								            <td bgcolor="#897508">MMK</td>
								            <td bgcolor="#897508">104</td>
								        </tr>
								        <tr>
								            <th>Н</th>
								            <th> </th>
								            <th> </th>
								            <th> </th>
								        </tr>
								        <tr>
								            <td>Намибия</td>
								            <td>Доллар Намибии</td>
								            <td>NAD</td>
								            <td>516</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Непал</td>
								            <td bgcolor="#897508">Непальская рупия</td>
								            <td bgcolor="#897508">NPR</td>
								            <td bgcolor="#897508">524</td>
								        </tr>
								        <tr>
								            <td>Нигерия</td>
								            <td>Найра</td>
								            <td>NGN</td>
								            <td>566</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Нидерландские Антильские острова</td>
								            <td bgcolor="#897508">Нидерландский антильский гульден</td>
								            <td bgcolor="#897508">ANG</td>
								            <td bgcolor="#897508">532</td>
								        </tr>
								        <tr>
								            <td>Нидерланды</td>
								            <td>Нидерландский гульден</td>
								            <td>NLG</td>
								            <td>528</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Никарагуа</td>
								            <td bgcolor="#897508">Золотая кордоба</td>
								            <td bgcolor="#897508">NIO</td>
								            <td bgcolor="#897508">558</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Ниуэ, Новая Зеландия, острова Кука, Питкэрн, остров, Токелау</td>
								            <td bgcolor="#897508">Новозеландский доллар</td>
								            <td bgcolor="#897508">NZD</td>
								            <td bgcolor="#897508">554</td>
								        </tr>
								        <tr>
								            <th>О</th>
								            <th> </th>
								            <th> </th>
								            <th> </th>
								        </tr>
								        <tr>
								            <td>Объединенные Арабские Эмираты</td>
								            <td>Дирхам (ОАЭ)</td>
								            <td>AED</td>
								            <td>784</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Оман</td>
								            <td bgcolor="#897508">Оманский риал</td>
								            <td bgcolor="#897508">OMR</td>
								            <td bgcolor="#897508">512</td>
								        </tr>
								        <tr>
								            <td>Остров Святой Елены</td>
								            <td>Фунт острова Святой Елены</td>
								            <td>SHP</td>
								            <td>654</td>
								        </tr>
								        <tr>
								            <th>П</th>
								            <th> </th>
								            <th> </th>
								            <th> </th>
								        </tr>
								        <tr>
								            <td>Пакистан</td>
								            <td>Пакистанская рупия</td>
								            <td>PKR</td>
								            <td>586</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Панама</td>
								            <td bgcolor="#897508">Бальбоа</td>
								            <td bgcolor="#897508">PAB</td>
								            <td bgcolor="#897508">590</td>
								        </tr>
								        <tr>
								            <td>Папуа – Новая Гвинея</td>
								            <td>Кина</td>
								            <td>PGK</td>
								            <td>598</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Парагвай</td>
								            <td bgcolor="#897508">Гуарани</td>
								            <td bgcolor="#897508">PYG</td>
								            <td bgcolor="#897508">600</td>
								        </tr>
								        <tr>
								            <td>Перу</td>
								            <td>Новый соль</td>
								            <td>PEN</td>
								            <td>604</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Польша</td>
								            <td bgcolor="#897508">Злотый</td>
								            <td bgcolor="#897508">PLN</td>
								            <td bgcolor="#897508">985</td>
								        </tr>
								        <tr>
								            <td>Португалия</td>
								            <td>Португальское эскудо</td>
								            <td>PTE</td>
								            <td>620</td>
								        </tr>
								        <tr>
								            <th>Р</th>
								            <th> </th>
								            <th> </th>
								            <th> </th>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Российская Федерация</td>
								            <td bgcolor="#897508">Российский рубль</td>
								            <td bgcolor="#897508">RUB</td>
								            <td bgcolor="#897508">810</td>
								        </tr>
								        <tr>
								            <td>Руанда</td>
								            <td>Франк Руанды</td>
								            <td>RWF</td>
								            <td>646</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Румыния</td>
								            <td bgcolor="#897508">Лей</td>
								            <td bgcolor="#897508">ROL</td>
								            <td bgcolor="#897508">642</td>
								        </tr>
								        <tr>
								            <th>С</th>
								            <th> </th>
								            <th> </th>
								            <th> </th>
								        </tr>
								        <tr>
								            <td>Сальвадор</td>
								            <td>Сальвадорский колон</td>
								            <td>SVC</td>
								            <td>222</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Самоа</td>
								            <td bgcolor="#897508">Тала</td>
								            <td bgcolor="#897508">WST</td>
								            <td bgcolor="#897508">882</td>
								        </tr>
								        <tr>
								            <td>Сан – Томе и Принсипи</td>
								            <td>Добра</td>
								            <td>STD</td>
								            <td>678</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Саудовская Аравия</td>
								            <td bgcolor="#897508">Саудовский риял</td>
								            <td bgcolor="#897508">SAR</td>
								            <td bgcolor="#897508">682</td>
								        </tr>
								        <tr>
								            <td>Свазиленд</td>
								            <td>Лилангени</td>
								            <td>SZL</td>
								            <td>748</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Сейшельские острова</td>
								            <td bgcolor="#897508">Сейшельская рупия</td>
								            <td bgcolor="#897508">SCR</td>
								            <td bgcolor="#897508">690</td>
								        </tr>
								        <tr>
								            <td>Сингапур</td>
								            <td>Сингапурский доллар</td>
								            <td>SGD</td>
								            <td>702</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Сирийская Арабская Республика</td>
								            <td bgcolor="#897508">Сирийский фунт</td>
								            <td bgcolor="#897508">SYP</td>
								            <td bgcolor="#897508">760</td>
								        </tr>
								        <tr>
								            <td>Словакия</td>
								            <td>Словацкая крона</td>
								            <td>SKK</td>
								            <td>703</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Словения</td>
								            <td bgcolor="#897508">Толар</td>
								            <td bgcolor="#897508">SIT</td>
								            <td bgcolor="#897508">705</td>
								        </tr>
								        <tr>
								            <td>Соединенное королевство Великобритания</td>
								            <td>Фунт стерлингов</td>
								            <td>GBP</td>
								            <td>826</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Соломоновы острова</td>
								            <td bgcolor="#897508">Доллар Соломоновых островов</td>
								            <td bgcolor="#897508">SBD</td>
								            <td bgcolor="#897508">90</td>
								        </tr>
								        <tr>
								            <td>Сомали</td>
								            <td>Сомалийский шиллинг</td>
								            <td>SOS</td>
								            <td>706</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Страны – участницы Европейского Союза</td>
								            <td bgcolor="#897508">Евро</td>
								            <td bgcolor="#897508">EUR</td>
								            <td bgcolor="#897508">978</td>
								        </tr>
								        <tr>
								            <td>Судан</td>
								            <td>Суданский динар</td>
								            <td>SDD</td>
								            <td>736</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Суринам</td>
								            <td bgcolor="#897508">Суринамский гульден</td>
								            <td bgcolor="#897508">SRG</td>
								            <td bgcolor="#897508">740</td>
								        </tr>
								        <tr>
								            <td>Сьерра – Леоне</td>
								            <td>Леоне</td>
								            <td>SLL</td>
								            <td>694</td>
								        </tr>
								        <tr>
								            <th>Т</th>
								            <th> </th>
								            <th> </th>
								            <th> </th>
								        </tr>
								        <tr>
								            <td>Таджикистан</td>
								            <td>Таджикский рубл</td>
								            <td>TJR</td>
								            <td>762</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Таиланд</td>
								            <td bgcolor="#897508">Бат</td>
								            <td bgcolor="#897508">THB</td>
								            <td bgcolor="#897508">764</td>
								        </tr>
								        <tr>
								            <td>Тайвань, провинция Китая</td>
								            <td>Новый Тайваньский доллар</td>
								            <td>TWD</td>
								            <td>901</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Танзания</td>
								            <td bgcolor="#897508">Танзанийский шиллинг</td>
								            <td bgcolor="#897508">TZS</td>
								            <td bgcolor="#897508">834</td>
								        </tr>
								        <tr>
								            <td>Тонга</td>
								            <td>Паанга</td>
								            <td>TOP</td>
								            <td>776</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Тринидад и Тобаго</td>
								            <td bgcolor="#897508">Доллар Тринидада и Тобаго</td>
								            <td bgcolor="#897508">TTD</td>
								            <td bgcolor="#897508">780</td>
								        </tr>
								        <tr>
								            <td>Тунис</td>
								            <td>Тунисский динар</td>
								            <td>TND</td>
								            <td>788</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Туркменистан</td>
								            <td bgcolor="#897508">Манат</td>
								            <td bgcolor="#897508">TMM</td>
								            <td bgcolor="#897508">795</td>
								        </tr>
								        <tr>
								            <td>Турция</td>
								            <td>Турецкая лира</td>
								            <td>TRL</td>
								            <td>792</td>
								        </tr>
								        <tr>
								            <th>У</th>
								            <th> </th>
								            <th> </th>
								            <th> </th>
								        </tr>
								        <tr>
								            <td>Уганда</td>
								            <td>Угандийский шиллинг</td>
								            <td>UGX</td>
								            <td>800</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Узбекистан</td>
								            <td bgcolor="#897508">Узбекский сум</td>
								            <td bgcolor="#897508">UZS</td>
								            <td bgcolor="#897508">860</td>
								        </tr>
								        <tr>
								            <td>Украина</td>
								            <td>Гривна</td>
								            <td>UAH</td>
								            <td>980</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Уругвай</td>
								            <td bgcolor="#897508">Уругвайское песо</td>
								            <td bgcolor="#897508">UYU</td>
								            <td bgcolor="#897508">858</td>
								        </tr>
								        <tr>
								            <th>Ф</th>
								            <th> </th>
								            <th> </th>
								            <th> </th>
								        </tr>
								        <tr>
								            <td>Фиджи</td>
								            <td>Доллар Фиджи</td>
								            <td>FJD</td>
								            <td>242</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Филиппины</td>
								            <td bgcolor="#897508">Филиппинское песо</td>
								            <td bgcolor="#897508">PHP</td>
								            <td bgcolor="#897508">608</td>
								        </tr>
								        <tr>
								            <td>Финляндия</td>
								            <td>Марка</td>
								            <td>FIM</td>
								            <td>246</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Фолклендские (Мальвинские) острова</td>
								            <td bgcolor="#897508">Фунт Фолклендских островов</td>
								            <td bgcolor="#897508">FKP</td>
								            <td bgcolor="#897508">238</td>
								        </tr>
								        <tr>
								            <td>Французская Полинезия, Новая Каледония, Уоллис и Футуна, острова</td>
								            <td>Франк КФП</td>
								            <td>XPF</td>
								            <td>953</td>
								        </tr>
								        <tr>
								            <th>Х</th>
								            <th> </th>
								            <th> </th>
								            <th> </th>
								        </tr>
								        <tr>
								            <td>Хорватия</td>
								            <td>Куна</td>
								            <td>HRK</td>
								            <td>191</td>
								        </tr>
								        <tr>
								            <th>Ч</th>
								            <th> </th>
								            <th> </th>
								            <th> </th>
								        </tr>
								        <tr>
								            <td>Чад</td>
								            <td>Франк КФА ВЕАС</td>
								            <td>XAF</td>
								            <td>950</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Чешская Республика</td>
								            <td bgcolor="#897508">Чешская крона</td>
								            <td bgcolor="#897508">CZK</td>
								            <td bgcolor="#897508">203</td>
								        </tr>
								        <tr>
								            <td>Чили</td>
								            <td>Чилийское песо</td>
								            <td>CLP</td>
								            <td>152</td>
								        </tr>
								        <tr>
								            <th>Ш</th>
								            <th> </th>
								            <th> </th>
								            <th> </th>
								        </tr>
								        <tr>
								            <td>Швеция</td>
								            <td>Шведская крона</td>
								            <td>SEK</td>
								            <td>752</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Швейцария</td>
								            <td bgcolor="#897508">Швейцарский франк</td>
								            <td bgcolor="#897508">CHF</td>
								            <td bgcolor="#897508">756</td>
								        </tr>
								        <tr>
								            <td>Шри – Ланка</td>
								            <td>Шри–Ланкийская рупия</td>
								            <td>LKR</td>
								            <td>144</td>
								        </tr>
								        <tr>
								            <th>Э</th>
								            <th> </th>
								            <th> </th>
								            <th> </th>
								        </tr>
								        <tr>
								            <td>Эквадор</td>
								            <td>Сукре</td>
								            <td>ECS</td>
								            <td>218</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Эстония</td>
								            <td bgcolor="#897508">Крона</td>
								            <td bgcolor="#897508">EEK</td>
								            <td bgcolor="#897508">233</td>
								        </tr>
								        <tr>
								            <td>Эфиопия</td>
								            <td>Эфиопский быр</td>
								            <td>ETB</td>
								            <td>230</td>
								        </tr>
								        <tr>
								            <th>Ю</th>
								            <th> </th>
								            <th> </th>
								            <th> </th>
								        </tr>
								        <tr>
								            <td>Югославия</td>
								            <td>Югославский динар</td>
								            <td>YUN</td>
								            <td>890</td>
								        </tr>
								        <tr>
								            <th>Я</th>
								            <th> </th>
								            <th> </th>
								            <th> </th>
								        </tr>
								        <tr>
								            <td>Ямайка</td>
								            <td>Ямайский доллар</td>
								            <td>JMD</td>
								            <td>388</td>
								        </tr>
								        <tr>
								            <td bgcolor="#897508">Япония</td>
								            <td bgcolor="#897508">Иена</td>
								            <td bgcolor="#897508">JPY</td>
								            <td bgcolor="#897508">392</td>
								        </tr>
								    </tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
	<script type="text/javascript">
		$(function(){
			$("#send").click(function(e){
				e.preventDefault();
				$(this).hide();
				$(this).parent().append("<img id='remove' src='image/ajax.gif' style='width:45px'>");
				$.post('convert.php', {'from':1,'fromName':$("#fromName").val(),'toName':$("#toName").val()}, function(response){
		            $("#send").attr("sum",1*response);
		            $("#send").show();
		            $("#remove").remove();
					$("#to").val(($("#from").val()*response).toFixed(2));     
		        });
			})
			$("#from").keyup(function(){
				// var from = ($(this).val()*$("#send").attr("sum"));
				$("#to").val(($(this).val()*$("#send").attr("sum")).toFixed(2));
			});
			$("#to").keyup(function(){
				// var b = ($(this).val()/$("#send").attr("sum"));
				$("#from").val(($(this).val()/$("#send").attr("sum")).toFixed(2));
			});
			$("#send").attr("sum",$("#to").val()/$("#from").val());
			$("#fromText").focus(function(){
				$("#fromTextValue").removeClass("hidden");
			});
			$("#fromTextValue .table tr td").click(function(e){
				e.preventDefault();
				$("#fromText").val($(this).parent().children().eq(1).html());
				$("#fromName").val($(this).parent().children().eq(2).html());
				$("#fromTextValue").addClass("hidden");
			});

			$("#fromText").keyup(function(){
				$("#fromTextValue").removeClass("hidden");
	        	_this = this;
	        
	        	$.each($("#fromTextValue .table tr"), function() {
		            if($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1) {
		                $(this).hide();
		            } else {
		                $(this).show(); 
	                }               
	            });
	        });

	        $("#toText").focus(function(){
				$("#toTextValue").removeClass("hidden");
			});
			$("#toTextValue .table tr td").click(function(e){
				e.preventDefault();
				$("#toText").val($(this).parent().children().eq(1).html());
				$("#toName").val($(this).parent().children().eq(2).html());
				$("#toTextValue").addClass("hidden");
			});

			$("#toText").keyup(function(){
				$("#toTextValue").removeClass("hidden");
	        	_this = this;
	        
	        	$.each($("#toTextValue .table tr"), function() {
		            if($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1) {
		                $(this).hide();
		            } else {
		                $(this).show(); 
	                }               
	            });
	        });

		})
	</script>
</body>
</html>
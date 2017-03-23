<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="vendor/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="vendor/css/grid.css">
	<link rel="stylesheet" href="vendor/css/formalize.css" />
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
	<script src="vendor/js/jquery.js"></script>
	<script src="vendor/js/jquery.formalize.js"></script>
	<meta charset="UTF-8">
	<title>Вакансии</title>
</head>
<body>
	<header id="header-job-vacancy">
		<div class="row">
			<div class="col span_1_of_2">
				<img src="img/logo.png" alt="Стекко логотип" id="logo">
				<div id="search">
					<form action="#" method="GET">
						<label for="search">
							<input type="search" id="search" placeholder="Поиск">
						</label>
						<button type="submit" class="btn">
							<span>Поиск</span>
						</button>
					</form>
				</div>
			</div>
			<div class="col span_1_of_2">
				<ul id="contacts-nav">
					<li>+7(495)921-36-65</li>
					<li><a href="#">Заказать обратный звонок</a></li>
					<li>zakaz@stekko.ru</li>
					<li>Код клиента: АЧ-818</li>
					<li><a href="#">Заказать просчет</a></li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col span_3_of_3" id="company-description">
				<h1>Завод архитектурного стекла <span style="display: block;">Промышленная переработка</span></h1>
			</div>	
		</div>

		<section class="section-navigation">
			<nav class="row">
				<ul class="main-nav">
					<li><a href="#">О заводе</a></li>
					<li><a href="#">Продукты</a></li>
					<li><a href="#">Портфолио</a></li>
					<li><a href="#">Отзывы</a></li>
					<li><a href="#">Партнеры</a></li>
					<li><a href="#">Контакты</a></li>
				</ul>
			</nav>
		</section>					
	</header>

	<section class="section-main">
		<div class="row">
			<div class="col span_3_of_8">
				<h3>Как мы работаем</h3>
				<ul class="description">
					<li><a href="#">Типовая схема работы</a></li>
					<li><a href="#">Условия отгрузки</a></li>
					<li><a href="#">Сертификация стекла</a></li>
					<li><a href="#">Техноллогические условия, ГОСТы</a></li>
				</ul>
				<h3>Производство</h3>
				<ul class="description">
					<li><a href="#">Экскурсия по производству</a></li>
					<li><a href="#">Оборудование</a></li>
					<li><a href="#">Возможные объемы</a></li>
				</ul>
				<h3>
					<a href="#">История</a>
				</h3>
				<h3>
					<a href="#">Сертификаты, дипломы и награды</a>
				</h3>
				<h3>
					<a href="#">Вакансии</a>
				</h3>
			</div>
			<div class="col span_5_of_8" >
				<h3 id="big-header">Вакансии ООО &quot;Стекко&quot;</h3>
				<figure>
					<img src="img/office.jpg" alt="Пустой офис" width="100%">
				</figure>
				<p class="career-opportunities">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque adipisci id perspiciatis veniam magnam! Numquam incidunt placeat eos cum. Beatae perspiciatis officiis sint harum voluptatibus, est quam laborum labore. Nulla.Itaque adipisci id perspiciatis veniam magnam! Numquam incidunt placeat eos cum.
				</p>
				<section class="section-possitions">
					<ul id="jobs">
						<li><a href="#">Слесари ремонтники</a></li>
						<li><a href="#">Электрики</a></li>
						<li><a href="#">Обработчики стекла</a></li>
						<li><a href="#">Менеджеры по продажам</a></li>
						<li><a href="#">Руководитель отдела</a></li>
						<li><a href="#">Редактор блога</a></li>
					</ul>
				</section>
			</div>
		</div>
	</section>
	
	<footer id="footer">
		<div class="row">
			<div class="col span_1_of_2">
				<h3 id="subscribe">Подписаться на обновление прайс-листа</h3>
			</div>
			<div class="col span_1_of_2">
				<form action="#">
					<input type="search" placeholder="example@gmail.com">
					<button type="submit" class="btn"><span>Подписаться</span></button>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col span_1_of_4">
				<h3>О заводе</h3>
				<ul class="footer-menu-ul">
					<li><a href="#">Как мы работаем</a></li>
					<li><a href="#">Производство</a></li>
					<li><a href="#">История</a></li>
					<li><a href="#">Сертификаты, дипломы,награды</a></li>
					<li><a href="#">Вакансии</a></li>
				</ul>
			</div>
			<div class="col span_1_of_4">
				<h3>Продукты</h3>
				<ul class="footer-menu-ul">
					<li><a href="#">Стекло</a></li>
					<li><a href="#">Зеркало</a></li>
					<li><a href="#">Триплекс</a></li>
					<li><a href="#">Закаленное стекло</a></li>
					<li><a href="#">Обработка стекла</a></li>
					<li><a href="#">Доставка</a></li>
				</ul>
			</div>
			<div class="col span_1_of_4">
				<ul class="footer-menu-ul">
					<h3>&nbsp;</h3>
					<li><a href="#">Портфолио</a></li>
					<li><a href="#">Отзывы</a></li>
					<li><a href="#">Партнеры</a></li>
					<li><a href="#">Контакты</a></li>
					<li><a href="#">Карта сайта</a></li>
				</ul>
			</div>
			<div class="col span_1_of_4">
				<address>
					<h3>&nbsp;</h3>
					<div itemscope itemtype="http://schema.org/Organization">
						<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
							Адрес офиса:<br>
							<span itemprop="addressLocality">г.Москва,</span>
							<span itemprop="streetAddress">ул.Дубинская, д.75</span>
							Адрес производства:<br>
							<span itemprop="addressLocality">Московская обл, г.Дмитров</span>
							<span itemprop="streetAddress">ул.Промышленная, д.27</span>
						</div>
						<span itemprop="telephone"><a href="tel:+74959213665">
							+7(495)921-36-65</a></span>
							<span itemprop="email">zakaz@stekko.ru</span>
						</div>
					</address>

				</div>
			</div>
		</div>
	</footer>
</body>
</html>
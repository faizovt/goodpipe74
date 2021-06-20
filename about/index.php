

		<?php 
			$title = "О Компании - Хорошие Трубы";
			include '../header.php';
			?>

		<script>
			$('body').toggleClass('lock');
		</script>

		<div id="page-preloader" class="preloader">
			<div class="loader">
				
			</div>
		</div>

		<section class="production" id="production">
			<div class="container">
				<h2 class="section-title wow animate__animated animate__fadeInUp">О КОМПАНИИ</h2>
				<div class="breadcrumbs">
					<a href="/">Главная</a> <span class="breadcrumbs-arrow">></span> <span>О Компании</span>
				</div>
				<div class="row">
					<div class="col-12 col-md-6 order-last order-md-first">
						<img src="/img/production/production__img-3.jpg" alt="">
					</div>
					<div class="col-12 col-md-6 order-first order-md-last">
						<div class="production-text">
							<div class="production-text__title"><div class="production-text__title-text">Наша миссия</div></div>
							<div class="production-text__subtitle">
								<span>Наша компания специализируется на производстве и продаже труб малого диаметра для потребительских нужд.</span>
								<span>Нашей основной целью всегда являлось обеспечение наилучшего качества труб для наших клиентов.</span>
								<span>Мы искренне верим, что только продукция, сделанная с душой и отвечающая всем международным стандартам, способна прослужить долгие-долгие годы.</span>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-12 col-md-6">

						<div class="production-text">
							<div class="production-text__title"><div class="production-text__title-text">История</div></div>
							<div class="production-text__subtitle">
								<span>Наша компания была основана в 2010-ом году и с тех пор успешно функционирует как поставщик труб малого диаметра.</span>
								<span>С тех пор в производство были внедрены новые передовые технологии, позволяющие производить качественные трубы, которые прослужат много-много лет.</span>
								<span>На сегодняшний день компания насчитывает около 1000 сотрудников.</span>
							</div>
						</div>
						
					</div>
					<div class="col-12 col-md-6">

						<img src="/img/production/production__img-4.jpg" alt="">
						
					</div>
				</div>

			</div>
		</section>

		<section class="reviews">
			<div class="container">
				<div class="col-12">
					<h2 class="section-title wow animate__animated animate__fadeInUp">ОТЗЫВЫ</h2>
					<div class="reviews__widget">
						<script src="https://apps.elfsight.com/p/platform.js" defer></script>
						<div class="elfsight-app-19fe39a1-81e5-4556-9534-17da07499dc6"></div>
					</div>
				</div>
			</div>
		</section>

			<section class="contacts">
				<div class="contacts-block">
					<div class="contacts-block__address contacts-block__text">
						<span class="contacts-block__title">Адрес офиса:</span>
						г. Челябинск, ул. Енисейская, 8к1
					</div>
					<div class="contacts-block__phone contacts-block__text">
						<span class="contacts-block__title">Тел. Отдела продаж:</span>
						8 (999) 585-89-31
					</div>
					<div class="contacts-block__cta contacts-block__text">
						<button class="button">Заказать звонок</button>
					</div>
					<div class="contacts-block__mail contacts-block__text">
						<span class="contacts-block__title">E-mail:</span>
						mail@goodpipe74.ru
					</div>
				</div>
				<script async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A00c7f99c8129d36a3f8679e5807b5ece3a64444a5f93994a391807485368bf08&amp;width=100%25&amp;height=550&amp;lang=ru_RU&amp;scroll=false"></script>
			</section>

		<?php include '../offer.php'; ?>

		<?php include '../footer.php'; ?>

		<?php include '../overlay.php'; ?>

		<!-- <script src="js/script.js"></script> -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/jquery-3.2.1.slim.min.js"><\/script>')</script>
		<script src="/js/jquery.maskedinput.min.js"></script>

		<script>
			$(document).ready(function() {
				$("#telephone").mask("+7 (999) 999-99-99");
			});
		</script>

		<script>
			$(document).ready(function() {
				$("#phone").mask("+7 (999) 999-99-99");
			});
		</script>

		<script>

			$(document).ready(function()
			{

				$('.header__burger').click(function(){
					$('.header__burger, .header__menu').toggleClass('active');
					$('body').toggleClass('lock');
				});

			});
			
		</script>

		<script>
			$(document).ready(function()
			{

				$('.contacts-block__cta').on("click", function()
				{
					$('.overlay').show()
				});
				
				$('.popup-close').on("click", function()
				{
					$('.overlay').hide();
				});

			});
		</script>

		<script src="/js/wow.min.js"></script>
		<script>
			new WOW().init();
		</script>

	</body>
</html>
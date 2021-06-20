

		<?php 
			$title = "Главная - Хорошие Трубы";
			include 'header.php';
		?>

		<script>
			$('body').toggleClass('lock');
		</script>

		<div id="page-preloader" class="preloader">
			<div class="loader">

			</div>
		</div>

		<section class="main dark-bg">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-12 col-lg-5">
						<div class="main-img hidden-mobile">
							<img src="img/main/main-img.png" alt="Картон">
						</div>
					</div>
					<div class="col-12 col-lg-7">
						<div class="main-text">
							<h1 class="main-text__title">Производство труб из полипропилена</h1>
							<div class="main-text__subtitle">с доставкой по всей России</div>
							<div class="main-text__form">
								<!-- Тут будет форма -->
								<div class="form-title">
									Получите индивидуальное предложение на производство и поставку трубной продукции
									<span class="form-title__important">Образцы труб бесплатно!</span>
								</div><!-- /.form-title -->
								<form action="mailer/smart.php" method="POST" class="form">
									<input id="phone2" class="form__input" type="tel" name="user_phone" placeholder="Введите номер телефона" required>
									<button class="button button_big" type="submit">Оставить заявку!</button>
								</form>
								<small class="form-small">Нажимая кнопку "Оставить заявку!" вы даете свое согласие на обработку персональных данных в соответствии с <a href="/privacy/privacy.pdf" target="_blank">Условиями</a> *</small>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="features">
			<div class="container">
				<div class="numbers">
					<div class="numbers-block">
						<div class="numbers-block__title">5 лет</div>
						<div class="numbers-block__text">На рынке трубных изделий</div>
					</div>
					<div class="numbers-block">
						<div class="numbers-block__title">до 1 000 000 тонн</div>
						<div class="numbers-block__text">Ежемесячный объем производства труб</div>
					</div>
					<div class="numbers-block">
						<div class="numbers-block__title">4 000 м<sup>2</sup></div>
						<div class="numbers-block__text">Площадь склада</div>
					</div>
				</div>
				<div class="features-blocks">
					<div class="features-block">
						<div class="features-block__img">
							<img src="img/features/icon-1.png" alt="Производство">
						</div>
						<div class="features-block__text">
							<div class="features-block__title">Производство</div>
							<div class="features-block__descr">4 технологические линии способны выполнить заказ любой степени сложности</div>
						</div>
					</div>
					<div class="features-block">
						<div class="features-block__img">
							<img src="img/features/icon-2.png" alt="Бесплатные образцы">
						</div>
						<div class="features-block__text">
							<div class="features-block__title">Бесплатные образцы</div>
							<div class="features-block__descr">Бесплатно делаем образцы труб - это помогает заранее увидеть трубу</div>
						</div>
					</div>
					<div class="features-block">
						<div class="features-block__img">
							<img src="img/features/icon-3.png" alt="Стабильное качество">
						</div>
						<div class="features-block__text">
							<div class="features-block__title">Стабильное качество</div>
							<div class="features-block__descr">Собственная лаборатория контролирует качество на каждом этапе производства</div>
						</div>
					</div>
					<div class="features-block">
						<div class="features-block__img">
							<img src="img/features/icon-4.png" alt="Страховой запас">
						</div>
						<div class="features-block__text">
							<div class="features-block__title">Страховой запас</div>
							<div class="features-block__descr">Можем хранить ваши трубы на своих складах и поставлять их партиями</div>
						</div>
					</div>
					<div class="features-block">
						<div class="features-block__img">
							<img src="img/features/icon-5.png" alt="Флексопечать">
						</div>
						<div class="features-block__text">
							<div class="features-block__title">Экология</div>
							<div class="features-block__descr">Наши очистные сооружения соответствуют всем мировым стандартам</div>
						</div>
					</div>
					<div class="features-block">
						<div class="features-block__img">
							<img src="img/features/icon-6.png" alt="Гидрофобные добавки">
						</div>
						<div class="features-block__text">
							<div class="features-block__title">Особый сплав</div>
							<div class="features-block__descr">На производстве реализована технология, которая позволяет трубам стать прочнее</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="catalog">
			<div class="container">
				<h2 class="section-title wow animate__animated animate__fadeInUp">НАША ПРОДУКЦИЯ</h2>
				<div class="products-blocks">
					<div class="products-block">
						<a href="/products/heating/">
							<div class="products-block__img">
								<img src="/img/products/img-product-heating-aluminium.jpg" alt="">
							</div>
							<div class="products-block__text">Отопление</div>
						</a>
					</div>
					<div class="products-block">
						<a href="/products/water/">
							<div class="products-block__img">
								<img src="/img/products/img-product-water-hot.jpg" alt="">
							</div>
							<div class="products-block__text">Водопровод</div>
						</a>
					</div>
					<div class="products-block">
						<a href="/products/sewage/">
							<div class="products-block__img">
								<img src="/img/products/img-product-sewage-inside.jpg" alt="">
							</div>
							<div class="products-block__text">Канализация</div>
						</a>
					</div>
				</div>				
			</div>
		</section>
		<?php include 'offer.php'; ?>
		<section class="clients" id="clients">
			<div class="container">
				<h2 class="section-title wow animate__animated animate__fadeInUp">НАШИ КЛИЕНТЫ</h2>
				<div class="clients-blocks">
					<div class="clients-block">
						<div class="clients-block__logo">
							<a href="#" target="_blank">
								<img src="img/clients/clients-logo-1.png" alt="Восход">
							</a>
						</div>
					</div>
					<div class="clients-block">
						<div class="clients-block__logo">
							<a href="" target="_blank">
								<img src="img/clients/clients-logo-2.png" alt="Стерх">
							</a>
						</div>
					</div>
					<div class="clients-block">
						<div class="clients-block__logo">
							<a href="" target="_blank">
								<img src="img/clients/clients-logo-3.png" alt="Серебряный снег">
							</a>
						</div>
					</div>
					<div class="clients-block">
						<div class="clients-block__logo">
							<a href="" target="_blank">
								<img src="img/clients/clients-logo-4.png" alt="Авдон">
							</a>
						</div>
					</div>
					<div class="clients-block">
						<div class="clients-block__logo">
							<a href="" target="_blank">
								<img src="img/clients/clients-logo-5.png" alt="Турбаслинские бройлеры">
							</a>
						</div>
					</div>
					<div class="clients-block">
						<div class="clients-block__logo">
							<a href="" target="_blank">
								<img src="img/clients/clients-logo-6.png" alt="Башкирское мороженое">
							</a>
						</div>
					</div>
					<div class="clients-block">
						<div class="clients-block__logo">
							<a href="" target="_blank">
								<img src="img/clients/clients-logo-7.png" alt="Аллат">
							</a>
						</div>
					</div>
					<div class="clients-block">
						<div class="clients-block__logo">
							<a href="" target="_blank">
								<img src="img/clients/clients-logo-8.png" alt="Альтернатива">
							</a>
						</div>
					</div>
					<div class="clients-block">
						<div class="clients-block__logo">
							<a href="" target="_blank">
								<img src="img/clients/clients-logo-9.png" alt="Индюшкин">
							</a>
						</div>
					</div>
					<div class="clients-block">
						<div class="clients-block__logo">
							<a href="http://www.salstek.ru" target="_blank">
								<img src="img/clients/clients-logo-10.png" alt="СалаватСтекло">
							</a>
						</div>
					</div>
					<div class="clients-block">
						<div class="clients-block__logo">
							<a href="https://ufamol.ru/" target="_blank">
								<img src="img/clients/clients-logo-11.png" alt="Молочный фермер">
							</a>
						</div>
					</div>
					<div class="clients-block">
						<div class="clients-block__logo">
							<a href="" target="_blank">
								<img src="img/clients/clients-logo-12.png" alt="МЕГИ">
							</a>
						</div>
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

		<?php include 'footer.php'; ?>
		<?php include 'overlay.php'; ?>

		<!-- <script src="js/script.js"></script> -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/jquery-3.2.1.slim.min.js"><\/script>')</script>
		<script src="/js/jquery.maskedinput.min.js"></script>

		<script>
			$(document).ready(function() {
				$("#phone").mask("+7 (999) 999-99-99");
			});
		</script>

		<script>
			$(document).ready(function() {
				$("#phone2").mask("+7 (999) 999-99-99");
			});
		</script>

		<script>
			$(document).ready(function() {
				$("#phone3").mask("+7 (999) 999-99-99");
			});
		</script>

		<script>
			$(document).ready(function() {
				$("#telephone").mask("+7 (999) 999-99-99");
			});
		</script>

		<script>
			$(document).ready(function()
			{

				$('.header__burger').click(function(event){
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
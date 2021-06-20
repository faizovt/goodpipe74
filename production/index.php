

		<?php 
			$title = "Производство - Хорошие Трубы";
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
				<h2 class="section-title wow animate__animated animate__fadeInUp">ПРОИЗВОДСТВО</h2>
				<div class="breadcrumbs">
					<a href="/">Главная</a> <span class="breadcrumbs-arrow">></span> <span>Производство</span>
				</div>
				<div class="row">
					<div class="col-12 col-md-6 order-last order-md-first">
						<div class="fotorama" data-width="536" data-ratio="268/189" data-loop="true" data-transition="dissolve">
							<div class="production-block"><img src="/img/production/production__img-1.jpg" alt=""></div>
							<div class="production-block"><img src="/img/production/production__img-2.jpg" alt=""></div>
							<div class="production-block"><img src="/img/production/production__img-3.jpg" alt=""></div>
						</div>
					</div>
					<div class="col-12 col-md-6 order-first order-md-last">
						<div class="production-text">
							<div class="production-text__title"><div class="production-text__title-text">Производство</div></div>
							<div class="production-text__subtitle">
								<span>Современное оборудование позволяет производить до 5 миллионов квадратных метров гофрокартона ежемесячно. Гофрокороба и лотки производятся по ГОСТу или чертежам заказчика.</span>
								<span>Досконально прорабатываем конструкции коробов и составы сырья, учитывая условия хранения, транспортировки и производства вашей продукции.</span>
								<span>Возможно нанесение цветной флексопечати на поверхность коробов.</span>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-12 col-md-6">

						<div class="production-text">
							<div class="production-text__title"><div class="production-text__title-text">Собственный склад</div></div>
							<div class="production-text__subtitle">
								<span>Современное оборудование позволяет производить до 5 миллионов квадратных метров гофрокартона ежемесячно. Гофрокороба и лотки производятся по ГОСТу или чертежам заказчика.</span>
								<span>Досконально прорабатываем конструкции коробов и составы сырья, учитывая условия хранения, транспортировки и производства вашей продукции.</span>
								<span>Возможно нанесение цветной флексопечати на поверхность коробов.</span>
							</div>
						</div>
						
					</div>
					<div class="col-12 col-md-6">

						<img src="/img/production/sklad.webp" alt="">
						
					</div>
				</div>

			</div>
		</section>

		<?php include '../offer.php'; ?>

		<?php include '../footer.php'; ?>

		<div class="overlay">
			<div class="popup">
				<div class="popup-title">ФОРМА ОБРАТНОЙ СВЯЗИ</div>
				<div class="popup-close"> &times;</div>
				<div class="popup-form">
					<form action="#" class="main-form">
						<div class="popup-form-header">
							Получите индивидуальное предложение <span>на производство и поставку изделий</span>
							<label for="phone" class="popup-form__label">
								Введите ваш номер телефона:
							</label>
							<input type="tel" class="popup-form__input" name="phone" required placeholder="+7 (XXX) XXX-XX-XX">
							<button class="button popup-form__btn">
								Оставить заявку!
							</button>
							<div class="popup-form__note">
								*Минимальный заказ 1м
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>

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

			$(document).ready(function()
			{

				$('.header__burger').click(function(){
					$('.header__burger, .header__menu').toggleClass('active');
					$('body').toggleClass('lock');
				});

			});
			
		</script>

		<script>

			$(document).ready(function(){
  			$('').slick({
    			dots: true,
    			infinite: true,
    			speed: 500,
    			fade: true,
    			cssEase: 'linear'
    			prevArrow: '<button type="button" class="slick-next">Next</button>',
  			});
			});

		</script>

		<script src="/js/wow.min.js"></script>
		<script>
			new WOW().init();
		</script>

	</body>
</html>
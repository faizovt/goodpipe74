		<?php 
			$title = "Трубы для отопления - Хорошие Трубы";
			include '../../header.php';
		?>

		<section class="products">
			<div class="container">
				<h2 class="section-title wow animate__animated animate__fadeInUp">ТРУБЫ ДЛЯ ОТОПЛЕНИЯ</h2>
				<div class="breadcrumbs">
					<a href="/">Главная</a> <span class="breadcrumbs-arrow">></span> <a href="/products">Продукция</a> <span class="breadcrumbs-arrow">></span> <span>Трубы для отопления</span>
				</div>
				<div class="products-blocks">
					<div class="products-block">
						<a href="fiberglass/">
							<div class="products-block__img">
								<img src="/img/products/img-product-heating-fiberglass.jpg" alt="">
							</div>
							<div class="products-block__text">Трубы полипропиленовые <br>армированные для отопления <br>PN25 (стекловолокно)</div>
						</a>
					</div>
					<div class="products-block">
						<a href="aluminum/">
							<div class="products-block__img">
								<img src="/img/products/img-product-heating-aluminium.jpg" alt="">
							</div>
							<div class="products-block__text">Трубы полипропиленовые <br>армированные для отопления <br>PN25 (алюминий)</div>
						</a>
					</div>
				</div>
			</div>
		</section>

		<?php include '../../offer.php'; ?>

		<?php include '../../footer.php'; ?>

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
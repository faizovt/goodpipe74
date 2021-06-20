		<?php 
			$title = "Водопроводные трубы - Хорошие Трубы";
			include '../../header.php';
		?>

		<section class="products">
			<div class="container">
				<h2 class="section-title wow animate__animated animate__fadeInUp">ВОДОПРОВОДНЫЕ ТРУБЫ</h2>
				<div class="breadcrumbs">
					<a href="/">Главная</a> <span class="breadcrumbs-arrow">></span> <a href="/products">Продукция</a> <span class="breadcrumbs-arrow">></span> <span>Водопроводные трубы</span>
				</div>
				<div class="products-blocks">
					<div class="products-block">
						<a href="cold/">
							<div class="products-block__img">
								<img src="/img/products/img-product-water-cold.jpg" alt="">
							</div>
							<div class="products-block__text">Трубы полипропиленовые <br>для холодного<br>водоснабжения PN10</div>
						</a>
					</div>
					<div class="products-block">
						<a href="hot/">
							<div class="products-block__img">
								<img src="/img/products/img-product-water-hot.jpg" alt="">
							</div>
							<div class="products-block__text">Трубы полипропиленовые <br>для горячего<br>водоснабжения PN20</div>
						</a>
					</div>
				</div>
			</div>
		</section>

		<?php include '../../offer.php'; ?>

		<?php include '../../footer.php'; ?>

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
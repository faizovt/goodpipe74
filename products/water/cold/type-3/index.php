		<?php 
			$title = "Труба полипропиленовая для холодного водоснабжения PN10 D32x2900 - Хорошие Трубы";
			include '../../../../header.php';
		?>

		<section class="products">
			<div class="container">
				<div class="products-product">
					<div class="row">
						<div class="breadcrumbs">
							<a href="/">Главная</a> <span class="breadcrumbs-arrow">></span> <a href="/products">Продукция</a> <span class="breadcrumbs-arrow">></span> <a href="/products/water">Водопроводные трубы</a> <span class="breadcrumbs-arrow">></span> <a href="/products/water/cold">Трубы для холодной воды</a> <span class="breadcrumbs-arrow">></span> <span>Труба PN10 D32x2900</span>
						</div>
						<div class="col-12 col-lg-6">
							<div class="products-product__img"><img src="/img/products/img-product-water-cold.jpg" alt=""></div>
						</div>
						<div class="col-12 col-lg-6">
							<div class="products-product__title">Труба полипропиленовая для холодного водоснабжения PN10 D32x2900</div>
							<div class="products-product__text">
								<div class="products-product__text-review">
									<span>Описание:</span> Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, eveniet nostrum veritatis aut iure tempore illum minus molestias reiciendis distinctio architecto deleniti optio impedit deserunt error animi consectetur magni. Voluptatem ab veniam voluptates nesciunt officia labore temporibus distinctio, repellat voluptatibus animi numquam ratione. Eaque, voluptatem, enim! Ullam provident facere, dicta. <br>
								</div>
								<div class="products-product__text-diameter">
									<span>Диаметр:</span> 32 мм <br>
								</div>
								<div class="products-product__text-length">
									<span>Длина:</span> 2900 мм (2,9 м) <br>
								</div>
								<div class="products-product__text-price">
									<span>Цена:</span> 99 руб.
								</div>
							</div>
							<div class="products-product__buy">
								<button class="products-product__buy-btn button">Заказать трубу</button>
							</div>
						</div>
					</div>
				</div>
			</div>
				<!-- <div class="products-product">
					<div class="products-product__title">Труба полипропиленовая армированная для отопления PN25 (стекловолокно)</div>
					<div class="products-product__img"><img src="/img/products/img-1.png" alt=""></div>
					<div class="products-product__text">Lorem ipsum dolor sit amet, consectetur adipisicing, elit. Libero illum quis unde molestias, vel incidunt repellat explicabo voluptatem consequuntur recusandae exercitationem quas fugit tenetur nobis! Harum voluptas, minima distinctio voluptate quisquam quam dolorum repellendus, dolores vel explicabo, consectetur veritatis eos laudantium ipsa doloremque beatae, vero nesciunt numquam excepturi qui dicta?</div>
					<div class="products-product__buy">
						<button class="products-product__buy-btn button">Заказать трубу</button>
					</div>
				</div>
			</div> -->
		</section>

		<?php include '../../../../footer.php'; ?>

		<?php include '../../../../overlay.php'; ?>

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

		<script>
			$(document).ready(function()
			{

				$('.products-product__buy').on("click", function()
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
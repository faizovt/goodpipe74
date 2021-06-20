<div class="overlay">
	<div class="popup">
		<div class="popup-title">ФОРМА ОБРАТНОЙ СВЯЗИ</div>
		<div class="popup-close"> &times;</div>
		<div class="popup-form">
			<form action="/mailer/smart.php" method="POST" id="form" class="form__body form">
				<div class="popup-form__item">
					<label class="popup-form__label">Имя*:</label>
					<input type="text" name="user_name" class="popup-form__input" required>
				</div>
				<div class="popup-form__item">
					<label class="popup-form__label">Телефон*:</label>
					<input id="phone" type="tel" name="user_phone" class="popup-form__input" required>
				</div>
				<div class="popup-form__item">
					<label class="popup-form__label">Сообщение:</label>
					<textarea name="user_message" id="popup-formMessage" class="popup-form__input"></textarea>
				</div>
				<div class="popup-form__item">
					<div class="checkbox">
						<input id="formAgreement" checked type="checkbox" name="user_agreement" class="popup-form-checkbox__input" required>
						<label for="formAgreement" class="popup-form-checkbox__label"><span>Я даю свое согласие на обработку персональных данных в соответствии с <a href="/privacy/privacy.pdf" target="_blank">Условиями</a> *</span></label>
					</div>
				</div>
				<button class="button button_big" type="submit">Оставить заявку!</button>
			</form>
		</div>
	</div>
</div>
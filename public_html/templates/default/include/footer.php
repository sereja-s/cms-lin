</main>
<footer class="footer">
	<div class="footer__container _container">
		<div class="footer__body">
			<div class="footer__main">
				<a href="<?= $this->alias() ?>" class="footer__logo _footer-title"><?= $this->set['name'] ?></a>
				<div class="footer__text"><?= $this->set['short_content'] ?></div>
				<div class="footer__contacts contacts-footer">
					<a href="" class="contacts-footer__item _icon-location"><?= $this->set['address'] ?></a>
					<a href="tel:<?= preg_replace('/[^\+\d]/', '', $this->set['phone']) ?>" class="contacts-footer__item _icon-phone"><?= $this->set['phone'] ?></a>
					<a href="mailto:<?= $this->set['email'] ?>" target="_blank" class="contacts-footer__item"><?= $this->set['email'] ?></a>
				</div>
			</div>
			<div data-spollers="768,max" class="footer__menu menu-footer">
				<div class="menu-footer__column">
					<button type="button" data-spoller class="menu-footer__title _footer-title">Menu</button>
					<ul class="menu-footer__list">
						<li><a href="" class="menu-footer__link">Products</a></li>
						<li><a href="" class="menu-footer__link">Rooms</a></li>
						<li><a href="" class="menu-footer__link">Inspirations</a></li>
						<li><a href="" class="menu-footer__link">About Us</a></li>
						<li><a href="" class="menu-footer__link">Terms & Policy</a></li>
					</ul>
				</div>
				<div class="menu-footer__column">
					<button type="button" data-spoller class="menu-footer__title _footer-title">Account</button>
					<ul class="menu-footer__list">
						<li><a href="" class="menu-footer__link">My Account</a></li>
						<li><a href="" class="menu-footer__link">Checkout</a></li>
						<li><a href="" class="menu-footer__link">My Cart</a></li>
						<li><a href="" class="menu-footer__link">My catalog</a></li>
					</ul>
				</div>
				<div class="menu-footer__column">
					<button type="button" data-spoller class="menu-footer__title _footer-title">Stay Connected</button>
					<ul class="menu-footer__list">
						<li><a href="" class="menu-footer__link">Facebook</a></li>
						<li><a href="" class="menu-footer__link">Instagram</a></li>
						<li><a href="" class="menu-footer__link">Twitter</a></li>
					</ul>
				</div>
			</div>
			<div class="footer__subscribe subscribe">
				<div class="subscribe__title _footer-title">Stay Updated</div>
				<form data-message="subscribe" data-test action="#" class="subscribe__form">
					<input autocomplete="off" type="text" name="form[]" data-error="Ошибка" data-value="Enter your email" class="subscribe__input _req _email">
					<button type="submit" class="subscribe__button _icon-send"></button>
				</form>
			</div>
		</div>
	</div>
</footer>
</div>
<div class="popup popup_popup">
	<div class="popup__content">
		<div class="popup__body">
			<div class="popup__close"></div>
		</div>
	</div>
</div>
<div class="popup popup_subscribe-message">
	<div class="popup__content">
		<div class="popup__body">
			<div class="popup__close"></div>
		</div>
	</div>
</div>
<div class="popup popup_video">
	<div class="popup__content">
		<div class="popup__body">
			<div class="popup__close popup__close_video"></div>
			<div class="popup__video _video"></div>
		</div>
	</div>
</div>

<!-- Swiper -->
<!-- <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script> -->
<!-- <script src="js/vendors.min.js"></script>
<script src="js/app.min.js"></script> -->

<?php $this->getScripts() ?>

</body>

</html>
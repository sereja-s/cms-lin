<!DOCTYPE html>
<html lang="ru">

<head>
	<title>Специи</title>
	<meta charset="UTF-8">
	<meta name="format-detection" content="telephone=no">
	<!-- <link rel="stylesheet" href="css/style.min.css"> -->
	<link rel="shortcut icon" href="favicon.ico">
	<!-- <meta name="robots" content="noindex, nofollow"> -->
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php $this->getStyles() ?>
</head>

<body>
	<div class="wrapper">
		<header class="header">
			<div class="header__wrapper">
				<div class="header__container _container">
					<div class="header__body">
						<div class="header__main">
							<a href="<?= $this->alias() ?>" class="header__logo"><img src="<?= $this->img($this->set['img']) ?>" alt="<?= $this->set['name'] ?>"></a>
							<div class="header__menu menu">
								<nav class="menu__body">
									<ul data-spollers="768,max" class="menu__list">

										<?php if (!empty($this->menu['catalog'])) : ?>

											<li class="menu__item">
												<a href="<?= $this->alias('catalog') ?>" class="menu__link">Продукция</a>
												<button data-spoller type="button" class="menu__arrow _icon-arrow-down"></button>
												<ul class="menu__sub-list">

													<?php foreach ($this->menu['catalog'] as $item) : ?>

														<li class="menu__sub-item">
															<a href="<?= $this->alias(['catalog' => $Item['alias']]) ?>" class="menu__sub-link"><?= $item['name'] ?></a>
														</li>

													<?php endforeach; ?>
													<!-- <li class="menu__sub-item">
														<a href="" class="menu__sub-link">Смеси специй</a>
													</li>	-->

												</ul>
											</li>

										<?php endif; ?>

										<?php if (!empty($this->menu['information'])) : ?>

											<?php foreach ($this->menu['information'] as $item) : ?>

												<li class="menu__item">

													<a href="<?= $this->alias(['information' => $item['alias']]) ?>" class="menu__link"><?= $item['name'] ?></a>

												</li>

											<?php endforeach; ?>

										<?php endif; ?>

										<!-- <li class="menu__item">
											<a href="" class="menu__link">Rooms</a>
											<button data-spoller type="button" class="menu__arrow _icon-arrow-down"></button>
											<ul class="menu__sub-list">
												<li class="menu__sub-item">
													<a href="" class="menu__sub-link">Room #1</a>
												</li>
												<li class="menu__sub-item">
													<a href="" class="menu__sub-link">Room #2</a>
												</li>
												<li class="menu__sub-item">
													<a href="" class="menu__sub-link">Room #3</a>
												</li>
												<li class="menu__sub-item">
													<a href="" class="menu__sub-link">Room #4</a>
												</li>
											</ul>
										</li> -->
										<li class="menu__item">
											<a href="tel:<?= preg_replace('/[^\+\d]/', '', $this->set['phone']) ?>" class="contacts-footer__item _icon-phone"><?= $this->set['phone'] ?></a>
										</li>
										<li class="menu__item">
											<a href="mailto:<?= $this->set['email'] ?>" target="_blank" class="contacts-footer__item">
												<?= $this->set['email'] ?></a>
										</li>
									</ul>
								</nav>
							</div>
						</div>
						<div class="header__search">
							<div class="search-form">
								<button type="button" class="search-form__icon _icon-search"></button>
								<form action="#" class="search-form__item">
									<button type="submit" class="search-form__btn _icon-search"></button>
									<input autocomplete="off" type="text" name="form[]" data-value="Найти" class="search-form__input">
								</form>
							</div>
						</div>
						<!-- <div class="header__actions actions-header">
							<a href="" class="actions-header__item actions-header__item_favorites _icon-favorite"></a>
							<div class="actions-header__item cart-header">
								<a href="" class="cart-header__icon _icon-cart"></a>
								<div class="cart-header__body">
									<ul class="cart-header__list cart-list"></ul>
								</div>
							</div>
							<a href="" class="actions-header__item actions-header__item_user _ibg">
								<picture>
									<source srcset="img/avatar.webp" type="image/webp"><img src="img/avatar.jpg" alt="Avatar">
								</picture>
							</a>
						</div> -->
						<button type="button" class="icon-menu">
							<span></span>
							<span></span>
							<span></span>
						</button>
					</div>
				</div>
			</div>
		</header>
		<main class="page">
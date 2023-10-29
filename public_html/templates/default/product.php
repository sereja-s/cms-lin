<?php if (!empty($data)) :  ?>

	<section class="page__products products">

		<div class="products__container _container">

			<h1 style="margin-top: 100px;" class="products__title _title"><?= $data['name'] ?></h1>

			<div class="products__items">

				<article class="products__item item-product">
					<div class="item-product__labels">

						<?php if (!empty($data['new'])) : ?>

							<div class="item-product__label item-product__label_new">New</div>

						<?php endif; ?>

						<?php if (!empty($data['discount'])) : ?>

							<div class="item-product__label item-product__label_sale">-<?= $data['discount'] ?>%</div>

						<?php endif; ?>

					</div>

					<div class="item-product__labels--prem">

						<?php if (!empty($data['hit'])) : ?>

							<div class="item-product__label--prem">ПРЕМИУМ</div>

						<?php endif; ?>

					</div>

					<a href="#" class="item-product__image _ibg">
						<img src="<?= $this->img($data['img']) ?>" alt="<?= $data['name'] ?>">
					</a>
					<div class="item-product__body">
						<div class="item-product__content">
							<h3 class="item-product__title"><?= $data['name'] ?></h3>
							<div class="item-product__text"><?= $data['content'] ?></div>
						</div>
						<!-- <div class="item-product__prices">
				<div class="item-product__price">Rp 2.500.000</div>
				<div class="item-product__price item-product__price_old">Rp 3.500.000</div>
			</div> -->
					</div>
				</article>

			</div>

		</div>

	</section>

<?php endif; ?>
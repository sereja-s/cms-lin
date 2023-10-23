<?php if (!empty($data)) :  ?>

	<section style="margin-top: 115px;" class="page__products products">
		<div class="products__container _container">

			<h1 class="products__title _title"><?= $data['name'] ?></h1>

			<?php if (empty($goods)) : ?>

				<h3>по Вашему запросу ничего не найдено</h3>

			<?php else : ?>

				<div style="margin-bottom: 50px;">

					<nav class="menu__body-cat">
						<ul data-spollers="768,max" class="menu__list">

							<?php if (!empty($this->menu['catalog'])) : ?>

								<li class="menu__item">

									<?php if (!empty($order)) : ?>

										<button data-spoller type="button" class="menu__link-cat">Сортировать по:</button>
										<ul style="min-width: auto;" class="menu__sub-list">

											<?php

											$GET = $_GET ?? [];

											?>

											<?php foreach ($order as $name => $item) : ?>

												<li class="menu__sub-item">
													<a href="<?= $this->alias('catalog/' . ($this->parameters['alias'] ?? ''), array_merge($GET, ['order' => $item])) ?>" class="menu__sub-link"><?= $name ?></a>
												</li>

											<?php endforeach; ?>

											<!-- <li class="menu__sub-item">
												<a href="#" class="menu__sub-link">цене</a>
											</li> -->

										</ul>

									<?php endif; ?>

								</li>

							<?php endif; ?>

							<?php if (!empty($quantities)) : ?>

								<li class="menu__item pagination__count">
									<!-- <a href="#" class="menu__link">Показывать по</a> -->
									<button data-spoller type="button" class="menu__link-cat">Показывать по: <span><?= $_SESSION['quantities'] ?? QTY ?></span></button>
									<ul style="min-width: auto;" class="menu__sub-list">

										<?php foreach ($quantities as $item) : ?>

											<li class="menu__sub-item qtyitems">
												<a href="#" class="menu__sub-link"><?= $item ?></a>
											</li>

										<?php endforeach; ?>

									</ul>
								</li>

							<?php endif; ?>

						</ul>
					</nav>

				</div>

				<div class="products__items">

					<?php foreach ($goods as $item) {

						$this->showGoods($item);
					} ?>

				</div>

		</div>

		<?php if (!empty($pages)) : ?>

			<div class="catalog-section-pagination">

				<?php $this->pagination($pages) ?>

			</div>

		<?php endif; ?>

	<?php endif; ?>

	</section>

<?php endif; ?>
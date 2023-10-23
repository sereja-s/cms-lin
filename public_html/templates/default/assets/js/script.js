$(function () {

	//=============== Обработчик кнопи выбора количества отображаемых товаров каталога (Выпуск №134) ===================//

	$('.qtyitems a').on('click', function (e) {

		e.preventDefault();

		let qty = +$(this).text()

		if (qty && !isNaN(qty)) {

			$(this).closest('.pagination__count').children('span').html(qty)

			$.ajax({

				url: '/',

				data: {

					qty: qty,

					ajax: 'catalog_quantities'

				}
			})

			// после выбора кол-ва отображаемых товаров на странице каталога, запустим перезагрузку страницы (+Выпуск №136)
			setTimeout(() => {

				location.href = location.pathname

			}, 100)

		}

	})

});
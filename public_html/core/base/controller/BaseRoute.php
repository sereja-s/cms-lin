<?php

namespace core\base\controller;

/** 
 * Класс который будет осуществлять проверку: синхронный запрос пришёл или асинхронный (Выпуск №67)
 */
class BaseRoute
{
	use Singleton, BaseMethods;

	public static function routeDirection()
	{
		// в статическом контексте, конструкция $this не доступна (т.к. она является ссылкой на объект класса, а объкта 
		// класса здесь не существует Мы просто ипользуем метод класса, не создавая объект)
		// Здесь используется конструкция(ключевое слово) self которая,означает ,что мы ссылаемся на наш собственный класс)

		// сделаем проверку выполнения условия: если запрос пришёл- Ajax	
		// (как только мы записали конструкцию: self::instance() тут же выполнился метод: instance() трейта Singleton 
		// и в свойстве: $_instance сохранился объект нашего класса)		
		if (self::instance()->isAjax()) {
			// подключим Ajax контроллер
			exit((new BaseAjax())->route());
		}
		// иначе идём по основному маршруту через RouteController
		RouteController::instance()->route();
	}
}

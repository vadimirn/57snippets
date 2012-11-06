/**
 * Команды для работы с отладочной консолью Google Chrome
 *
 */

/**
 * простое логирование
 */
console.log(something);


/**
 * развернутое оборажение объекта
 */
console.dir(something);
// или
dir(something);


/**
 * инспектирование элемента
 */
inspect(something);


/**
 * ссылка из консоли на элемент, выбранный в inspect
 */
$0


/**
 * селектор в стиле jQuery
 */
$$('selector')


/**
 * мониторинг эвентов в консоли
 */
monitorEvents($$('body'));


/**
 * мониторинг событий mouse или key
 */
monitorEvents($$('body'), 'mouse');


/**
 * список свойств объекта
 */
keys(document);


/**
 * список значений свойств объекта
 */
values(document);


/**
 * копирование информации из консоли
 */
copy(values(document));




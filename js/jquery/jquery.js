/**
 * Полезные кусочки кода для ядра jQuery
 * 
 */


/**
 * Правильное навештвание событий
 */
$(document).on('submit', selector, function(_event) {

    _event.preventDefault();			// Предупреждаем "всплывание события" по DOM

	var initiator = $(_event.target);	// Доступ к объекту, инициализировавшему событие

});

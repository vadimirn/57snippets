<?php
/**
 *
 * Сниппеты для популярного фреймворка Yii
 *
 */


/**
 * Доступ к параметру, заданному в конфиге
 * Перед использованием объявить параметр в массиве конфига, ['params']['param_name']
 */

Yii::app()->params['param_name'];

/**
 * Првильный LIKE поиск
 */

$this->name = addcslashes($this->name, '%_'); //Убираем символы, чтобы не сломать LIKE

$q = new CDbCriteria( array(
    'condition' => "country_id = :country_id AND name LIKE :name", // Никаких кавычек вокруг :name
    'params'    => array(':name' => "%$this->name", ':country_id' => $this->country_id)
) );

return City::model()->findAll($q);

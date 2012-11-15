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
 * Паджинация в YII
 *
 */

// в контроллере
$criteria           = new CDbCriteria();
$count              = News::model()->count($criteria);
$pages              = new CPagination($count);

$pages->pageSize    = 10;
$pages->applyLimit($criteria);
$model              = News::model()->recent()->findAll($criteria);

$this->render('view', array(
     'model' => $model,
     'pages' => $pages
));

// в отображении
$this->widget('CLinkPager', array(
    'pages' => $pages,
));



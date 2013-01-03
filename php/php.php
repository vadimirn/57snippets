<?
/**
 * Сниппеты на чистом php
 *
 */

// Быстрая проверка элементов в массиве
$categories = array_filter($this->categories, function($var) { return ((int)$var > 0); } );

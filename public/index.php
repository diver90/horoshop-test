<?php
/**
 * Created by PhpStorm.
 * User: MZavalniuk
 * Date: 19.09.2019
 * Time: 14:56
 */
include_once ('D:\OSPanel\domains\horoshop.test\public_html\php-test\src\ProductAggregator.php');

$products = new \Horoshop\ProductAggregator('data.json');


$products->find(1,2,3);


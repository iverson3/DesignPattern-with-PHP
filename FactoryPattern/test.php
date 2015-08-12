<?php
/**
 * 测试代码
 * User: ASUA
 * Date: 2014/12/10
 * Time: 17:36
 */

include_once "Factory.php";

$db1 = Factory::createDatabase();

$db2 = Factory::createDatabase();

$db3 = Factory::createDatabase();



/*
$db = new Database();
$db = new Database();
$db = new Database();
$db = new Database();
*/
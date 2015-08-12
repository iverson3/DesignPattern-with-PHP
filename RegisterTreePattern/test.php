<?php
/**
 * 测试代码
 * User: ASUA
 * Date: 2014/12/10
 * Time: 17:36
 */

include_once "Database.class.php";
include_once "Register.php";

$db = Database::getInstance();
Register::set("db1", $db);

$db2 = Register::get("db1");

echo $db2->where("")->order("")->query();

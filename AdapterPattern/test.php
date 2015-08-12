<?php
/**
 * 测试代码
 * User: ASUA
 * Date: 2014/12/10
 * Time: 19:22
 */

include_once "./Database/MySQL.php";

$host = "localhost";
$user = "root";
$pwd = "333";
$database = "test";

$sql = "show databases;";

/**
 * 此时 不管是操作哪种数据库，它们的API都是相同的
 * 不同数据库的不同实现和操作细节，都被封装起来了
 * 你要做的就是 实例化不同的数据库类，使用同一套API
 */
$db = new MySQL();
//$db = new SqlServer();
//$db = new Oracle();

$db->connect($host, $user, $pwd, $database);
$db->query($sql);
$db->close();


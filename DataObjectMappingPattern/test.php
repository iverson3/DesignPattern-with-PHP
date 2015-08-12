<?php
/**
 * 测试代码---简单的例子
 * User: ASUA
 * Date: 2014/12/10
 * Time: 22:31
 */

include_once "User.php";

$user = new User(1);
echo $user->name;
echo $user->mobile;
echo $user->regtime;

//更新的数据
$user->name = "wangfan";
$user->mobile = "13396095889";
$user->regtime = date('Y-m-d H:i:s');
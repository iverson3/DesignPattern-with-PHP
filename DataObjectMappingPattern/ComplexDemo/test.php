<?php
/**
 * 测试代码---复杂的例子
 * User: ASUA
 * Date: 2014/12/10
 * Time: 22:31
 */

include_once "User.php";
include_once "Factory.php";

class Page{
    function index(){
        /**
         * 使用工厂模式来生成对象
         */
        $user = Factory::getUser(1);
        //更新的数据
        $user->name = "王帆";
        $this->test();
    }

    function test(){
        /**
         * 使用工厂模式来生成对象
         */
        $user = Factory::getUser(1);
        //更新的数据
        $user->mobile = "13396095889";
    }
}

$page = new Page();
$page->index();
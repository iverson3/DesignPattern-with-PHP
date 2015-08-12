<?php
/**
 * 测试代码
 * User: ASUA
 * Date: 2014/12/10
 * Time: 19:45
 */

include_once "UserStrategy.php";
include_once "FemaleUserStrategy.php";
include_once "MaleUserStrategy.php";

class Page{
    private $strategy;
    function index(){
        $this->strategy->showAd();
    }
    function setStrategy(UserStrategy $strategy){
        $this->strategy = $strategy;
    }
}


/**
 * 根据不同的参数 实例化不同的策略类
 * 如果参数的总数有增加  则需要增加一个对应的策略类即可
 */
if ($_GET['sex'] == "female"){
    $strategy = new FemaleUserStrategy();
} else {
    $strategy = new MaleUserStrategy();
}

$page = new Page();
$page->setStrategy($strategy);
$page->index();
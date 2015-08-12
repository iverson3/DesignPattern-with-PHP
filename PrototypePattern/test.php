<?php
/**
 * 测试代码
 * User: ASUA
 * Date: 2014/12/13
 * Time: 13:36
 */

include_once "Canvas.php";

/**
 * 传统的方式
 */

//开始计时
//$start = time();

$canvas1 = new Canvas();
$canvas1->init();
$canvas1->rect(3, 6, 4, 12);
$canvas1->draw();

$canvas2 = new Canvas();
$canvas2->init();
$canvas2->rect(3, 6, 4, 12);
$canvas2->draw();

$canvas3 = new Canvas();
$canvas3->init();
$canvas3->rect(3, 6, 4, 12);
$canvas3->draw();

//结束计时
//$end = time();



/**
 * 原型模式
 */

/*//开始计时
$start = date('H:i:s');
//创建一个原型对象
$prototype = new Canvas();
$prototype->init();


$canvas1 = clone $prototype;
$canvas1->rect(3, 6, 4, 12);
$canvas1->draw();

$canvas2 = clone $prototype;
$canvas2->rect(3, 6, 4, 12);
$canvas2->draw();

$canvas3 = clone $prototype;
$canvas3->rect(3, 6, 4, 12);
$canvas3->draw();
//结束计时
$end = date('H:i:s');*/

//echo "用时： ".$start." --- ".$end;


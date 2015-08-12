<?php
/**
 * 测试代码
 * User: ASUA
 * Date: 2014/12/13
 * Time: 14:10
 */

include_once "Canvas.php";
include_once "ColorDrawDecorator.php";
include_once "SizeDrawDecorator.php";


/**
 * 如果此时有一个需要:
 * 需要对Canvas类中的某个方法进行功能扩展
 * 下面演示的是 对draw()方法的功能扩展
 */

/**
 * 传统做法
 * 新建一个类 继承Canvas类
 * 重载父类中的draw()方法
 */
/*class Canvas2 extends Canvas{
    public function draw(){
        echo "<div style='color: red;'>";
        parent::draw();
        echo "</div>";
    }
}*/
//修改实例化的类Canvas为Canvas2
/*$canvas1 = new Canvas2();
$canvas1->init();
$canvas1->rect(3, 6, 4, 12);
$canvas1->draw();*/



/**
 * 使用装饰器模式
 * 先对类Canvas进行相应的修改 以适应后来需要进行的功能扩展
 * 定义装饰器接口  需要添加的功能，都去实现装饰器接口 并实现自己的接口方法
 * 然后调用Canvas的方法添加各个装饰器对象
 */
$canvas2 = new Canvas();
$canvas2->init();
//添加需要的装饰器对象(功能)
$canvas2->addDecorator(new ColorDrawDecorator("blue"));
//添加需要的装饰器对象(功能)
$canvas2->addDecorator(new SizeDrawDecorator(50));
$canvas2->rect(3, 6, 4, 12);
$canvas2->draw();
<?php
/**
 * 颜色功能 装饰器类
 * User: ASUA
 * Date: 2014/12/13
 * Time: 14:50
 */

include_once "DrawDecorator.php";

/**
 * "颜色功能"对应的装饰器类
 * 实现装饰器接口
 */
class ColorDrawDecorator implements DrawDecorator {
    /**
     * 颜色
     * @var string
     */
    private $color;

    /**
     * 构造方法中 指定颜色
     * @param string $color
     */
    public function __construct($color = "red"){
        $this->color = $color;
    }

    function beforeDraw(){
        echo "<div style='color: {$this->color};'>";
    }

    function afterDraw(){
        echo "</div>";
    }
}
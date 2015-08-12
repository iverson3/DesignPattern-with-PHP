<?php
/**
 * 字体大小功能 装饰器类
 * User: ASUA
 * Date: 2014/12/13
 * Time: 15:07
 */

include_once "DrawDecorator.php";

/**
 * "字体大小功能"对应的装饰器类
 * 实现装饰器接口
 */
class SizeDrawDecorator implements DrawDecorator {
    /**
     * 字体大小
     * @var string
     */
    private $size;

    /**
     * 构造方法中 指定字体大小
     * @param string $size
     */
    public function __construct($size = "20"){
        $this->size = $size;
    }

    function beforeDraw(){
        echo "<div style='font-size: {$this->size}px;'>";
    }

    function afterDraw(){
        echo "</div>";
    }
}
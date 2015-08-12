<?php
/**
 * 绘图类
 * User: ASUA
 * Date: 2014/12/13
 * Time: 13:23
 */

class Canvas{
    /**
     * 输出的数据信息
     * @var array
     */
    private $data = array();
    /**
     * 保存所有添加的装饰器对象
     * @var array
     */
    private $decorators = array();

    public function init($width = 100, $height = 10){
        $data = array();
        for($i = 0; $i < $height; $i++){
            for($j = 0; $j < $width; $j++){
                $data[$i][$j] = "*";
            }
        }
        $this->data = $data;
    }

    /**
     * 动态的添加装饰器对象
     */
    public function addDecorator(DrawDecorator $decorator){
        $this->decorators[] = $decorator;
    }


    function beforeDraw(){
        foreach($this->decorators as $decorator){
            $decorator->beforeDraw();
        }
    }
    function afterDraw(){
        //类型反转
        $decorators = array_reverse($this->decorators);
        foreach($decorators as $decorator){
            $decorator->afterDraw();
        }
    }

    public function draw(){
        $this->beforeDraw();
        foreach ($this->data as $line) {
            foreach ($line as $char) {
                echo $char;
            }
            echo "<br/>\n";
        }
        $this->afterDraw();
    }

    public function rect($a1, $a2, $b1, $b2){
        foreach ($this->data as $k1 => $line) {
            if($k1 < $a1 || $k1 > $a2){
                continue;
            }
            foreach ($line as $k2 => $char) {
                if($k2 < $b1 || $k2 > $b2){
                    continue;
                }
                $this->data[$k1][$k2] = '&nbsp;';
            }
        }
    }
}
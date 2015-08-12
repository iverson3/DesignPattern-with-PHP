<?php
/**
 * 画图类
 * User: ASUA
 * Date: 2014/12/13
 * Time: 13:23
 */

class Canvas{
    /**
     * @var array
     */
    private $data = array();

    public function init($width = 1000, $height = 100){
        $data = array();
        for($i = 0; $i < $height; $i++){
            for($j = 0; $j < $width; $j++){
                $data[$i][$j] = "*";
            }
        }
        $this->data = $data;
    }

    public function draw(){
        foreach ($this->data as $line) {
            foreach ($line as $char) {
                echo $char;
            }
            echo "<br/>\n";
        }
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
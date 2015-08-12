<?php
/**
 * 策略类之一
 * User: ASUA
 * Date: 2014/12/10
 * Time: 19:39
 */

class FemaleUserStrategy implements UserStrategy{
    /**
     * 实现接口中的两个接口方法
     */
    function showAd(){
        echo "2014新款女装";
    }
    function showCategory(){
        echo "女装";
    }
}
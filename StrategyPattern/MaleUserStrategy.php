<?php
/**
 * 策略类之一
 * User: ASUA
 * Date: 2014/12/10
 * Time: 19:43
 */

class MaleUserStrategy implements UserStrategy{
    function showAd(){
        echo "2014时尚男士搭配";
    }
    function showCategory(){
        echo "男装";
    }
}

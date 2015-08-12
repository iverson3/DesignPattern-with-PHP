<?php
/**
 * 装饰器接口
 * User: ASUA
 * Date: 2014/12/13
 * Time: 14:24
 */

interface DrawDecorator{
    /**
     * 定义两个装饰器方法
     */
    function beforeDraw();
    function afterDraw();
}
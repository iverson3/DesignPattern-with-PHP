<?php
/**
 * 策略模式 接口
 * User: ASUA
 * Date: 2014/12/10
 * Time: 19:36
 */

interface UserStrategy{
    /**
     * 定义两个接口方法
     */
    function showAd();
    function showCategory();
}
<?php
/**
 * 观察者接口
 * User: ASUA
 * Date: 2014/12/11
 * Time: 8:59
 */

interface Observer{
    function update($event_info = null);
}
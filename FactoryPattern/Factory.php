<?php
/**
 * 工厂类  专门创建类的对象
 * User: ASUA
 * Date: 2014/12/10
 * Time: 17:34
 */

include_once "Database.class.php";

class Factory{
    static function createDatabase(){
        return new Database();
    }
}
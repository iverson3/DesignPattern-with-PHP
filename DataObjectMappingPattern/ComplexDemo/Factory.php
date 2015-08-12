<?php
/**
 * 工厂类  专门创建类的对象
 * User: ASUA
 * Date: 2014/12/10
 * Time: 17:34
 */

include_once "User.php";
include_once "MySQL.php";
include_once "Register.php";

class Factory{
    /**
     * 创建并获取User类的对象实例
     * @param $id
     * @return User
     */
    static function getUser($id){
        // 拼接"对象别名"
        $key = "user_".$id;
        // 从注册器中获取指定的对象
        $user = Register::get($key);
        /**
         * 判断注册器中是否存在指定的对象
         * 不存在则创建该对象并将该对象注册到注册器中；存在则直接返回该对象
         */
        if (!$user){
            $user = new User($id);
            Register::set($key, $user);
        }
        return $user;
    }

    /**
     * 创建并获取MySQL类的对象实例
     * @return MySQL
     */
    static function getDb(){
        return new MySQL();
    }
}
<?php
/**
 * 注册器类 用于对象的注册、获取和取消
 * User: ASUA
 * Date: 2014/12/10
 * Time: 18:25
 */

class Register{
    /**
     * 用来存放所有已注册的对象
     * @var array
     */
    private static  $objects;

    /**
     * 将一个对象注册到当前的注册器上
     * @param $alias  对象别名
     * @param $object 对象实例
     */
    public static function set($alias, $object){
        self::$objects[$alias] = $object;
    }

    /**
     * 获取注册器上指定的对象
     * @param $alias 对象别名
     * @return mixed 对象实例
     */
    public static function get($alias){
        return self::$objects[$alias];
    }

    /**
     * 从注册器上移除指定的对象
     * @param $alias 对象别名
     */
    public function _unset($alias){
        unset(self::$objects[$alias]);
    }
}
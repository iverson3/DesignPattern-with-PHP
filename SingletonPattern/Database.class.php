<?php
/**
 * 数据库操作类(用于测试 没涉及具体实现)
 * User: ASUA
 * Date: 2014/12/10
 * Time: 17:39
 */

class Database{
    /**
     * 当前类的对象
     * @var Database|resource
     * @access private
     */
    private static $db;

    /**
     * 将构造函数定义为 private
     * 禁止在该类的外面通过new关键字对该类进行实例化 生成对象
     */
    private function __construct(){

    }

    /**
     * 用于获取当前类的对象实例
     * @return Database|resource
     */
    public static function getInstance(){
        // 当前类的对象 不存在则实例化创建对象; 否则直接返回当前类的对象实例
        if (!self::$db) {
            self::$db = new self();
        }
        return self::$db;
    }

    /**
     * 通过在每个方法的最后返回当前对象，来实现"链式操作"
     */
    public function where($where){
        // ......
        return $this;
    }
    public function order($order){
        // ......
        return $this;
    }
    public function limit($limit){
        // ......
        return $this;
    }
}
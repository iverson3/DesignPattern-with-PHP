<?php
/**
 * 数据库操作类(用于测试 没涉及具体实现)
 * User: ASUA
 * Date: 2014/12/10
 * Time: 17:39
 */

class Database{
    public function __construct(){

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
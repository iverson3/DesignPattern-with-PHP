<?php
/**
 * Oracle数据库的操作类 实现了IDatabase接口
 * User: ASUA
 * Date: 2014/12/10
 * Time: 19:00
 */

class Oracle implements IDatabase{
    /**
     * 数据库连接句柄
     * @var Oracle|resource
     */
    private $conn;

    /**
     * 实现接口中的三个接口方法
     */
    function connect($host, $user, $pwd, $database){
        // .......
    }
    function query($sql){
        // .......
    }
    function close(){
        // .......
    }
}
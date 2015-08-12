<?php
/**
 * 数据库接口
 * User: ASUA
 * Date: 2014/12/10
 * Time: 19:01
 */

interface IDatabase{
    /**
     * 定义三个基本的数据库操作的接口方法
     */
    function connect($host, $user, $pwd, $database);
    function query($sql);
    function close();
}

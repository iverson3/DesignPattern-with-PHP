<?php
/**
 * MySQL数据库的操作类
 * User: ASUA
 * Date: 2014/12/10
 * Time: 19:00
 */

class MySQL{
    /**
     * 数据库连接句柄
     * @var MySQL|resource
     */
    private $conn;

    function connect($host, $user, $pwd, $database){
        $conn = mysql_connect($host, $user, $pwd);
        mysql_select_db($database, $conn);
        $this->conn = $conn;
    }
    function query($sql){
        $res = mysql_query($sql, $this->conn);
        return $res;
    }
    function close(){
        mysql_close($this->conn);
    }
}
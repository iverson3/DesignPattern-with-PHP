<?php
/**
 * User表数据模型
 * User: ASUA
 * Date: 2014/12/10
 * Time: 22:29
 */

include_once "MySQL.php";

class User{
    /**
     * 对应user表中的四个字段
     */
    public $id;
    public $name;
    public $mobile;
    public $regtime;
    /**
     * MySQL类的对象实例
     * @var MySQL
     */
    private $db;

    /**
     * 构造函数
     * 根据参数id从数据表user中获取对应的数据行 并映射到当前类中对应的成员属性中
     * @param int $id
     */
    function __construct($id){
        $this->db = new MySQL();
        $this->db->connect("localhost", "root", "333", "designpatterns");
        $sql = "select * from user where id = $id";
        $res = $this->db->query($sql);
        $data = mysql_fetch_array($res);

        $this->id = $data['id'];
        $this->name = $data['name'];
        $this->mobile = $data['mobile'];
        $this->regtime = $data['regtime'];
    }

    /**
     * 析构函数
     * 实现对当前数据行的更新
     */
    function __destruct(){
        $sql = "update user set name = '{$this->name}', mobile = '{$this->mobile}', regtime = '{$this->regtime}' where id = {$this->id}";
        $this->db->query($sql);
    }
}
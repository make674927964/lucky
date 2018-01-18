<?php
/**
 * Created by PhpStorm.
 * User: 57170
 * Date: 2017/12/28
 * Time: 17:50
 */

class db
{
    private $host='localhost';
    private $username='root';
    private $pass='';
    private $dbname='cosmetics';
    private $port='3306';
    public $db='';
    public $table='';
    function __construct($table)
    {
        $this->db=new mysqli($this->host,$this->username,$this->pass,$this->dbname,$this->port,$this->table);
        $this->db->query('set names utf8');
        $this->table=$table;
    }
    function selAll($field='*',$where=null){
        if($where){
            $sql="select ".$field." from ".$this->table." where ".$where;
        }else{
            $sql="select ".$field." from ".$this->table;
        }
        $result=$this->db->query($sql);
        return $result->fetch_all(MYSQL_ASSOC);
    }
    function selOne($field,$where){
        if($where){
            $sql="select ".$field." from ".$this->table." where ".$where;
        }else{
            $sql="select ".$field." from ".$this->table;
        }
        $result=$this->db->query($sql);
        return $result->fetch_assoc();
    }
    function del($where){
        $sql="delete from ".$this->table." where ".$where;
//        echo $sql;
        $this->db->query($sql);
        return $this->db->affected_rows;
    }
    function add($field,$values){
        $sql="insert into ".$this->table." ( ".$field." ) values ( " .$values.")";
//        echo $sql;
        $this->db->query($sql);
        return $this->db->affected_rows;
    }
    function update($field,$where){
        $sql="update ".$this->table." set ".$field." where ".$where;
//        echo $sql;
        $this->db->query($sql);
        return $this->db->affected_rows;
    }
    function close(){
        $this->db->close();
    }
}
//$db=new db('wuif1708');
////var_dump($db->del('id=2'));
////var_dump($db->add('zhanghao',"'xiao'"));
//var_dump($db->update("zhanghao='abi',pass='1314'","id=5"));
<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/1/12
 * Time: 9:07
 */

class fy
{
    public $total=0;
    public $num=4;
    public $page=0;
    public $curl='0';
    public $url='';

    function __construct($total,$num){
        $this->page=cell($total/$num);
        $this->curl=isset($_REQUEST['page'])?$_REQUEST['page']:0;

    }
}
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function __autoload($name){
    $path=explode('\\',$name);// 以\切割数组,写两个\\是因为\是关键字，一个用于转义
    array_pop($path);//弹掉最后一个数组元素
    $file='./'.implode('/',$path).'.class.php';//将数组元素以/进行拼接字符
    is_file($file) or die($file.'类文件不存在');
    include($file);
}

//use lib\DB\DB;//进行取别名，lib文件夹下的DB文件下的DB类取别名；
//$db=new DB;
//use Controller\Home\Home;
//$home=new Home;
//$home->index();
$classname=$_GET['m'].'\\'.$_GET['c'].'\\'.$_GET['c'];
$action=$_GET['a'];
$home=new $classname;
$home->$action();

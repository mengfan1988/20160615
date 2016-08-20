<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function __autoload($name){
    print_r($name);
    $path_arr = explode('\\',$name);
    print_r($path_arr);
    array_pop($path_arr);
    $path = implode('/', $path_arr); 
    include "./{$path}.class.php";
}
new lib\DB\DB;

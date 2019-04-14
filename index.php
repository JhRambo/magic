<?php
// use Imooc\Object;

include 'Object.php';

$obj = new Object();

// $obj->title = 'abc';    //默认调用__set函数
// echo $obj->title;       //默认调用__get函数
// $obj->test();           //默认调用__call函数
// $obj::test();           //默认调用__callStatic函数
// echo $obj;              //默认调用__toString函数
echo $obj();
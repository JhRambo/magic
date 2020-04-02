<?php

// require 'MyObject.php';

// $obj = new MyObject();

// $obj->title = 'abc';    //默认调用__set函数
// echo $obj->title;       //默认调用__get函数
// $obj->test('magic','call');           //默认调用__call函数
// $obj::test();           //默认调用__callStatic函数
// echo $obj;              //默认调用__toString函数
// echo $obj();            //默认调用__invoke函数

# 自动加载1
// function __autoload($class_name) 
// {
//     echo '自动加载未定义的类'.PHP_EOL;
//     require $class_name.'.php';
// }

# 自动加载2
spl_autoload_register(function($class_name){
    echo '自动加载未定义的类'.PHP_EOL;
    require $class_name.'.php';
});

//当前页面 Pserson 类不存在则自动调用 __autoload() 方法，传入参数 Person
new MyClass("张三","20");

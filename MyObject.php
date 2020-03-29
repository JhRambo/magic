<?php

    class MyObject
    {
        protected $array = [];

        function __get($name)
        {
            return $this->array[$name];
        }

        function __set($name, $value)
        {
            $this->array[$name] = $value;
        }

        function __call($name, $arguments)
        {
            print_r(func_get_args());
            echo '我是不存在的函数，通过魔术方法调用的';
        }

        static function __callStatic($name, $arguments)
        {
            echo '我是不存在的函数，通过静态魔术方法调用的';
        }

        function __toString()
        {
            return '对象转成字符串输出';
        }

        function __invoke()
        {
            return '对象转成函数执行';
        }
    }
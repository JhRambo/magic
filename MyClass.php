<?php

    class MyClass{
        protected $name;
        protected $age;
        protected $user = [];
        public function __construct($name,$age)
        {
            $this->name = $name;
            $this->age = $age;
            $user['name'] = $this->name;
            $user['age'] = $this->age;
            var_dump($user);
        }
    }
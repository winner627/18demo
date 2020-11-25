<?php
class Student{
    private $name = 'zhangsan';
    private $age = 40;
    public function __get($name) { //是为了在类外调用
        return $this -> $name;
    }

    public function __set($name,$value){ //是为了可以修改类属性的值
        $this-> $name = $value;
    }
}

$S = new Student();
//$S -> name = '李四';
echo $S -> name;
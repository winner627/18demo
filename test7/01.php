<?php
class Person{
    public $name;
    public $age;
    public $address;

    public function __construct($name= '', $age ='', $address='')
    {
        $this -> name = $name;
        $this -> age = $age;
        $this -> address = $address;
    }
    public function printName(){
        return $this -> name;
    }
    public function printAge(){
        return $this -> age;
    }
    public function printAddress(){
        return $this -> address;
    }
    public function printInfo(){
        return $this->printName().':'.$this->printAge().':'.$this->printAddress();
    }
}

$p1 = new Person('张三',20, '河北省衡水市桃城区');
//$p1 -> printInfo();
echo $p1 -> printInfo();
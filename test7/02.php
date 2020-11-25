<?php
class Student{
//    public $name;//类外，子类都可以使用
    protected $name;//类外不可用，子类可以使用
    public $age;
    public function __construct($name,$age){
        $this->name = $name;
        $this->age = $age;
    }
    public function printName(){
        return $this->name;
    }
    public function printAge(){
        return $this->age;
    }
    public function printInfo(){
        return $this->name.':'.$this->age;
    }
}
$s = new Student('张三',40);
//echo $s -> printName();
echo $s -> printInfo();
//class Person extends Student {
//    public $score;
//    public function printScore(){
//         return $this -> score;
//    }
//}
//$p = new Person('王五',80 );
//$p -> score = 80;
//echo $p -> printInfo().':'.$p -> printScore();
//
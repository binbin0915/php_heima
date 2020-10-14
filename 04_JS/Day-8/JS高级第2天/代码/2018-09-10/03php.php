<?php
class Person{
    //成员属性
    public $name;
    public $age;
    //构造方法
    public function __construct($n, $a){
        $this->name = $n;
        $this->age = $a;
    }
    //成员方法
    public function say(){
        echo '我叫' . $this->name . '，我今年' . $this->age . '岁';
    }
}

$p1 = new Person('张三', 20);
$p2 = new Person('李四', 25);
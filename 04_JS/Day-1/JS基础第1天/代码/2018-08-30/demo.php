<?php

$a = 3;
$a;
echo $a; // 3

$arr = [];
while($row = mysqli_fetch_row($result)){
    $arr[] = $row;
}


class A {
    public $name = '李四';
    public function ss(){
        echo $this->name;
    }
}
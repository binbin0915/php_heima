<?php 
//通过$_GET变量获得表单以get方式提交的数据！
$n1 = $_POST['num1'];
$n2 = $_POST["num2"];
$result = $n1 + $n2;
//也可以直接啦：
$result2 = $_POST['num1'] + $_POST['num2'];
echo "<br>相加计算的结果为：", $result;
echo "<br>相加计算的结果为：", $result2;
 ?>
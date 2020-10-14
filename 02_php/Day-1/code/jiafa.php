<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<?php
$n1 = "";
$n2 = "";
$fu = "";
$result = "";
 if( isset($_GET["num1"]) ){
	$n1 = $_GET["num1"];
    $fu = $_GET['fuhao'];
    $n2 = $_GET["num2"];
    if ($fu == '+')
        $result = $n1 + $n2;
    if ($fu == '-')
        $result = $n1 - $n2;
    if ($fu == '*')
        $result = $n1 * $n2;
    if ($fu == '/')
        $result = $n1 / $n2;
 }
 ?>
<body>
	<form action="" method="get">
        数字1：<input type="text" name="num1" value="<?php echo "$n1"; ?>">
        <select name="fuhao">
            <option <?php if($fu == "+") echo "selected"?> value="+">+</option>
            <option <?php if($fu == "-") echo "selected"?> value="-">-</option>
            <option <?php if($fu == "*") echo "selected"?> value="*">*</option>
            <option <?php if($fu == "/") echo "selected"?> value="/">/</option>
        </select>
        数字2：<input type="text" name="num2" value="<?php echo "$n2"; ?>"> 
        <input type="submit" value="=">
        <input type="text" name="result" value="<?php echo "$result"; ?>">
	</form>
</body>
</html>
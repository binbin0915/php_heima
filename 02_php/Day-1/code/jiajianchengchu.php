<?php
/**
 * Created by PhpStorm.
 * User: ITAK
 * Date: 2017/3/3
 * Time: 10:28
 */
    error_reporting(E_ALL & ~E_NOTICE);
    if(isset($_POST['submit'])){
        $ok = true;
        $error = "出现的问题：<br>";
        if($_POST['num1'] == ""){
            $ok = false;
            $error = $error."第一个数字不能为空<br>";
        }
        else{
            if(!is_numeric($_POST['num1'])){
                $ok = false;
                $error = $error."第一个数字不是数字<br>";
            }
        }
        if($_POST['num2'] == ""){
            $ok = false;
            $error = $error."第二个数字不能为空<br>";
        }
        else{
            if(!is_numeric($_POST['num2'])){
                $ok = false;
                $error = $error."第二个数字不是数字<br>";
              }
        }
    }
    if($ok){
        $sum = "";
        $fuhao = $_POST['fuhao'];
        if($fuhao == '+')
            $sum = $_POST['num1'] + $_POST['num2'];
        if($fuhao == '-')
            $sum = $_POST['num1'] - $_POST['num2'];
        if($fuhao == '*')
            $sum = $_POST['num1'] * $_POST['num2'];
        if($fuhao == '/')
            $sum = $_POST['num1'] / $_POST['num2'];
        if($fuhao == '%')
            $sum = $_POST['num1'] % $_POST['num2'];
    }
    echo "<br>";
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>简单计算器</title>
    </head>
    <body>
    <table border="0" width="400" align="center">
        <form action="cal.php" method="post">
            <caption><h1>简单计算器</h1></caption>
            <tr>
                <td>
                    <input type="text" size="5" name="num1" value="<?php echo $_POST['num1'] ?>"/>
                </td>
                <td>
                    <select name="fuhao">//下拉列表
                        <option <?php if($_POST['fuhao']=="+") echo "selected"?>
                            value="+"> + </option>
                        <option <?php if($_POST['fuhao']=="-") echo "selected"?>
                            value="-"> - </option>
                        <option <?php if($_POST['fuhao']=="*") echo "selected"?>
                            value="*"> * </option>
                        <option <?php if($_POST['fuhao']=="/") echo "selected"?>
                            value="/"> / </option>
                        <option <?php if($_POST['fuhao']=="%") echo "selected"?>
                            value="%"> % </option>
                    </select>
                </td>
                <td>
                    <input type="text" name="num2" size="5" value="<?php echo $_POST['num2'] ?>"/>
                </td>
                <td>
                    =
                </td>
                <td>
                    <input type="text" name="res" size="5" value="<?php echo $sum ?>"/>
                </td>
            </tr>
            <tr align="center">
                <td>
                    <input type="submit" value="计算" name="submit">
                </td>
            </tr>
            <br>
            <tr>
                <td colspan="4">
                    <?php
                        if($ok){
                            echo "结果为: {$_POST['num1']} {$_POST['fuhao']} {$_POST['num2']} = {$sum}";}
                        else{
                            echo  $error;}
                    ?>
                </td>
            </tr>
        </form>
    </table>
    </body>
</html>
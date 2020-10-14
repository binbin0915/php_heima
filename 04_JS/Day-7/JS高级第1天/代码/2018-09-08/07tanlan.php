<?php
$str = 'this is a [b]php[/b], that is a [b]JS[/b]';
echo preg_replace('/\[b\](.*)\[\/b\]/U', '<b>$1</b>', $str);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<script>
    //var str = 'abacda123asd';
    //var r = /[a-z]+?/g;  //加入? 表示非贪婪模式
    //console.log(str.match(r));

    /*var str = 'this is a [b]php[/b], that is a [b]JS[/b]';
    var r = /\[b\](.*?)\[\/b\]/g;
    str = str.replace(r, '<b>$1</b>');
    document.write(str); //输出到页面*/
</script>

</body>
</html>
# Nodejs编程

> 西岭老湿
>
> 传智播客 & 黑马程序员

---

## 第0章 Node介绍

### 0.0 回顾 JavaScript 

+ **历史及发展 **

  1995年 网景公司的布兰登开发；

  1997年7月，ECMA组织发布ECMAScript 1.0版;

  2007年10月发布3.1版本后不久，ECMAScript 3.1改名为 ECMAScript 5。

  2008年，为Chrome浏览器而开发的V8编译器诞生

  2011年6月，ECMAscript 5.1版发布，现在使用最为广泛的版本;

  2015年6月，ECMAScript 6正式发布，并且更名为“ECMAScript 2015”;

+ **如何学习JavaScript**

  JavaScript 的核心语法部分相当精简，也就是语言本身，只包括两个部分:

  + 基本的语法构造(比如操作符、控制结构、语句)

  + 标准库(就是一系列具有各种功能的对象比如Array、Date、Math等)。


  想要实现其他复杂的操作和效果，都要依靠 **宿主环境** 提供API，目前，已经嵌入 JavaScript 的宿主环境有多种，最常见的环境就是 **浏览器** 和 **操作系统** ;

* **回顾 JavaScript 语法特性**
  * 变量、数据类型、流程控制
  * 函数(基本声明参数，作用域，回调函数)、面向对象(原型，构造函数，this的指向，new的过程)



### 0.1 Node是什么

`Node`  是一个基于` Chrome V8` 引擎的` JavaScript ` 运行环境。  

`Node`  不是一种独立的语言、`Node`不是 `JavaScript ` 框架，

`Node`是一个**除了浏览器之外的、可以让` JavaScript ` 运行的环境**

Node.js 是一个让 JavaScript 运行在服务端的开发平台，是使用 事件驱动， 异步非阻塞I/O，单线程，跨平台的 JS 运行环境；

### 0.2. 为什么要学习 Node

- 打开服务器的黑盒子
- 企业需求
- 大前端必备技能
- 为了更好的学习前端框架

### 0.3. Node 能做什么

[知乎 - Node.js能做什么，该做什么？](https://www.zhihu.com/question/20796866)

- Web 服务器(重点)
- 命令行工具
- 网络爬虫:是一种按照一定的规则，自动地抓取网站信息的程序
- 桌面应用程序开发

### 0.4. 一些资源

1. 文档

   [Node.js 官方文档](https://nodejs.org/en/docs/)
   [Node.js 中文文档（非官方）](http://nodejs.cn/)

2. 书籍

   [深入浅出 Node.js](https://read.douban.com/ebook/12053349/)
   [Node.js 权威指南](https://book.douban.com/subject/25892704/)
   [Node.js 实战](https://book.douban.com/subject/25870705/)
   [Node.js实战（第2季）](https://book.douban.com/subject/26642320/)

3. github资源

   [Node.js 包教不包会](https://github.com/alsotang/node-lessons)
   [ECMAScript 6 入门](http://es6.ruanyifeng.com/)
   [七天学会 NodeJS](https://github.com/nqdeng/7-days-nodejs) 

4. 社区

   **[Node.js 中文社区](https://cnodejs.org/)** 

### 0.5. Node 发展历史

[聊聊 Node.js 的历史](https://gitbook.cn/books/58e796fd09012f0a48761eae/index.html)
[来自朴灵大大的 -- Node.js 简史](https://cnodejs.org/topic/555d3d54e684c4c8088a0d78)



## 第1章 NodeJS起步

### 1.1 下载安装 

+ 下载 https://nodejs.org/zh-cn/download/

- 历史版本：https://nodejs.org/en/download/releases/

![](.\img\Snipaste_2018-09-16_18-20-26.png)

windows下安装过程：

![](.\img\Snipaste_2018-09-16_18-20-59.png)



![](.\img\Snipaste_2018-09-16_18-29-26.png)



对于已经装过的，重新安装就会升级

安装成功后，打开命令行，输入 

node --version 或者 node -v  (显示node的版本号)

![](.\img\Snipaste_2018-09-16_18-31-59.png)

表示安装成功



其他平台的安装方式：

https://nodejs.org/zh-cn/download/package-manager/



### 1.2 REPL环境

![](.\img\Snipaste_2018-09-16_18-40-26.png)

![](.\img\Snipaste_2018-09-16_18-41-36.png)

node中的REPL环境类似于浏览器中的 Console控制台 ，可以做一些代码测试。

按ctrl + 两次c 退出REPL环境

但是, 我们写代码肯定不是在控制台中写,而是写在一个单独的.js文件中.



### 1.3 node运行js代码

![](.\img\Snipaste_2018-09-16_18-52-40.png)

![](.\img\Snipaste_2018-09-16_18-53-36.png)



![](.\img\Snipaste_2018-09-16_18-49-49.png)



### 1.4 Node 中的模块

**浏览器(客户端)中的JS**

![](.\img\Snipaste_2018-09-16_18-53-39.png)

**Node中的JS**

![](.\img\Snipaste_2018-09-17_16-40-25.png)



## 第2章 核心模块的使用

### 2.1 FS模块

node核心模块之一，用于操作文件；

中文手册 : http://nodejs.cn/api/fs.html

+ 文件读写 

```js
// 引入模块
var fs = require('fs');
// console.log(typeof fs); //object 

// 向文件中写入内容
fs.writeFile('./2.1.txt','itcast',function(cb,cb2){
    // 回调函数 (写入成功后执行的函数)
    console.log(cb);
    console.log(cb2);
})

// 从文件中读取内容
fs.readFile('./2.1.txt','utf8',function(e,d){
    // 回调函数 (读取成功后执行的函数)
    console.log(e);
    console.log(d);
});
```



+ 追加内容

```js
// 引入模块
var fs = require('fs');

// 向文件中追加内容
fs.readFile('./2.1.txt','utf8',function(e,d){
    d+='2344';
    fs.writeFile('./2.1.txt',d,function(e){
        if(e){
            console.log('写入失败')
        }else{
            console.log('写入成功')
        }
    })
});
```



### 2.2 HTTP模块

node核心模块之一，用于搭建HTTP服务器；

中文手册 http://nodejs.cn/api/http.html



![](.\img\Snipaste_2018-09-17_21-03-59.png)

#### 2.2.1 开启服务器

```js
// 1. 导入http模块
var http = require('http');

// 2. 使用http这个模块中的createServer()创建一个服务器实例对象
var server = http.createServer();

// 3. 绑定端口号,启动web服务器
server.listen(8000, function() {
    console.log(' 请访问http://localhost:8000');
});

// 4. 为这个服务器实例对象注册 request 请求处理函数
// 请求处理函数function(形参1,形参2){}
// 形参1:request请求对象 获取到当前请求的路径,方法等本次请求的所有信息
// 形参2:response响应对象 发送响应数据
server.on('request', function(request, response) {
    console.log('服务端收到客户端的请求啦!!!');
    // 向客户端页面返回字符串
    response.write("hello node");
    // 结束响应
    response.end();
});
```



![](.\img\Snipaste_2018-09-17_21-18-39.png)



因为我们的服务器接受请求处理并响应数据时，并没有指定响应数据的类型，所以出现了乱码；

而在http中，我们可以通过服务器的响应头指定数据类型，在 [http.ServerResponse 类](http://nodejs.cn/api/http.html#http_class_http_serverresponse) 中为我们提供了setHeader 方法：

![](.\img\Snipaste_2018-09-17_21-34-56.png)



#### 2.2.2 响应 HTML 页面

![](.\img\Snipaste_2018-09-17_21-41-23.png)



![](.\img\Snipaste_2018-09-17_21-45-00.png)

但是，我们不能一直将html代码写到服务器的方法中，而是需要建一个xx.html的文件，将html文件中的内容返回给客户端；

2.2.2 .html :

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>你好，我是西岭老湿</h1>
    <h2>另外，我还很帅……</h2>
</body>
</html>
```

nodejs代码

```js
var http = require('http');
// 1:引入文件操作模块
var fs = require('fs');
var server = http.createServer();
server.on('request', function(request, response) {
    // 2：读取html文件中的内容
    fs.readFile('./2.2.2.html','utf8',function(error,html_data){
        // 设置响应头
        response.setHeader('Content-Type', 'text/html;charset=utf-8');
        // 将html中的内容响应回客户端，结束响应
        response.end(html_data);
    })
});
```



#### 2.2.3 响应图片

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>你好，我是西岭老湿</h1>
    <h2>另外，我还很帅……</h2>
    <img src="./img/03.jpg" alt="野生脆脆.jpg">
</body>
</html>
```



```js
server.on('request', function(request, response) {
    // url 属性返回请求的URL字符串
    var urls = request.url;
    if( urls =='/'){
        fs.readFile('./2.2.2.html','utf8',function(error,html_data){
            // 设置响应头
            response.setHeader('Content-Type', 'text/html;charset=utf-8');
            // 将html中的内容响应回客户端，结束响应
            response.end(html_data);
        })
    }else if(urls.indexOf('jpg')>=0){ // 判断请求图片
        fs.readFile('./img/03.jpg',function(error,html_data){
            response.end(html_data);
        })
    }
}
```



#### 2.2.4 响应其他静态资源

```html
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="./public/h.css">
</head>
<body>
    <h1>你好，我是西岭老湿</h1>
    <h2>另外，我还很帅……</h2>
    <img src="./img/03.jpg" alt="野生脆脆.jpg">
</body>
<script src="./public/h.js"></script>
</html>
```



```js
server.on('request', function(request, response) {
    // url 属性返回请求的URL字符串
    var urls = request.url;
    if( urls =='/'){
        fs.readFile('./2.2.2.html','utf8',function(error,html_data){
            // 设置响应头
            response.setHeader('Content-Type', 'text/html;charset=utf-8');
            // 将html中的内容响应回客户端，结束响应
            response.end(html_data);
        })
    }else{
        fs.readFile('.'+urls,function(error,html_data){
            response.end(html_data);
        })
    }
});
```



### 2.3 服务器遍历文件及文件夹-案例

![](.\img\Snipaste_2018-09-22_16-03-32.png)

模仿Apache服务器，遍历文件及文件，显示时间及大小；

右键另存为，下载页面当作静态页面模板使用；

使用node载入静态页面：

![](./img\Snipaste_2018-09-22_16-08-10.png)



![](.\img\Snipaste_2018-09-22_16-14-00.png)



使用ajax技术在页面中发送请求到后台，apache.html

```html
<script>
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange=function(){
      if(this.readyState == 4){
        console.log(this.responseText);
      }
    }
    xhr.open('get','/file_list');
    xhr.send();
</script>
```



node：

```js
server.on('request', function(request, response) {
    // url 属性返回请求的URL字符串
    var urls = request.url;
    if( urls =='/'){
        fs.readFile('./apache.html','utf8',function(error,html_data){
            // 设置响应头
            response.setHeader('Content-Type', 'text/html;charset=utf-8');
            // 将html中的内容响应回客户端，结束响应
            response.end(html_data);
        })
    }else if(urls == '/file_list'){
        fs.readdir('./','utf8',function(err,files){
            response.end(JSON.stringify(files));
        });
    }else{
        fs.readFile('.'+urls,function(error,html_data){
            response.end(html_data);
        })
    }
});
```

apache.html --> ajax

```js
xhr.onreadystatechange=function(){
    if(this.readyState == 4){
        var data = JSON.parse(this.responseText);
        var htmls = '';
        for(var i = 0;i<data.length;i++){
            htmls+='<tr><td valign="top">';
            htmls+= '<img src="./img/layout.gif" alt="[   ]"></td>';
            htmls+='<td><a href="http://localhost/%e7%ac%94%e8%ae%b0-01.pdf">';
            htmls+= data[i]+'</a> </td>';
            htmls+= '<td align="right">2018-04-26 10:31 </td>';
            htmls+= '<td align="right">3.2M</td><td>&nbsp;</td></tr>';
        }
        var tb = document.getElementsByTagName('tbody')[0];
        tb.innerHTML+=htmls;
    }
}
```

### 2.4 动态展示文件的其他属性

获取文件的其他属性：

```js
var fs = require('fs');
fs.readdir('./','utf8',function(err,files){
    fs.stat(files[0],function(er,st){
        console.log(st.mtime);
        console.log(st.size);
        console.log(st.isFile());
    })
});
```



修改node代码

```js
server.on('request', function (request, response) {
    // url 属性返回请求的URL字符串
    var urls = request.url;
    if (urls == '/') {
        fs.readFile('./apache.html', 'utf8', function (error, html_data) {
            // 设置响应头
            response.setHeader('Content-Type', 'text/html;charset=utf-8');
            // 将html中的内容响应回客户端，结束响应
            response.end(html_data);
        })
    } else if (urls == '/file_list') {
        fs.readdir('./', 'utf8', function (err, files) {
            // response.end(JSON.stringify(files));
            var file_obj = [];
            //  判断条件：声明一个变量，这个变量用来记录两个数据的中数据的长度
            var count = 0;
            for (var i = 0; i < files.length; i++) {
                file_obj[i] = {};
                // 利用自调用匿名函数，保留i的变量值
                (function (i) {
                    fs.stat(files[i], function (er, st) {
                        count ++;
                        file_obj[i].name = files[i];
                        if(st.isFile()){
                            file_obj[i].type = 'file';
                        }else{
                            file_obj[i].type = 'dir';
                        }
                        file_obj[i].mtime = st.mtime;
                        file_obj[i].size = st.size;
                        // 当读取的文件个数与所有文件个数相等时
                        if(count == files.length){
                            response.end(JSON.stringify(file_obj));
                        }
                    })
                    // console.log(file_obj);
                })(i);

                // console.log(files[i]);
            }
        });
    } else {
        fs.readFile('.' + urls, function (error, html_data) {
            response.end(html_data);
        })
    }
});
```

修改 ajax代码

``` js
var xhr = new XMLHttpRequest();
xhr.onreadystatechange=function(){
    if(this.readyState == 4){
        var data = JSON.parse(this.responseText);
        var htmls = '';
        for(var i = 0;i<data.length;i++){
            htmls+='<tr><td valign="top">';
            if(data[i].type == 'file'){
                htmls+= '<img src="./img/layout.gif" alt="[   ]"></td>';
            }else{
                htmls+= '<img src="./img/folder.gif" alt="[   ]"></td>';
            }
            htmls+='<td><a href="">';
            htmls+= data[i].name+'</a> </td>';
            htmls+= '<td align="right">'+ data[i].mtime +'</td>';
            htmls+= '<td align="right">'+ data[i].size +'</td><td>&nbsp;</td></tr>';
        }
        var tb = document.getElementsByTagName('tbody')[0];
        tb.innerHTML+=htmls;
    }
}
xhr.open('get','/file_list');
xhr.send();
```



循环后 i 丢失的问题：



```js

// var arr = ['a', 'b', 'c'];
// for (var i = 0; i < arr.length; i++) {
//     // 模拟延迟
//     setTimeout(function () {
//         console.log(arr[i]);
//     }, 1000);
// }

/*
 * *******************************************
 * 上面的代码 全部输出 undefined
 * *******************************************
 */ 

var arr = ['a','b','c'];
for(var i = 0; i < arr.length; i ++) {
    (function(i){
        // 模拟延迟
        setTimeout(function() {
            console.log(arr[i]);
        }, 1000);
   })(i);
}
```









> 参考资源列表:
>
> [https://nodejs.org/zh-cn/](https://nodejs.org/zh-cn/)  -- node.js官网
>
> [http://nodejs.cn/](http://nodejs.cn/) --node.js中文网
>
> 《深入浅出Node.js》  朴灵著 ，人民邮电出版社
>
> https://en.wikipedia.org/wiki/CommonJS  --维基百科 
>
>


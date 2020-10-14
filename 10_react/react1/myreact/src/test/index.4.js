import React from 'react';
import ReactDom from 'react-dom';

var n = 123;
var str = '你好';
var boo = true;
var fun = function(){
    console.log(123);
}
var obj = {name:'李四',age:40};

// jsx 语法结构数据
var myh2 = <h2>呵呵呵2222</h2>

// 使用{}展示变量内容
var mydiv = <div>
    <h1>{n}</h1>
    <h2>{str}</h2>
    <h3>{boo?'1':0}</h3>
    <h4>{fun()}</h4>
    <h5>{obj.name}</h5>
    <hr />
    {/* 这是jsx 语法注释 */}
    {/* jsx语法的内容可以相互嵌套添加使用 */}
    {myh2}
    </div>

ReactDom.render(mydiv,document.getElementById('app'));

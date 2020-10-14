import React from 'react';
import ReactDom from 'react-dom';

var myh1 = <h1>你好</h1>

// 在jsx语法中，dom结构只能有一个根节点
var mydiv = <div><div>jjjj</div><div>hhhh</div></div>

ReactDom.render(mydiv,document.getElementById('app'));


// jsx 总结
// 在jsx语法中 变量的调用 使用 {} 
// {} 里面可以调用字符串数组对象的属性及方法函数的调用，
// {} 里面不能直接适应JS语句  if判断  for循环等不行
// jsx 创建的dom节点，有且只有一个根节点
// DOM 节点每个标签比闭合，不闭合报错
// jsx 语法中的注释 使用 {/* 注释 *//}
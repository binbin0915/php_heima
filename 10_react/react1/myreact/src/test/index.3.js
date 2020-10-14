import React from 'react';
import ReactDom from 'react-dom';

// react提供的 JSX 语法
// var mydiv = <h2>lkdfaj</h2> xhtml   xml 

var inp = <input type="text" />

// 标签最好使用成对标签，必须有闭合
// 标签没有闭合直接报错

// 实际上依然是先调用 react.createElement创建节点

// 使用reactDom操作html - dom节点
ReactDom.render(inp,document.getElementById('app'));

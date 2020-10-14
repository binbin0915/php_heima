import React from 'react';
import ReactDom from 'react-dom';

// 选中 react 操作的节点
var app = document.getElementById('app');

// 使用react方法，创建节点
// var myh2 = React.createElement('h2',{id:'hh1'},'hello react 啊');
//  <h2 id="hh1">hello react 啊</h2> 

var mydiv = React.createElement('div',{id:'div'},'ddddiii<h4>hhh444</h4>vvv')


// 使用reactDom操作html - dom节点
ReactDom.render(mydiv,app);

import React from 'react';
import ReactDom from 'react-dom';

// 导入一个模块，模块的内容就是一个react组件
import Hello from './hello';

var data = {name:'lisi',age:'40'}

// 项组件中传值，使用props属性的方式
ReactDom.render(<Hello da={data} />, document.getElementById('app'));


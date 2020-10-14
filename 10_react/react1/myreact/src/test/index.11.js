import React, { Component } from 'react';
import ReactDom from 'react-dom';

// 想要使用私有数据是能通过类组件声明
// react中的组件的声明一般都是使用类组件不适用函数组件
// 
class Hello extends Component{
    constructor(){
        super();
        // this.str = '123'
        // react 规定数据使用特殊变量名state代替
        // state 就相当于vue中data的作用，专门用于存放数据
        this.state = 'fff'
    }

    render(){
        this.props.na = 'kkk'
        return (
            <div>
                <h1>哈哈哈哈</h1>
                <h3>{this.str}</h3>
                <h4>{this.props.na}</h4>
            </div>
        )
    }
}

// 构造函数组件是不能拥有自己的私有数据的
// function Hello(){
//     this.str = '44';
//     return (
//         <div>{this.str}</div>
//     )
// }
var data = {name:"lisi"};
ReactDom.render(<Hello na = {data.name} />, document.getElementById('app'));


// 组件中props 与state的区别
// prorps 数据是外部传入的 
// props 数据是只读的，不可更改
// 在有状态组件和无状态组件中都可以获取 props 数据

// state 是组件内私有数据
// state 数据是可读可写的
// state 在有状态组件（class组件）中可用，而无状态组件不可用

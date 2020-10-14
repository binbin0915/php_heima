import React, { Component } from 'react';
import ReactDom from 'react-dom';


class Hello extends Component {
    render() {
        return (
            <div>
                <h2>classss</h2>
                {/* 类组件中，直接使用this.props就可以获取属性值 */}
                <h3>{this.props.name}</h3>
            </div>
        )
    }
}

var data = { na: "李思思", age: "18" };

ReactDom.render(<Hello name={data.na} />, document.getElementById('app'));


// 类组件中，props 是以对象属性的方式存在的，props是对象中已经定义好的属性名，不能修改
// 而构造函数是以形参的方式传入的，因为是形参可以任意起名

// props的值都是外界传入的，不是组件自己有的，因此
// 组件又分为 有状态(有私有数据的)和无状态(没有自由数据)两种

// 构造函数就是声明的组件就是无状态组件
// 类声明的组件就是有状态组件
// 如何让一个类组将拥有自己的私有数据成为有状态组件
import React from 'react';
import ReactDom from 'react-dom';

var data = {name:'lisi',age:'40'}
// react中的组件定义有两种方式
// 一种是构造函数方式
// 一种是类声明方法

// 在react中使用构造函数声明组件，构造函数的首字母必须大写
// 不需要new , 直接将构造函数的名字当做标签名使用即可
function Hello() {
    // 在构造函数中直接将jsx语法内容 返回即可
    // return <h2>1111111</h2>
    // return 的内容使用() 包裹
    return (<div>
        <h2>111</h2>
        <h2>{data.name}</h2>
        <h2>333</h2>
    </div>)
}
// 组件与组件之间也可相互嵌套
function Wod (props){
    console.log(props)
    return (
        <div>
            <h1>阿斯蒂芬斯蒂芬</h1>
            {/* {props.na} */}
            <Hello />
        </div>
        )
}

// 构造函数声明组件及组件间的props传值
// props 传递数组对象等数据都是可以的
ReactDom.render(<Wod na={data} />, document.getElementById('app'));


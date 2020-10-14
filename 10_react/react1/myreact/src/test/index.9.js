// import React from 'react';
// 按需加载 
import React,{Component} from 'react';
import ReactDom from 'react-dom';

// 类组件 必须继承 React.Component 方法
// class Hello extends React.Component{
class Hello extends Component {
    // 必须要有个render方法,在方法中返回jsx对象
    render() {
        return (<div><h2>classss</h2></div>)
    }
}

// 使用时，将类名当做标签名使用

ReactDom.render(<Hello />, document.getElementById('app'));


// 组件中要使用jsx语法，必须导入react
import React from 'react';

// 构造函数形参接受数据
function Hello(props){
    // 组件中返回一段jsx语法数据
    return (
        <div>
            <h1>哈哈哈</h1>
            <h1>{props.da.name}</h1>
        </div>
    )
}

// 导出 构造函数组件
export default Hello;
import React from 'react';
import ReactDom from 'react-dom';

var arr = ['a','王五','秦桧','岳飞','韦小宝']

// var ht = '';
// for(let i=0; i<arr.length;i++){
//     var h = <h3>{arr[i]}</h3>
//     console.log(h);
// }

// console.log(ht);

// 在jsx外面循环遍历好数据后再给jsx
// var myh3 = arr.map(function(val){
//     return <h3 key="1">{val}</h3>
// })


var mydiv = <div>
    {/* 直接在jsx语法结构里面使用循环遍历数据 */}
    {arr.map((val,k)=>{
        return <h4 key={k}>{val}</h4>
    })}
    {/* {myh3} */}
    {/* {arr[2]} */}
    {/* 属性不要使用引号，直接使用{}就可以 */}
    {/* <h3 id={arr[0]}>hhhhh3333</h3> */}
    </div>

ReactDom.render(mydiv,document.getElementById('app'));

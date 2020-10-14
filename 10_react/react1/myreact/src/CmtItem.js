import React from 'react';

export default function Cmtitem(props) {
    return (
        // <div >
        //     <h3>评论人：{props.user}</h3>
        //     <p>评论内容: {props.content} </p>
        //     <hr />
        // </div>
        <div >
            <h3>评论人：{props.data.user}</h3>
            <p>评论内容: {props.data.content} </p>
            <hr />
        </div>
    )
}

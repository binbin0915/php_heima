import React, { Component } from 'react';

import Item from './CmtItem';

class Cmtlist extends Component {
    constructor() {
        super();
        this.state = {
            lists: [
                { id: 1, user: '张三', content: '你好，沙发' },
                { id: 2, user: '张四', content: '你好，板凳' },
                { id: 3, user: '张五', content: '你好，马扎' },
                { id: 4, user: '张六', content: '你好，地面' },
                { id: 5, user: '张七', content: '你好，砖头' },
            ]
        }
    }

    render() {
        return (
            <div>
                <h1>评论列表</h1>
                {this.state.lists.map((v) => {
                    // return <Item key={v.id} user = {v.user} content={v.content} />
                    return <Item key={v.id} data = {v} />
                })}
            </div>
        )
    }
}

export default Cmtlist;

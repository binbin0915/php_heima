// 加载引入 linkdb模块获取数据
var linkdb = require('./linkdb');
var template = require('art-template');
template.defaults.root = './';
// 利用回调函数 获取linkdb得到的数据
linkdb.getdata(function(datas){
    // 使用模板引擎遍历解析数据
    // 将解析好的数据导出
    module.exports.data = template('./index.html',{data:datas});
});


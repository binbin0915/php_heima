
var path = require('path');
// node 模块导出
module.exports = {
    // 配置打包的入口文件
    entry:'./src/main.js',

    // 配置打包出口
    output:{
        // 出口的资源文件夹
        path:path.resolve(__dirname,'diss'),
        // 出口的文件名
        filename:'mm.js'
    }
}
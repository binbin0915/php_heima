var mysql = require('mysql');
// 设置连接信息
var connection = mysql.createConnection({
    host: '127.0.0.1',
    user: 'root',
    password: '',
    database: 'onepiece'
});
// 打开连接
connection.connect();

// 将整个查的方法导出 
// 因为我们需要接受一个回调函数
module.exports.getdata = function (calls) {
    var sql = 'select * from users';
    connection.query(sql, function (err, sql_data) {
        var da = sql_data;
        // 调用回调函数,将数据当做实参进行函数的回调
        calls(da);
        connection.end();
    })
}







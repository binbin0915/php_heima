var mysql = require('mysql');

var connection = mysql.createConnection({
    // 设置连接信息
    host: '127.0.0.1',
    user: 'root',
    password: '',
    database: 'onepiece'
});
// 打开连接
connection.connect();

var sql = 'select * from users where id=1';
// 发送sql语句
connection.query(sql, function (err, res, filed) {
    // 回调获取sql返回的数据
    console.log(err);
    console.log('------------');
    console.log(res);
    console.log('------------');
    console.log(filed);
})
// 结束连接
connection.end();
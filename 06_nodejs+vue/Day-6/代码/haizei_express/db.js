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

module.exports = {
    wh: undefined,
    where: function (wh) {
        this.wh = wh
        return this;
    },
    select: function (callback) {
        if (this.wh == undefined) {
            var sql = "select * from users";
        } else {
            var sql = "select * from users where " + this.wh;
        }
        connection.query(sql, function (err, sql_data) {
            // return sql_data;
            var da = sql_data;
            // 调用回调函数,将数据当做实参进行函数的回调
            callback(da);
        });
        // return sql_data
        this.wh = undefined;
    },
    delete:function(callback){
        if (this.wh == undefined) {
            console.log('请加where条件,否则去死');
            return;
        }else{
            var sql = "delete from users where "+this.wh;
            connection.query(sql,function(err,datas){
                // console.log(datas);
                callback(datas.affectedRows);
            })
        }
        this.wh = undefined;
    },
    update: function (data,callback) {
        if (this.wh == undefined) {
            console.log('请加where条件,否则去死');
            return;
        } else {
            var set = '';
            for (i in data) {
                set += i + "='" + data[i] + "',";
            }
            set = set.slice(0, set.length - 1);
            var sql = "update users set " + set + ' where '+this.wh;
            // console.log(sql);

            connection.query(sql,function(err,datas){
                // console.log(datas.changedRows);
                callback(datas.changedRows);
            })
        }
        this.wh =undefined;
    }
    
}




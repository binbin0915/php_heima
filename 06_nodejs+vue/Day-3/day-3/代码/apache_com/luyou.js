var yewu = require('./yewu')
var fs = require('fs');
function server(server) {
    server.on('request', function (request, response) {
        if (request.url == '/') {

            response.end(yewu.htmls);

        } else if (request.url == '/file_list') {
            fs.readdir('./', 'utf8', function (err, data) {
                var data_arr = [];
                var cont = 0;
                for (var i = 0; i < data.length; i++) {
                    data_arr[i] = {};

                    (function (i) {
                        fs.stat(data[i], function (err, files) {

                            cont++;
                            if (files.isFile()) {
                                data_arr[i].type = 'f';
                            } else {
                                data_arr[i].type = 'd';
                            }

                            data_arr[i].name = data[i];
                            data_arr[i].size = files.size;
                            data_arr[i].mtime = moment(files.mtime).format('YYYY-MM-DD hh:mm:ss');
                            // console.log(data[i]);
                            if (cont == data.length) {
                                response.end(JSON.stringify(data_arr));
                            }
                        })

                    })(i) // 因此我们借助自调用匿名函数形成闭包,保存I变量
                    // 回调函数中就可以使用i变量

                    // data_arr.push(obj);
                }

            })
        } else {
            fs.readFile('.' + request.url, function (err, data) {
                response.end(data);
            })
        }
    })
}


module.exports.server = server;
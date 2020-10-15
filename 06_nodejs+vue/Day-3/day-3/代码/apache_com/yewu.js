var fs = require('fs');
var moment = require('moment');
var template = require('art-template');

template.defaults.root = './'

fs.readdir('./', 'utf8', function (err, data) {
    var data_arr = [];
    // 循环获取每个文件的其他属性
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

                    var htmls = template('./index.html', { data: data_arr });

                    exports.htmls = htmls;

                    // response.end(htmls);

                    // response.end(JSON.stringify(data_arr));
                }
            })

        })(i)
    }

})
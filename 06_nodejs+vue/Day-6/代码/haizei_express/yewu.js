// 加载引入 linkdb模块获取数据
var db = require('./db');
var url = require('url');
var querystring = require('querystring');
var formidable = require('formidable');
var fs = require('fs');
// var template = require('art-template');
// template.defaults.root = './';

module.exports = {
    // 方法的简写
    login_get(req,res){ // 展示登录页面
        res.render('./login.html', {});
    },

    login_post(req,res){
        var f = new formidable.IncomingForm();
        f.parse(req,(err,fileds)=>{
            // 判断用户是否合法
            if(fileds.user == 'admin' && fileds.pwd == '123'){
                // 将用户信息写入session
                // 以供后面判断
                req.session.se_da = fileds;
                // 返回登录成功的提示信息并做页面跳转
                var backstr = "<script>alert('登录成功');window.location.href='/'</script>"
                res.setHeader('Content-type', 'text/html;charset=utf-8');
                res.end(backstr);
            }else{
                // 登录失败,继续登录
                var backstr = "<script>alert('登录失败');window.location.href='/login'</script>"
                res.setHeader('Content-type', 'text/html;charset=utf-8');
                res.end(backstr);
            }
        })
    },

    getall: function (req, res) {
        // 判断是否登录
        if(!req.session.se_da){
            // 如果没有登录,跳转到登录页面
            var backstr = "<script>alert('请登录');window.location.href='/login'</script>"
            res.setHeader('Content-type', 'text/html;charset=utf-8');
            res.end(backstr);
            return ;
        }
        db.select(function (datas) {
            res.render('./index.html', { data: datas });
            // var html_data = template('./index.html', { data: datas });
            // res.end(html_data);
        });

        // var s = db.select();
        // console.log(s);
    },
    getone: function (req, res) {
        var urlObj = url.parse(req.url, true);
        // console.log(urlObj);
        db.where('id=' + urlObj.query.id).select(function (data) {
            res.render('./userinfo.html', { data: data });

        })
    },
    upuser_get: function (req, res) {
        var urlObj = url.parse(req.url, true);
        db.where('id=' + urlObj.query.id).select(function (data) {
            res.render('./upuser.html', { data: data });

        })
    },
    delete_user: function (req, res) {
        var urlObj = url.parse(req.url, true);
        db.where('id=' + urlObj.query.id).delete(function (data) {
            if (data >= 1) {
                var backstr = "<script>alert('删除成功');window.location.href='/'</script>"
                res.setHeader('Content-type', 'text/html;charset=utf-8');
                res.end(backstr);
            }
        });
    },

    // upuser_post:function(req,res){

    // }
    // 简写
    upuser_post(req, res) {
        var urlObj = url.parse(req.url, true);
        // 获取formidable 对象,用于文件上传及表单数据解析
        var form = new formidable.IncomingForm();
        // 实现文件上传,获取表单数据并解析为对象
        // 通过回调函数的形式,将文件上传后的路径等信息及表单数据返回
        form.parse(req, (err, fileds, files) => {
            // 设置上传路径
            var file_path = '/img/' + files.touxiang.name
            // 将上传后的文件移动到指定的目录并重命名
            fs.rename(files.touxiang.path, './public' + file_path, (err) => {
                // console.log(fileds);
                // res.end();
                // 将文件路径写入对象中
                fileds.img = file_path;
                // 链接数据库,将组装好的数据写入数据库
                db.where('id=' + urlObj.query.id).update(fileds, (data) => {
                    // 判断数据库的返回信息
                    if(data >= 1){
                        // 给客户端返回数据
                    var backstr = "<script>alert('修改成功');window.location.href='/'</script>"
                    res.setHeader('Content-type', 'text/html;charset=utf-8');
                    res.end(backstr);
                }
            })

        });
    })
}
    // upuser_post:function(req,res){
    //     var data_post = '';
    //     // 设置监听事件(数据传输)
    //     req.on('data',function(che){
    //         data_post+=che;
    //     });
    //     // 监听数据传输结束的事件
    //     req.on('end',function(){
    //         var urlObj = url.parse(req.url,true);
    //         // 将获取到的数据转义
    //         var data_obj = querystring.parse(data_post);

    //         // console.log(data_obj);
    //         // res.end();
    //         // return;

    //         db.where('id='+urlObj.query.id).update(data_obj,function(data){
    //             // res.end(data.toString());

    //             if(data >=1){
    //                 var backstr = "<script>alert('修改成功');window.location.href='/'</script>"
    //                 res.setHeader('Content-type','text/html;charset=utf-8');
    //                 res.end(backstr);
    //             }


    //         });
    //         // console.log(data_obj);

    //     })
    // }
}

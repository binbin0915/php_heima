// 加载引入 linkdb模块获取数据
var db = require('./db');
var url = require('url');
var querystring = require('querystring');
var template = require('art-template');
template.defaults.root = './';

module.exports = {
    getall:function(req,res){
        db.select(function(datas){
            var html_data = template('./index.html', { data: datas });
            res.end(html_data);
        });
    },
    getone:function(req,res){
        var urlObj = url.parse(req.url,true);
        console.log(urlObj);
        db.where('id='+urlObj.query.id).select(function(data){
            var html_data = template('./userinfo.html',{data:data});
            res.end(html_data);
        })
    },
    upuser_get:function(req,res){
        var urlObj = url.parse(req.url,true);
        db.where('id='+urlObj.query.id).select(function(data){
            var html_data = template('./upuser.html',{data:data});
            res.end(html_data);
        })
    },
    delete_user : function(req,res){
        var urlObj = url.parse(req.url,true);
        db.where('id='+urlObj.query.id).delete(function(data){
            if(data >=1){
                var backstr = "<script>alert('删除成功');window.location.href='/'</script>"
                res.setHeader('Content-type','text/html;charset=utf-8');
                res.end(backstr);
            }
        });
    },
    upuser_post:function(req,res){
        var data_post = '';
        // 设置监听事件(数据传输)
        req.on('data',function(che){
            data_post+=che;
        });
        // 监听数据传输结束的事件
        req.on('end',function(){
            var urlObj = url.parse(req.url,true);
            // 将获取到的数据转义
            var data_obj = querystring.parse(data_post);
            db.where('id='+urlObj.query.id).update(data_obj,function(data){
                // res.end(data.toString());

                if(data >=1){
                    var backstr = "<script>alert('修改成功');window.location.href='/'</script>"
                    res.setHeader('Content-type','text/html;charset=utf-8');
                    res.end(backstr);
                }


            });
            // console.log(data_obj);
           
        })
    }
}

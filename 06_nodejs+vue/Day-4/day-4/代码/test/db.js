module.exports = {
    wh:undefined,
    where: function(wh){
        this.wh = wh;
        return this;
    },
    select:function(){
        if(this.wh == undefined){
            var sql = "select * from xx ";
        }else{
            var sql = "select * from xx where "+this.wh;
        }
        // 重置wh,不影响下一步操作
        this.wh = undefined;
        console.log(sql);
    },

    update:function(){
        if(this.wh == undefined){
            console.log('去死');
            return;
        }
        var sql = "update xx set ss=11,dd=22 where "+this.wh;
        console.log(sql);
    }
}
//页面加载完毕，执行...代码
$(document).ready(function(){
    //alert(123);
    //①、选择每个tr下面的最后一个td
    //$('tr td:last-child').css('color', 'red');
    //②、选择奇数个td，下标从0开始
    //$('td:odd').css('color','green');
    //③、找所有tr中的第2个td或2的倍数个td
    //$('td:nth-child(2)').css('color','green');
    //$('td:nth-child(2n)').css('color','green');
    //选择好td，然后为其绑定单击事件
    $('td:odd').click(function(){
        //alert(234);
        //将点击的td保存
        var td = $(this); //如同dom中的this
        //判断td中是否有一个input
        if(td.children().length >= 1){
            return false;
        }
        //保存td中原来的值
        var text = td.text(); //不填参数表示获取td里面的文本值，填参数表示设置td里面的文本值
        //清空td
        td.html('');
        //创建input
        //设置input的value值
        //设置input的样式
        //把input放到td中 //td.append(input);
        //让input获取焦点
        var input = $('<input />');
        input
            .val(text)
            .css('width', td.css('width'))
            .css('height', td.css('height'))
            .css('font-size', td.css('font-size'))
            .css('outline', '0')
            .appendTo(td)
            .focus(); //获取焦点这行要放到最后

        //给input绑定键盘事件
        input.keyup(function(evt){
            //alert(1233);
            var keyCode = evt.which; //用which属性来获取keyCode
            if(keyCode == 13){
                //表示确定修改，把input框中的值放到td中
                //$(this).val(); //表示获取input的value值
                td.text($(this).val());
            }
            if(keyCode == 27){
                //按ESC键，表示取消修改。把之前td中的值再次放回到td中
                td.text(text);
            }
        });
    });
});
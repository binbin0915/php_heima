$(document).ready(function(){
    //选择li，绑定单击事件，单击的时候，为其添加tab类，移除其兄弟的tab类
    //但是无法找到它对应的div
    /*$('li').click(function(){
        $(this).addClass('tab');
        $(this).siblings().removeClass('tab');
    });*/

    //jQuery中提供了一个遍历的方法，each
    // each用法一：
    /*$('li').each(function(i, val){
        //i 表示li的下标
        //val 每次遍历时的li
        console.log(i, val);
    });*/

    // each用法二：
    $.each($('li'), function (i, val) {
        //i 表示li的下标
        //val 每次遍历时的li
        //console.log(i, val);

        //遍历的时候，为每个li单独绑定一个单击事件，1
        /*$('li').eq(i).click(function () {
            console.log(i);
        });*/
        //遍历的时候，为每个li单独绑定一个单击事件,2
        $(val).click(function(){
            //console.log(i);
            $('li').eq(i).addClass('tab').siblings().removeClass('tab');
            $('div').eq(i).addClass('show').siblings('div').removeClass('show');
        });

    });


    /*for(){
        lis[i].a = i;
        lis[i].onclick = function () {

        }
    }*/
});
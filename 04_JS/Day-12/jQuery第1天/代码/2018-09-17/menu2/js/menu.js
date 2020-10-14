//页面载入事件
$(document).ready(function(){
    //找到大的li，绑定鼠标移入事件
    //第一版，有BUG，因为使用了mouseover和mouseout事件
    /*$('body>ul>li').mouseover(function(){
        //鼠标移入，其子元素中的ul显示
        $(this).children('ul').slideDown(500);
    });

    $('body>ul>li').mouseout(function(){
        //鼠标离开，其子元素中的ul显示
        $(this).children('ul').slideUp(500);
    });*/

    //第二版：使用mouseenter和mouseleave事件
    /*$('body>ul>li').mouseenter(function(){
        //鼠标移入，其子元素中的ul显示
        $(this).children('ul').slideDown(500);
    });

    $('body>ul>li').mouseleave(function(){
        //鼠标离开，其子元素中的ul显示
        $(this).children('ul').slideUp(500);
    });*/

    //第三版：使用一个事件---hover
    var timer = null;
    $('body>ul>li').hover(function(){
        var li = $(this);
        //鼠标移入，其子元素中的ul显示
        timer = setTimeout(function(){
            li.children('ul').slideDown(500);
        }, 300);
    }, function(){
        //鼠标离开，其子元素中的ul显示
        clearTimeout(timer);
        $(this).children('ul').slideUp(500);
    });
});
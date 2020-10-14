//$('div').box({zuo:'left', shang:'center'});
$.fn.box = function (position) {
    //position = {zuo:'left', shang:'center'}
    var box = $(this);
    var win = $(window);
    //真实的left和top值
    var trueLeft;
    var trueTop;
    //用户希望的位置
    var zuo = position.zuo;
    var shang = position.shang;
    //div的宽度、高度
    var boxWidth = box.outerWidth();
    var boxHeight = box.outerHeight();
    //浏览器窗口的宽度、高度
    var winWidth;
    var winHeight;
    //滚动条滚动的距离
    var scrollLeft;
    var scrollTop;

    /************ 获取浏览器宽高、获取滚动条滚动距离 ************/
    function getVal(){
        //浏览器窗口的宽度、高度
        winWidth = win.width();
        winHeight = win.height();
        //滚动条滚动的距离
        scrollLeft = win.scrollLeft();
        scrollTop = win.scrollTop();
    }

    /************ 计算真实的left值和top值，用于css设置 ************/
    function jisuan(){
        //以九宫格的位置显示，
        //可选的zuo 值都有：left center right
        //可选的shang值都有 ：top center bottom
        if(zuo == 'left'){
            trueLeft = 0 + scrollLeft + 'px';
        }else if(zuo == 'center'){
            trueLeft = (winWidth - boxWidth) / 2 + scrollLeft + 'px';
        }else if(zuo == 'right'){
            trueLeft = winWidth - boxWidth + scrollLeft + 'px';
        }
        if(shang == 'top'){
            trueTop = 0 + scrollTop + 'px';
        }else if(shang == 'center'){
            trueTop = (winHeight - boxHeight) / 2 + scrollTop + 'px';
        }else if(shang == 'bottom'){
            trueTop = winHeight - boxHeight + scrollTop + 'px';
        }
    }

    /************ 让box窗口显示 ************/
    function xianshi(){
        box.css('left', trueLeft).css('top', trueTop).show();
    }
    /***** 页面刷新，调用上面的函数 ******/
    getVal();
    jisuan();
    xianshi();


    //当滚动条滚动的时候，窗口位置保持不变
    win.scroll(function(){
        //console.log(123);
        getVal();
        jisuan();
        xianshi();
    });
    //当浏览器改变大小的时候，窗口位置保持不变
    win.resize(function(){
        //console.log(456);
        getVal();
        jisuan();
        xianshi();
    });

    //关闭box窗口
    box.find('span').click(function(){
        box.hide();
    });
};
//页面载入事件
$(document).ready(function(){
    //alert(123);
    //找到顶级菜单，绑定单击事件
    $('a').click(function () {
        //alert(46);
        //实现方式一：
        /*if($(this).next().css('display') == 'none'){
            $(this).next('ul').show(2000);
        }else{
            $(this).next('ul').hide(2000);
        }*/

        //实现方式二：
        //$(this).next().toggle(2000);

        //实现方式三：
        /*if($(this).next().css('display') == 'none'){
            $(this).next('ul').slideDown(2000);
        }else{
            $(this).next('ul').slideUp(2000);
        }*/

        //实现方式四：
        $(this).next().slideToggle(800);
    });
});
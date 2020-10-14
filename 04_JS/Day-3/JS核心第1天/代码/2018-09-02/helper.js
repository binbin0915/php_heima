//兼容各个浏览器的获取完整css样式的写法
function getStyle(node, styleName){
    if(node.currentStyle){
        //说明是IE
        return node.currentStyle[styleName];
    }else{
        return getComputedStyle(node)[styleName];
    }
}
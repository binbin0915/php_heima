/*
 参数 元素的id
 返回值 元素的dom对象
 */
function $(id){
    return document.getElementById(id);
}
/*
 url  请求的地址，带参数
 fn  函数类型，函数的参数是要处理的数据
 */
function get(url, fn){
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function(){
        if(xhr.readyState==4 && xhr.status==200){
            var res = JSON.parse(xhr.responseText); //返回的数据
            fn(res); //处理返回的数据
        }
    };
    xhr.open('get', url, true);
    xhr.send();
}
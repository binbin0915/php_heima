import axios from 'axios';
var myaxios = {};
myaxios.install = function(Vue){
    var axios_obj = axios.Create({
        //基础url前缀 除非 url 是写死的 http网站， 否则会自动加载到最前面
        baseURL:'https://localhost:8888/api/private/v1',
        //请求头信息
        headers:{'Authorization':window.localStorage.getItem('token')}
    });
    Vue.prototype.$myHttp = axios_obj;
}
export default myaxios;
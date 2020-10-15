// 使用ES6模块化加载引入 Vue ,没有路径都去node_modules目中查找加载
import Vue from 'vue'
// 使用ES6模块化加载引入 APP 模块 .有路径则按照路径查找
import App from './App'
// 导入 router ,在当前目录中找到了文件夹
// 根据加载规则找到router目录下的index.js 
import router from './router'

// 忽略 不管 
Vue.config.productionTip = false

/* eslint-disable no-new */
// 创建vue实例对象
new Vue({
  // 绑定 app 
  el: '#app',
  router,
  // vue 实例的私有组件
  // components: { App:{
  //   template :'<div id="app">
  //   <img src="./assets/logo.png">
  //   <router-view/>
  // </div>'
  // } },
 
  components: { App },

  // Vue 实例中的 template 
  // 根据vue 生命周期的执行规则
  // 会出现, template中的内容替换 el 选中的内容
  template: '<App/>'
})

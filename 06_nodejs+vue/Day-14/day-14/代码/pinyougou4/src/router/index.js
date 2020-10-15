import Vue from 'vue'
import Router from 'vue-router'
// import HelloWorld from '@/components/HelloWorld'
import Home from '@/components/home/home'
// import Homes from '@/components/home/homes'
// 引入一个路由组件时不需要.vue的后缀名
import Login from '@/components/login/login'
import Users from '@/components/users/users'
import Rights from '@/components/rights/rights'
import Roles from '@/components/roles/roles'

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'home',
      component: Home,
      children:[
        {path:'/users',name:'users',component:Users},
        {path:'/rights',name:'rights',component:Rights},
        {path:'/roles',name:'roles',component:Roles},
      
      ]
    },

    {
      path: '/login',
      name:'login',
      component: Login
    },
   

  ]
})

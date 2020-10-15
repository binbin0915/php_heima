import Vue from 'vue'
import Router from 'vue-router'

// 路由组件的引入才可以使用路由懒加载
const Home =() => import('@/components/home/home')
const Login =() => import( '@/components/login/login')
const Users =() => import( '@/components/users/users')
const Rights =() => import( '@/components/rights/rights')
const Roles = () => import('@/components/roles/roles')

Vue.use(Router)

var rou = new Router({
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

rou.beforeEach((to,from,next)=>{
    //  判断是不是要去请求 login
    if(to.name == 'login'){
      // 如果是请求login直接放过
        next();
    }else{
      // 如果不是请求login  
      // 获取token 
        var token = localStorage.getItem('token');
        // 验证token
        if(!token){
          //如果token 为空
          // 使用next函数直接调回login
            next({name:'login'});
        }else{
         
          // 如果有token 放过
          next();
        }
    }
})


export default rou;

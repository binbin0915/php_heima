<template>
    <el-container class="height100">
    <el-header>
        
        
        <el-col :span="4">
            <div class="grid-content bg-purple">
            <img src="/static/logo.png" alt="">
            </div></el-col>
        <el-col :span="16">
            <div class="grid-content bg-purple-light">
                <h2>电商后台管理系统</h2>
            </div></el-col>
        <el-col :span="4">
            <div class="grid-content bg-purple">
                <el-button @click.stop="logOut" type="warning">退出</el-button>
            </div>
        </el-col>
    </el-header>


    <el-container>
        <!-- 侧边栏 -->
        <el-aside width="200px">
        <el-col :span="24">
        <el-menu
        :router="true"
        default-active="2"
        class="el-menu-vertical-demo"
        >
        <el-submenu v-for="item1 in menusList" :index="item1.id" :key='item1.id'>
         <template slot="title">
             <i class="el-icon-location"></i>
             <span>{{item1.authName}}</span>
        </template>
        <el-menu-item-group>
          <el-menu-item v-for="item2 in item1.children" :index="item2.path" :key="item2.id">  
              <i class="el-icon-menu"></i>
              {{item2.authName}}
            </el-menu-item>
        </el-menu-item-group>
      </el-submenu>
    </el-menu>
  </el-col>

        </el-aside>


        <!-- 显示区 -->
        <el-main>
            <router-view/>
        </el-main>
    </el-container>
    </el-container>
</template>

<script>
export default {
    data(){
        return {
            menusList:[],
        }
    },
    // 其他页面全部依赖home加载
    // 如果没有登录,直接跳转到登录页面
    // 利用钩子函数 在页面渲染之前,获取判断用户登录信息
    // 判断登录
    mounted(){
        this.getMenusList();

        var token = window.localStorage.getItem('token');
        if(!token){
            this.$message.error('请登录');
            this.$router.push({name:'login'})
        }
    },
    methods:{

        getMenusList(){
            // 获取左侧菜单栏中的所有信息(有关这个用户)
            this.$myHttp({
                url:'menus',
                method:'get'
            }).then(back=>{
                let {data,meta} = back.data;
                console.log(data,meta);
                this.menusList = data;
            })
        },

        // 退出功能
        logOut(){
        // 删除token 
        window.localStorage.clear('token')
        // 跳转到登录页
        this.$router.push({name:'login'});
        }
    }
}
</script>

<style>
    .height100{
        height: 100%
    }
  .el-header, .el-footer {
    background-color: #B3C0D1;
    color: #ffffff;
    text-align: center;
    line-height: 20px;
  }
  
  .el-aside {
    background-color: #D3DCE6;
    color: #333;
    text-align: center;
    line-height: 200px;
  }
  
  .el-main {
    background-color: #E9EEF3;
    color: #333;
    text-align: center;
    line-height: 160px;
  }
  
  body > .el-container {
    margin-bottom: 40px;
    
  }
  
  .el-container:nth-child(5) .el-aside,
  .el-container:nth-child(6) .el-aside {
    line-height: 260px;
  }
  
  .el-container:nth-child(7) .el-aside {
    line-height: 320px;
  }
</style>

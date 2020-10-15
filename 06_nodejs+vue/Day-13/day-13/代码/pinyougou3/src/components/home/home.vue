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
        <el-aside width="400px">
        <el-col :span="24">
        <el-menu
        :router="true"
        default-active="2"
        class="el-menu-vertical-demo"
        >
        <el-submenu index="1">
         <template slot="title">
             <i class="el-icon-location"></i>
             <span>用户管理</span>
        </template>
        <el-menu-item-group>
          <el-menu-item index="users">  <i class="el-icon-menu"></i>用户列表</el-menu-item>
        </el-menu-item-group>
      </el-submenu>

      <el-submenu index="2">
         <template slot="title">
             <i class="el-icon-location"></i>
             <span>权限管理</span>
        </template>
        <el-menu-item-group>
          <el-menu-item index="uuuuu">角色列表</el-menu-item>
          <el-menu-item index="2-2">权限列表</el-menu-item>
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
    // 其他页面全部依赖home加载
    // 如果没有登录,直接跳转到登录页面
    // 利用钩子函数 在页面渲染之前,获取判断用户登录信息
    // 判断登录
    mounted(){
        var token = window.localStorage.getItem('token');
        if(!token){
            this.$message.error('请登录');
            this.$router.push({name:'login'})
        }
    },
    methods:{
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

<template>
<div class="login-wrap">
  <!--
     :model="form" 绑定元素数据
    :rules = 'rules' 设置验证规则
     
      -->
    <el-form  status-icon :rules="rules" :model="form" ref="form" label-width="100px" class="demo-ruleForm login-from">
        <h2>用户登录</h2>
        <el-form-item label="用户名" prop="username">
            <el-input type="text" v-model="form.username"  autocomplete="off"></el-input>
        </el-form-item>
        <el-form-item label="密码" prop="password">
            <el-input type="password" v-model="form.password" autocomplete="off"></el-input>
        </el-form-item>
        <el-form-item>
            <el-button type="primary" class="login-btn" @click="loginClick">登陆</el-button>
        </el-form-item>
    </el-form>
</div>
</template>

<script>
export default {
  data() {
    return {
      form:{
        username:'',
        password:''
      },
      // 验证规则
      rules:{
        // 验证用户名 在组建中使用 prop 设置
        username:[
          { required: true, message: '请输入用户名', trigger: 'blur' }
        ],
        password:[
          { required: true, message: '请输入活动名称', trigger: 'blur' },
          { min: 3, max: 8, message: '长度在 3 到 8 个字符', trigger: 'blur' }
        ]
      }
    };
  },
  methods: {
    loginClick() {
      this.$refs.form.validate(res=>{
        // 如果有错误信息,直接停止代码执行
        if(res){
          return ;
        }
      });

      // console.log(this.username,this.pwd);
      // 将用户名和密码 使用post 发送到接口地址


      
      this.$myHttp
        .post("login", this.form)
        .then(back_data => {
          if (back_data.data.meta.status == 200) {
            // 将登录信息保存 到 localStorage(H5新增本地缓存)
            window.localStorage.setItem('token',back_data.data.data.token);
            this.$message({
              message: "恭喜登录成功",
              type: "success"
            });

            // 登录成功,跳转到主页
            this.$router.push({ name: "home" });
          }
          // console.log(back_data);
        });
    }
  }
};
</script>

<style>
.login-wrap {
  background-color: #324152;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
}

.login-wrap .login-from {
  background-color: #fff;
  width: 400px;
  padding: 30px;
  border-radius: 5px;
}

.login-wrap .login-from .login-btn {
  width: 100%;
}
</style>

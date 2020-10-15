<template>
    <div>
        <!-- 面包屑导航 -->
        <el-breadcrumb separator-class="el-icon-arrow-right">
            <el-breadcrumb-item :to="{ path: '/' }">首页</el-breadcrumb-item>
            <el-breadcrumb-item>用户管理</el-breadcrumb-item>
            <el-breadcrumb-item>用户列表</el-breadcrumb-item>
        </el-breadcrumb>

        <!-- 搜索 -->
        <div style="margin-top: 5px;">
            <el-input placeholder="请输入内容" v-model="searchData" class="input-with-select">
                <el-button slot="append" @click.stop="searchGet" icon="el-icon-search"></el-button>
            </el-input>
            <el-button @click.stop="userShow" type="primary">添加用户</el-button>
        </div>

        <!-- 表格 -->
        <el-table ref="singleTable" :data="tableData" highlight-current-row style="width: 100%">
          <el-table-column type="index" width="50"></el-table-column>
          <el-table-column property="username" label="姓名" width="180"></el-table-column>
          <el-table-column property="email" label="邮箱" width="220"></el-table-column>
          <el-table-column property="mobile" label="电话"></el-table-column>
          <el-table-column  property="" label="状态">
              <template slot-scope="scope">
                  <el-switch v-model="value2"  active-color="#13ce66" inactive-color="#ff4949"></el-switch>
              </template>
          </el-table-column>
          <el-table-column  property="" label="操作">
              <template slot-scope="scope">
                  <el-button type="primary" size="mini" plain icon="el-icon-edit" ></el-button>
                  <el-button type="warning" size="mini" plain icon="el-icon-check" ></el-button>
                  <el-button type="danger" size="mini" plain icon="el-icon-delete" ></el-button>
              </template>
          </el-table-column>
        </el-table>

        <!-- 分页 -->
         <el-pagination
            :page-sizes="[100, 200, 300, 400]"
            :page-size="100"
            layout="total, sizes, prev, pager, next, jumper"
            :total="400">
        </el-pagination>
    
    
        <!-- 添加用弹窗 -->
        <!-- visible 属性控制窗口的显示与隐藏 -->
        <el-dialog title="添加用户" :visible.sync="addUserShow">
            <!-- 使用双向数据绑定,操作表单数据 -->
            <el-form :model="userAddData"  :rules="rules">
                <el-form-item label="用户名" label-width="200px" prop="username">
                    <el-input v-model="userAddData.username" autocomplete="off"></el-input>
                </el-form-item>
                <el-form-item label="密码" label-width="200px" prop="password">
                    <el-input v-model="userAddData.password" autocomplete="off"></el-input>
                </el-form-item>
                <el-form-item label="邮箱" label-width="200px">
                    <el-input v-model="userAddData.email" autocomplete="off"></el-input>
                </el-form-item>
                <el-form-item label="电话" label-width="200px">
                    <el-input v-model="userAddData.mobile" autocomplete="off"></el-input>
                </el-form-item>
            </el-form>
            <div slot="footer" class="dialog-footer">
                <!-- 关闭窗口 -->
                <el-button @click="addUserShow = false">取 消</el-button>
                <!-- 绑定确定事件,发送数据到服务器入库 -->
                <el-button type="primary" @click="addUserPost">确 定</el-button>
            </div>
        </el-dialog>


    </div>
</template>

<script>
export default {
  data() {
    return {
      // 窗口显示控制数据
      addUserShow: false,
      // 添加用户时使用的表单数据
      userAddData: {
        username: "",
        password: "",
        email: "",
        mobile: ""
      },
      // 验证规则
      rules: {
        // 验证用户名 在组建中使用 prop 设置
        username: [
          { required: true, message: "请输入用户名", trigger: "blur" }
        ],
        password: [
          { required: true, message: "请输入活动名称", trigger: "blur" },
          { min: 3, max: 8, message: "长度在 3 到 8 个字符", trigger: "blur" }
        ]
      },
      // 搜索框的内容
      searchData: "",
      value2: true,
      tableData: []
    };
  },

  methods: {
    // 获取用户信息的公用方法
    getUserList(query = "") {
      // query 是为可选参数
      if (query == "") {
        var url = "users?pagenum=1&pagesize=20";
      } else {
        var url = "users?pagenum=1&pagesize=20&query=" + query;
      }
      this.$myHttp({
        url,
        method: "get"
      }).then(backdata => {
        //  解析数据对象
        let { data, meta } = backdata.data;
        if (meta.status == 200) {
          this.tableData = data.users;
        } else {
        }
      });
    },
    // 模糊搜索用户信息
    searchGet() {
      // 直接调用获取用户的方法
      // 传递关键字进行搜索
      this.getUserList(this.searchData);
    },

    // 显示添加用面板
    userShow() {
      this.addUserShow = true;
    },

    // 请求接口,添加用户
    addUserPost() {
        // 如果验证信息有错误,不提交数据
      this.$refs.userAddData.validate(res => {
        // 如果有错误信息,直接停止代码执行
        if (res) {
          return;
        }
      });

      this.$myHttp({
        url: "users",
        method: "post",
        // 直接将vue data 数据中的 userAddData 拿过来,
        // userAddData 就是弹出表单中的数据
        data: this.userAddData
      }).then(backdata => {
        let { data, meta } = backdata.data;
        if (meta.status == 201) {
          // 提示成功
          this.$message({ message: "添加用户成功", type: "success" });
          this.addUserShow = false; // 关闭弹窗
          // 重新请求用户列表
          this.getUserList();
        }
        // console.log(backdata);
      });
      // console.log(this.userAddData);
    }
  },

  // 利用钩子函数在页面渲染之前获取用户列表数据
  mounted() {
    //   获取所有用户信息
    this.getUserList();
  }
};
</script>

<style>
.el-main {
  line-height: 30px;
  text-align: left;
  width: 30%;
}
</style>

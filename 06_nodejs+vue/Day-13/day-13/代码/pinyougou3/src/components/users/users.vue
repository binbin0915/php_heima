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
        <el-table
            ref="singleTable"
            :data="tableData"
            highlight-current-row
            style="width: 100%">
            <el-table-column
            type="index"
            width="50">
            </el-table-column>
            <el-table-column
            property="username"
            label="姓名"
            width="180">
            </el-table-column>
            <el-table-column
            property="email"
            label="邮箱"
            width="220">
            </el-table-column>
            <el-table-column
            property="mobile"
            label="电话">
            </el-table-column>
            <el-table-column  property="" label="状态">
                <template slot-scope="scope">
                  <!-- 此时,我们通过scope获取状态数据,而不需要data中的数据 -->
                    <el-switch v-model="scope.row.mg_state" @change="mgStateChange(scope)" active-color="#13ce66" inactive-color="#ff4949"></el-switch>
                </template>
            </el-table-column>
            <el-table-column  property="" label="操作">
                <template slot-scope="scope">
                    <el-button type="primary" size="mini" plain icon="el-icon-edit" @click.stop="editUserisShow(scope)" ></el-button>
                    <el-button type="warning" size="mini" plain icon="el-icon-check" @click="rolesShowClick(scope)" ></el-button>
                    <el-button type="danger" size="mini" plain icon="el-icon-delete" @click="deleteUser(scope.row.id)" ></el-button>
                </template>
            </el-table-column>
        </el-table>

        <!-- 分页 -->
        <!--
           @size-change="sizeChange"  页面显示条数修改时触发
           :page-sizes="[1, 2, 3, 4, 20]" 条数可选列表
           :page-size="20" 默认显示条数
           :total="total" 显示总条数
            @current-change = 'pageChange'  改变页面触发事件
         -->
         <el-pagination
            @size-change="sizeChange" 
            @current-change = 'pageChange' 
            :page-sizes="[1, 2, 3, 4, 20]"
            :page-size="20"
            layout="total, sizes, prev, pager, next, jumper"
            :total="total">
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


        <!-- 修改用户弹窗 -->
        <!-- visible 属性控制窗口的显示与隐藏 -->
        <el-dialog title="修改用户" :visible.sync="editUserShow">
            <!-- 使用双向数据绑定,操作表单数据 -->
            <el-form :model="userEditData"  :rules="rules">
                <el-form-item label="用户名" label-width="200px" prop="username">
                    <el-input v-model="userEditData.username" :disabled="true" autocomplete="off"></el-input>
                </el-form-item>
                <el-form-item label="邮箱" label-width="200px">
                    <el-input v-model="userEditData.email" autocomplete="off"></el-input>
                </el-form-item>
                <el-form-item label="电话" label-width="200px">
                    <el-input v-model="userEditData.mobile" autocomplete="off"></el-input>
                </el-form-item>
            </el-form>
            <div slot="footer" class="dialog-footer">
                <!-- 关闭窗口 -->
                <el-button @click="quxiaoxiugai">取 消</el-button>
                <!-- 绑定确定事件,发送数据到服务器入库 -->
                <el-button type="primary" @click="editUserPut">确 定</el-button>
            </div>
        </el-dialog>

        <!-- 修改用户角色的弹窗 -->
        <el-dialog title="修改用户" :visible.sync="rolesShow">
            <!-- 使用双向数据绑定,操作表单数据 -->
            <el-form >
                <el-form-item label="用户名" label-width="200px" >
                    <span>{{rolesData.username}}</span>
                </el-form-item>
                <el-form-item label="角色" label-width="200px">
                    <el-select v-model="roleId" placeholder="请选择">
                      <el-option
                        v-for="item in roleList"
                        :key="item.roleName"
                        :label="item.roleName"
                        :value="item.id">
                      </el-option>
                    </el-select>

                </el-form-item>
            </el-form>
            <div slot="footer" class="dialog-footer">
                <!-- 关闭窗口 -->
                <el-button @click="rolesShow = false">取 消</el-button>
                <!-- 绑定确定事件,发送数据到服务器入库 -->
                <el-button type="primary" @click="rolePut">确 定</el-button>
            </div>
        </el-dialog>

    </div>
</template>

<script>
export default {
  data() {
    return {
      roleId: "",
      roleList: [],
      // 要修改角色的用户信息
      rolesData: {},

      // 修改用户窗口 隐藏显示
      editUserShow: false,
      userEditData: {
        id: "",
        username: "",
        email: "",
        mobile: ""
      },
      // 窗口显示控制数据  添加用户
      addUserShow: false,

      // 添加用户时使用的表单数据
      userAddData: {
        username: "",
        password: "",
        email: "",
        mobile: ""
      },

      // 修改用户角色
      // 控制修改角色窗口
      rolesShow: false,

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
      // 切换用户状态
      value2: true,

      // 用户列表信息
      tableData: [],

      // 分页数据
      total:0, // 总条数
      sizepage:20,  // 默认控制显示的条数
      page:1,   // 当前默认页码 
    };
  },

  methods: {
    // 页码改变时,触发的函数
    pageChange(page){
      // console.log(page);
      this.page = page;
      this.getUserList();
    },

    // 显示条数被修改后触发
    sizeChange(size){
      this.sizepage = size;
      this.getUserList();
    },

    // 获取用户信息的公用方法
    getUserList(query = "") {
      // query 是为可选参数
      if (query == "") {
        //                                  获取每页条数
        var url = `users?pagenum=${this.page}&pagesize=${this.sizepage}`;
      } else {
                         //  自己改              自己改
        var url = "users?pagenum=1&pagesize=20&query=" + query;
      }
      this.$myHttp({
        url,
        method: "get"
      }).then(backdata => {
        //  解析数据对象
        let { data, meta } = backdata.data;
        if (meta.status == 200) {
          this.total = data.total;
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
      // this.$refs.userAddData.validate(res => {
      //   // 如果有错误信息,直接停止代码执行
      //   if (res) {
      //     return;
      //   }
      // });

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
    },

    // 状态改变事件
    mgStateChange(scope) {
      // console.log(scope);
      this.$myHttp({
        // ES6新增的 模板字符
        url: `users/${scope.row.id}/state/${scope.row.mg_state}`,
        method: "put",
        headers: { Authorization: window.localStorage.getItem("token") }
      }).then(backdata => {
        let { data, meta } = backdata.data;
        if (meta.status == 200) {
          // 提示成功
          this.$message({ message: "修改状态成功", type: "success" });
        } else {
          // 实现数据接口请求失败,状态不动
          // 1: 获取点击的元素  scope 的#index 就是点击的那个元素的数组下标
          // 修改状态值   获取修改后的页面的值,然后取反重新赋值
          this.tableData[scope.$index].mg_state = !scope.row.mg_state;
        }
      });
    },

    // 删除用户
    deleteUser(id) {
      // 添加确认窗口
      this.$confirm("此操作将永久删除该用户, 是否继续?", "提示", {
        confirmButtonText: "确定",
        cancelButtonText: "取消",
        type: "warning"
      })
        // 如果点击确认按钮执行
        .then(() => {
          // 请求接口,执行删除操作
          //获取要删除的用户id
          this.$myHttp({
            url: `users/${id}`,
            // 请求接口 删除用户
            method: "delete"
          }).then(backdata => {
            let { data, meta } = backdata.data;
            if (meta.status == 200) {
              // 删除成功后,重新获取用户列表
              this.getUserList();
              // 提示成功
              this.$message({ message: "删除成功", type: "success" });
            }
          });
        })
        // 如果询问窗口点击 取消执行以下操作
        .catch(() => {
          this.$message({
            type: "info",
            message: "已取消删除"
          });
        });
    },

    // 控制修改用户的窗口显示
    editUserisShow(scope) {
      this.userEditData = scope.row;
      this.editUserShow = true;
    },

    // 修改用户信息
    editUserPut() {
      // 获取修改后的用户信息
      let id = this.userEditData.id;
      let email = this.userEditData.email;
      let mobile = this.userEditData.mobile;

      // 发送put 请求到服务器
      this.$myHttp({
        url: `users/${id}`,
        method: "put",
        data: { email, mobile }
      }).then(backdata => {
        // console.log(backdata);
        // 使用对象的解构赋值获取data及mate
        let { data, meta } = backdata.data;
        if (meta.status == 200) {
          this.$message({ message: "修改成功", type: "success" });
        } else {
          this.$message.error("修改失败");
        }
        // 关掉窗口
        this.editUserShow = false;
        // 不管修改成功还是失败,都重新加载数据
        this.getUserList();
      });

      // console.log(this.userEditData)
    },
    // 取消修改用操作
    quxiaoxiugai() {
      // 关闭窗口
      this.editUserShow = false;
      // 重新获取数据
      // 因为数据使用双向数据绑定
      // 如果用户点击取消按钮,但是页面显示已经被修改
      // 当点击取消按钮后需要重新加载数据,消除双向数据绑定的影响
      this.getUserList();
    },

    // 控制 角色修改窗口展示
    rolesShowClick(scope) {
      // 需要获取所有角色的列表
      // 然后将角色内容,展示到下拉列表中
      this.$myHttp({
        url: "roles",
        method: "get"
      }).then(backdata => {
        console.log(backdata);
        // 渲到页面
        this.roleList = backdata.data.data;
      });

      // 将点击的用户的信息全部放入rolesData中
      this.rolesData = scope.row;
      this.rolesShow = true;
    },

    rolePut() {
      // 获取用户ID及选择后的角色id
      // console.log(this.roleId,this.rolesData.id);
      // 发送请求
      this.$myHttp({
        // 接口要求 地址 /uid/role
        url:`users/${this.rolesData.id}/role`,
        method:'put',
        // 接口要求角色id需要通过 body体发送 
        // 要把角色id 写到data中发送
        data:{rid:this.roleId},
      }).then(backdata => {
          let {data,meta} = backdata.data
          // 判断修改成功
          if(meta.status == 200){
            this.$message({message:'修改角色成功',type:'success'});
            this.rolesShow = false;// 关闭窗口
          }

      });
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

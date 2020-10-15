<template>
    <div>
        <el-button class="addjuese" type="primary">添加角色</el-button>

        <!-- :data 整个表格中所有数据的数据源 -->
        <el-table
        :data="roleListsData"
        style="width: 100%">

        <!-- 折叠数据 -->
        <el-table-column type="expand">
            <template slot-scope="scope">
                <!-- el-row是一个大盒子 -->
                <el-row  v-for="item1 in  scope.row.children">
                    <!-- el-col是两个小盒子 -->
                    <el-col :span="6">
                        <!-- el-tag 直接方式数据 -->
                        <el-tag :key="item1.id"  closable>{{item1.authName}}</el-tag> 
                        > 
                    </el-col>
                    <!-- 这是另一个小盒子 -->
                    <el-col :span="18">
                        <!-- 小盒子里面的小盒子 -->
                        <el-row v-for="item2 in item1.children">
                            <!-- 小盒子里面的小盒子分为两块 -->
                            <el-col :span="6">
                                <el-tag :key="item2.id" type="success" closable>{{item2.authName}}</el-tag>
                                > 
                            </el-col>
                            <el-col :span="18" >
                                <!-- 角色 scope.row.id 角色id -->
                                <!-- 权限的ID item3.id -->
                                <el-tag @close="deleteTag(item2,key3,scope.row.id,item3.id)" v-for="(item3,key3) in item2.children" :key="item3.id" type="warning" closable>{{item3.authName}}</el-tag>
                            </el-col>
                        </el-row>
                    </el-col>
                </el-row>
            </template>
        </el-table-column>

        <!-- 表头信息 -->
        <el-table-column
        type="index"
        width="50">
        </el-table-column>
        <el-table-column
        label="角色名称"
        prop="roleName">
        </el-table-column>
        <el-table-column
        label="角色描述"
        prop="roleDesc">
        </el-table-column>
        <el-table-column
        label="操作"
        prop="desc">
        <template slot-scope="scope">
                <el-button type="primary" size="mini" icon="el-icon-edit" round></el-button>
            <el-button type="success"  size="mini" icon="el-icon-delete" round></el-button>
            <el-button @click="rightsisShow(scope.row)" type="info"  size="mini"  icon="el-icon-check"  round></el-button>
        </template>

        </el-table-column>


  </el-table>

    <!-- 分配权限的展示面板 -->
    <el-dialog title="分配权限" :visible.sync="rightsShow">
        <!-- 
            default-expand-all 默认展开所有节点
            :data="rightsData"  设置数据源
            show-checkbox 是否设置节点为可选节点
            node-key="id" 本节点唯一id 
            :props="defaultProps" 设置展示节点内容
         -->
        <el-tree
        ref="tree"
        default-expand-all
        :data="rightsData"
        show-checkbox
        node-key="id"
        :default-expanded-keys="[2, 3]"
        :default-checked-keys="checkedArr"
        :props="defaultProps">
        </el-tree>
    <div slot="footer" class="dialog-footer">
        <el-button @click="rightsShow = false">取 消</el-button>
        <el-button type="primary" @click="rightsEditPost">确 定</el-button>
    </div>
    </el-dialog>


</div>
</template>

<script>
export default {
  data() {
    return {
        roleId:0,
        // 所有选中权限的数组集
        checkedArr:[],
        // 权限数据
      rightsData: [],
    //   设置展示节点内容
      defaultProps: {
        children: "children", // 设置子元素是数据中的 children
        label: "authName"  // 设置节点名称为 数据中的 authName
      },
      // 分派权限面版的控制
      rightsShow: false,

      // 表格中展示的数据
      roleListsData: []
    };
  },

  methods: {
    //   获取所有角色信息
    getRoleLists() {
      this.$myHttp({
        url: "roles",
        method: "get"
      }).then(back => {
        let { data, meta } = back.data;
        console.log(data, meta);
        if (meta.status == 200) {
          this.roleListsData = data;
        }
      });
    },

    // 删除角色权限标签
    deleteTag(item, key, roleId, rightId) {
      // 需要 角色id  权限ID
      this.$myHttp({
        // 拼接URL
        url: `roles/${roleId}/rights/${rightId}`,
        method: "delete"
      }).then(back => {
        let { data, meta } = back.data;
        console.log(data, meta);
        // 判断是否成功
        if (meta.status == 200) {
          // 提示信息
          this.$message({ message: meta.msg, type: "success" });
          // 数组使用引用传递,直接删除父级数组中的第几个就会影响到全局所有数据
          item.children.splice(key, 1); // 删除页面展示权限
        }
      });
    },

    // 控制权限分配面板的显示
    rightsisShow(row) {
        this.roleId = row.id;
        // 获取本角色拥有的所有数据,数据中有权限
        // console.log(row);
        // row.children.children.children.id
        // 为了防止其他数据的影响,每次获取权限都要先清空以前的权限数据
       this.checkedArr = [];
    //    角色数据中的 children 就是这个角色所拥有的所有权限
        var arr = row.children;
        arr.forEach(item1 => {
            item1.children.forEach(item2=>{
                item2.children.forEach(item3=>{
                    // 因为 elUI中只要有一个第三级权限被选中,父级也会被半选中
                    // 所以,我们只需要获取第三季权限,父级及爷爷级权限都会被选中
                    this.checkedArr.push(item3.id);
                })
            })
        });

      

      // 获取所有权限
      this.$myHttp({
        // url:`rights/list`
        // 获取树状结构的数据更为合适
        url: `rights/tree`,
        method: "get"
      }).then(back => {
        let { data, meta } = back.data;
        if (meta.status == 200) {
        //   console.log(data);
        //   将获取到的所有权限数据.以树状结构展示到页面中
          this.rightsData = data;
        }
      });
      this.rightsShow = true;
    },

    // 修改角色权限的事件
    rightsEditPost(){
        // getCheckedKeys 获取所有选中节点的key 数组形式返回
        // getHalfCheckedKeys 获取所有本选中节点的key 数组
        // var a = this.$refs.tree.getCheckedKeys();
        // var b = this.$refs.tree.getHalfCheckedKeys();
        // concat  合并两个数组
        // var c = a.concat(b);
        // join 将数组以,隔开的形式转为字符串
        // console.log(c.join());
        // 生三个变量
        var rids = this.$refs.tree.getCheckedKeys().concat(this.$refs.tree.getHalfCheckedKeys()).join();
        this.$myHttp({
            url:`roles/${this.roleId}/rights`,
            method:'post',
            data:{rids}
        }).then(back=>{
            let {meta} = back.data;
            console.log(meta);
            if(meta.status == 200){
                this.$message({message:meta.msg,type:'success'});
                // 修改成功后,重新获取数据
                this.getRoleLists();
            }
        })
        this.rightsShow = false;
    }
  },
  //  在页面渲染之前获取所有角色数据
  mounted() {
    //   调用获取角色信息的方法
    this.getRoleLists();
  }
};
</script>

<style>
.demo-table-expand {
  font-size: 0;
}
.demo-table-expand label {
  width: 90px;
  color: #99a9bf;
}
.demo-table-expand .el-form-item {
  margin-right: 0;
  margin-bottom: 0;
  width: 50%;
}
.el-main {
  line-height: 20px;
}
.addjuese {
  float: left;
}
.el-tag {
  margin-top: 10px;
  margin-right: 5px;
}
</style>

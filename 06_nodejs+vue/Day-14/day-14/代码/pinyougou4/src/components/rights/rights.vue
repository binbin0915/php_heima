<template>
    <div>
        <!-- 
            :data 表格遍历的数据源
            从服务器中获取数据,添加到表格中    
        -->
        <el-table
    ref="singleTable"
    :data="tableData"
    highlight-current-row
    style="width: 100%">
    <el-table-column
      type="index"
      width="150">
    </el-table-column>
    <el-table-column
      property="authName"
      label="权限名称"
      width="220">
    </el-table-column>
    <el-table-column
      property="path"
      label="路径"
      width="220">
    </el-table-column>
    <el-table-column
      property="level"
      label="层级">
        <template slot-scope="scope">
            <span v-if="scope.row.level == 0">一级</span>
            <span v-if="scope.row.level == 1">二级</span>
            <span v-if="scope.row.level == 2">三级</span>
        </template>
    </el-table-column>
  </el-table>

    </div>
</template>

<script>
export default {
    data(){
        return{
            tableData:[]
        }
    },
    methods:{
        getRightsList(){
            // 发送请求
            this.$myHttp({
                url:'rights/list',
                method:'get'
            }).then(back=>{
                let {data,meta} = back.data;
                if(meta.status == 200){
                    // 将数据更新到tableData 展示到页面中
                    this.tableData = data;
                }
                console.log(data,meta);
            })
        }
    },
    // 数据需要在页面渲染之前获取
    mounted(){
        // console.log(111111);
        // 调用获取数据的方法
        this.getRightsList();
    }

}
</script>

<style>
.el-table__header{
    line-height: 15px;
}
</style>

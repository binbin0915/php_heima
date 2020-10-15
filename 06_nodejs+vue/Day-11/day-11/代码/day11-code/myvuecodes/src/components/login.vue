<template>
    <div>
        <p class="bg">{{mydata}}</p>
    </div>
</template>


<script>
    // es6模块化导出
    export default {
        data(){
            return {mydata:'我是一个新的路由组件'}
        }
    }
</script>
<style>
    .bg{
        background: pink;
    }
</style>



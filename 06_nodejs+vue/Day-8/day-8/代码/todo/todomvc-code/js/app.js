// 自调用匿名函数的最大的用处就是 封装作用域 
(function (Vue) {
	// 封装作用域
	// 准备 数据 后期此数据有服务器提供
	// const list_data = [
	// 	{id:1,title:'吃饭',stat:false},
	// 	{id:2,title:'约会',stat:true},
	// 	{id:3,title:'打豆豆',stat:false}
	// ]
	var list_data= [];

	$.get('./1.php',function(data){
		list_data = data;
	})

	app = new Vue({
		el: '#todoapp',
		// 提供数据
		data: {
			list_data
		},
		// 提供方法
		methods: {
			// 添加任务
			// addTodo:function(){}
			addTodo(ev){
				// 1:要获取 文本框的内容
				// 1.1: 找到文本框 文本框的节点对象
				// 1.2: 节点对象.value
				// this
				var title = ev.target.value;
				var id = this.list_data.length+1+1;
				var stat = false;
				this.list_data.push({id,title,stat});
				// 任务添加成功  清空文本框
				ev.target.value = '';
			},

			// 状态切换 
			toggleAll(ev){
				// 反选  
				// for(let i=0;i<this.list_data.length;i++){
				// 	this.list_data[i].stat = !this.list_data[i].stat
				// }

				// 获取点击的元素 checked
				// 将这个属性的值,全部赋值 list_data中的stat
				for(let i=0;i<this.list_data.length;i++){
					this.list_data[i].stat = ev.target.checked;
				}
				
			},

			// 删除一个任务
			removeTodo(k){
				// 删除数组元素并返回被删除的元素
				// splice(开始下标,要删除的个数)
				this.list_data.splice(k,1);
			},

			// 删除已经完成的任务
			removeAllDone(){
				// 精简写法
				this.list_data = this.list_data.filter((v)=>!v.stat);

				// for 法删除任务
				// for(let i=0;i<this.list_data.length;i++){
				// 	if(this.list_data[i].stat == true){
				// 		this.list_data.splice(i,1);
				// 	}
				// }

				// 普通写法
				// var new_data= this.list_data.filter(function(v){
				// 	// 判断 如果循环到的stat属性值为 false 
				// 	// 就是没有完成的任务
				// 	if(v.stat == false){
				// 		// 将没有完成的任务返回 组成新数组
				// 		return v;
				// 	}
				// });
				// // 将新数组重新赋值
				// this.list_data = new_data;

				// 使用箭头函数的写法
				// this.list_data = this.list_data.filter((v)=>{
				// 	// 判断 如果循环到的stat属性值为 false 
				// 	// 就是没有完成的任务
				// 	// if(v.stat == false){
				// 	// 	// 将没有完成的任务返回 组成新数组
				// 	// 	return true;
				// 	// }

				// 	return !v.stat
				// });


				// filter 使用
				// var ar = [1,43,5,2,45743,145,5];
				// // 数组过滤气
				// var a = ar.filter(function(v){
				// 	if(v>100){
				// 		return true;
				// 	}
				// })
				// console.log(a);

			},

			// 

		}
	})

})(Vue);

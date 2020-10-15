// 自调用匿名函数的最大的用处就是 封装作用域 
(function (Vue) {
	// 封装作用域
	var app = new Vue({
		el: '#todoapp',
		// 提供数据
		data: {
			list_data: []
		},

		// 生命周期的钩子函数,获取全部数据
		// 实在el 挂载之后,页面渲染之前获取数据
		mounted: function () {
			axios.get('http://localhost:3000/list_data')
				.then((backdata) => {
					console.log(backdata);
					this.list_data = backdata.data;
				})
		},

		// 提供方法
		methods: {
			// 添加任务

			addTodo() {
				// 1:要获取 文本框的内容
				// 1.1: 找到文本框 文本框的节点对象
				// 1.2: 节点对象.value
				// this

				// var title = ev.target.value;
				var title = this.$refs.inp.value.trim();
				// title = title.trim();
				if (title == '') {
					return;
				}

				var id = this.list_data.length + 1 + 1;
				var stat = false;
				// 组装数据
				var obj_data = { id, title, stat };
				// 将数据入库
				axios.post('http://localhost:3000/list_data', obj_data)
					.then((backdata) => {
						// 对象的解构赋值
						let { data, status } = backdata;
						if (status == 201) {
							// 修改数据影响到页面
							this.list_data.push(data);
						}
					})

				// 任务添加成功  清空文本框
				this.$refs.inp.value = '';
			},

			// 状态切换 
			toggleAll(ev) {
				// 反选  
				// for(let i=0;i<this.list_data.length;i++){
				// 	this.list_data[i].stat = !this.list_data[i].stat
				// }

				// 获取点击的元素 checked
				// 将这个属性的值,全部赋值 list_data中的stat
				for (let i = 0; i < this.list_data.length; i++) {
					this.list_data[i].stat = ev.target.checked;
				}

			},

			// 删除一个任务
			removeTodo(k, id) {
				axios.delete('http://localhost:3000/list_data/' + id)
					.then((backdata) => {
						let {data,status} = backdata;
						// 删除数组元素并返回被删除的元素
						// splice(开始下标,要删除的个数)
						if(status == 200){
							this.list_data.splice(k, 1);
						}
						
					})
			},

			// 删除已经完成的任务
			removeAllDone() {
				// 精简写法
				this.list_data = this.list_data.filter((v) => !v.stat);

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

			// 完成任务
			todoDone(k,id){
				var tmp_data = {};
				// 将数据进行组装
				tmp_data.title = this.list_data[k].title;
				tmp_data.stat = !this.list_data[k].stat;
				axios.put('http://localhost:3000/list_data/'+id,tmp_data)
				.then((backdata)=>{
					// console.log(backdata);
					// 解构对象
					let {data,status} = backdata;
					if(status == 200){
						console.log(k);
						// 将修改后的新数据响应到页面
						this.list_data[k].title = data.title;
						this.list_data[k].stat = data.stat;
					}
				})
			}
		},

	})

})(Vue);

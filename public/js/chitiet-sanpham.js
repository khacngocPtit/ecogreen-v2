
new Vue({
	el:'#numbers',
	data:{
		dem : 0,
	},
	methods:{
		giam:function(){
			this.dem--;
		},
		tang:function(){
			this.dem++;
		}
	}
})
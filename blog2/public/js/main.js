var vm = new Vue({
	el: '#demo',
	data: {
		firstName: 'Foo',
		lastName: 'Bar',
		fullName: 'Foo Bar',
    value:1,
    show:true

	},
	watch: {
		firstName: function (val) {
			this.fullName = val + ' ' + this.lastName
		},
		lastName: function (val) {
			this.fullName = this.firstName + ' ' + val
		},
	},
  methods:{
    increment(value){
      this.value=value,
      this.doubleValue=value*2
      if(value==25){
        alert("{f[f]}")
      }
    }
  }
})

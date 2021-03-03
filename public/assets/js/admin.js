var app = new Vue({
	delimiters: ['${', '}'],
	data: {
		loading: false,
		formData: {
			email: '',
            password: ''
		},
		loginError: false,
		formSended: false,
        isLoggedIn: false
	},
	el: '#admin-login',
	methods: {
		submitForm()
		{
			var vm = this;
			axios.post('http://10.0.0.10/api/admin/login', vm.formData)
				.then(function(data) {
                    console.log(data);
					if (data.data.code == 200)
					{
                        vm.isLoggedIn = true;
                        vm.loginError = false;
                        setTimeout(function() {
                            window.location.replace("http://10.0.0.10/admin/panel");
                        }, 2000);
					}
				})
                .catch(function(error) {
                    var res = error.data;
                    if (res.code == 401)
                    {
                        vm.isLoggedIn = false;
                        vm.loginError = true;
                    }
                });
		}
	},
	mounted: function() {
	}
});
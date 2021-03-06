var app = new Vue({
	delimiters: ['${', '}'],
	data: {
		loading: false,
		formData: {},
        translations: {}
	},
	el: '#admin-app',
	methods: {
		getTranslations: function() {
            var vm = this;
            vm.loading = true;
			axios.get('http://10.0.0.10/api/admin/translations')
				.then(function(data) {
                    console.log(data);
					if (data.status == 200)
					{
                        vm.translations = data.data;
                        vm.loading = false
					}
				})
                .catch(function(error) {
                    var res = error.data;
                    if (res.code == 401)
                    {
                        
                    }
                });
        },
        deleteTranslation: function(translation) {
            var vm = this;
            axios.post('http://10.0.0.10/api/admin/translation/' + translation.id, {})
                .then(function(data) {
                    vm.getTranslations();
                    vm.$forceUpdate();
                });
        },
        createTranslation: function() {
            var vm = this;
            axios.post('http://10.0.0.10/api/admin/translations/create', vm.formData)
                .then(function(data) {
                    console.log(data);
                    vm.getTranslations();
                    vm.$forceUpdate();
                });
        }
	},
	mounted: function() {
        this.getTranslations();
	}
});
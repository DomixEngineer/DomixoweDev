var app = new Vue({
	delimiters: ['${', '}'],
	data: {
		loading: false,
        messages: []
	},
	el: '#admin-app',
	methods: {
		getMessages: function() {
            var vm = this;
            vm.loading = true;
			axios.get('http://10.0.0.10/api/admin/users-messages')
				.then(function(data) {
                    console.log(data);
					if (data.status == 200)
					{
                        vm.messages = data.data;
                        vm.loading = false;
                        console.log(data);
					}
				})
                .catch(function(error) {
                    var res = error.data;
                    if (res.code == 401)
                    {
                        
                    }
                });
        },
        deleteMessage: function(id) {
            var vm = this;
            axios.post('http://10.0.0.10/api/admin/users-messages/{id}/delete' + translation.id, {})
                .then(function(data) {
                    vm.getTranslations();
                    vm.$forceUpdate();
                });
        },
        jsonParser: function(json) {
            return JSON.parse(json);
        }
	},
	mounted: function() {
        this.getMessages();
	}
});
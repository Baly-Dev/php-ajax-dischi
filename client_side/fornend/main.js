let app = new Vue({
    el: '#app',
    data: {
        discs: []
    },
    created(){
        this.apiCall()
    },
    methods:{
        apiCall(){
            axios.get('http://localhost/boolean_projects/php-ajax-dischi/client_side/backend/main.php')
            .then(res => {
                this.discs = res.data
            })
            .catch(err => {
                console.log(err)
            })
        }
    }
})
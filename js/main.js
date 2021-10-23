const app = new Vue({
    el: "#root",
    data:{
        albums:[]
    },
        created() {
            axios.get('http://localhost:82/php-ajax-dischi/api/index.php')
            .then((response) => {
                this.albums = response.data;
            });
        }
    });
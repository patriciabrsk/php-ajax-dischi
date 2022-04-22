const app = new Vue({
    'el' : '#app',
    data: {
        records: [],
        created() {
            axios
            .get("http://localhost:8888/php-ajax-dischi/server/controller.php")
            .then((response) => {
                this.records = response.data.results;
            }).catch((error) => {
                console.error(error);
            });
        },
    },
});
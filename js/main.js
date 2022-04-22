const app = new Vue({
    'el' : '#app',
    data: {
        records: [],
        created() {
              axios
                .get("https://flynn.boolean.careers/exercises/api/array/music")
                .then((response) => {
                  this.records = response.data.results;
                });
            },
    },
});
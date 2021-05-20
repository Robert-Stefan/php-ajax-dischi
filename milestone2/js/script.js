const app = new Vue({
    el: '#app',
    data: {
        music: [],
    },
    created() {
        const ApiURL =
            'http://localhost/php-ajax-dischi/milestone2/database.php';
        axios
            .get(ApiURL)
            .then(result => {
                console.log(result.data);
                this.music = result.data;
            })
            .catch(error => {
                console.log('Errore', error);
            });
    },
});

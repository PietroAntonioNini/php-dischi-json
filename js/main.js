const { createApp } = Vue;

createApp({
    data() {
        return {
            albums: [],
        }
    },

    mounted() {
        axios.get('./server.php').then(res => {
            console.log(res.data);

            this.albums = res.data;
            
        });
    },

}).mount('#app');
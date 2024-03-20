const { createApp } = Vue;

let select = false;

createApp({
    data() {
        return {
            albums: [],
            selectedAlbum: [],
        }
    },
    methods: {
        showAlbumDetails(index) {
            axios.get('./server.php?discIndex=' + index).then(res => {
                this.selectedAlbum = res.data;
                select = true;
                console.log(select);
            });
        }
    },

    mounted() {
        axios.get('./server.php').then(res => {
            this.albums = res.data;
        });
    },

}).mount('#app');
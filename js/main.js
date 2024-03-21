const { createApp } = Vue;

createApp({
    data() {
        return {
            albums: [],
            selectedAlbum: [],
            select: false,
        }
    },
    methods: {
        showAlbumDetails(index) {
            axios.get('./server.php?discIndex=' + index).then(res => {
                this.selectedAlbum = res.data;
            });
        },

        selectAlbum() {

            if (this.select == true) {

                this.select = false;

            } else {
                
                this.select = true;
            }
        }
    },

    mounted() {
        axios.get('./server.php').then(res => {
            this.albums = res.data;
        });
    },

}).mount('#app');
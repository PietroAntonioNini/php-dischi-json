<!DOCTYPE html>
<html lang="it" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dischi JSON</title>

    <!-- my-style -->
    <link rel="stylesheet" href="./style/style.css">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- vue 3 -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <!-- axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    
    <div id="app">
        <nav class="navbar">
            <div class="container-nav">
                <a class="brand" href="#">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/84/Spotify_icon.svg/1024px-Spotify_icon.svg.png" alt="spotify-logo">
                </a>
            </div>
        </nav>

        <div class="containers-albums">
            <div class="albums">
                <div v-for="(album, index) in albums" class="card border-0" @click="showAlbumDetails(index), selectAlbum()">
    
                    <div class="dimension">
                        <img :src="album.poster" class="card-img-top" :alt="album.title">
    
                        <div class="card-body">
                            <h4 class="album-title fw-bold text-center">{{ album.title }}</h4>
                            <h5 class="album-author fw-light text-center">{{ album.author }}</h5>
                            <h6 class="album-year fw-bold text-center">{{ album.year }}</h6>
                        </div>
                    </div>
    
                </div>
            </div>

            <!-- Album da mostrare solo quando selectedAlbum non è vuoto -->
            <div id="album-selected" v-show="select === true">
                
                <div id="card-selected" class="card border-0">
                    <span class="close-btn" @click="selectAlbum()">X</span>

                    <div class="dimension">
                        <img :src="selectedAlbum.poster" class="card-img-top" :alt="selectedAlbum.title">
    
                        <div class="card-body">
                            <h4 class="album-title fw-bold text-center">{{ selectedAlbum.title }}</h4>
                            <h5 class="album-author fw-light text-center">{{ selectedAlbum.author }}</h5>
                            <h6 class="album-year fw-bold text-center">{{ selectedAlbum.year }}</h6>
                        </div>
                    </div>
                </div>
            </div>
    </div>



    <script src="./js/main.js"></script>

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
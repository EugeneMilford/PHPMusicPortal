<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Music Portal</title>
        <link rel="stylesheet" href="assets/css/music.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>   
        <div id="canvas">
            <div id="box_wrapper">
                <header class="navbar navbar-expand-lg fixed-top">
                    <div class="container">
                        <a class="navbar-brand" href="index.php">Music Portal</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item">
                                    <a class="nav-link active" href="index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="faves.php">Favourites</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="albums.php">Music</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="albums.php">Albums</a></li>
                                        <li><a class="dropdown-item" href="tracks.php">Tracks</a></li>
                                        <li><a class="dropdown-item" href="playlists.php">Playlists</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="artists.php">Artists</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="tracks.php">Tracks</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="albums.php">Albums</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="videos.html">Music Videos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="gallery.html">Gallery</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="blog.php">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="playlists.php">Playlists</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Extras</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="trending.php">Trending Music</a></li>
                                        <li><a class="dropdown-item" href="top_10.php">Top 10 Albums Of All Time</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.php">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </header> 
                
                <section class="page_breadcrumbs cs gradient section_padding_top_40 section_padding_bottom_25 table_section table_section_md" style="margin-top: 50px;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 text-center text-md-start">
                                <h2 class="small">Favourites</h2>
                            </div>
                            <div class="col-md-6 text-center text-md-end">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="./">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Favourites</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </section>
                <br>
                <section id="blog">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <h2 class="section_header">Favorites</h2>
                                <hr class="header_divider">
                                <p class="small-text big">Your favorite artists are listed below.</p>
                                <button class="btn btn-warning mb-4" onclick="clearFavorites()">Clear All Favorites</button>
                            </div>
                        </div>
                        <div class="row" id="faves">
                            
                        </div>
                    </div>
                </section>
                
                <section class="ds page_copyright py-4">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <p class="small-text mb-0">&copy; Copyright 2024. All Rights Reserved.</p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div> 
        <script>
    document.addEventListener('DOMContentLoaded', function() {
        var favorites = JSON.parse(localStorage.getItem('favorites')) || [];
        console.log("Loaded favorites: ", favorites); // Debugging line
        var favesContainer = document.getElementById('faves');
        favesContainer.innerHTML = ''; // Clear previous content
        favorites.forEach(function(artist, index) {
            var artistDiv = document.createElement('div');
            artistDiv.className = 'col-sm-4';
            artistDiv.innerHTML = `
                <div class="card mb-4 shadow-sm">
                    <img src="${artist.img}" class="card-img-top" alt="${artist.name}">
                    <div class="card-body">
                        <h5 class="card-title">${artist.name}</h5>
                        <p class="card-text">Genre: ${artist.genre}</p>
                        <p class="card-text">Year Formed: ${artist.year}</p>
                        <button class="btn btn-danger" onclick="removeFromFavorites(${index})">Remove</button>
                    </div>
                </div>
            `;
            favesContainer.appendChild(artistDiv);
        });
    });

    function removeFromFavorites(index) {
        var favorites = JSON.parse(localStorage.getItem('favorites')) || [];
        favorites.splice(index, 1);
        localStorage.setItem('favorites', JSON.stringify(favorites));
        location.reload();
    }

    function clearFavorites() {
        localStorage.removeItem('favorites');
        location.reload();
    }
</script>
    </body>
</html>
// assets/js/music.js

function addToFavorites(item, type) {
    let favorites = JSON.parse(localStorage.getItem('favorites')) || [];
    favorites.push(item);
    localStorage.setItem('favorites', JSON.stringify(favorites));
    alert(`${type} added to favorites`);
}

function removeFromFavorites(index) {
    let favorites = JSON.parse(localStorage.getItem('favorites')) || [];
    favorites.splice(index, 1);
    localStorage.setItem('favorites', JSON.stringify(favorites));
    location.reload();
}

function clearFavorites() {
    localStorage.removeItem('favorites');
    location.reload();
}

// For adding Artists to Favorites
function addArtistToFavorites(artist) {
    let artistData = {
        name: artist.name,
        img: artist.img,
        genre: artist.genre,
        year: artist.year
    };
    addToFavorites(artistData, 'Artist');
}

// For adding Albums to Favorites
function addAlbumToFavorites(album) {
    let albumData = {
        name: album.name,
        img: album.img,
        year: album.year,
        genre: album.genre
    };
    addToFavorites(albumData, 'Album');
}

// For adding Tracks to Favorites
function addTrackToFavorites(track) {
    let trackData = {
        name: track.name,
        album: track.album,
        artist: track.artist,
        genre: track.genre
    };
    addToFavorites(trackData, 'Track');
}



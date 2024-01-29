var map = L.map('map').setView([48.8566, 2.3522], 10);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '© OpenStreetMap contributors'
}).addTo(map);

function searchCinemas() {
    var searchInput = document.getElementById('searchInput').value;

    $.ajax({
        url: '../Controllers/Controller_cinema.php',
        method: 'POST',
        data: { search_input: searchInput },
        dataType: 'json',
        success: function(cinemas) {
            map.eachLayer(function(layer) {
                if (layer instanceof L.Marker) {
                    // Aucun besoin de supprimer les marqueurs manuellement
                    // Leaflet gère cela lors de l'ajout de nouveaux marqueurs
                    // Vous pouvez laisser cette partie vide ou la supprimer
                }
            });

            if (Array.isArray(cinemas)) {
                cinemas.forEach(function(cinema) {
                    var geo = cinema.geo;
                    if (geo && geo.lat !== undefined && geo.lon !== undefined) {
                        var popupContent = '<div class="custom-popup">' +
                            '<h3 class="popup-title">' + cinema.nom + '</h3>' +
                            '<p class="popup-info">Adresse: ' + cinema.adresse + '</p>' +
                            '<p class="popup-info">Commune: ' + cinema.commune + '</p>' +
                            '<p class="popup-info">Département: ' + cinema.dep + '</p>' +
                            // Ajoutez d'autres informations que vous souhaitez afficher
                            '</div>';

                        // Ajoutez le marqueur avec popup directement
                        L.marker([geo.lat, geo.lon]).addTo(map)
                            .bindPopup(popupContent, {
                                className: 'custom-popup'
                            }).openPopup();
                    }

                });

                if (cinemas.length > 0) {
                    var firstCinema = cinemas[0].geo;
                    map.setView([firstCinema.lat, firstCinema.lon], 12);
                }
            } else {
                console.error('La réponse du serveur n\'est pas un tableau valide.');
            }
        },
        error: function(error) {
            console.error('Erreur lors de la requête AJAX :', error.responseText);
        }
    });
}

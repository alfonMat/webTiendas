// mapa.js

document.addEventListener("DOMContentLoaded", function () {
    // Inicializar el mapa
    const map = L.map('map').setView([40.4168, -3.7038], 6);

    // Añadir capa base
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);

    let currentMarker = null;

    const cityCoordinates = {
        madrid: [40.4168, -3.7038],
        barcelona: [41.3851, 2.1734],
        valencia: [39.4699, -0.3763],
        malaga: [36.7213, -4.4214]
    };

    const select = document.getElementById('citySelect');

    select.addEventListener('change', function () {
        const city = this.value;
        if (city && cityCoordinates[city]) {
            const coords = cityCoordinates[city];
            map.setView(coords, 12);

            // Eliminar marcador anterior si existe
            if (currentMarker) {
                map.removeLayer(currentMarker);
            }

            // Añadir nuevo marcador
            currentMarker = L.marker(coords).addTo(map)
                .bindPopup(`Tienda en ${capitalize(city)}`)
                .openPopup();
        }
    });

    function capitalize(str) {
        return str.charAt(0).toUpperCase() + str.slice(1);
    }

    // Lista de tiendas con coordenadas y nombres
const tiendas = [
    { nombre: "Tienda Madrid", coords: [40.4168, -3.7038] },
    { nombre: "Tienda Barcelona", coords: [41.3851, 2.1734] },
    { nombre: "Tienda Valencia", coords: [39.4699, -0.3763] },
    { nombre: "Tienda Málaga", coords: [36.7213, -4.4214] } 
];


    // Añadir todos los marcadores al mapa al cargar
    tiendas.forEach(tienda => {
        L.marker(tienda.coords).addTo(map)
            .bindPopup(`<b>${tienda.nombre}</b>`);
    });
});

$(document).ready(function () {
    const map = L.map('map').setView([51.505, -0.09], 13);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap contributors'
    }).addTo(map);

    const drawnItems = new L.FeatureGroup();
    map.addLayer(drawnItems);

    const drawControl = new L.Control.Draw({
        edit: {
            featureGroup: drawnItems
        }
    });
    map.addControl(drawControl);

    map.on(L.Draw.Event.CREATED, function (e) {
        const layer = e.layer;
        drawnItems.addLayer(layer);

        // Send the polygon's coordinates to the server
        const coordinates = layer.toGeoJSON().geometry.coordinates;
        $.ajax({
            url: 'save_polygon.php',
            method: 'POST',
            contentType: 'application/json',
            data: JSON.stringify({ coordinates }),
            success: function (response) {
                console.log('Polygon saved:', response);
            },
            error: function (xhr, status, error) {
                console.error('Error saving polygon:', error);
            }
        });
    });

    // Load previously saved polygons
    $.getJSON('get_polygons.php', function (data) {
        data.forEach(polygon => {
            const layer = L.polygon(polygon.coordinates).addTo(drawnItems);
        });
    }).fail(function (jqXHR, textStatus, errorThrown) {
        console.error('Error loading polygons:', textStatus, errorThrown);
    });
});

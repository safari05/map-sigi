var map,
    fields = ["gid", "createdby", "featname", "feattype", "status", "acres"],
    autocomplete = [];
$(document).ready(initialize);

// class main
function initialize() {
    map = L.map('map').setView([-0.9987, 119.8707], 10);


    var tile = L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
        attribution: 'Map data &copy; <a href="http://openstreetmap.org">' +
            'OpenStreetMap</a> contributors, ' +
            '<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © ' +
            '<a href="http://mapbox.com">Mapbox</a>',
        maxZoom: 18,
        id: 'mapbox.streets',
        accessToken: 'pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw'
    }).addTo(map);
    getDataLines();
    getDataArea();
    getDataTitik();
};

function getDataLines() {
    var url = base_url + "Home/getAnggaranLokasiJalan";
    $.ajax({
        url: url,
        success: function(data) {
            dataLine = JSON.parse(data);
            layerAnggaranLokasiGaris = L.geoJSON(dataLine, {
                style: function() { // Style option
                    return {
                        'weight': 1,
                        'color': 'black',
                        'fillColor': 'yellow'
                    }
                }
            }).addTo(map);
        }
    });
};

function getDataArea() {
    var url = base_url + "Home/getAnggaranLokasiArea";
    $.ajax({
        url: url,
        success: function(data) {
            dataLine = JSON.parse(data);
            layerAnggaranLokasiGaris = L.geoJSON(dataLine, {
                style: function(feature) { // Style option
                    return {
                        'weight': 1,
                        'color': 'green',
                        'fillColor': 'red'
                    }
                }
            }).addTo(map);
        }
    });
};

function getDataTitik() {
    var url = base_url + "Home/getAnggaranLokasiTitik";
    $.ajax({
        url: url,
        success: function(data) {
            console.log("Data Point : " +
                data)
            dataLine = JSON.parse(data);
            layerAnggaranLokasiGaris = L.geoJSON(dataLine).addTo(map);
        }
    });
};
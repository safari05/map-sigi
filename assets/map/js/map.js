$(function () {
	var esriUrl = 'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
	                            
	var esriMap = L.tileLayer(esriUrl, {name:'esri'});
	var mapRBI = L.esri.dynamicMapLayer({url: 'https://portal.ina-sdi.or.id/arcgis/rest/services/IGD/RupabumiIndonesia/MapServer'});

	var map = L.map('map', {
	  	layers: mapRBI,
	  	center: [koordy, koordx],
	  	zoom: 17
	});

	L.control.scale().addTo(map);

	map.scrollWheelZoom.disable();

	if(jenis_toponim == "Titik"){
		if(icon == ""){
			var baseballIcon = L.icon({
				iconUrl: base_url+'assets/file/icon/'+icon.slice(1, -1),
				iconSize: [32, 37],
				iconAnchor: [16, 37],
				popupAnchor: [0, -28]
			});
		}else{
			var baseballIcon = L.icon({
				iconUrl: base_url+'assets/file/icon/target.png',
				iconSize: [32, 37],
				iconAnchor: [16, 37],
				popupAnchor: [0, -28]
			});
		}
		var Toponim = new L.GeoJSON.AJAX(site_url + '/Pencarian/GeoJson/' + id_toponim, {
			pointToLayer: function (feature, latlng) {
				return L.marker(latlng, {icon: baseballIcon});
			}
		});
	}

	if(jenis_toponim == "Area"){
		var Toponim = new L.GeoJSON.AJAX(site_url + '/Pencarian/GeoJson/' + id_toponim, {
			color: '#000',
			fillColor: polygon.slice(1, -1),
			fillOpacity: 0.7
		});
	}

	if(jenis_toponim == "Garis"){
		var Toponim = new L.GeoJSON.AJAX(site_url + '/Pencarian/GeoJson/' + id_toponim, {
			color: line.slice(1, -1),
			fillColor: line.slice(1, -1),
			fillOpacity: 0.7
		});
	}
	

	Toponim.addTo(map);
});
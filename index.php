<!doctype html>
<html lang="pt-BR">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Google Maps JavaScript API</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<label for="">Endereço: <input id="map-search" class="controls" type="text" placeholder="Pesquise aqui" size="104"></label><br>
	<label for="">Lat: <input type="text" class="latitude"></label>
	<label for="">Long: <input type="text" class="longitude"></label>
	<label for="">Cidade <input type="text" class="reg-input-city" placeholder="Cidade"></label>

	<div id="map-canvas"></div>

	<script src="javascript.js"></script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCm9YcCBjGuFx9lclRwzDOSU7fuhuq-G5Y&libraries=places&callback=initialize"></script>
</body>

</html>

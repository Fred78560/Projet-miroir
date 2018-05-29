// Creiamo un file fisico per evitare problemi di configurazione che si manifestano su alcuni server
$ch = curl_init("http://www.google.com/ig/api?weather=Napoli&hl=it");
$fp = fopen("weather.xml", "w");
//Con la funzione CURL settimano i parametri in maniera che l'XML venga letto correttamente (encoding)
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; rv:1.7.3) Gecko/20041001 Firefox/0.10.1");
curl_setopt($ch, CURLOPT_FILE, $fp);
curl_setopt($ch, CURLOPT_HEADER, 0);
var request = require('request');

var openweathermeteo = function(latitude, longitude, callback){
	var  url = 'http://api.openweathermap.org/data/2.5/forecast/daily?lat='+latitude+'&lon='+longitude+'&cnt=14&mode=json&units=metric&lang=fr';

	request(url, function(err, response, body){
		try{
			var result = JSON.parse(body);
			var previsions = {
				temperature : result.list[0].temp.day,
				city : result.city.name
			};

			callback(null, previsions);
		}catch(e){
			callback(e); 
		}
	});
}

openweathermeteo(48.869777, 2.308186, function(err, previsions){
	if(err) return console.log(err);

	console.log('A ' + previsions.city + ', la température est de ' + previsions.temperature + '°C');
});
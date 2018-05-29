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
$(document).ready(function() {
    //animation
    setTimeout(function(){
        $('body').addClass('loaded');
        $('h1').css('color','#222222');
    }, 3000);

    //get the values of weather
    var temperature=$('#temperature');
    var place=$('#place');
    var high=$('#high');
    var low=$('#low');
    var weather=$('#weather');
    var weatherdes=$('#weatherdes');
    var error=$('#error');
    var pressure=$('#pressure');
    var humidity=$('#humidity');

    var search=  $('#search');
    var searchsubmit= $('#searchsubmit');

    searchsubmit.on('click', function(){
              var city=(search.val());
              //check to see if city is null
              if( city!=''){
                $.ajax({
                    url:"http://api.openweathermap.org/data/2.5/weather?q=" + city +"&units=metric&APPID=e28cfa78e844d915f0b640f9e5dca8a7",
                    type:"GET",
                    dataType:"jsonp",
                    success: function(data){
                    error.html('');
                    place.html('Place: ' + data.name + ", " + data.sys.country + "<img src='http://openweathermap.org/img/w/"+data.weather[0].icon+".png'>");
                    temperature.html('Temperature: ' + data.main.temp +"&deg;C");
                    high.html('High: ' + data.main.temp_max +"&deg;C");
                    low.html('Low: ' + data.main.temp_min +"&deg;C");
                    weather.html('Weather: '+ data.weather[0].main);
                    weatherdes.html('Weather Description: ' + data.weather[0].description);
                    pressure.html('Pressure: ' + data.main.pressure +"m/s");
                    humidity.html('Humidity: ' + data.main.humidity +"%");
                    }
                });
              }
              else{
                  error.html('Please Enter a City Name');
              }
      });

});

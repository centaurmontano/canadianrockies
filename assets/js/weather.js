// Replace 'YOUR_OPENWEATHERMAP_API_KEY' with your actual OpenWeatherMap API key
const apiKey = '68f10042551eb25ec6b5a7610e7bcfa6';

// Locations (latitude and longitude) for Banff, Jasper, and Yoho National Park
const locations = [
    { name: 'Banff', lat: 51.1784, lon: -116.2148 },
    { name: 'Jasper', lat: 52.8734, lon: -118.0821 },
    { name: 'Yoho National Park', lat: 51.4184, lon: -116.5059 }
];

// Function to fetch weather data for a location
function getWeatherData(location) {
    fetch(`https://api.openweathermap.org/data/2.5/weather?lat=${location.lat}&lon=${location.lon}&appid=${apiKey}&units=metric`)
        .then(response => response.json())
        .then(data => {
            const temperature = data.main.temp;
            const description = data.weather[0].description;
            const weatherCard = document.getElementById(`${location.name.toLowerCase()}-weather`);
            
            weatherCard.innerHTML = `
                <h5>${location.name}</h5>
                <p>${temperature}°C, ${description}</p>
            `;
        })
        .catch(error => console.error(`Error fetching weather data for ${location.name}:`, error));
}

// Fetch weather data for each location and display it
locations.forEach(location => {
    getWeatherData(location);
});

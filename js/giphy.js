var api = "http://api.giphy.com/v1/gifs/search?";
var apiKey = "&api_key=dc6zaTOxFJmzC";
var query = "&q=music+video";
var limit = "&limit=2";



function setup() {
  noCanvas();
  var url = api + apiKey + query + limit;
  loadJSON(url, gotData);
}

function gotData(giphy) {
  for (var i = 0; i < giphy.data.length; i++) {
  	//var obj = createImg(giphy.data[i].images.original.url)
  	//var copy = Object.assign({}, obj);
    document.getElementById("card-columns").innerHTML += "<div class='card'><div class='imagen_post_home'><img src="+giphy.data[i].images.original.url+"></div></div>";
  }
}


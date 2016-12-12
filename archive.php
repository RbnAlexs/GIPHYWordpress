<?php get_header();  ?>

<div class="container articulos">

    <div class="row">  		
		<div id="card-columns" class="col-xs-12 card-columns">

		</div>
	</div>
	
<?php
if (is_category( )) {
  $cat = get_query_var('cat');
  $yourcat = get_category ($cat);
 }
?>
	<script>
		var api = "http://api.giphy.com/v1/gifs/search?";
		var apiKey = "&api_key=dc6zaTOxFJmzC";
		var query = "&q=<?php echo $yourcat->slug;?>";
		var limit = "&limit=15";



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

	</script>
		 	 	
</div>

<?php get_footer(); ?>
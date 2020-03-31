<?
foreach($content as $hotel){
	echo '<div class = "container">';
		echo '<div class = "row justify-content-md-center justify-content-lg-center justify-content-center">';
		// echo sprintf('<div class = "col-12 col-md-12 col-sm-12 col-lg-12"><h3>%s</h3></div>', $hotel[1]);
		// echo sprintf('<div class = "col-12 col-md-12 col-sm-12 col-lg-12"><p>%s</p3</div>', $hotel[2]);
		// echo '</div>';
		// echo '<div class = "row justify-content-md-left justify-content-lg-left justify-content-left row justify-content-between">';
			// echo '<div class = "col-11 col-md-5 col-sm-11 col-lg-5" style = "padding-top:10px;">';
				// echo '<div class="card">
				// <img class="card-img-top" src="/img/logo.png" alt="Card image cap">
					// <div class="card-body">
					// <h4 class="card-title">';
					// echo $hotel[1];
					// echo '</h4><p class="card-text">';
					// echo $hotel[7];
					// echo '</p><button type="button" class="btn btn-primary btn-success" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Забронировать</button>
					// </div>
				// </div>';
		// echo '</div>';
	
			// echo '<div class = "col-11 col-md-7 col-sm-11 col-lg-7" style = "">';
				// echo sprintf('<div class = "fullImg" style = "padding-top:10px;" id = "myClass%s" style = "background-color:gray;"><img src = "/myFiles/%s/%s"></div>', $hotel[0], $hotel[0], $hotel[3]);
			// echo '</div>';
			
			

			
			
echo '
<div class = "col-12 col-sm-12 col-md-10 col-lg-10">
<div class="card">
  <div class="card-body text-center">
    <p class="card-text">';
	
	echo sprintf('<h2>%s</h2>', $hotel[1]);
	echo '<button type="button" class="btn btn-primary btn-success" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Забронировать ';
	echo $hotel[1];
		echo'</button>';
	echo '<hr>';
	echo sprintf('<p>%s</p>', $hotel[2]);
	echo '<hr>';
	echo sprintf('<p>%s</p>', $hotel[7]);
	echo '</p>
  </div>';
  
  echo sprintf('<div class = "fullImg" style = "padding-top:10px;" id = "myClass%s" style = "background-color:gray;"><img src = "/myFiles/%s/%s"></div>', $hotel[0], $hotel[0], $hotel[3]);
echo '  <div class="card-body">
    <p class="card-text text-center""><button type="button" class="btn btn-primary btn-success" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Забронировать ';
		echo $hotel[1];
	
	
		echo'
	</button>
		</p>
  </div>
</div>';
			
		echo '</div>';
		
echo '<div class = "row justify-content-md-center justify-content-lg-center justify-content-center myClass">';
echo '<div class = "col-3 col-md-2 col-sm-3 col-lg-2" style = "padding: 5px;">';
echo sprintf('<img class = "myClass%s" src="/myFiles/%s/%s" onclick = "bigCapture(event); return false" alt="logo"></div>', $hotel[0], $hotel[0], $hotel[3] );
echo '<div class = "col-3 col-md-2 col-sm-3 col-lg-2" style = "padding:5px;">';
echo sprintf('<img class = "myClass%s" src="/myFiles/%s/%s" onclick = "bigCapture(event); return false" alt="logo"></div>', $hotel[0], $hotel[0], $hotel[4] );
echo '<div class = "col-3 col-md-2 col-sm-3 col-lg-2" style = "padding:5px;">';
echo sprintf('<img class = "myClass%s" src="/myFiles/%s/%s" onclick = "bigCapture(event); return false" alt="logo"></div>', $hotel[0], $hotel[0], $hotel[5] );
echo '<div class = "col-3 col-md-2 col-sm-3 col-lg-2" style = "padding:5px;">';
echo sprintf('<img class = "myClass%s" src="/myFiles/%s/%s" onclick = "bigCapture(event); return false" alt="logo"></div>', $hotel[0], $hotel[0], $hotel[6] );






echo	'
	</div>
	</div>
</div>';
		
	
		
// echo sprintf('<div id = "myClass%s" style = "width: 100%; background-color:gray;"></div>', $hotel[0], '');
// echo '<div class="wrapper">
  // <div class="hoc clear"> 
    // <figure id="logos">
      // <ul class="nospace group">' ;
	  	// echo sprintf('<li><img class = "myClass%s" src="/myFiles/%s/%s" alt="" onclick = "bigCapture(event); return false"></li>', $hotel[0], $hotel[0], $hotel[3]);
	  	// echo sprintf('<li><img class = "myClass%s" src="/myFiles/%s/%s" alt="" onclick = "bigCapture(event); return false"></li>', $hotel[0], $hotel[0], $hotel[4]);
	  	// echo sprintf('<li><img class = "myClass%s" src="/myFiles/%s/%s" alt="" onclick = "bigCapture(event); return false"></li>', $hotel[0], $hotel[0], $hotel[5]);
	  	// echo sprintf('<li><img class = "myClass%s" src="/myFiles/%s/%s" alt="" onclick = "bigCapture(event); return false"></li>', $hotel[0], $hotel[0], $hotel[6]);

// echo '  </ul>
      // <figcaption class="hidden"><a class="btn small" href="#">More &raquo;</a></figcaption>
    // </figure>
  // </div>
// </div>';

}
?>
	<style>
		.myClass img{
			width:100%;
			height:auto;
		}
		.fullImg img{
			width:100%;
		}
		</style>
		
<script>
function bigCapture(e){

document.getElementById(e.target.className).innerHTML = '<img src = "' + e.path[0].src + '">';
// console.log(e.path[0].src);
	// console.log(e.target.className);
	// console.log('p');
  return false;
}
</script> 
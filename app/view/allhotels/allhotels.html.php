<?
foreach($content as $hotel){
	echo '<div class = "container py-5" >';
	echo '<div class = "row justify-content-md-center justify-content-lg-center justify-content-center myrow">';
	echo '
<div class = "col-12 col-sm-12 col-md-10 col-lg-10">
<div class="card">
  <div class="card-body text-center">
    <div class="card-text">';
	echo sprintf('<h2>%s</h2>', $hotel["heading"]);
	echo '<button type="button" class="btn btn-primary btn-success" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Заказать';
	echo'</button>';
	echo '<hr>';
	echo sprintf('<p>%s</p>', $hotel["preview"]);
	echo '<hr>';
	echo sprintf('<p>%s</p>', $hotel['price']);
	echo '</div>
  </div>';
	echo sprintf('<div class = "fullImg" style = "padding-top:10px;" id = "myClass%s" ><img src = "/img/img-allhotels/%s/slide1.jpg" alt = "Большое изображение"></div>', $hotel["id"], $hotel["id"]);
	echo '  <div class="card-body">
    <p class="card-text text-center"><button type="button" class="btn btn-primary btn-success" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Заказать';	
	echo'
	</button>
		</p>
  </div>
</div>';
	echo '</div>';
		
echo '<div class = "row justify-content-md-center justify-content-lg-center justify-content-center myClass">';
echo '<div class = "col-3 col-md-2 col-sm-3 col-lg-2" style = "padding: 5px;">';
echo sprintf('<img class = "myClass%s" src="/img/img-allhotels/%s/slide1.jpg" onclick = "bigCapture(event); return false" alt="logo"></div>', $hotel["id"], $hotel["id"]);
echo '<div class = "col-3 col-md-2 col-sm-3 col-lg-2" style = "padding:5px;">';
echo sprintf('<img class = "myClass%s" src="/img/img-allhotels/%s/slide2.jpg" onclick = "bigCapture(event); return false" alt="logo"></div>', $hotel["id"], $hotel["id"]);
echo '<div class = "col-3 col-md-2 col-sm-3 col-lg-2" style = "padding:5px;">';
echo sprintf('<img class = "myClass%s" src="/img/img-allhotels/%s/slide3.jpg" onclick = "bigCapture(event); return false" alt="logo"></div>', $hotel["id"], $hotel["id"]);
echo '<div class = "col-3 col-md-2 col-sm-3 col-lg-2" style = "padding:5px;">';
echo sprintf('<img class = "myClass%s" src="/img/img-allhotels/%s/slide4.jpg" onclick = "bigCapture(event); return false" alt="logo"></div>', $hotel["id"], $hotel["id"]);
echo	'
	</div>
	</div>
</div>';
}
?>	
<script>
function bigCapture(e){
document.getElementById(e.target.className).innerHTML = '<img src = "' + e.target.src + '" alt = "Большое изоброжение">';
  return false;
}
</script> 

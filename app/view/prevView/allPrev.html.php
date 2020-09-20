<?
foreach($content as $hotel){


	echo '<div class = "row justify-content-md-center justify-content-lg-center justify-content-center py-3" >';
	echo '<div class = "col-12 col-sm-12 col-md-10 col-lg-10 text-center" style = "border:1px solid rgba(0,0,0,.125);border-radius: .25rem;"><div class = "text-center pt-3">';
	echo sprintf('<h3>%s</h3>', $hotel['rusName']);
	echo sprintf('<p><span style="font-size:16px">%s</span></p>', $hotel['content']);
	echo sprintf('<div class = "fullImg" style = "padding-top:10px;"><img src = "/img/img-preview/%s.jpg" alt = "Наше предложение"></div>', $hotel['hotelName']);

echo '
</div>
<a href = "/' . $hotel['hotelName'] . '" type="button" class="btn btn-primary btn-success my-3">Подробней</a>

</div>
</div>';


}

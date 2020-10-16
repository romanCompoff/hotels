<?
foreach($content as $hotel){


	echo '<div class = "row justify-content-md-center justify-content-lg-center justify-content-center">';
	echo '<div class = "col-12 col-sm-12 col-md-10 col-lg-10"><div class = "text-center">';
	echo sprintf('<p><span style="font-size:16px">%s</span></p>', $hotel["preview"]);
	echo sprintf('<div class = "fullImg" style = "padding-top:10px;"><img src = "/img/img-articles/%s/slide1.jpg" alt = "Наше предложение"></div>',$hotel["id"]);
	echo sprintf('<div class = "fullImg" style = "padding-top:10px;"><img src = "/img/img-articles/%s/slide2.jpg" alt = "Наше предложение"></div>',$hotel["id"]);
	echo sprintf('<div class = "fullImg" style = "padding-top:10px;"><img src = "/img/img-articles/%s/slide3.jpg" alt = "Наше предложение"></div>',$hotel["id"]);
	echo sprintf('<div class = "fullImg" style = "padding-top:10px;"><img src = "/img/img-articles/%s/slide4.jpg" alt = "Наше предложение"></div>',$hotel["id"]);
echo '
</div>
</div>
</div>';


}

		
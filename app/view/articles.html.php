<?
foreach($content as $hotel){


	echo '<div class = "row justify-content-md-center justify-content-lg-center justify-content-center">';
	echo '<div class = "col-12 col-sm-12 col-md-10 col-lg-10"><div class = "text-center">';
	echo sprintf('<p><span style="font-size:16px">%s</span></p>', $hotel[1]);
	echo sprintf('<div class = "fullImg" style = "padding-top:10px;" style = "background-color:gray;"><img src = "/myFiles/articles/%s/%s"></div>', $hotel[0], $hotel[2]);
	echo sprintf('<div class = "fullImg" style = "padding-top:10px;" style = "background-color:gray;"><img src = "/myFiles/articles/%s/%s"></div>', $hotel[0], $hotel[3]);
	echo sprintf('<div class = "fullImg" style = "padding-top:10px;" style = "background-color:gray;"><img src = "/myFiles/articles/%s/%s"></div>', $hotel[0], $hotel[4]);
	echo sprintf('<div class = "fullImg" style = "padding-top:10px;" style = "background-color:gray;"><img src = "/myFiles/articles/%s/%s"></div>', $hotel[0], $hotel[5]);
echo '
</div>
</div>
</div>';


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
		
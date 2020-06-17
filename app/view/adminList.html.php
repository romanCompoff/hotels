
<table class = "table table-hover my-5 ">
<tbody>
<?

foreach($content as $hotel){
$imgPath = sprintf('<img src = "/myFiles/numbers/%s/', $hotel[0]);
$imgPathEnd = '" style = "width: 33px; height: 33px;">';
	
	echo '<tr><td>';
	echo $hotel[1];
	echo '</td><td>';
	echo $imgPath;
	echo 'slide1.jpg';
	echo $imgPathEnd;
	echo '</td><td>';
	echo $imgPath;
	echo 'slide2.jpg';
	echo $imgPathEnd;
	echo '</td><td>';
	echo $imgPath;
	echo 'slide3.jpg';
	echo $imgPathEnd;
	echo '</td><td>';
	echo $imgPath;
	echo 'slide4.jpg';
	echo $imgPathEnd;
	echo '</td><td>';
	echo '<a href = "admin.php?admin=list&del=';
	echo $hotel[0];
	echo '">Удалить</a>';
	echo '</td><td>';
	// var_dump($hotel);
	echo '<br>';
	echo '</td></tr>';
}

?>
</tbody>
</table>
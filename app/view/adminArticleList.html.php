
<table class = "table table-hover my-5 ">
<tbody>
<?
foreach($content as $hotel){
$imgPath = sprintf('<img src = "/myFiles/articles/%s/', $hotel[0]);
$imgPathEnd = '" style = "width: 33px; height: 33px;">';
	
	echo '<tr><td>';
	echo $hotel[1];
	echo '</td><td>';
	echo $imgPath;
	echo $hotel[2];
	echo $imgPathEnd;
	echo '</td><td>';
	echo $imgPath;
	echo $hotel[3];
	echo $imgPathEnd;
	echo '</td><td>';
	echo $imgPath;
	echo $hotel[4];
	echo $imgPathEnd;
	echo '</td><td>';
	echo $imgPath;
	echo $hotel[5];
	echo $imgPathEnd;
	echo '</td><td>';
	echo '<a href = "adminArticle.php?admin=list&del=';
	echo $hotel[0];
	echo '">Удалить</a>';
	echo '</td><td>';
	echo '<a href = "adminArticle.php?admin=list&off=';
	echo $hotel[0];
	echo '">Состояние ';
	echo $hotel[8];
	echo '</a></td><td>';
	// var_dump($hotel);
	echo '<br>';
	echo '</td></tr>';
}

?>
</tbody>
</table>
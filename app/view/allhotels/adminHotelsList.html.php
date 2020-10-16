
<table class = "table table-hover my-5 ">
<tbody>
<caption>Добавленные блоки</caption>
<tr>
<th colspan = "6">Добавленные блоки</th>
</tr>
<tr>
<th>Название</th>
<th colspan = "4">Картинки</th>
<th>Действия</th>
</tr>
<?
foreach($content as $hotel){
$imgPath = sprintf('<img src = "/img/img-allhotels/%s/', $hotel[id]);
$imgPathEnd = '" style = "width: 33px; height: 33px;">';
	
	echo '<tr><td>';
	echo $hotel['heading'];
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
	echo '<a href = "/admin/AllHotels.php?del=';
	echo $hotel['id'];
	echo '">Удалить</a>';
	echo '</td><td>';
	echo '<br>';
	echo '</td></tr>';
}

?>
</tbody>
</table>
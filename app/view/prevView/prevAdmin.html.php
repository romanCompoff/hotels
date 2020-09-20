<table class = "table table-hover my-5 ">
<tbody>
<?
	
foreach($prev as $p){

$imgPathEnd = '" style = "width: 33px; height: 33px;">';
	echo '<tr><td>';
	echo sprintf('<img class="card-img-top py-5" src="/img/img-preview/%s.jpg" >', $p['hotelName']);
	echo '</td><td>';
	echo $p['hotelName'];
	echo '</td><td>';
	echo $p['rusName'];
	echo '</td><td>';
	echo '<a href = "prevew.php?del=';
	echo $p['hotelName'];
	echo '">Удалить</a>';
	echo '</td></tr>';
	
	
}

?>
</tbody>
</table>
<style>
.card-img-top{
	width:33px;
}
</style>
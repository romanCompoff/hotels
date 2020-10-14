<table class = "table table-hover my-5 ">
<tbody>
<caption>Добавленные отзывы</caption>
<tr>
<th colspan = "4">Добавленные отзывы</th>
</tr>
<tr>
<th>Картинка</th>
<th>Имя</th>
<th>Отзыв</th>
<th>Действия</th>
</tr>
<?
foreach($feed as $f){

$imgPathEnd = '" style = "width: 33px; height: 33px;">';
	echo '<tr><td>';
	echo sprintf('<img class="card-img-top py-5" src="/img/img-feedbacks/%s.jpg" >', $f['id']);
	echo '</td><td>';
	echo $f['userName'];
	echo '</td><td>';
	echo $f['text'];
	echo '</td><td>';
	echo '<a href = "feedBacks.php?delfb=';
	echo $f['id'];
	echo '">Удалить</a>';
	echo '</td></tr>';
}
?>
</tbody>
</table>

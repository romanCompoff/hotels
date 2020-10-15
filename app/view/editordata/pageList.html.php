
<table class = "table table-hover my-5 ">
<tbody>
<caption>Добавленные страницы</caption>
<tr>
<th colspan = "5">Добавленные страницы</th>
</tr>
<tr>
<th>id</th>
<th>title</th>
<th>Описание</th>
<th colspan="2">Действия</th>
</tr>
<?
foreach($content as $page){
	
	echo '<tr><td>';
	echo $page['id'];
	echo '</td><td>';
	echo '<a href = "/';
	echo $page['pageName'];
	echo '.html">';
	echo $page['title'];
	echo '</a>';
	echo '</td><td>';
	echo $page['description'];
	echo '</td><td>';
	echo '<a href = "/admin/freeText.php?del=';
	echo $page['id'];
	echo '">Удалить</a>';
    echo '</td><td>';
    echo '<a href = "/admin/freeText.php?edit=';
	echo $page['pageName'];
	echo '">Редактировать</a>';
	echo '</td><td>';
}

?>
</tbody>
</table>
<div class = "text-center py-5">
<h1>Добавление отзыва</h1>
<form enctype="multipart/form-data" action = "/admin/feedBacks.php" method = "POST">
<input type = "text" name = "userName" id = "userName" value = "<?=$post['userName']?>">Имя <br>
<input type = "text" name = "text" id = "text" value = "<?=$post['text']?> " >Текст <br>
<input type="file"  name  = "pic" id  = "pic" >Фотография <br>
<input type = "submit">
</form>
</div>

<div class = "text-center py-5">
<h1>Добавление отеля</h1>
<form enctype="multipart/form-data" action = "/admin/prevew.php" method = "POST">
<input type = "text" name = "rusName" id = "rusName"> Название отеля<br>
<input type = "text" name = "content" id = "content"> Описание отеля<br>
<input type="file"  name  = "pic" id  = "pic"> Картинка<br>
<input type = "submit">
</form>
</div>
<style>
input{
	margin: 33px;
}
</style>
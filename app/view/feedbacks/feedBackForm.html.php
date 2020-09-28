<div class = "text-center py-5">
<h1>Добавление отзыва</h1>
<form enctype="multipart/form-data" action = "/admin/feedBacks.php" method = "POST">
Имя <input type = "text" name = "userNname" id = "userNname"><br>
Текст <input type = "text" name = "fbc" id = "fbc"><br>
Фотография <input type="file"  name  = "pic" id  = "pic"><br>
<input type = "submit">
</form>
</div>


<style>
input{
	margin: 33px;
}


</style>
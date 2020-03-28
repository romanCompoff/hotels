<?=$lastNumber['error']?>
<form enctype="multipart/form-data" method = "post" action = "/admin.php" class = "myAdmin">

<div>
<h1>Добавление на отеля</h1>
</div>

<input id = "heading" onChange = "showMess('heading' , '400', 'строка')" type="text" name = "heading">Заголовок <br>
	<div id = "headingDiv">
	</div>

<input id = "preview" onChange = "showMess('preview' , '100', 'строка')" type="text" name = "preview"> <br> 
	<div id = "previewDiv">
	</div>
	
	
<input id = "link1" onChange = "showMess('link1' , '100', 'строка')" type="file" name="link1">Картинка 1<br>
	<div id = "link1Div">
	</div>
	
	
<input id = "link2" onChange = "showMess('link2' , '100', 'строка')" type="file" name="link2">Картинка 2<br>
	<div id = "link2Div">
	</div>
	
	
<input id = "link3" onChange = "showMess('link3' , '100', 'строка')" type="file" name="link3">Картинка 3<br>
	<div id = "link3Div">
	</div>
	
	
<input id = "link4" onChange = "showMess('link4' , '100', 'строка')" type="file" name="link4">Картинка 4<br>
	<div id = "link4Div">
	</div>


<br>
<div id = "mySubmit">
Отправить
</div>
</form>
<p>
</p>
<?
// echo $lastNumber[1];
?>
<script type='text/javascript'>
var buttonAccess = new Map([
['heading' , 'false'],
['preview' , 'false'],
['link1' , 'false'],
['link2' , 'false'],
['link3' , 'false'],
['link4' , 'false'],
]);

function showMess(element, howLong, t)
{
	console.log(element);
	var per = document.getElementById(element).value;
	var typeq;
	
		if(isNaN(per)){typeq = 'число';}
			else{typeq = 'строка';}

		if(t == typeq){
			buttonAccess.set(element,'false');
			document.getElementById('mySubmit').innerHTML='Отправить';
			document.getElementById(element + 'Div').innerHTML = '<span class = "error">Неверная инфа. Введите тип "' + t + '" </span>';	
		}
			else{ 
				if(per.length > howLong){
					buttonAccess.set(element,'false');
					document.getElementById('mySubmit').innerHTML='Отправить';
					document.getElementById(element + 'Div').innerHTML = '<span class = "error">Максимум '+ howLong +' символов</span>';
					}
						else {
							buttonAccess.set(element,'true');
							document.getElementById(element + 'Div').innerHTML = '<span class = "access">Все впорядке</span>';
						if(buttonAccess.get('heading') == 'true' && buttonAccess.get('preview') == 'true' && buttonAccess.get('link1') == 'true' && buttonAccess.get('link2') == 'true' && buttonAccess.get('link3') == 'true' && buttonAccess.get('link4') == 'true' && buttonAccess.get('link1') == 'true')
						{document.getElementById('mySubmit').innerHTML='<button type = "submit" name = "Отправить">Отправить</button>';
					}
						else
						{
							document.getElementById('mySubmit').innerHTML='Отправить';}
						}
				}
				
}
</script>
<?php 
// var_dump($lastNumber);
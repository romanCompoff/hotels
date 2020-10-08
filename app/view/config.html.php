<form enctype="multipart/form-data" method = "post" action = "/admin/adminConfig.php" class = "myAdmin" id = "configForm">
<div class = "text-left">
<div>
<h1>Редактор конфигураций</h1>
</div>

<input id = "siteName" onChange = "showMess('siteName' , '100', 'строка')" type="text" name = "siteName" value = "<?=$content->getSiteName()?>">Название сайта<br>
	<div id = "siteNameDiv">
	</div>

<input id = "menu1" onChange = "showMess('menu1' , '100', 'строка')" type="text" name = "menu1" value = "<?=$content->getMenu1()?>">Пункт меню 1<br>
	<div id = "menu1Div">
	</div>

<input id = "menu2" onChange = "showMess('menu2' , '100', 'строка')" type="text" name = "menu2" value = "<?=$content->getMenu2()?>">Пункт меню 2<br>
	<div id = "menu2Div">
	</div>

<input id = "phoneNumber" onChange = "showMess('phoneNumber' , '20', 'строка')" type="text" name = "phoneNumber" value = "<?=$content->getPhoneNumber()?>">Номер телефона<br> 
	<div id = "phoneNumberDiv">
	</div>

<input id = "phoneNumber2" onChange = "showMess('phoneNumber2' , '20', 'строка')" type="text" name = "phoneNumber2" value = "<?=$content->getPhoneNumber2()?>">Номер телефона 2<br> 
	<div id = "phoneNumber2Div">
	</div>
	
	
<input id = "heading1" onChange = "showMess('heading1' , '1000', 'строка')" type="text" name="heading1" value = "<?=$content->getHeading1()?>">Заголовок 1<br>
	<div id = "heading1Div">
	</div>
	
<textarea id = "words1" onChange = "showMess('words1' , '1500', 'строка')" type="text" name="words1"><?=$content->getWords1()?></textarea><br>
	<div id = "words1Div">
	</div>
	
<input id = "heading2" onChange = "showMess('heading2' , '1000', 'строка')" type="text" name="heading2" value = "<?=$content->getHeading2()?>">Заголовок 2<br>
	<div id = "heading2Div">
	</div>
	
<textarea id = "words2" onChange = "showMess('words2' , '1500', 'строка')" type="text" name="words2" ><?=$content->getWords2()?></textarea><br>
	<div id = "words2Div">
	</div>
	
<input id = "banner" onChange = "showMess('banner' , '100', 'строка')" type="file" name = "banner" >Картинка (Только JPG)<br>
	<div id = "bannerDiv">
	</div>
	
<input id = "adress" onChange = "showMess('adress' , '500', 'строка')" type="text" name="adress" value = "<?=$content->getAdress()?>">Адрес<br>
	<div id = "adressDiv">
	</div>
	

<input id = "email" onChange = "showMess('email' , '155', 'строка')" type="text" name="email" value = "<?=$content->getEmail()?>">Почта<br>
	<div id = "emailDiv">
	</div>

<input id = "title" onChange = "showMess('title' , '155', 'строка')" type="text" name="title" value = "<?=$content->getTitle()?>">Заголовок (title)<br>
	<div id = "titleDiv">
	</div>

<input id = "description" onChange = "showMess('description' , '155', 'строка')" type="text" name="description" value = "<?=$content->getDescription()?>">Описание (description)<br>
	<div id = "descriptionDiv">
	</div>
<br>
<div id = "mySubmit">
Отправить
</div>
</div>
</form>
<script type='text/javascript'>
var buttonAccess = new Map([
['heading' , 'true'],
['preview' , 'false'],
['price' , 'false'],
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
			document.getElementById(element + 'Div').innerHTML = '<span class = "alert alert-danger m-3">Неверная инфа. Введите тип "' + t + '" </span>';	
		}
			else{ 
				if(per.length > howLong){
					buttonAccess.set(element,'false');
					document.getElementById('mySubmit').innerHTML='Отправить';
					document.getElementById(element + 'Div').innerHTML = '<span class = "alert alert-danger">Максимум '+ howLong +' символов</span>';
					}
						else {
							buttonAccess.set(element,'true');
							document.getElementById(element + 'Div').innerHTML = '<span class = "alert alert-success" style = "margin: 10px 10px">Все впорядке</span>';
						if(buttonAccess.get('heading') == 'true')
						{document.getElementById('mySubmit').innerHTML='<button type = "submit" name = "Отправить">Отправить</button>';
					}
						else
						{
							document.getElementById('mySubmit').innerHTML='<button type = "submit" name = "Отправить">Отправить</button>';}
						}
				}
				
}
</script>

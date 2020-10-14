<div id = "pageChangerDiv">
<h5>Выберите страницу, для которой создается блок</h5>

<select id = "pageChanger" name = "pageName">
<option value="index">Главная страница</option>
<?php foreach($content as $page):?>
<option value="<?=$page['pageName']?>"><?=$page['pageName']. ' | ' . mb_strimwidth($page['title'], 0, 33, '...')?></option>

<?php endforeach; ?>
</select><br>
</div>
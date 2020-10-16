<?
if($content){
$id = $content['id'];
$title = $content['title'];
$description = $content['description'];
$pageName = $content['pageName'];
$editorText = $content['editorText'];
$menuName = $content['menuName'];
}
?>
<script src = "./editor/3/ckeditor/ckeditor.js"></script>
<form id="editorForm" method ="post" action="/admin/freeText.php">
         <input type="hidden" name="id" id = "id" value = "<?=$content['id'];?>">
         <input type="text" name="title" id = "title" value = "<?=$content['title'];?>"> Заголовок страницы(title)<br>
         <input type="text" name="description" id = "description" value = "<?=$content['description'];?>"> Описание страницы(description)<br>
         <input type="text" name="menuName" id = "menuName" value = "<?=$content['menuName'];?>"> Пункт меню<br>
         <input type="text" <?php if($_GET['edit']){echo 'readonly';}?> name="pageName" id = "pageName" value = "<?=$content['pageName'];?>"> Название страницы<br>
         <textarea id="editor1" name="editorText"><?=$content['editorText']?></textarea>
    <script>
                CKEDITOR.replace( 'editor1' );
            </script>
            <button id = "submit" type = "submit" >Отправить</button>
</form>

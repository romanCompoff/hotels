<?
if($content ){
$title = $content->getTitle();
$description = $content->getDescription();
$pageName = $content->getPageName();
$editorText = $content->getEditorText();
}else{
    $title='';
    $description='';
    $pageName='';
    $editorText='';
}
?>
<script src = "./editor/3/ckeditor/ckeditor.js"></script>
<form id="editorForm" method ="post" action="/admin/freeText.php">
         <input type="text" name="title" id = "title" value = "<?=$title;?>"> Заголовок страницы(title)<br>
         <input type="text" name="description" id = "description" value = "<?=$description;?>"> Описание страницы(description)<br>
         <input type="text" name="pageName" id = "pageName" value = "<?=$pageName;?>"> Название страницы<br>
         <textarea id="editor1" name="editorText"><?=$editorText?></textarea>
    <script>
                CKEDITOR.replace( 'editor1' );
            </script>
            <button id = "submit" type = "submit" >Отправить</button>
</form>
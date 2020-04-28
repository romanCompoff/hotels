<?php
foreach($content as $ucersList){
echo '<div class = "row text-center">';
echo '<div class = "col-12 col-sm-6 col-md-2 col-lg-2 col-xl-2 py-3">';
echo $ucersList['lastTS'];
echo '</div>';
echo '<div class = "col-12 col-sm-6 col-md-2 col-lg-2 col-xl-2 py-3">';
echo $ucersList['utm_term'];
echo '</div>';
echo '<div class = "col-12 col-sm-6 col-md-2 col-lg-2 col-xl-2 py-3">';

echo '<button type="button" class="btn btn-success" onclick="location.href=\'';
echo $_SERVER['PHP_SELF'];
echo '?status=callMethod&id=' .$ucersList['id']. '\'">'; 
echo $ucersList['callMethod'];
echo '</button>';

echo '</div>';
echo '<div class = "col-12 col-sm-6 col-md-2 col-lg-2 col-xl-2 py-3">';
echo $ucersList['phone'];
echo '</div>';
echo '<div class = "col-12 col-sm-6 col-md-2 col-lg-2 col-xl-2 py-3">';

echo '<button type="button" class="btn btn-primary" onclick="location.href=\'';
echo $_SERVER['PHP_SELF'];
echo '?status=status&id=' .$ucersList['id']. '\'">'; 
echo $ucersList['status'];
echo '</button>';

echo '</div>';
echo '<div class = "col-12 col-sm-6 col-md-2 col-lg-2 col-xl-2 py-3">';
echo '<form method = "post" action = "';
echo $_SERVER['PHP_SELF'];
echo '">';
echo '<input id = "summ" name = "summ" type = "text" style = "width:50%" value = "';
echo $ucersList['profit'];
echo '">';
echo '<input id = "id" name = "id" type = "hidden" value = "';
echo $ucersList['id'];
echo '">';
echo '<button type = "submit" class="btn btn-primary">ок</button>';
echo '</form>';
echo '</div>';
echo '</div>';
}

<?php foreach($content as $menu):?>
<li class="nav-item"><a class="nav-link" href="/<?=$menu['pageName']?>.html"><?=$menu['menuName']?></a></li>
<?php endforeach;?>
<?
foreach($content as $hotel){
		echo $hotel[1];
		echo '<br>';
		echo $hotel[2];
		echo '<br>';
echo sprintf('<div id = "myClass%s" style = "width: 100%; background-color:gray;"></div>', $hotel[0], '');
echo '<div class="wrapper">
  <div class="hoc clear"> 
    <figure id="logos">
      <ul class="nospace group">' ;
	  	echo sprintf('<li><img class = "myClass%s" src="/myFiles/%s/%s" alt="" onclick = "bigCapture(event); return false"></li>', $hotel[0], $hotel[0], $hotel[3]);
	  	echo sprintf('<li><img class = "myClass%s" src="/myFiles/%s/%s" alt="" onclick = "bigCapture(event); return false"></li>', $hotel[0], $hotel[0], $hotel[4]);
	  	echo sprintf('<li><img class = "myClass%s" src="/myFiles/%s/%s" alt="" onclick = "bigCapture(event); return false"></li>', $hotel[0], $hotel[0], $hotel[5]);
	  	echo sprintf('<li><img class = "myClass%s" src="/myFiles/%s/%s" alt="" onclick = "bigCapture(event); return false"></li>', $hotel[0], $hotel[0], $hotel[6]);

echo '  </ul>
      <figcaption class="hidden"><a class="btn small" href="#">More &raquo;</a></figcaption>
    </figure>
  </div>
</div>';

}
?>
<script>
function bigCapture(e){

document.getElementById(e.target.className).innerHTML = '<img src = "' + e.path[0].src + '">';
console.log(e.path[0].src);
	console.log(e.target.className);
	console.log('p');
  return false;
}
</script> 
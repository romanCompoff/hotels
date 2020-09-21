<div class="owl-carousel owl-theme card-deck mx-0">

  <?php foreach($feed as $f):?>
  
  <div class="card" style = "height:450px;">
  <div class="text-center px-5">
    <img class="card-img-top py-5" src="/img/img-feedbacks/<?=$f['id'];?>.jpg" alt="Качество обслуживания" style = "width:100%;">
    </div>
	<div class="card-body text-center">
      <h5 class="card-title"><?=$f['userName']?></h5>
      <p class="card-text"><?=$f['text']?></p>
      <p class="card-text"><small class="text-muted"></small></p>
    </div>
  </div>
  <?
endforeach;
?>
</div>


<script src="js/jquery/jquery-2.2.4.min.js"></script>
	<script src="oc/owl.carousel.min.js"></script>
<script>$(document).ready(function(){
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
	navText: ['<','>'],
	autoplay:true,
	stopOnHover: true,
	dots:false,
	center:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
});
});
$(window).on('focus', function () {
    $('.owl-next').trigger('click');
});
var myNav = document.querySelector('#mySlider');
myNav.onmouseout = function(){
document.querySelector('#mySlider').childNodes[9].style.display = 'none';
}
myNav.onmouseover = function(){
document.querySelector('#mySlider').childNodes[9].style.display = 'block';
}
</script>
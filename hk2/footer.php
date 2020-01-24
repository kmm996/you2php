 <footer class="p-2">
        
        <p  class="text-white  m-1 p-1 h6">
		   jialezi |
           <a href="//youtube.com/" target="_blank" class="text-white ml-2">Youtube </a>
	   <a href="/4k/" target="_blank" class="text-white ml-2">| 4K </a>   

		</p>
		<p  class="text-white  m-1 p-1 h6">
	   <a href="/" target="_blank" class="text-white ml-2"> TW </a>
	   <a href="/tw2/" target="_blank" class="text-white ml-2">| TW2 </a>
	   <a href="/tw3/" target="_blank" class="text-white ml-2">| TW3 </a>
	   <a href="/hk/" target="_blank" class="text-white ml-2">| HK </a>
	   <a href="/hk2/" target="_blank" class="text-white ml-2">| HK2 </a>
	   <a href="/us/" target="_blank" class="text-white ml-2">| US </a>
        </p>
		<p  class="text-white p-1 m-1 h6">
            Copyright © 2015-<?php echo date('Y');?> All Rights Reserved. Powered by <a href="https://you2php.github.io/" target="_blank" >YOU#2PHP</a> </br>
        </p>
    </footer>
  
  
  <script src="https://cdn.bootcss.com/popper.js/1.11.0/umd/popper.min.js"></script>
  <script src="https://cdn.bootcss.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
  <script src="https://cdn.bootcss.com/Swiper/4.0.6/js/swiper.min.js"></script>  
  <script>
    $(".carousel").on("touchstart", function(event){
        var xClick = event.originalEvent.touches[0].pageX;
    $(this).one("touchmove", function(event){
        var xMove = event.originalEvent.touches[0].pageX;
        if( Math.floor(xClick - xMove) > 5 ){
            $(this).carousel('next');
        }
        else if( Math.floor(xClick - xMove) < -5 ){
            $(this).carousel('prev');
        }
    });
    $(".carousel").on("touchend", function(){
            $(this).off("touchmove");
    });
});

 $(function () {  
        var swiper = new Swiper('.swiper-container', {  
            spaceBetween: 20,  
            slidesPerView:'auto',  
            freeMode: true  
        });  
    })  
</script>
</body></html>

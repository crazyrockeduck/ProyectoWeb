<div class="clearfix"></div>
<footer>
    
</footer>
<script src="<?=$GLOBALS['COD']->dir?>/assets/js/jquery-3.4.1.min.js?<?=$elapsed_time?>"></script>
<script src="<?=$GLOBALS['COD']->dir?>/assets/css/bootstrap/bootstrap1.min.js?<?=$elapsed_time?>"></script>
<script src="<?=$GLOBALS['COD']->dir?>/assets/css/Swiper/swiper1.min.js?<?=$elapsed_time?>"></script>
<script src="<?=$GLOBALS['COD']->dir?>/assets/js/jquery.lazyload.min.js?<?=$elapsed_time?>"></script>
<script src="<?=$GLOBALS['COD']->dir?>/assets/js/greensock.js?<?=$elapsed_time?>"></script>
<script src="<?=$GLOBALS['COD']->dir?>/assets/js/kl-animate.min.js?<?=$elapsed_time?>"></script>
<script src="<?=$GLOBALS['COD']->dir?>/assets/js/<?=$page_title?>.js?<?=$elapsed_time?>"></script>
<script>
    var swiper = new Swiper('.swiper-container', {
        spaceBetween: 30,
        centeredSlides: true,
        loop: true,
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
      });
</script>
</body>
</html>
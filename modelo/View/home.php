<?php
// --------------------------------------------------------------------
//  You can set the page title of the header
// --------------------------------------------------------------------	
	$page_title = "home";
	
// --------------------------------------------------------------------
//  Include header
// --------------------------------------------------------------------	
	include_once('static/Header.php');
?>

<div class="container">
	<div class="row">
		<!-- Swiper -->
		<div class="swiper-container">
    		<div class="swiper-wrapper">
      			<a href="<?=$GLOBALS['COD']->dir?>\descripcionOnePiece"><div class="swiper-slide">
				  <img src="<?=$GLOBALS['COD']->dir?>\assets\images\one_piece_swiper.jpg" alt="One Piece" class="img-fluid">
				  <h3>One Piece</h3></a>
				  </div>
      			<a href="<?=$GLOBALS['COD']->dir?>\descripcionAttack"><div class="swiper-slide"><img src="<?=$GLOBALS['COD']->dir?>\assets\images\attack_on_titan_swiper.jpg" alt="Attack On Titan" class="img-fluid">
				  <h3>Attack On Titan</h3></a>
				  </div>
      			<a href="<?=$GLOBALS['COD']->dir?>\descripcionBlackClover"><div class="swiper-slide"><img src="<?=$GLOBALS['COD']->dir?>\assets\images\black_clover_swiper.jpg" alt="Black Clover" class="img-fluid">
				  <h3>Black Clover</h3></a>
				  </div>
      			<a href="<?=$GLOBALS['COD']->dir?>\descripcionBoruto"><div class="swiper-slide"><img src="<?=$GLOBALS['COD']->dir?>\assets\images\boruto_swiper.jpg" alt="Boruto" class="img-fluid">
				  <h3>Boruto: Naruto Next Generations</h3></a>
				  </div>
      			<a href="<?=$GLOBALS['COD']->dir?>\descripcionDbzs"><div class="swiper-slide"><img src="<?=$GLOBALS['COD']->dir?>\assets\images\dbzs_swiper.jpeg" alt="Dragon Ball Super" class="img-fluid">
				  <h3>Dragon Ball Super</h3></a>
				  </div>
      			<a href="<?=$GLOBALS['COD']->dir?>\descripcionDemonSlayer"><div class="swiper-slide"><img src="<?=$GLOBALS['COD']->dir?>\assets\images\demon_slayer_swiper.jpg" alt="Demon Slayer" class="img-fluid">
				  <h3>Demon Slayer</h3></a>
				  </div>
      			<a href="<?=$GLOBALS['COD']->dir?>\descripcionDororo"><div class="swiper-slide"><img src="<?=$GLOBALS['COD']->dir?>\assets\images\dororo_swiper.png" alt="Dororo" class="img-fluid">
				  <h3>Dororo</h3></a>
				  </div>
      			<a href="<?=$GLOBALS['COD']->dir?>\descripcionFairyTail"><div class="swiper-slide"><img src="<?=$GLOBALS['COD']->dir?>\assets\images\Fairy_tail_swiper.jpg" alt="Fairy Tail" class="img-fluid">
				  <h3>Fairy Tail</h3></a>
				  </div>
      			<a href="<?=$GLOBALS['COD']->dir?>\descripcionOnePunch"><div class="swiper-slide"><img src="<?=$GLOBALS['COD']->dir?>\assets\images\one_punch_swiper.jpg" alt="One Punch" class="img-fluid">
				  <h3>One Punch</h3></a>
				  </div>
      			<a href="<?=$GLOBALS['COD']->dir?>\descripcionSao"><div class="swiper-slide"><img src="<?=$GLOBALS['COD']->dir?>\assets\images\sao_swiper.jpg" alt="Sword Art Online" class="img-fluid">
				  <h3>Sword Art Online</h3></a>
				  </div>
    		</div>
    <!-- Add Pagination -->
    <!--<div class="swiper-pagination"></div>-->
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>

	</div>
<div class="row">
	<div class="col LetraBlanca">
	<h1 class="text-center">!Bienvenidos a The Best Anime!</h1>
	<p class="text-justify">Sin mucho que decir sean bienvenidos a está página sin fines de lucro,
	la cual tiene como única finalidad poder hacerlos disfrutar solo y únicamente
	de los mejores animes de todos los tiempos según lo dicta la comunidad, por está
	razón no encontraras una amplía lista de animes, si no que solo podras encontrara
	los anime que han sido considerados lo mejor de lo mejor según la comunidad.</p>
	</div>
</div>
<div class="row">
	<div class="col LetraBlanca">
	<h3>Lista de animes</h3>
	</div>
</div>
<div class="row">
	<div class="col col-md-5 offset-md-1 d-md-block d-none" text-aling="center">
	<table class="table table-borderless">
  <thead>
    <tr>
      <td>
	  	<a href="<?=$GLOBALS['COD']->dir?>\videoAttack">
		<img src="<?=$GLOBALS['COD']->dir?>\assets\images\attack_on_titan_list.jpg" alt="Attack On Titan Lista">
		<span>Episodio 4</span>
		<strong>Attack On Titan</strong>
		</a>
	  </td>
      <td>
	  <a href="<?=$GLOBALS['COD']->dir?>\videoBlackClover">
		<img src="<?=$GLOBALS['COD']->dir?>\assets\images\black_clover_list.jpg" alt="Black Clover Lista">
		<span>Episodio 83</span>
		<strong>Black Clover</strong>
		</a>
	  </td>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
	  	<a href="<?=$GLOBALS['COD']->dir?>\videoBoruto">
		<img src="<?=$GLOBALS['COD']->dir?>\assets\images\boruto_list.jpeg" alt="Boruto Lista">
		<span>Episodio 107</span>
		<strong>Boruto: Naruto Next Generations</strong>
		</a>  
	  </td>
      <td>
	  	<a href="<?=$GLOBALS['COD']->dir?>\videoDbzs">
		<img src="<?=$GLOBALS['COD']->dir?>\assets\images\dbzs_list.jpg" alt="Dragon Ball Super Lista">
		<span>Episodio 1</span>
		<strong>Dragon Ball Super</strong>
		</a>
	  </td>
    </tr>
    <tr>
      <td><a href="<?=$GLOBALS['COD']->dir?>\videoDemonSlayer">
		<img src="<?=$GLOBALS['COD']->dir?>\assets\images\demon_slayer_list.jpg" alt="Demon Slayer Lista">
		<span>Episodio 1</span>
		<strong>Demon Slayer</strong>
		</a>
		</td>
      <td>
	  	<a href="<?=$GLOBALS['COD']->dir?>\videoDororo">
		<img src="<?=$GLOBALS['COD']->dir?>\assets\images\dororo_list.jpg" alt="Dororo Lista">
		<span>Episodio 19</span>
		<strong>Dororo</strong>
		</a>
	  </td>
    </tr>
    <tr>
      <td>
	  	<a href="<?=$GLOBALS['COD']->dir?>\videoFairyTail">
		<img src="<?=$GLOBALS['COD']->dir?>\assets\images\fairy_tail_list.jpg" alt="Fairy_tail Lista">
		<span>Episodio 32</span>
		<strong>Fairy Tail</strong>
		</a>
	  </td>
      <td>
	  	<a href="<?=$GLOBALS['COD']->dir?>\videoOnePiece">
		<img src="<?=$GLOBALS['COD']->dir?>\assets\images\one_piece_list.jpg" alt="One Piece Lista">
		<span>Episodio 1</span>
		<strong>One Piece</strong>
		</a>
	  </td>
	</tr>
	<tr>
		<td>
		<a href="<?=$GLOBALS['COD']->dir?>\videoOnePunch">
		<img src="<?=$GLOBALS['COD']->dir?>\assets\images\one_punch_list.jpeg" alt="One Punch Man Lista">
		<span>Episodio 1</span>
		<strong>One Punch Man</strong>
		</a>
		</td>
		<td>
		<a href="<?=$GLOBALS['COD']->dir?>\videoSao">
		<img src="<?=$GLOBALS['COD']->dir?>\assets\images\sao_list.jpg" alt="Sword Art Online Lista">
		<span>Episodio 1</span>
		<strong>Sword Art Online</strong>
		</a>
		</td>
	</tr>
  </tbody>
</table>
	</div>
</div>
<div class="row">
	<div class="col d-block d-md-none">
	<ul class="list-group">
  	<a href="<?=$GLOBALS['COD']->dir?>\videoAttack">
		<li class="list-group-item">
		<img src="<?=$GLOBALS['COD']->dir?>\assets\images\attack_on_titan_list.jpg" alt="Attack On Titan Lista">
		<span>Episodio 4</span>
		<strong>Attack On Titan</strong>
		</a>
		</li>
  	<a href="<?=$GLOBALS['COD']->dir?>\videoBlackClover"><li class="list-group-item"><img src="<?=$GLOBALS['COD']->dir?>\assets\images\black_clover_list.jpg" alt="Black Clover Lista">
		<span>Episodio 83</span>
		<strong>Black Clover</strong>
		</li>
		</a>
  	<a href="<?=$GLOBALS['COD']->dir?>\videoBoruto"><li class="list-group-item"><img src="<?=$GLOBALS['COD']->dir?>\assets\images\boruto_list.jpeg" alt="Boruto Lista">
		<span>Episodio 107</span>
		<strong>Boruto: Naruto Next Generations</strong>
		</li>
		</a>
  	<a href="<?=$GLOBALS['COD']->dir?>\videoDbzs"><li class="list-group-item"><img src="<?=$GLOBALS['COD']->dir?>\assets\images\dbzs_list.jpg" alt="Dragon Ball Super Lista">
		<span>Episodio 1</span>
		<strong>Dragon Ball Super</strong>
		</li>
		</a>
		<a href="<?=$GLOBALS['COD']->dir?>\videoDemonSlayer"><li class="list-group-item"><img src="<?=$GLOBALS['COD']->dir?>\assets\images\demon_slayer_list.jpg" alt="Demon Slayer Lista">
		<span>Episodio 1</span>
		<strong>Demon Slayer</strong>
		</li>
		</a>
		<a href="<?=$GLOBALS['COD']->dir?>\videoDororo"><li class="list-group-item"><img src="<?=$GLOBALS['COD']->dir?>\assets\images\dororo_list.jpg" alt="Dororo Lista">
		<span>Episodio 19</span>
		<strong>Dororo</strong>
		</li>
		</a>
  	<a href="<?=$GLOBALS['COD']->dir?>\videoFairyTail"><li class="list-group-item"><img src="<?=$GLOBALS['COD']->dir?>\assets\images\fairy_tail_list.jpg" alt="Fairy_tail Lista">
		<span>Episodio 32</span>
		<strong>Fairy Tail</strong>
		</li>
		</a>
  	<a href="<?=$GLOBALS['COD']->dir?>\videoOnePiece"><li class="list-group-item">
		<img src="<?=$GLOBALS['COD']->dir?>\assets\images\one_piece_list.jpg" alt="One Piece Lista">
		<span>Episodio 1</span>
		<strong>One Piece</strong>
		</li>
		</a>
		<a href="<?=$GLOBALS['COD']->dir?>\videoOnePunch"><li class="list-group-item">
		<img src="<?=$GLOBALS['COD']->dir?>\assets\images\one_punch_list.jpeg" alt="One Punch Man Lista">
		<span>Episodio 1</span>
		<strong>One Punch Man</strong>
		</li>
		</a>
		<a href="<?=$GLOBALS['COD']->dir?>\videoSao"><li class="list-group-item"><img src="<?=$GLOBALS['COD']->dir?>\assets\images\sao_list.jpg" alt="Sword Art Online Lista">
		<span>Episodio 1</span>
		<strong>Sword Art Online</strong>
		</li>
		</a>
</ul>
	</div>
</div>


</div>

<?php
	include_once('static/Footer.php');
?>
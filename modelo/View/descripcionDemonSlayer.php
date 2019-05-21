<?php
// --------------------------------------------------------------------
//  You can set the page title of the header
// --------------------------------------------------------------------	
	$page_title = "descripcionDemonSlayer";
	
// --------------------------------------------------------------------
//  Include header
// --------------------------------------------------------------------	
	include_once('static/Header.php');
?>

<div class="container">
    <div class="row py-5">
        <div class="col col-md-3 offset-md-2 d-md-block d-none">
        <img src="<?=$GLOBALS['COD']->dir?>\assets\images\demon_slayer_description.webp" alt="Demon Slayer Descripcion" class="img-fluid">
        <h2 class="text-center LetraBlanca">Demon Slayer</h2>
        </div>
        <div class="col col-md-5 d-md-block d-none LetraBlanca">
        <h5 class="EspacioTop">Sinopsis</h5>
        <p class="text-justify">Estamos en la era Taisho de Japón. Tanjiro, un joven que se gana la vida vendiendo carbón, descubre un día que su familia ha sido asesinada por un demonio. Para empeorar las cosas, su hermana menor Nezuko, la única superviviente de la masacre, ha sufrido una transformación en demonio. Destrozado por los acontecimientos Tanjiro decide convertirse en un cazador de demonios para poder devolver a su hermana a la normalidad y matar al demonio que masacró a su familia.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-12 d-block d-md-none LetraBlanca text-center">
        <img src="<?=$GLOBALS['COD']->dir?>\assets\images\demon_slayer_description.webp" alt="Demon Slayer Descripcion" class="img-fluid">
        <h2 class="text-center LetraBlanca">Demon Slayer</h2>
        </div>
        <div class="col-12 d-block d-md-none LetraBlanca">
        <h5 class="EspacioTop">Sinopsis</h5>
        <p class="text-justify">Estamos en la era Taisho de Japón. Tanjiro, un joven que se gana la vida vendiendo carbón, descubre un día que su familia ha sido asesinada por un demonio. Para empeorar las cosas, su hermana menor Nezuko, la única superviviente de la masacre, ha sufrido una transformación en demonio. Destrozado por los acontecimientos Tanjiro decide convertirse en un cazador de demonios para poder devolver a su hermana a la normalidad y matar al demonio que masacró a su familia.</p>
        </div>
    </div>
</div>

<?php
	include_once('static/Footer.php');
?>
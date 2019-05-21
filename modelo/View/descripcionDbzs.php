<?php
// --------------------------------------------------------------------
//  You can set the page title of the header
// --------------------------------------------------------------------	
	$page_title = "descripcionDbzs";
	
// --------------------------------------------------------------------
//  Include header
// --------------------------------------------------------------------	
	include_once('static/Header.php');
?>

<div class="container">
    <div class="row py-5">
        <div class="col col-md-3 offset-md-2 d-md-block d-none">
        <img src="<?=$GLOBALS['COD']->dir?>\assets\images\dbzs_description.webp" alt="Dragon Ball Super Descripcion" class="img-fluid">
        <h2 class="text-center LetraBlanca">Dragon Ball Super</h2>
        </div>
        <div class="col col-md-5 d-md-block d-none LetraBlanca">
        <h5 class="EspacioTop">Sinopsis</h5>
        <p class="text-justify">Después de derrotar a Majin Buu, la vida vuelve a ser tranquila una vez más. Goku vuelve a trabajar otra vez ya que Chichi le ordena que gane dinero, aunque él quiere seguir entrenando. Mientras, Goten, a punto de convertirse en cuñado de Videl, se embarca en un viaje con Trunks para encontrar un regalo para ella.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-12 d-block d-md-none LetraBlanca text-center">
        <img src="<?=$GLOBALS['COD']->dir?>\assets\images\dbzs_description.webp" alt="Dragon Ball Super Descripcion" class="img-fluid">
        <h2 class="text-center LetraBlanca">Dragon Ball Super</h2>
        </div>
        <div class="col-12 d-block d-md-none LetraBlanca">
        <h5 class="EspacioTop">Sinopsis</h5>
        <p class="text-justify">Después de derrotar a Majin Buu, la vida vuelve a ser tranquila una vez más. Goku vuelve a trabajar otra vez ya que Chichi le ordena que gane dinero, aunque él quiere seguir entrenando. Mientras, Goten, a punto de convertirse en cuñado de Videl, se embarca en un viaje con Trunks para encontrar un regalo para ella.</p>
        </div>
    </div>
</div>

<?php
	include_once('static/Footer.php');
?>
<?php
// --------------------------------------------------------------------
//  You can set the page title of the header
// --------------------------------------------------------------------	
	$page_title = "descripcionFairyTail";
	
// --------------------------------------------------------------------
//  Include header
// --------------------------------------------------------------------	
	include_once('static/Header.php');
?>

<div class="container">
    <div class="row py-5">
        <div class="col col-md-3 offset-md-2 d-md-block d-none">
        <img src="<?=$GLOBALS['COD']->dir?>\assets\images\fairy_tail_description.webp" alt="Fairy Tail Descripcion" class="img-fluid">
        <h2 class="text-center LetraBlanca">Fairy Tail</h2>
        </div>
        <div class="col col-md-5 d-md-block d-none LetraBlanca">
        <h5 class="EspacioTop">Sinopsis</h5>
        <p class="text-justify"> Fairy Tail cuenta la historia de un joven mago llamado Natsu en la búsqueda de su maestro y padre adoptivo Igneel que resulta ser un dragón. Por ello se unió a Fairy Tail, un gremio de magos que es famoso por los destrozos y daños que provocan en diversas ciudades (lo cual no debería ser así). El mundo de Fairy Tail gira alrededor de los magos (los cuales poco tienen que ver con la idea general del mago común) que realizan encargos a cambio de dinero, similar a un cazarecompensas.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-12 d-block d-md-none LetraBlanca text-center">
        <div class="col-3 offset-2">
        <img src="<?=$GLOBALS['COD']->dir?>\assets\images\fairy_tail_description.webp" alt="Fairy Tail Descripcion" class="img-fluid">
        <h2 class="text-center LetraBlanca">Fairy Tail</h2>
        </div>
        <div class="col-12 d-block d-md-none LetraBlanca">
        <h5 class="EspacioTop">Sinopsis</h5>
        <p class="text-justify"> Fairy Tail cuenta la historia de un joven mago llamado Natsu en la búsqueda de su maestro y padre adoptivo Igneel que resulta ser un dragón. Por ello se unió a Fairy Tail, un gremio de magos que es famoso por los destrozos y daños que provocan en diversas ciudades (lo cual no debería ser así). El mundo de Fairy Tail gira alrededor de los magos (los cuales poco tienen que ver con la idea general del mago común) que realizan encargos a cambio de dinero, similar a un cazarecompensas.</p>
        </div>
    </div>
</div>

<?php
	include_once('static/Footer.php');
?>
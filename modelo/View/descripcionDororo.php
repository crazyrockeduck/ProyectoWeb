<?php
// --------------------------------------------------------------------
//  You can set the page title of the header
// --------------------------------------------------------------------	
	$page_title = "descripcionDororo";
	
// --------------------------------------------------------------------
//  Include header
// --------------------------------------------------------------------	
	include_once('static/Header.php');
?>

<div class="container">
    <div class="row py-5">
        <div class="col col-md-3 offset-md-2 d-md-block d-none">
        <img src="<?=$GLOBALS['COD']->dir?>\assets\images\dororo_description.jpg" alt="Dororo Descripcion" class="img-fluid">
        <h2 class="text-center LetraBlanca">Dororo</h2>
        </div>
        <div class="col col-md-5 d-md-block d-none LetraBlanca">
        <h5 class="EspacioTop">Sinopsis</h5>
        <p class="text-justify"> Daigo Kagemitsu es un temible samurái que entregó su futuro hijo a demonios, a cambio de ver cumplido su sueño de conquistar 
            el país. Al cabo del tiempo, nació un niño deforme, al que faltaban cuarenta y ocho partes de su cuerpo. Su ambicioso padre 
            lo arrojó al río, pero el pequeño logró sobrevivir y, con el tiempo, convertirse en un diestro espadachín llamado Hyakkimaru,
            «pequeño monstruo». Años después, con la ayuda del joven y avispado Dororo, quien afirma ser el mejor ladrón de Japón, Hyakkimaru
            emprenderá un viaje a lo largo del cual se enfrentará a los demonios para recuperar las partes de su cuerpo.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-12 d-block d-md-none LetraBlanca text-center">
        <img src="<?=$GLOBALS['COD']->dir?>\assets\images\dororo_description.jpg" alt="Dororo Descripcion" class="img-fluid">
        <h2 class="text-center LetraBlanca">Dororo</h2>
        </div>
        <div class="col-12 d-block d-md-none LetraBlanca">
        <h5 class="EspacioTop">Sinopsis</h5>
        <p class="text-justify"> Daigo Kagemitsu es un temible samurái que entregó su futuro hijo a demonios, a cambio de ver cumplido su sueño de conquistar 
            el país. Al cabo del tiempo, nació un niño deforme, al que faltaban cuarenta y ocho partes de su cuerpo. Su ambicioso padre 
            lo arrojó al río, pero el pequeño logró sobrevivir y, con el tiempo, convertirse en un diestro espadachín llamado Hyakkimaru,
            «pequeño monstruo». Años después, con la ayuda del joven y avispado Dororo, quien afirma ser el mejor ladrón de Japón, Hyakkimaru
            emprenderá un viaje a lo largo del cual se enfrentará a los demonios para recuperar las partes de su cuerpo.</p>
        </div>
    </div>
</div>

<?php
	include_once('static/Footer.php');
?>
<?php
// --------------------------------------------------------------------
//  You can set the page title of the header
// --------------------------------------------------------------------	
	$page_title = "descripcionAttack";
	
// --------------------------------------------------------------------
//  Include header
// --------------------------------------------------------------------	
	include_once('static/Header.php');
?>

<div class="container">
    <div class="row py-5">
        <div class="col col-md-3 offset-md-2 d-md-block d-none">
        <img src="<?=$GLOBALS['COD']->dir?>\assets\images\attack_description.jpg" alt="Attack Descripcion" class="img-fluid">
        <h2 class="text-center LetraBlanca">Attack On Titan</h2>
        </div>
        <div class="col col-md-5 d-md-block d-none LetraBlanca">
        <h5 class="EspacioTop">Sinopsis</h5>
        <p class="text-justify"> La historia nos traslada a un mundo en el que la humanidad estuvo a punto de ser exterminada cientos
            de años atrás por los gigantes. Los gigantes son enormes, parecen no ser inteligentes y devoran seres humanos. Lo peor es 
            que parece que lo hacen por placer y no por alimentarse. Una pequeña parte de la humanidad ha conseguido sobrevivir protegiéndose
            en una ciudad con unos altísimos muros, más altos que el mayor de los gigantes. La ciudad vive su vida tranquila, y hace más de 
            100 años que ningún gigante aparece por allí.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-12 d-block d-md-none LetraBlanca text-center">
        <img src="<?=$GLOBALS['COD']->dir?>\assets\images\attack_description.jpg" alt="Attack Descripcion" class="img-fluid">
        <h2 class="text-center LetraBlanca">Attack On Titan</h2>
        </div>
        <div class="col-12 d-block d-md-none LetraBlanca">
        <h5 class="EspacioTop">Sinopsis</h5>
        <p class="text-justify"> La historia nos traslada a un mundo en el que la humanidad estuvo a punto de ser exterminada cientos
            de años atrás por los gigantes. Los gigantes son enormes, parecen no ser inteligentes y devoran seres humanos. Lo peor es 
            que parece que lo hacen por placer y no por alimentarse. Una pequeña parte de la humanidad ha conseguido sobrevivir protegiéndose
            en una ciudad con unos altísimos muros, más altos que el mayor de los gigantes. La ciudad vive su vida tranquila, y hace más de 
            100 años que ningún gigante aparece por allí.</p>
        </div>
    </div>
</div>

<?php
	include_once('static/Footer.php');
?>
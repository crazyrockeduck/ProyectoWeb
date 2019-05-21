<?php
// --------------------------------------------------------------------
//  You can set the page title of the header
// --------------------------------------------------------------------	
	$page_title = "descripcionOnePunch";
	
// --------------------------------------------------------------------
//  Include header
// --------------------------------------------------------------------	
	include_once('static/Header.php');
?>

<div class="container">
    <div class="row py-5">
        <div class="col col-md-3 offset-md-2 d-md-block d-none">
        <img src="<?=$GLOBALS['COD']->dir?>\assets\images\one_punch_description.webp" alt="One Punch Man Descripcion" class="img-fluid">
        <h2 class="text-center LetraBlanca">One Punch Man</h2>
        </div>
        <div class="col col-md-5 d-md-block d-none LetraBlanca">
        <h5 class="EspacioTop">Sinopsis</h5>
        <p class="text-justify"> La serie está protagonizada por un héroe que ha entrenado tanto que se ha quedado calvo, y tiene tanta fuerza que puede acabar con cualquier enemigo de un solo puñetazo. Sin embargo, al ser tan fuerte, se aburre y se frustra porque no le cuesta nada vencer sus batallas.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-12 d-block d-md-none LetraBlanca text-center">
        <img src="<?=$GLOBALS['COD']->dir?>\assets\images\one_punch_description.webp" alt="One Punch Man Descripcion" class="img-fluid">
        <h2 class="text-center LetraBlanca">One Punch Man</h2>
        </div>
        <div class="col-12 d-block d-md-none LetraBlanca">
        <h5 class="EspacioTop">Sinopsis</h5>
        <p class="text-justify"> La serie está protagonizada por un héroe que ha entrenado tanto que se ha quedado calvo, y tiene tanta fuerza que puede acabar con cualquier enemigo de un solo puñetazo. Sin embargo, al ser tan fuerte, se aburre y se frustra porque no le cuesta nada vencer sus batallas.</p>
        </div>
    </div>
</div>

<?php
	include_once('static/Footer.php');
?>
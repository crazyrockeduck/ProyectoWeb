<?php
// --------------------------------------------------------------------
//  You can set the page title of the header
// --------------------------------------------------------------------	
	$page_title = "descripcionBoruto";
	
// --------------------------------------------------------------------
//  Include header
// --------------------------------------------------------------------	
	include_once('static/Header.php');
?>

<div class="container">
    <div class="row py-5">
        <div class="col col-md-3 offset-md-2 d-md-block d-none">
        <img src="<?=$GLOBALS['COD']->dir?>\assets\images\boruto_description.jpg" alt="Boruto Descripcion" class="img-fluid">
        <h2 class="text-center LetraBlanca">Boruto</h2>
        </div>
        <div class="col col-md-5 d-md-block d-none LetraBlanca">
        <h5 class="EspacioTop">Sinopsis</h5>
        <p class="text-justify">Esta es una secuela de las series de Naruto, la cual sigue la historia de Boruto el hijo de Naruto. La aldea oculta de la hoja ha continuado su moderinización pero siempre manateniendo la paz. Carros eléctricos recorren toda la ciudad conectada por distritos llenos de rascacielos con enormes monitores mostrando todo tipo de imágenes. En esta era, la aldea oculta de la hoja es ahora una cuidad ninja solo en nombre ya que ahora muchas personas normales han venido a vivir aquí.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-12 d-block d-md-none LetraBlanca text-center">
        <img src="<?=$GLOBALS['COD']->dir?>\assets\images\boruto_description.jpg" alt="Boruto Descripcion" class="img-fluid">
        <h2 class="text-center LetraBlanca">Boruto</h2>
        </div>
        <div class="col-12 d-block d-md-none LetraBlanca">
        <h5 class="EspacioTop">Sinopsis</h5>
        <p class="text-justify">Esta es una secuela de las series de Naruto, la cual sigue la historia de Boruto el hijo de Naruto. La aldea oculta de la hoja ha continuado su moderinización pero siempre manateniendo la paz. Carros eléctricos recorren toda la ciudad conectada por distritos llenos de rascacielos con enormes monitores mostrando todo tipo de imágenes. En esta era, la aldea oculta de la hoja es ahora una cuidad ninja solo en nombre ya que ahora muchas personas normales han venido a vivir aquí.</p>
        </div>
    </div>
</div>

<?php
	include_once('static/Footer.php');
?>
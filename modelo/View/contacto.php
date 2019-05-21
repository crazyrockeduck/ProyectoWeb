<?php
// --------------------------------------------------------------------
//  You can set the page title of the header
// --------------------------------------------------------------------	
	$page_title = "contacto";
	
// --------------------------------------------------------------------
//  Include header
// --------------------------------------------------------------------	
	include_once('static/Header.php');
?>

<div class="container-fluid">
    <div class="row">
        <div class="col px-0">
        <img src="<?=$GLOBALS['COD']->dir?>\assets\images\banner_contacto.jpg" alt="Banner" class="img-fluid">
        </div>
    </div>
    <div class="row">
        <div class="col">
        <h1 class="text-center">!Ponte en contacto con nosotros!</h1>
        <p class="text-justify">Está sección está dedicada para que nuestros espectadores se puedan comunicar con nosotros
           mediante la redacción de un correo electronico. En el cual se puede mandar una sugerencia
           con respecto al contenido de la pagina web, fallas en la misma o sugerencias para agregar
           contenido.</p>
        </div>
    </div>
    <div class="row">
        <div class="col text-center">
            <form method="POST" action="https://formspree.io/TheBestAnimelml@gmail.com">
            <input type="email" name="email" placeholder="Tu Correo" class="inputM">
            <div class="col width:20rem">
            <textarea name="message" placeholder="Tu Mensaje" class="textareaM"></textarea>
            <div class="col">
            <button type="submit" class="btn btn-outline-danger">Enviar</button>
            </div>
            </form>
            </div>
      </div>        
    </div>
    <div class="row">
        <div class="col">
        <h3>Aviso</h3>
        <p>Es importante que despues de enviar el correo seguir los pasos que te indica la página para
            que podamos recibir tu sugerencia acerca de la nuestra pagina web.</p>
        </div>
    </div>
</div>

<?php
	include_once('static/Footer.php');
?>
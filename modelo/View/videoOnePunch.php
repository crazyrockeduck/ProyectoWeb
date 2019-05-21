<?php
// --------------------------------------------------------------------
//  You can set the page title of the header
// --------------------------------------------------------------------	
	$page_title = "videoOnePunch";
	
// --------------------------------------------------------------------
//  Include header
// --------------------------------------------------------------------	
	include_once('static/Header.php');
?>

<div class="container">
    <div class="row">
        <div class="col text-center d-md-block d-none">
            <h1 class="LetraBlanca">One Punch Man Episodio 1</h1>
            <video src="<?=$GLOBALS['COD']->dir?>\assets\Video\One_Punch_1.mp4" width="640" height="480" controls></video>
        </div>
        <div class="col text-center d-block d-md-none">
        <h1 class="LetraBlanca">One Punch Man Episodio 1</h1>
            <video src="<?=$GLOBALS['COD']->dir?>\assets\Video\One_Punch_1.mp4" width="320" height="240" controls></video>
        </div>
    </div>
</div>

<?php
	include_once('static/Footer.php');
?>
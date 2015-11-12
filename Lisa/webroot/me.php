<?php
/**
 * This is a Lisa pagecontroller.
 *
 */
// Include the essential config-file which also creates the $lisa variable with its defaults.
include(__DIR__.'/config.php');

// Define what to include to make the plugin to work
$lisa['stylesheets'][]        = 'css/slideshow.css';
$lisa['javascript_include'][] = 'js/slideshow.js';



// Do it and store it all in variables in the $lisa container.
$lisa['title'] = "Me";

$lisa['main'] = <<<EOD
<div id="slideshow" class='slideshow' data-host="" data-path="img/me/" data-images='["me-1.jpg", "me-2.jpg", "me-4.jpg", "me-6.jpg"]'>
<img src='img/me/me-6.jpg' width='950px' height='180px' alt='Me'/>
</div>

<h1>Hej!</h1>
<p>Jag heter Emilia Johansson, är 24 år och studerar vanligtvis en Civilingenjör
vid LTH. Under hösten befinner jag mig dock i ett varmare klimat utan universitet
och passar därför på att lära mig webbutveckling på distans via BTH. Jag har tidigare
rest en del och pluggat vid universitet i både Tyskland och USA. Jag har också
hunnit arbeta två år som brevbärare. </p>
<p> Förutom kursen är jag och min pojkvän mycket ute och fiskar, spelar tennis,
åker bil och mycket annat smått och gått. Jag ogillar att frysa, så varmare
bräddgrader passar mig bra, men jag måste medge att jag saknar maten Sverige kan
erbjuda. </p>
EOD;



// Finally, leave it all to the rendering phase of Lisa.
include(LISA_THEME_PATH);

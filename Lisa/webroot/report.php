<?php
/**
 * This is a Lisa pagecontroller.
 *
 */
// Include the essential config-file which also creates the $lisa variable with its defaults.
include(__DIR__.'/config.php');


// Do it and store it all in variables in the $lisa container.
$lisa['title'] = "Rapporter";

$lisa['header'] = <<<EOD
<img class='sitelogo' src='img/lisa.png' alt='Lisa Logo'/>
<span class='sitetitle'>Lisa webbtemplate</span>
<span class='siteslogan'>Återanvändbara moduler för webbutveckling med PHP</span>
EOD;

$lisa['main'] = <<<EOD
<h1>Redovisning</h1>
<h2>Kmom01</h2>
<h3>Vilken utvecklingsmiljö använder du?</h3>
<p>Jag sitten på en mac och skriver i Atom som jag har vant mig vid efter förra
 kursen i kurspaketet. Som webbserver har jag XAMPP. Firefox fungerar inte på
 datorn jag använder (jag vet det låter konstigt men så är det), jag använde Firefox
 hela förra kursen och testade många fix men inget hjälpte, så jag gav upp
 och gick över till chrome som fungerar utmärkt. Sen testar jag i firefox på en
 äldre dator emellanåt.</p>
<h3>Berätta hur det gick att jobba igenom guiden “20 steg för att komma igång PHP”,
 var något nytt eller kan du det?</h3>
<p>Det var inte mycket nytt eftersom jag nyss jobbade igenom den i föregående kurs,
men en del jag inte kan helt själv sen innan. Dvs bra repetition.</p>
<h3>Vad döpte du din webbmall Anax till?</h3>
<p>Min Webbmall heter Lisa och vi ska bli bra vänner.</p>
<h3>Vad anser du om strukturen i Anax, gjorde du några egna förbättringar eller
något du hoppade över?</h3>
<p>Jag gillade strukturen, den kändes organisarad vilket jag gillar, så för tillfället
ligger den som den gör. Däremot kan jag känna att det kan bli lite rörigt i webroot-
mappen så den lär få sig en undermapp ifall många fler sidor kommer till.
<h3>Gick det bra att inkludera source.php? Gjorde du det som en modul i ditt Anax?</h3>
<p>Att inkludera source var inga problem, det gick i princip av sig själv så fort
jag förstod vart allt skulle ligga. Yes det blev en egen modul CSource i Lisa.</p>
<h3>Gjorde du extrauppgiften med GitHub?</h3>
<p></p>
EOD;



// Finally, leave it all to the rendering phase of Lisa.
include(LISA_THEME_PATH);

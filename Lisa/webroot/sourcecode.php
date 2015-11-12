<?php
/**
 * This is a Lisa pagecontroller.
 *
 */
// Include the essential config-file which also creates the $lisa variable with its defaults.
include(__DIR__.'/config.php');

// Define what to include to make the plugin to work
$lisa['stylesheets'][] = 'css/source.css';
//$lisa['javascript_include'][] = 'js/slideshow.js';

// Create the object to display sourcecode
//$source = new CSource();
$source = new CSource(array('secure_dir' => '..', 'base_dir' => '..'));


// Do it and store it all in variables in the Lisa container.
$lisa['title'] = "Visa källkod";
$lisa['main'] = "<h1>Visa källkod</h1>\n" . $source->View();


// Finally, leave it all to the rendering phase of Lisa.
include(LISA_THEME_PATH);

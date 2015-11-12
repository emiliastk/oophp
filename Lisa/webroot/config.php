<?php
/**
 * Config-file for Lisa. Change settings here to affect installation.
 *
 */

/**
 * Set the error reporting.
 *
 */
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors
ini_set('output_buffering', 0);   // Do not buffer outputs, write directly


/**
 * Define Lisa paths.
 *
 */
define('LISA_INSTALL_PATH', __DIR__ . '/..');
define('LISA_THEME_PATH', LISA_INSTALL_PATH . '/theme/render.php');


/**
 * Include bootstrapping functions.
 *
 */
include(LISA_INSTALL_PATH . '/src/bootstrap.php');


/**
 * Start the session.
 *
 */
session_name(preg_replace('/[^a-z\d]/i', '', __DIR__));
session_start();


/**
 * Create the Lisa variable.
 *
 */
$lisa = array();


/**
 * Site wide settings.
 *
 */
$lisa['lang']         = 'sv';
$lisa['title_append'] = ' | Lisa en webbtemplate';

$lisa['header'] = <<<EOD
<img class='sitelogo' src='img/lisa.png' alt='Lisa Logo'/>
<span class='sitetitle'>Lisa webbtemplate</span>
<span class='siteslogan'>Återanvändbara moduler för webbutveckling med PHP</span>
EOD;

$lisa['footer'] = <<<EOD
<footer><span class='sitefooter'>Copyright (c) Emilia Johansson, med utgångspunkt
 från en mallen 'Anax' skapad av Mikael Roos (me@mikaelroos.se) | <a href='https://github.com/mosbth/Anax-base'>Anax på GitHub</a> | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;

/**Navbar
*/
$lisa['navbar'] = array(
  'me'  => array('text'=>'Om Mig',  'url'=>'me.php'),
  'report'  => array('text'=>'Redovisningar',  'url'=>'report.php'),
  'sourcecode' => array('text'=>'Källkod', 'url'=>'sourcecode.php'),
);

/**
 * Theme related settings.
 *
 */
//$lisa['stylesheet'] = 'css/style.css';
$lisa['stylesheets'] = array('css/style.css');
$lisa['favicon']    = 'favicon.ico';



/**
 * Settings for JavaScript.
 *
 */
$lisa['modernizr'] = 'js/modernizr.js';
$lisa['jquery'] = '//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js';
//$lisa['jquery'] = null; // To disable jQuery
$lisa['javascript_include'] = array();
//$lisa['javascript_include'] = array('js/main.js'); // To add extra javascript files



/**
 * Google analytics.
 *
 */
$lisa['google_analytics'] = 'UA-22093351-1'; // Set to null to disable google analytics

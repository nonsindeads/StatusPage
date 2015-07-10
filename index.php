<?php

/*
  Plugin Name: Zero-One - Status
  Plugin URI: https://coming.soon
  Description: HTML5 Radio Player
  Version: 0.1
  Author: Simon Glashauser alias D3Rnonsinn
  Author URI: https://yaaf.de
 */


function show_zerostatus() {
   require_once('code.php');
}


function cf_showstatus() {
    ob_start();
    show_zerostatus();

    return ob_get_clean();
}

add_shortcode('insert-status', 'cf_showstatus');
?>
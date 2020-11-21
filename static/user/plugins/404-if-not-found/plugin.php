<?php
/*
Plugin Name: 404 if not found
Plugin URI: https://github.com/YOURLS/404-if-not-found/
Description: Send a 404 (instead of a 302) when short URL is not found
Version: 1.1
Author: Ozh
Author URI: https://yourls.org/
*/

// No direct call
if( !defined( 'YOURLS_ABSPATH' ) ) die();

// 'keyword' provided ('abc' in 'http://sho.rt/abc') but not found
yourls_add_action('redirect_keyword_not_found', 'ozh_404_if_not_found');

// 'keyword+' provided but this isnt an existing stat page
yourls_add_action('infos_keyword_not_found', 'ozh_404_if_not_found');

// 'keyword' not provided: direct attempt at http://sho.rt/yourls-go.php or -infos.php
yourls_add_action('redirect_no_keyword', 'ozh_404_if_not_found');
yourls_add_action('infos_no_keyword', 'ozh_404_if_not_found');

// Display a default 404 not found page
function ozh_404_if_not_found() {
    yourls_status_header(404);
    require_once('/var/www/blog/not-found/index.html'); // full path to your error document
    die();
}

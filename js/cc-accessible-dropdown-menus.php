<?php
/*
Plugin Name:  ccAccessibleDropdownMenus
Plugin URI:   http://www.coolfields.co.uk
Description:  Makes dropdown menus in default WordPress theme keyboard accessible              
Version:      0.1
Author:       Graham Armfield
Author URI:   http://www.coolfields.co.uk

*/
function writeScriptFile() {
	 
	$path = get_stylesheet_directory_uri() . '/js/';
//   $path = WP_CONTENT_URL.'/js/'.str_replace(basename( __FILE__),"",plugin_basename(__FILE__));
    echo '<script src="'.$path.'cc-accessible-dropdown-menus.js" type="text/javascript"></script>';
    echo '<script type="text/javascript"></script>';
}

add_action('wp_footer', 'writeScriptFile');


function reviseStyles() {
   $strHtml = '<style type="text/css">
   /* Extra styles to allow keyboard accessibility of dropdown menus in default Wordpress theme */
   #access ul ul { 
      display: block;
      margin-left:-9999px;
   }
   
   #access a:focus,
   #access ul ul :focus {
   	outline:1;
	background:#e1e1e1;
	color:#373737;
   }
   
   #access li.hover > a,
   #access ul ul .hover > a {
   	outline:1;
	background:#e1e1e1;
	color:#373737;
   }
   
   #access ul li.hover > ul,
   #access ul a:focus+ul {
   	margin-left:0;
   }
</style>';

   echo $strHtml;
}
add_action('wp_head', 'reviseStyles');

?>
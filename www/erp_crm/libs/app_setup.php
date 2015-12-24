<?php

/**
 * Project: Guestbook Sample Smarty Application
 * Author: Monte Ohrt <monte [AT] ohrt [DOT] com>
 * Date: March 14th, 2005
 * File: guestbook_setup.php
 * Version: 1.0
 */

define(SMARTY_PATH, "/usr/local/www/hosts/smarty/");

$current_include_path = ini_get("include_path");
ini_set($include_path.":".SMARTY_PATH);

require_once('Smarty.class.php');

class SmartyManager {
  function &smartyInitialize($path) {
     //detect if the proper directories exist
     if(!is_dir( $path."/templates/") )
	 	die("SmartyManager::smartyInitialize Error: create templates directory");
     if(!is_dir( $path."/templates_c/") )
	 	die("SmartyManager::smartyInitialize Error: create template_c directory");
     if(!is_dir( $path."/cache/") )
	 	die("SmartyManager::smartyInitialize Error: create cache directory");
     if(!is_dir( $path."/config/") )
	 	die("SmartyManager::smartyInitialize Error: create config directory");

     if(!is_writeable( $path."/templates_c/") )
	 	die("SmartyManager::smartyInitialize Error: templates_c needs to writable");

     $smarty = new Smarty();
     $smarty->template_dir = $path."/templates/";
     $smarty->compile_dir = $path."/templates_c/";
     $smarty->cache_dir = $path."/cache/";
     $smarty->config_dir = $path."/config/";
	 
     return $smarty;
  }
  
}
      
?>
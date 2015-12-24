<?php

/**
 * Project: ERP/CRM
 * Author: Waldir Borba Junior
 * Date: Dezembro 15, 2005
 * File: index.php
 * Version: 1.0
 */

// define our application directory
define('APP_DIR', '/usr/local/www/hosts/erpcrm/');
// define smarty lib directory
define('SMARTY_DIR', '/usr/local/www/hosts/smarty/');
// include the setup script
include(APP_DIR . 'libs/app_setup.php');

// create guestbook object
$guestbook =& new Guestbook;

// set the current action
$_action = isset($_REQUEST['action']) ? $_REQUEST['action'] : 'view';

switch($_action) {
    case 'add':
        // adding a guestbook entry
        $guestbook->displayForm();
        break;
    case 'submit':
        // submitting a guestbook entry
        $guestbook->mungeFormData($_POST);
        if($guestbook->isValidForm($_POST)) {
            $guestbook->addEntry($_POST);
            $guestbook->displayBook($guestbook->getEntries());
        } else {
            $guestbook->displayForm($_POST);
        }
        break;
    case 'view':
    default:
        // viewing the guestbook
        $guestbook->displayBook($guestbook->getEntries());        
        break;   
}

?>
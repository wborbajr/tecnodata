<?php

// ---------------------------------------------------------------------------
//
// PIVOT - LICENSE:
//
// This file is part of Pivot. Pivot and all its parts are licensed under
// the GPL version 2. see: http://www.pivotlog.net/help/help_about_gpl.php
// for more information.
//
// ---------------------------------------------------------------------------

// First line defense.
if (file_exists(dirname(__FILE__)."/first_defense.php")) {
	include_once(dirname(__FILE__)."/first_defense.php");
	block_refererspam();
	block_postedspam();
}

define('LIVEPAGE', TRUE);

include_once("pv_core.php");
include_once("modules/module_search.php");

$starttime = getmicrotime();

// 2004/11/01 =*=*= JM - log searches
// 2004/11/24 =*=*= JM - corrections thanks to jim
// log_search();

function log_search() {
    global $Paths;

    $search_str = trim($_POST['search']." ".$_GET['q']);

    // is there anything to save?
    if( '' != $search_str) {
        // set path
        $log_path =  $Paths['pivot_path'].'db/' ;

        // is there an old to load?
        if( file_exists( $log_path.'log_search.php' )) {
            // file exists - load if writable
            if( is_writable( $log_path.'log_search.php' )) {
                $log_search_array = load_serialize( $log_path.'log_search.php' );
                $log_exists = TRUE;
            }
        }
        // just in case
        if( !is_array( $log_search_array )) { $log_search_array = array(); }
        // add to the log
        $log_search_array[$search_str]++;

        if(( isset( $log_exists ))&&( TRUE==$log_exists )) {
            // easy route - now serialize and save
            save_serialize( $log_path.'log_search.php',$log_search_array );
        } else {
            // else attempt to make it - suppress errors
            @makedir( $log_path,0700 );
            @touch( $log_path.'log_search.php' );
            @chmod( $log_path.'log_search.php',0777 );
            // final check
            if( is_writable( $log_path.'log_search.php' )) {
                save_serialize( $log_path.'log_search.php',$log_search_array );
            }
        }
    }
}
// END

// Select the first weblog, if weblog not specified.
if (isset($Pivot_Vars['w']) && ($Pivot_Vars['w'] != "")) {
	if ($Pivot_Vars['w'] == "_all_") {
		reset ($Weblogs);
		$Current_weblog = (key($Weblogs));
	} else {
		$override_weblog = weblog_from_para($Pivot_Vars['w']);
		if (!$override_weblog) {
			piv_error("Weblog doesn't exist","Selected weblog \"".
			htmlspecialchars($Pivot_Vars['w'])."\" doesn't exist.");
		} else {
			$Current_weblog = $override_weblog;
		}
	}
} else {
	reset ($Weblogs);
	$Current_weblog = (key($Weblogs));
}

// Display the search results.
LoadWeblogLanguage($Weblogs[$Current_weblog]['language']);
$db = new db;
$result = "\n<div class='pivot-search-result'>\n";
$result .= search_result();
$result .= "<!-- Search took ".timetaken() . " seconds -->\n";
$result .= "</div>\n";
unset($db->entry);

// Set the template for the tags page
if (!isset($Pivot_Vars['t']) || empty($Pivot_Vars['t'])) {
	if (isset($Weblogs[$Current_weblog]['extra_template']) && ($Weblogs[$Current_weblog]['extra_template']!="") ) {
		$template = $Weblogs[$Current_weblog]['extra_template'];
	} else {
		$template = $Weblogs[$Current_weblog]['archive_template'];
	}
} else {
	$template = $Pivot_Vars['t'];
}

$template_html = load_template($template);
$template_html = replace_subweblogs_templates($template_html,$result);

if (!($template_html)) {
	piv_error("Template error", "Could not load template file, <i>".
		htmlspecialchars($template)."</i>, because it doesn't exist.");
} else {
	$output=$template_html;
	$output=parse_step4($output);
}

echo ($output);
flush();


?>

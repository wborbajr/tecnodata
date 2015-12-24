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


// don't access directly..
if(!defined('INPIVOT')){ exit('not in pivot'); }

// Lamer protection
$currentfile = basename(__FILE__);
require dirname(dirname(__FILE__))."/lamer_protection.php";

// for now, we'll just use the xml / flat-file module..
if (file_exists(realpath($pivot_path). '/modules/module_db_xml.php')) {
	include_once( realpath($pivot_path). '/modules/module_db_xml.php');
}

/**
 * class db
 * The API for accessing the database.
 *
 * @package pivot
 */
class db {

/**
 * Initialises the db.
 *
 * @param boolean $loadindex Whether the index should be loaded.
 */
function db($loadindex=TRUE) {

	// Initialise the object for the lower-level functions
	$this->db_lowlevel = new db_lowlevel($loadindex);

}

/**
 * Gets a list of entries by date.
 *
 * @param int $amount
 * @param int $offset
 * @param mixed $filteronuser
 * @param mixed $filteroncat
 * @param boolean $order Defines whether the results are in chronological
 *    order (false means reverse order).
 * @param string $field
 * @param string $status Return only entries with this status.
 * @return array
 */
function getlist($amount, $offset=0, $filteronuser="", $filteroncat="", $order=TRUE, $field="", $status="") {
	
	return $this->db_lowlevel->getlist($amount, $offset, $filteronuser, $filteroncat, $order, $field, $status);

}

/**
 * Gets a list of entries by from the end of the list.
 *
 * @param int $amount
 * @param mixed $filteronuser
 * @param mixed $filteroncat
 * @param boolean $order Defines whether the results are in chronological
 *    order (false means reverse order).
 * @param string $status Return only entries with this status.
 * @return array
 */
function getlist_end($amount, $filteronuser="", $filteroncat="", $order=TRUE, $status="") {

	return $this->db_lowlevel->getlist_end($amount, $filteronuser, $filteroncat, $order, $status);

}

/**
 * Gets the entries that were created between $start_date and $stop_date.
 *
 * @param string $start_date
 * @param string $stop_date
 * @param mixed $filteronuser
 * @param mixed $filteroncat
 * @param boolean $order Defines whether the results are in chronological
 *    order (false means reverse order).
 * @param string $status Return only entries with this status.
 * @return array
 */
function getlist_range($start_date, $stop_date, $filteronuser="", $filteroncat="", $order=TRUE, $status="") {

	return $this->db_lowlevel->getlist_range($start_date, $stop_date, $filteronuser, $filteroncat, $order, $status);

}

/**
 * Gets the codes for the entries that were created between $start_date and $stop_date.
 *
 * @param string $start_date
 * @param string $stop_date
 * @param mixed $filteronuser
 * @param mixed $filteroncat
 * @param boolean $order Defines whether the results are in chronological
 *    order (false means reverse order).
 * @return array
 */
function getcodes_range($start_date, $stop_date, $filteronuser="", $filteroncat="", $order=TRUE) {

	//debug("getcodes_range - params: $start_date, $stop_date, $filteronuser, $filteroncat");
	return $this->db_lowlevel->getcodes_range($start_date, $stop_date, $filteronuser, $filteroncat, $order);

}

/**
 * Gets an array of archives.
 *
 * Reads or creates/updates "db/ser-archives.php".
 *
 * @param boolean $force tells if "db/ser-archives.php" should be updated
 * @return array
 */
function get_archive_array($force=FALSE) {

	return $this->db_lowlevel->get_archive_array($force);

}

/**
 * Gets the number of entries
 * @return int
 */
function get_entries_count() {

	return $this->db_lowlevel->get_entries_count();

}


/**
 * Gets the code of the next entry.
 *
 * @param int $num 
 * @return int
 */
function get_next_code($num=1) {
	return $this->db_lowlevel->get_next_code($num);
}


/**
 * Gets the code of the previous entry.
 *
 * @param int $num 
 * @return int
 */
function get_previous_code($num=1) {
	return $this->db_lowlevel->get_previous_code($num);
}



/**
 * Rebuilds the index, if necessary.
 */
function generate_index() {

	if ($this->db_lowlevel->need_index()) {

		$this->db_lowlevel->generate_index();

	} else {

		echo "this database does not need an index.<br />";

	}

}

function unread_entry($code) {
	global $entriescache, $cachedcount, $loadcount;

	if (isset($entriescache[$code])) {
		unset($entriescache[$code]);
	}

}

/**
 * Tells if the entry exists.
 *
 * @param int $code The code/id of the entry.
 * @return boolean
 */
function entry_exists($code) {
	return $this->db_lowlevel->entry_exists($code);
}


/**
 * Retrieves a full entry as an associative array, and returns it.
 * 
 * @param int $code
 * @param boolean $force Forces read from disk, not using cache.
 * @return array
 */
function read_entry($code, $force=FALSE) {
	global $entriescache, $cachedcount, $loadcount;
	
	// Use this if you don't want to cache entries
	//$this->entry = $this->db_lowlevel->read_entry($code);
	
	// This is used for caching entries, so we don't have to acces disk so much.
	if (isset($entriescache[$code]) && ($entriescache[$code]['code'] == $code) && ($force==FALSE) ) {
		$cachedcount++;
		//debug("entry ".$code." from cache ($loadcount)");
		$this->entry = $entriescache[$code];
	} else {
		$loadcount++;
		$this->entry = $this->db_lowlevel->read_entry($code, $force);
		//debug("entry ".$code." was loaded ($loadcount)");
		$entriescache[$code] = $this->entry;
	}
	
	// cache no more than 200 entries, to keep memory from going insane..
	if (count($entriescache) > 200 ) {
		// we remove the first entry, assuming that is the one that is least likely to be needed again.
		$unsh = array_shift($entriescache);
		//debug("remove entry ".$unsh['code']." from cache ($loadcount)");
	} 
	

	return $this->entry;

}

/**
 * Sets the current entry to the contents of $entry.
 *
 * Returns the inserted entry as it got stored in the database with
 * correct code/id and Word HTML stripped off.
 *
 * @param array $entry The entry to be inserted
 * @return array
 */
function set_entry($entry) {
	global $entriescache, $serialize_cache, $loadcount;


	if (is_word_html($entry['introduction'])) {
		echo "<p>You pasted text directly from Microsoft Word. Some of the markup might be lost</p>";
		$entry['introduction'] = strip_word_html($entry['introduction']);
	}

	if (is_word_html($entry['body'])) {
		echo "<p>You pasted text directly from Microsoft Word. Some of the markup might be lost</p>";
		$entry['body'] = strip_word_html($entry['body']);
	}

	$entry['introduction'] = strip_scripting($entry['introduction']);

	$this->entry = $this->db_lowlevel->set_entry($entry);

	// also, change it in the entry cache
	//unset($entriescache); //[$entry['code']] = $entry;
	//unset($serialize_cache);

	//echo "<pre>";
	//print_r($this->db_lowlevel->entry_index);
	//echo "</pre>";

	return $this->entry;

}

/**
 * Deletes the current entry
 */
function delete_entry() {
	global $entriescache, $cachedcount, $loadcount;

	if (isset($this->entry['code'])) {
		unset($entriescache[$this->entry['code']]);
	}

	$this->db_lowlevel->delete_entry();

}

/**
 * Saves the current entry.
 *
 * Returns true if successfully saved. Current implementation
 * (in module_db_xml.php) seems to return true no matter what.
 *
 * @param boolean $update_index Whether to update the date index.
 * @return boolean
 */
function save_entry($update_index=TRUE) {
	
	return $this->db_lowlevel->save_entry($update_index);

}

/**
 * Gets the date for an entry
 * 
 * @param int $code
 * @return string
 */
function get_date($code) {

	return $this->db_lowlevel->get_date($code);

}

/**
 * Switches to writing-disallowed mode.
 */
function disallow_write() {
	$this->db_lowlevel->disallow_write();
}


/**
 * Switches to writing-allowed mode.
 */
function allow_write() {
	$this->db_lowlevel->allow_write();
}

// end of class
}



?>

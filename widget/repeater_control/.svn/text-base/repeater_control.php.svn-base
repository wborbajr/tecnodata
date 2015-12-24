<?php
include ('htmlparser.php');

// Create instance of our Repeater Control
$_Repeater = new Repeater_Control();

// Add callback
ob_start(array(&$_Repeater, 'process'));


Class Repeater_Control {
	var $_arrays = array();

	function process($content) {
		// Find the tags
		preg_match_all('/\<php:repeater([^>]*)\>(.*?)\<\/php:repeater\>/is', $content, $matches);

		// Loop through each tag
		for ($i=0; $i < count($matches['0']); $i++) {
			$html = $matches['0'][$i];
			$this->_process_tag(&$content, $html);
		}

		return $content;
	}

	function bind($name, $data) {
		// Make sure arrays property exists
		if (!isset($this->_arrays) OR !is_array($this->_arrays)) {
			$this->_arrays = array();
		}

		// Check if another array with this name doesn't already exist
		if (isset($this->_arrays[$name]) AND is_array($this->_arrays[$name])) {
			trigger_error ('Unable to bind array `' . htmlentities($name) . '`, already exists.');
			return false;
		}

		// Save array
		$this->_arrays[$name] = $data;

		return true;
	}

	function _process_tag(&$content, $tag_html) {
		// Parse tag
		$parser = new HTML_Parser();
		$output = $parser->parse($tag_html);

		// XML Error?
		if ($parser->xml_error == true) {
			$error = 'XML Error: ' . $parser->xml_error_string . ' on line ' . $parser->xml_error_line_number;
			$content = str_replace($html, $error, $content);
			return false;
		}

		// Get tag structure and innerHTML
		$tag = $output['0'];
		$innerHTML = $tag['innerhtml'];

		// Check array attribute
		if (empty($tag['attr']['ARRAY'])) {
			// No array, return error
			$error = 'Array attribute not set - unable to use Repeater Control';
			$content = str_replace($tag_html, $error, $content);
			return false;
		}

		$array = $tag['attr']['ARRAY'];

		// Check if array exists
		if (!isset($this->_arrays[$array]) OR !is_array($this->_arrays[$array])) {
			// No array, return error
			$error = 'Invalid array, not binded - unable to use Repeater Control';
			$content = str_replace($tag_html, $error, $content);
			return false;
		}

		// Loop through array
		$new_html = '';
		foreach ($this->_arrays[$array] as $key => $value) {
			// Copy innerHTML
			$html = $innerHTML;

			// Parse children
			$html = $this->_parse_subtags($html, $tag, $key, $value);

			$new_html .= $html;
		}

		// Replace custom tag with new HTML
		$content = str_replace($tag_html, $new_html, $content);
	}

	function _parse_subtags($html, $tag, $key, $value) {
		// Any children?
		if (!isset($tag['children']) OR !is_array($tag['children'])) { return $html; }

		foreach ($tag['children'] as $child) {
			// Is a key tag?
			if ($child['name'] == 'KEY') {
				$html = str_replace ('<key></key>', $key, $html);
			}

			// Is a value tag?
			if ($child['name'] == 'VALUE') {
				$html = str_replace ('<value></value>', $value, $html);
			}


			// Do children of this child
			$html = $this->_parse_subtags($html, $child, $key, $value);

		}

		return $html;
	}

}

?>
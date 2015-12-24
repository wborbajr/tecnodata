<?

function EmptyOrNull($String) {
	$return = false;
	if(!empty($String) && (isset($String)) && ($String == "")){
		$return = true;
	}
	
	return $return;
}

?>
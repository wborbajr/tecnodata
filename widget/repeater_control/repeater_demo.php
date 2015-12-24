<?php
include ('repeater_control.php');

$data = array(
		'Dennis' => 'Pallett',
		'John' => 'Smith',
		'James' => 'Williams',
		'David' => 'Moore',
		'Paul' => 'Wilson',
		'Mark' => 'Jones',
		'George' => 'Allen',
		'Brian' => 'Hall',
		'Will' => 'Carter',
		'Ronald' => 'Scott'
		);

// Bind data to Repeater Control
$_Repeater->bind('data', $data);


?>
<php:repeater array="data">
	<strong>Name: </strong><key /><br />
	<strong>Surname: </strong><value /><br /><br />
</php:repeater>
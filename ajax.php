<?php
/*do whatever you like in here 
for this example i only create an array to return back
you can receive parameters, connect to DB etc..
*/
$test = array(
		0 => array(
			'name'=>'name',
			'iso'=>'NM',
			'id'=>'45'
			),
		1 => array(
			'name'=>'name2',
			'iso'=>'NM2',
			'id'=>'453'
			),
		3 => array(
			'name'=>'name3',
			'iso'=>'SD3',
			'id'=>'4522'
			),
		4 => array(
			'name'=>'name44',
			'iso'=>'SE',
			'id'=>'4234'
			),
	);
	echo json_encode($test);
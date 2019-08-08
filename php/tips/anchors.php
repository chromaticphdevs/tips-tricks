<?php
	include_once('functions/get_link.php');
	
	$attr = [
		['name' => 'username'],
		['security' => 'level1']
	];
	$extra = array(
		'.text-danger' ,
		'#main_link',
		'_blank',
		$attr
	);

	$anc = anchor('link.php' , 'Some technique' , 'Tutorial for techniques' , $extra);


	echo $anc;
<?php
	$user_list = array(
		1 => 'nasrul',
		'hazim',
		'mohamad',
		'mahdin',
		'othman',
		'ahmad'
	);

	var_dump($user_list);

	$users_info = array(
		array(
			'firstname' => 'nasrul',
			'lastname' => 'hazim',
			'email' => 'nasrulhazim.m@gmail.com'
		),
		array(
			'firstname' => 'nasrul',
			'lastname' => 'hazim',
			'email' => 'nasrulhazim.m@gmail.com'
		),
		array(
			'firstname' => 'nasrul',
			'lastname' => 'hazim',
			'email' => 'nasrulhazim.m@gmail.com'
		),
		array(
			'firstname' => 'nasrul',
			'lastname' => 'hazim',
			'email' => 'nasrulhazim.m@gmail.com'
		),
		array(
			'firstname' => 'nasrul',
			'lastname' => 'hazim',
			'email' => 'nasrulhazim.m@gmail.com'
		),
		array(
			'firstname' => 'nasrul',
			'lastname' => 'hazim',
			'email' => 'nasrulhazim.m@gmail.com'
		),
		array(
			'firstname' => 'nasrul',
			'lastname' => 'hazim',
			'email' => 'nasrulhazim.m@gmail.com'
		),
		array(
			'firstname' => 'nasrul',
			'lastname' => 'hazim',
			'email' => 'nasrulhazim.m@gmail.com'
		),
		array(
			'firstname' => 'nasrul',
			'lastname' => 'hazim',
			'email' => 'nasrulhazim.m@gmail.com'
		),
		array(
			'firstname' => 'nasrul',
			'lastname' => 'hazim',
			'email' => 'nasrulhazim.m@gmail.com'
		),
		array(
			'firstname' => 'nasrul',
			'lastname' => 'hazim',
			'email' => 'nasrulhazim.m@gmail.com'
		),
		array(
			'firstname' => 'nasrul',
			'lastname' => 'hazim',
			'email' => 'nasrulhazim.m@gmail.com'
		),
		array(
			'firstname' => 'nasrul',
			'lastname' => 'hazim',
			'email' => 'nasrulhazim.m@gmail.com'
		)
	);
	
	// get first user's firstname
	d($users_info[0]['firstname']);

	// get last user's firstname
	d($users_info[(count($users_info) - 1)]['firstname']);	
	
	// var_dump($user_list);
	// var_dump($users_info);
	// $count = 0;
	// while ($count <= 10) {
	// 	// display what's in index -nth($count)
	// 	if(isset($user_list[$count])) {
	// 		d($user_list[$count]);
	// 	}

	// 	// do increment on counting
	// 	$count++;
	// }

	// for ($i=0; $i < count($user_list); $i++) { 
	// 	d($user_list[$i]);
	// }

	// foreach ($user_list as $key => $value) {
	// 	d('At index: ' . $key . ' - ' . $value);
	// }
	echo '<ol>';
	foreach ($users_info as $key => $value) {
		//d('At index '. $key . ' contained: ' . $value['email']);
		/*var_dump($value);*/
		echo '<li>'.$value['firstname'] . ' ('.$value['email'].')'.'</li>';
	}
	echo '</ol>';
	function d($value) {
		echo '<pre>'.$value.'</pre>';
	}
?>
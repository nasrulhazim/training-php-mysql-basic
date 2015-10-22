<?php 
	//h('some heading',2);

	$info = array();
	$info[] = e('heading','h1',array(),true);
	$info[] = e('heading','h2',array(),true);
	$info[] = e('heading','h3',array(),true);
	$info[] = e('heading','h4',array(),true);
	$info[] = e('heading','h5',array(),true);
	$info[] = e('heading','h6',array(),true);

	//var_dump($info);

	// echo join('<hr>',$info);

	// display paragraph
	function p($value) {
		//echo '<p>'.$value.'</p>';
		e($value, 'p');
	}

	// display heading
	function h($value, $number = 1) {
		if($number < 0 || $number > 6) {
			$number = 1;
		}
		e($value, 'h'.$number, array('class' => 'heading-'.$number));
	}

	function e($string, $element, $attributes = array(), $return = false) {

		$attribute_string = '';

		// if attributes not empty
		if(!empty($attributes)) {
			foreach ($attributes as $key => $value) {
				$attribute_string .= $key . '="' . $value . '" ';
			}
		}

		$return_value = '<'.$element.' '.$attribute_string.'>'.$string.'</'.$element.'>';

		if($return == true) {
			return $return_value;
		} else {
			echo $return_value;
		}
	}

	function penambahan($a, $b) {
		return $a + $b;
	}

	function login($username, $password) {
		// 1. sanitazie arguments
		// 2. validate argumenets
		// 3. prepare statements
		// 4. excute sql

		// if ok, start session, return true
		// 		else return false
	}

	function logout() {
		// destroy session
		// redirect to main page
	}

	$user_list = array(
		'nasrul',
		'hazim',
		'mohamad',
		'mahdin',
		'othman',
		'ahmad'
	);

	$name = 'nasrul bin hazim bin mohamad bin mahdin bin othman bin ahmad';

	// p(join(' bin ', $user_list));
	// p(implode(' bin ', $user_list));

	// p(count($user_list));

	// var_dump(explode(' bin ', $name));

	$result_a = penambahan(1,1);
	$result_b = penambahan(1,10);
	// p($result_a);
	// p($result_b);
?>	 
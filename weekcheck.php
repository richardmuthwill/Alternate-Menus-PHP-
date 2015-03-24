<?php

function mN($n, $m) { // mN: Menu Number (Should we use the menu for week 1 or 2)
	return ((floor(DateTime::createFromFormat('d/m/Y', '23/06/2014')->diff(DateTime::createFromFormat('d/m/Y', $n))->days / 7) % $m) + 1);
}

function cS($t, $d, $n) { // cS: Create String (Create a single row for the menu)
	return '<h4>' . $n . '. ' . $t . '</h4><p>' . $d . '</p><br />'; // $n: Number, $t: Title ,$d: Description
}

function dT($d) { // dT: Day Today (What way is it?)
	$aW = array(
		"Sunday",
		"Monday",
		"Tuesday",
		"Wednesday",
		"Thursday",
		"Friday",
		"Saturday"
	);
	return $aW[$d];
}

function dM($n, $w) { // dM: Days Menu (Create the current days menu)
	$s = '<div><h3> Todays Buffé - ' . dT($n) . '</h3>';
				
	if ($w == 1) { // Week 1
		if ($n == 1) {
			$s .= cS('Kaeng Ped (stew)', 'steak, red curry, bamboo shoots, coconut milk, bell pepper, carrot, thai basil', 1);
			$s .= cS('Phad medmamuang (wok)', 'Chicken, cashew, onion, pineapple, peppers, oyster', 2);
			$s .= cS('Phad Thai with rice noodles (wok) (vegetarian)', 'eggs, cabbage, leeks, carrots, peanuts', 3);
			$s .= cS('Springrolls (vegetarian)', 'With sweet and sour', 4);
		}

		if ($n == 2) {
			$s .= cS('Kaeng panang (stew)', 'Beef, panan curry, coconut milk, lime leaves, pepper, onion, carrot', 1);
			$s .= cS('Phad mee luang (wok) (vegetarian)', 'vegetables in soy sauce, egg noodles', 2);
			$s .= cS('Phad pong Kra ree (wok)', 'Chicken, yellow curry, eggs, onions, leeks, peppers, carrot', 3);
			$s .= cS('Thai wings', 'Deep fried wings', 4);
		}

		if ($n == 3) {
			$s .= cS('Kaeng Massaman (stew)', 'Beef, massaman curry, onions, peppers, coconut milk, carrots, peanuts', 1);
			$s .= cS('Phad Bai kaprao (wok)', 'Chicken, fresh chilli, oyster sauce, onions, peppers, bamboo shoots, hot basil', 2);
			$s .= cS('Phad mee luang (wok) (vegetarian)', 'vegetables in soy sauce, egg noodles', 3);
			$s .= cS('Satay kai', 'Kyckilng skewers with peanut sauce', 4);
		}

		if ($n == 4) {
			$s .= cS('Kaeng kraree (stew)', 'steak, yellow curry, coconut milk, onion, carrot, bell pepper, bamboo shoot', 1);
			$s .= cS('Phadnamprik phaow (wok)', 'Chicken, chilli paste, oyster sauce, thai basil, carrot, onion, peppers, cabbage', 2);
			$s .= cS('Phad Thai with rice noodles (wok)', 'eggs, cabbage, leeks, carrots, peanuts', 3);
			$s .= cS('Deep fried shrimp', 'With sweet and sour', 4);
		}

		if ($n == 5) {
			$s .= cS('Kaeng khew hvann (stew)', 'Steak, green curry, bamboo shoots, carrot, zucchini, thai basil', 1);
			$s .= cS('Phad king (wok)', 'Chicken, ginger, onion, leek, carrot, bell pepper, mushrooms, oyster sauce', 2);
			$s .= cS('Phad mee luang (wok) (vegetarian)', 'vegetables in soy sauce, egg noodles', 3);
			$s .= cS('Spring rolls (vegetarian)', 'With sweet and sour', 4);
		}
	}

	if ($w == 2) { // Week 2
		if ($n == 1) {
			$s .= cS('Kaeng koa sapprod (stew)', 'Chicken, red curry, pineapple, various vegetables, coconut milk', 1);
			$s .= cS('Phad ruam middle', 'shrimp, oyster, various vegetables', 2);
			$s .= cS('Phad mee luang (wok) (vegetarian)', 'vegetables in soy sauce, egg noodles', 3);
			$s .= cS('Spring rolls (vegetarian)', 'With sweet and sour', 4);
		}

		if ($n == 2) {
			$s .= cS('Kaeng panang (stew)', 'Beef, panan curry, coconut milk, lime leaves, pepper, onion, carrot', 1);
			$s .= cS('Phad medmamuang (wok)', 'Chicken, cashew, onion, pineapple, peppers, oyster', 2);
			$s .= cS('Phad Thai with rice noodles (wok) (vegetarian)', 'eggs, cabbage, leeks, carrots, peanuts', 3);
			$s .= cS('Deep fried chicken wings', 'With sweet and sour', 4);
		}

		if ($n == 3) {
			$s .= cS('Kaeng Massaman (stew)', 'Beef, massaman curry, onions, peppers, coconut milk, carrots, peanuts', 1);
			$s .= cS('Phad Bai kaprao (wok)', 'Chicken, fresh chilli, oyster sauce, onions, peppers, bamboo shoots, hot basil', 2);
			$s .= cS('Phad mee luang (wok) (vegetarian)', 'vegetables in soy sauce, egg noodles', 3);
			$s .= cS('Satay Kai "," with peanut', 4);
		}

		if ($n == 4) {
			$s .= cS('Kaeng khew hvann (stew)', 'Steak, green curry, bamboo shoots, carrot, zucchini, thai basil', 1);
			$s .= cS('Phad Preu hvann (wok)', 'Chicken, different vegetables', 2);
			$s .= cS('Phad mee luang (wok) (vegetarian)', 'vegetables in soy sauce, egg noodles', 3);
			$s .= cS('Deep fried shrimp', 'With sweet and sour', 4);
		}

		if ($n == 5) {
			$s .= cS('Kaeng kraree (stew)', 'steak, yellow curry, coconut milk, different vegetables', 1);
			$s .= cS('Phad Prik (wok)', 'Chicken sauce, chilli sauce, oyster sauce, various vegetables', 2);
			$s .= cS('Phad mee luang (wok) (vegetarian)', 'vegetables in soy sauce, egg noodles', 3);
			$s .= cS('Fried chicken', 'With sweet and sour ', 4);
		}
	}

	$s .= '</div>';
	return $s;
}

date_default_timezone_set('Europe/Belgrade');
$h = date('G'); // $h: Hour (0-23)
$d = date('N'); // $d: Day (1-7)

if ($h >= 10 && $h <= 14 && $d >= 1 && $d <= 5) { // Only show the buffe menu on Mon - Fri between 10:00 and 14:59
	echo dM($d, mN(date("d/m/Y"), 2)); // Run the entire script
}

// Debugging Options

if ($_GET['lunch'] == "true") { // http://www.example.com/script.php?buffe=true&day=3&week=2 Will show the second week's Wednesday menu
	echo dM($_GET['day'], $_GET['week']);
}

?>
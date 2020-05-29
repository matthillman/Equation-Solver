<?php
		require_once("src/Solve.php");
		$equation = "xe2 + 5x - 20 = 8x + 20";
		$errors = true;
		$equation = new Solver\Solve($equation, $errors);
		//$var = $equation->solution()[0];
		$solutions = $equation->solution()[1];
		print_r($solutions);
?>
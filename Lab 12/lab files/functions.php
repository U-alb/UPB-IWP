<?php

	function sum($a, $b) {
		return $a + $b;
	}

	function question() {
        $a = rand(1,50);
        $b = rand (1,50);
        $sum = sum($a, $b);

        echo $a . " + " . $b . " = <br><br>";

        $form = "";
        $form .= "<input type='text' name='answer'>";
        $form .= "<input type='hidden' name='check' value='{$sum}'> <br><br>";

        echo $form;
	}
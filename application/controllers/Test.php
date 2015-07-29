<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}


	public function index(){
		$length = 0;
		$sub_length = 0;
		$other_length = 0;
		$biggest_length = 0;
		/*
		$numbers = array(4, 2, 1, 3, 2, 5, 7, 2, 4, 5, 2, 3, 1, 13, 6);
		$numbers = array(2, 2);
		$numbers = array(4, 1, 2, 4);
		*/
		$numbers = array(4,6,7,5,2,1,2,1,3,2,3,3,4,3,2,4,5,6,1,4,1,5,1,3,5,4,5,4,5,1,1,1,2,34,5,5,5);
		while(count($numbers)) {
			$length = count($numbers);
			$other_length = $this->intMax($numbers);
			$sub_length = $length + $other_length;
			array_shift($numbers);
			if ($biggest_length < $sub_length) {
				$biggest_length = $sub_length;
			}
		}
		echo "Mine: $biggest_length";
		echo "<br /> JB's: ";
		echo $this->answer();
	}

	public function intMax($numbers) {
		$stupid = 0;
		foreach ($numbers as $number) {
			if ($number == 1) {
				return $stupid;
			}
			$stupid++;
		}
		return $stupid;
	}

	public function answer(){
		/*
		$test = array(4, 2, 1, 3, 2, 5, 7, 2, 4, 5, 2, 3, 1, 13, 6);
		$test = array(4, 1, 2, 4);
		$test = array(4,6,7,5,2,1,2,1,3,2,3,3,4,3,2,4,5,6,1,4,1,5,1,3,5,4,5,4,5,1,1,1,2,34,5,5,5);
		*/
		$test = array(2, 2);
		echo $this->maximumDiameter($test);
	}

	private function maximumDiameter($array){
		$biggest = $this->getNormalDepth($array) + $this->getSecondDepth($array);
		while (count($array)) {
			array_shift($array);
			$sub_length = $this->getNormalDepth($array) + $this->getSecondDepth($array);
			$biggest = $sub_length > $biggest ? $sub_length : $biggest;
		}

		return $biggest;
	}

	private function getNormalDepth($array) {
		return count($array);
	}

	private function getSecondDepth($array) {
		$nb = 0;
		foreach ($array as $value) {
			if ($value == 1) {
				return $nb;
			}
			$nb++;
		}
	}

}


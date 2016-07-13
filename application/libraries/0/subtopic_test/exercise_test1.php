<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exercise_test1 {

	// Class constructor
	function __construct() {

		$CI =& get_instance();
		$CI->load->helper('maths');
		$CI->load->helper('language');
		$CI->load->helper('draw');

		return;
	}

	function Generate($level) {

		$numbers = ['one', 'two', 'three'];
		$num = rand(0,2);

		$question = 'What is the name of the following number?$$'.strval($num+1).'$$<span class="label label-success">egyik arányosságot sem</span> ';
		$correct = $numbers[$num];
		$solution = $correct;

		return array(
			'question'  => $question,
			'correct'   => $correct,
			'solution'  => $solution,
			'type'		=> 'text'
		);
	}
}

?>
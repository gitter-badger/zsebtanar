<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Differencia {

	// Class constructor
	function __construct() {

		$CI =& get_instance();
		$CI->load->helper('maths');
		$CI->load->helper('language');
		
		return;
	}

	// Define member of arithmetic & geometric series
	function Generate($level) {

		$d = rand(-2*$level,2*$level);
		$a0 = rand(-2*$level,2*$level);

		// // Original exercise
		// $d = -7;
		// $a0 = 32;

		$a1 = $a0 + $d;
		$a2 = $a1 + $d;
		$question = 'Egy számtani sorozat három egymást követő tagja ebben a sorrendben $'.$a0.';x$ és $'.$a2.'$. ';

		$question .= 'Határozza meg a sorozat differenciáját!';
		$correct = $d;
		$solution = '$'.$correct.'$';

		$page[] = 'A számtani sorozatban minden tagot úgy tudunk kiszámolni, hogy hozzáadunk $\textcolor{blue}{d}$-t (a <i>differenciát</i>) az előző számhoz:$$a_1\xrightarrow{+\textcolor{blue}{d}}a_2\xrightarrow{+\textcolor{blue}{d}}a_3$$';
		$page[] = 'Tehát ha az első szám $'.$a0.'$, akkor'
			.'$$\begin{eqnarray}a_1&=&'.$a0.'\\\\'
			.' a_2&=&a_1+\textcolor{blue}{d}='.$a0.'+\textcolor{blue}{d}=x \\\\ '
			.' a_3&=&a_2+\textcolor{blue}{d}=a_1+2\cdot \textcolor{blue}{d}='.$a2.'\end{eqnarray}$$';
		$page[] = 'Látjuk, hogy ha '.The($a2).' $'.$a2.'$-'.From($a2).' kivonunk $'.$a0.'$-'.Dativ($a0)
			.', a differencia $2$-szeresét kapjuk:$$2\cdot\textcolor{blue}{d}='.$a2.'-'.($a0<0 ? '('.$a0.')' : $a0).'='
			.($a0<0 ? $a2.'+'.abs($a0).'=' : '').strval(2*$d).'$$';
		$page[] = 'Ha ezt a különbséget elosztjuk $2$-vel, megkapjuk a $\textcolor{blue}{d}$ értékét:'
			.'$$\textcolor{blue}{d}='.strval(2*$d).':2='.$d.'$$';
		$page[] = 'Tehát a $d$ értéke <span class="label label-success">$'.$d.'$</span>.';
		$hints[] = $page;
				
		return array(
			'question' 	=> $question,
			'correct' 	=> $correct,
			'solution'	=> $solution,
			'hints'		=> $hints,
			'youtube'	=> 'KPNSHAfLbCc'
		);
	}
}

?>
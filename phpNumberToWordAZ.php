<?php

function toWords($number) {
    $narr = str_split($number);
		$narrlen = count($narr);
		$nt = "";
		
		$numnames = array(
			array("", " bir yüz", " iki yüz", " üç yüz", " dörd yüz", " beş yüz", " altı yüz", " yeddi yüz", " səkkiz yüz", " doqquz yüz"),
			array("", " bir", " iki", " üç", " dörd", " beş", " altı", " yeddi", " səkkiz", " doqquz"),
			array("", " on", " iyirmi", " otuz", " qırx", " əlli", " altmış", " yetmiş", " səksən", " doxsan"),
		);
		
		
		for($pos=$narrlen; $pos>0; $pos--) {
			$n = intval($narr[$narrlen - $pos]);			
			$index = $pos % 3;			
			$nt = $nt . $numnames[$index][$n];
			
			if($pos == 4) {
				$nt = $nt . " min";
			}
			
			if($pos == 7) {
				$nt = $nt . " milyon";
			}
        }
        
		return trim($nt);
}
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
        
        $thousands = array("", " min", " milyon", " milyard", " trilyon", " kvadrilyon", " quintillion", " sekstilon", " septilyon", " oktalon", " nonalon", " dekalon", " endekalon", " dodekalon");
		
		
		for($pos=$narrlen; $pos>0; $pos--) {
			$n = intval($narr[$narrlen - $pos]);			
			$index = $pos % 3;			
			$nt = $nt . $numnames[$index][$n];
			
			if($pos % 3 == 1) {
				$nt = $nt . $thousands[$pos/3];
			}
        }
        
		return trim($nt);
}

$num = rand(1,100000000000000000);
echo($num);
echo "<br>";
echo toWords($num);
echo "<br>";
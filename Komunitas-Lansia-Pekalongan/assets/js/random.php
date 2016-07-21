<?php
function random($panjang){
   $angka = '1234567890';
   $abjad = 'abcdefghijklmnopqrstuvwxyz';
   $string = '';
   $integ = '';
   $code = '';
   $qr = '';
   for($i = 0; $i < 9; $i++) {
	   $pos = rand(0, strlen($abjad)-1);
	   $string .= $abjad{$pos};
   }

   for($i = 0; $i < 9 ; $i++) {
		$pos = rand(0, strlen($angka)-1);
		$integ .= $angka{$pos};
   }

   for($i = 0; $i < $panjang; $i++) {
	   $qr = rand(0, 17);
		if($qr > 9){
			$pos = rand(0, 8);
			$code .= $string{$pos};
		}else{
			$pos = rand(0, 8);
			$code .= $integ{$pos};
		}
   }
   
   
    return $code;
}

?>
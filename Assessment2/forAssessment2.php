<?php 
// define variables and set to empty values
$str = "";
$temp = "";

if(!empty($_POST["str"])) {
	//put string into variable str.
	$str = $_POST["str"]; 
	echo "Input string is: ''" . $str . "''.";
	echo "<br><br>";  

	$answer = FirstReverse($str); 
	echo "The answer is: ''" . $answer . "''.";
}
else {
	echo "Input not found.";
}

function FirstReverse($str) { 
	if ( strlen($str) <= 1 ) {
		return $str;
	}
	else{
		for($i=strlen($str)-1, $j=0; $j<$i; $i--, $j++) { 
			$temp = $str[$i]; 
			$str[$i] = $str[$j]; 
			$str[$j] = $temp; 
		} 
		return $str; 
	}
} 
?> 

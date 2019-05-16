<?php 
// define variables and set to empty values
$str = "";
$strReceive = "";
$temp = "";

if(!empty($_POST["str"])) {
	//put string into variable strReceive.
	$strReceive = $_POST["str"]; 
	echo "Input string is: " . $strReceive . ".<br><br>";

	$arr = str_split($strReceive);
	//implode function returns a string from the elements of an array
	$answer = implode(AlphabetSoup($arr)); 
	echo "The answer is: " . $answer . ".";
}
else {
	echo "Input not found.";
}

function AlphabetSoup($str){ 
  if ( count($str) <= 1 ) {
    return $str;
  }
  else {
	for ( $i = 0; $i < count($str); $i++) {
        for ( $j = $i + 1; $j < count($str); $j++) {
            if ($str[$j] < $str[$i]) {
                //StringManiulation
				$temp = $str[$i]; 
				$str[$i] = $str[$j]; 
				$str[$j] = $temp; 
            }
        }
    }  
	return $str;
  }
} 
?> 

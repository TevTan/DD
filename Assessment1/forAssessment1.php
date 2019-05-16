<?php 
// define variable and set to empty values
$num = "";

if(is_numeric($_POST["num"])) {
	//cast and put int into variable num.
	$num = (int)$_POST["num"]; 

	echo "Input number is: " . $num . ".";
	echo "<br><br>";  

	function FirstFactorial($num){ 
		if($num < 0){   
			return " 'Error: input is less than 0' ";   
		} 
		elseif($num <= 1){   
			return 1;   
		}   
		else{   
			return $num * FirstFactorial($num - 1);   
		}   
	} 
	  
	$answer = FirstFactorial($num); 
	echo "The answer is: " . $answer . ".";
}
else {
	echo "Error: Input not found or its not numeric.";
}
?> 

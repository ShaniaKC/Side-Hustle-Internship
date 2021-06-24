<!DOCTYPE html>
<html>
<body>
<h1>Side Hustle BackEnd Week 1 Task</h1>
<h2>Range of numbers test cases output: </h2>
<?php
//function to output a range of numbers as an array
function rangeOf($start, $end) {
	if($start < $end){
	$ans = array();
	while($start <= $end) {
		array_push($ans, $start);
		$start++;
	}
	return $ans;
	}
	else{return 'Invalid Range';}
/*
// I use print and echo here instead of return to allow you see the output, if you remove the multi line comment markers and comment out the return statements.
	print_r($ans);echo"<br>";
	}
	else{echo 'Invalid Range <br>';}
*/
}
// test cases for range of numbers
rangeOf(1,3);
rangeOf(3,8);
rangeOf(2,6);
rangeOf(9,3);
//test cases for range end here

echo "<h2> Sum of Numbers test cases output: </h2>";

//function for the sum of numbers in an array
function sumOfNumbers($arr) {
	$ans = 0;
	foreach($arr as $num){
		$ans += $num;
	}
	return $ans;
/*
	// I use echo here instead of return to allow you see the output, if you remove the multi line comment markers and comment out the return statements.
	echo $ans."<br>";
*/
}
sumOfNumbers(array(1,2,3));
sumOfNumbers(array(4,8,3));
sumOfNumbers(array(3,2,6));
sumOfNumbers(array(8,5,2));
?>
</body>
</html>
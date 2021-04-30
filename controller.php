<?php


function getLastEdgeMaxRange($n1, $n2)
{
  
  if ((!is_int($n1) || !is_int($n2)) || ($n1 <= 0 || $n2 <= 0)) {
    return "Invalid, sides must be integer greater than 0";
  }

  
  $result = $n1 + $n2 - 1;

  return $result;
}


function countAllOnes($number)
{

  if(!is_int($number) || $number <= 0 ){
    return "Invalid number! It must be integer greater than 0";
  }

  // Initialize count
  $count = 0;

  while ($number) {
    $count += $number & 1;
    $number >>= 1;
  }

  return $count;
}


//2 parts must be joined with “/” separator.
function joinParts($part1, $part2){

  $part1 = str_replace("/", "", $part1);
  $part2 = str_replace("/", "", $part2);

  // Concatenate parts
  $result = $part1 . "/" . $part2;

  return $result;
}


// Function that validates if a given number is a Sastry number.
function isSastry($number)
{
  $result = "FALSE";

  // If number is not an integer or less than 1
  if(!is_int($number) || $number <= 0 ){
    return "Invalid number must be integer greater than 0";
  }

  // Concatenation
  $number = $number . $number + 1;
  
  // Check if the concatenated numbers are perfect squared
  $sr = sqrt($number);
  if(($sr - floor($sr)) == 0){
    $result = "$number > TRUE ";
  }

  return  $result;
}

 ?>
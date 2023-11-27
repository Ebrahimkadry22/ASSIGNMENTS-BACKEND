<?php
//1- Write a PHP script that records 3 digits and prints the total of the first two digits multiplied by the third digit.


// function totalandmultipliued ($num1,$num2,$num3){
//     $total = $num1 + $num2 ;
//     $multip = $total * $num3 ;
//     return $multip ;
// }
// echo totalandmultipliued(5,20,10);

//----------------------------------------

//2- A program that calculates the size of a box whose length and width are fixed with a value of 5 and 10 and the height is variable (size = length x width x height)

// function sizeofbox($height) {
//     $size= 5 * 10 * $height ;
//     return $size ;
// }
// echo sizeofbox(rand(1,10));

//-----------------------------------------

//3-Write a PHP script that takes a number integer representing the hours and converts it to seconds.

// function getseconds ($hours) {
//     $second  = $hours * 60 * 60 ;
//     // $second  = $hours * 3600;

//     return $second ; 
// }

// $hours = rand(1,12);

// echo $hours. "<br>" . getseconds($hours);

//------------------------------------------

//4-Write a PHP script that calculates the Area of a Triangle store the base and height Print the area.

// function getarea($base , $height) {
//     $b = $base ;
//     $h = $height;

//     $area = ($b * $height ) / 2 ;
//     return $area ;
// }

// echo getarea(5 , 10);

//------------------------------------------

//5-Write a PHP script that takes the age in years and prints the age in days.

// function getdays($age) {
//     $days = $age * 365 ;
//     return $days ;
// }

// echo getdays(1);

//--------------------------------------------


//                          EraaSoft Learn by practice

// Get the length of this sentence. 
// Get the length of this sentence without spaces.  
// Get the number of words in this sentence. 
// Check if this word (by) exists in the string or not.
// Get the word (EraaSoft) from the string and print it.
// Remove the word (by) from the string and print the string with and without (by)

// $sentence = "EraaSoft Learn by practice";
// echo strlen($sentence). "<br>";
// $trim = str_replace(' ' , '' , $sentence);
// echo strlen($trim). "<br>";
// echo str_word_count($sentence). "<br>";
// echo str_contains($sentence , 'by'). "<br>";
// $eraa = substr($sentence , 0 ,strpos($sentence , " "));
// echo $eraa . "<br>";
// $notby = str_replace("by" , "" , $sentence);
// echo $notby . "<br>";
// echo $sentence . "<br>";

//-----------------------------------------------

//                 $string_one = "Eraa", 
//                 $string_two = "Soft";

// $string_one = "Eraa";

// $string_two = "Soft";

// //Make a new variable called (Full_string) that concatenate string_one and string_two

// $full_string = $string_one.$string_two;

// //Compare the full_string and this string (EraaSoft).

// echo  $full_string == "EraaSoft" ? "true" : "false" ;
// echo "<br>";

// // Write a PHP script to split the following string.
// // Sample string: 'ErraSoft' 
// //           Expected Output: Er/ra/So/ft

// $split = substr(chunk_split($full_string, 2, '/'), 0, -1);
// echo $split . "<br>";

//--------------------------------------------------


//Write a PHP script that stores the number as a variable and checks if it is odd or even.

// function check_odd_or_even ($num) {
//     $n = $num ;
//     if($n % 2 == 0 ) {
//         echo "$n is even";
//     }else {
//         echo "$n is odd";

//     }
// }
// check_odd_or_even(5);

//---------------------------------------------------


// Write a PHP script that stores the string as a variable and checks if the length is odd or even.

// function checklenght_odd_or_odd ($length) {
//     $l = $length ;
//     if($l % 2 == 0  ) {
//         echo "$l length is even";
//     }else {
//         echo "$l length is odd";

//     }
// }
// checklenght_odd_or_odd(10);

//----------------------------------------------------

//                                  $description = "no pain , no gain ";

// $description = "no pain , no gain ";

// //Check from this string o If the string has “gain” Print ( success word ) o If the string has ( peen ) Print ( success word )  Else ( wrong word )

// if(str_contains($description , "gain")){
//     echo"success word";
// }
// elseif(str_contains($description , "peen")){
//     echo"success word";
// }
// else {
//     echo"wrong word";

// }


//------------------------------------------------------

//A Boolean is a data type that has only two values true or false. These values often correspond to 1 (true) or 0 (false). When a 1 or a 0 is used, it's called an int Boolean. Write a PHP script that stores an int Boolean and outputs its opposite(1 becomes 0 and 0 becomes 1). (1 becomes 0 and 0 becomes 1).

// $bool = true ;

// if($bool) {
//     $bool=false;
//     echo "$bool fales";
// }
// else {
//     $bool = true ;
//     echo "$bool true";

// }

//--------------------------------------------------------

//Write a PHP script that stores a word and determines Is the Word is Singular or Plural? (A plural word is one that ends in "s".)

// function plural_word ($string) {
//     if(substr($string, -1) == "s") {
//         echo "plural word <br>";
//     }else{
//         echo "Not plural word <br>";

//     }
// }

// plural_word("sass");
// plural_word("ibrahim");

//---------------------------------------------------------

//Make a calculator with these operations using if and else if
// o Submission 
// o Subtraction 
// o Multiplication 
// o Division 
// o Power 
// o Modulus

// function calculator ($num1 , $num2 , $operation) {
//     if($operation == "+") {
//         return $num1 + $num2 ;
//     }
//     elseif($operation == "-") {
//         return $num1 - $num2 ;
//     }
//     elseif($operation == "*") {
//         return $num1 * $num2 ;
//     }
//     elseif($operation == "/") {
//         return $num1 / $num2 ;
//     }
//     elseif($operation == "**") {
//         return $num1 ** $num2 ;
//     }
//     elseif($operation == "%") {
//         return $num1 % $num2 ;
//     }else {
//         return "not operations" ;
//     }
// }

// echo calculator(5 , 6 , "+");

//--------------------------------------------------


?>
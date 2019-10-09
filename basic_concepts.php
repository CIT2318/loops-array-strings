<!DOCTYPE HTML>
<html>
<head>
<title>Loops, Arrays and Strings</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
<body>
<?php

/*
Q1) Loops
a) Modify the following code so that the loop outputs the numbers 5-15
b) Re-write the loop as a while loop
*/

for($i=1;$i<=10;$i++)
{
    echo "{$i}<br>";
}


/*
Q2) Arrays
a) Output the entire contents of the $countries array using a var_dump() statement
b) Using this array, write a single  echo statement that outputs 'China, India, Indonesia and Pakistan are all in Asia'
c) Output the entire contents of the array as an HTML list using a foreach loop
d) Uncomment the line that declares the $moreCountries array. Join the two arrays together  Do some research using php.net
http://php.net/manual/en/function.array-merge.php. Output the joined array using a var_dump() statement.
e) Sort this larger list of countries into reverse alphabetical order (do some research into sorting functions) and output the result using a foreach loop.
*/

//$moreCountries=["Nigeria","Bangladesh","Russia","Japan"];
$countries=["China","India","USA","Indonesia","Brazil","Pakistan"];

/*
Q3) Associative Arrays
a) Using the $films array, write an echo statement that outputs 'Spirited Away was released in 2001'
b) Add another film to the array, using an echo statement, output some of new the film's details
c) Using a foreach loop display the details for all the films
d) Output the data from (c) using an HTML table.
*/

$films=[
    ["title"=>"Jaws", "year"=>"1975", "duration"=>124,"certificate"=>"15"],
    ["title"=>"Spirited Away", "year"=>"2001", "duration"=>124,"certificate"=>"PG"],
    ["title"=>"Winter's Bone", "year"=>"2010", "duration"=>100,"certificate"=>"15"]
];

/*
Q4) Strings
a) Using the following string, write an echo statement that outputs the fifth character in the string
b) Use the strlen() (http://php.net/manual/en/function.strlen.php) function to output the length of the string
c) Convert the string to lowercase (http://php.net/manual/en/function.strtolower.php) and output it.
d) Use the substr() (http://php.net/manual/en/function.substr.php) function to output the word 'Web'
*/

$moduleStr="CIT2318 Web Design and Programming";

?>

</body>
</html>

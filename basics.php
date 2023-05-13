<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website</title>
</head>
<body>
    This is my first PHP website

    <?php  
    ECHO "THis is the first code produced witht the help of PHP";

    // PHP is a dynamically typed language i.e we shouldn't have to define the variables that weather the variable is string, char or integer PHP will determine it automatically during the running(runtime)

    // It is not case sensitive language i.t we can also write echo as Echo or ECHO
    ?>

	<?php  
    define("Pi", 3.14);
    echo "<br>";
    ECHO "THis is the second code produced witht the help of PHP";
    echo "<br>";
	$variable1 = 34;
	$variable2 = 38;
	echo $variable1;
	echo $variable2;
	Echo $variable1+ $variable2;
    echo "<br>";

    // Operators

    $a = 34;
    $b = "34";
    echo "When a===b i.e it will check for the type also along with the value ";
    echo var_dump($a===$b);
    echo "<br>";
    echo "When a==b i.e it will check for the value only ";
    echo var_dump($a==$b);
    // echo();
    echo "<br>";
    echo var_dump($a);
    echo "<br>";
    echo var_dump($b);
    echo "<br>";
    echo var_dump($a=$b);
    echo "<br>";
    echo(Pi); // the value of Pi is defined in the very first line and we can use it whenever we want
    echo "<br>";
    $array = array("Akash", 34, 4.12, "family");
    echo var_dump($array[2]);
    echo "<br> Echo count(array_name) will give the count of the number of elements in the array and in this array the number of elemets is ";
    echo count($array);
    echo "<br>";


    for($a = 0; $a<10; $a++) {
        echo $a;
        echo "<br>";
    }

    foreach($array as $value){
        echo $value;
        echo "<br>";
    }
    $string = "This is a boy";
    echo "to combine 2 or more echo in one echo we can use . after every echo element complete or before every element to be added";
    echo "<br> The length of the string is ". strlen($string)." characters";
    echo "<br> The words in the string is ". str_word_count($string)." words";
    echo "<br> The reverse form of the string is '". strrev($string) . "'";
    echo "<br> The word boy starts from the position ". strpos($string, 'boy'). ". (if element is present it will show the starting position otherwise it will show nothing)";

    echo "<br> After replacing 'is' from every word our new string is ". str_replace("is", "at", $string);
    ?>

    <!--Whatever "code" written inside php is not shown to the user means the backend written by the maker by using PHP is not visible to the user.  -->
</body>
</html>
<?php
// $a=5;
// $b=12;
// $c=10;
// $d=7;
// $e=($a*$b)+$c*$d/$a;
// print($e);

// answer 74



// FunctionmodifyArray($array)
// {
// foreach ( $array as & $value)
// {
// $value = $value + 2;
// }
//     $value = $value + 3;

// }

// $array = array(1,2,3);
// ModifyArray($array);
// print_r($array);




// $a = array (1,2,3);
// $b = array(1>2,2>3,0>1);

// $b = array( 'a'>1, 'b'> 2, 'c> 3');
// var_dump($a==$b);
// var_dump($a===$b);
// var_dump($a==$c);

// answer false false false



// $x=25;
// while($x<10)
// {
//     $x=30;
// }
// print($x);

// answer 25



// echo (int)((0.1+0.7)*10);

// answer 7




// switch (1) {
//     case '1':print("Book Details");
//     case '2':print("Book Autho");
        
    
//     default:print("Missing Book");
       
       
// }




// $x=0;
// $i;
// for($i=0;$i<5;$i++)
// {
//     $x+=$i;
// }

// print($x);

// answer:10


// $a=20;
// function myfunction($b){
//     $a=30;
//     global $a,$c;
//     return $c=($b+$a);
// }
// print myfunction(40)+$c;

// answer 120



// $x = true and false and true;
// var_dump($x);

// answer true




?>

question1

ALTER TYPE enum_type ADD VALUE 'new_value'; -- appends to list
ALTER TYPE enum_type ADD VALUE 'new_value' BEFORE 'old_value';
ALTER TYPE enum_type ADD VALUE 'new_value' AFTER 'old_value';


question2

SELECT*FROM< table_name >WHERE
    < date_field > BETWEEN DATE_SUB(NOW(), INTERVAL 30 DAY)
AND NOW();
$i=(bool)"100";
var_dump($i);


question3
Casting 7.3 to int, bool, string and float

$var = 7.3;
var_dump(
 (int) $var,    // 7
 (bool) $var,   // true
 (string) $var, // "7.3"
 (float) $var   // 7.3
);


question4
CASCADE : Delete or update the row from the parent table and automatically delete or update the matching rows in the child table. ... RESTRICT : Rejects the delete or update operation for the parent table. Specifying RESTRICT (or NO ACTION ) is the same as omitting the ON DELETE or ON UPDATE clause.z



question5
Insert line breaks where newlines (\n) occur in the string:

<?php
echo nl2br("One line.\nAnother line.");
?>
The browser output of the code above will be:

One line.
Another line.


question6
ini_set('max_execution_time', 120); // 120 (seconds) = 2 Minutes
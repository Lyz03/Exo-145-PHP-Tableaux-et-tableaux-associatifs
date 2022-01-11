<?php

// Premiere ligne

$fruits = array("Apple", "Banana", "Orange");

echo count($fruits) ;
echo $fruits[1];

//Deuxieme ligne


$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

echo "<br><br>Ben is " . $age["Ben"] . " years old.<br><br>";

foreach($age as $x => $y) {
    echo "<br>Key=" . $x . ", Value=" . $y;
}



//Troisieme ligne

$colors = array("red", "green", "blue", "yellow");

sort($colors);
foreach ($colors as $value) {
    echo "<br>" . $value;
}

rsort($colors);
foreach ($colors as $value) {
    echo "<br>" . $value;
}


// Quatrieme ligne

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
sort($age);
foreach ($age as $value) {
    echo "<br>" . $value;
}







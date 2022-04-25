<?php

/**
 * include input file
 * assort the original arrray
 * @var $num (given the array value)
 * @return null
 */

include("Input_Telephone_Grid.php");


asort($ran);

$num = $ran;
echo "[";
for($i = 1; $i <= 3; $i++)
{   
    for($j =1; $j <= $num; $j++)
    {
        $multiplication= ($i * $j);
        echo "[".$j.",".$i.",".$multiplication."]";
        if ($j === 3) {
            echo "]"."<br>";
        }
    }
    
}

?>

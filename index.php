<?php

echo date('l jS \of F Y h:i:s A');

function fact($x) 
{
    $return = 1;
    for ($i=2; $i <= $x; $i++) {
        $return = gmp_mul($return, $i);
    }
    return $return;
}

echo gmp_strval(fact(100000)) . "\n";

echo date('l jS \of F Y h:i:s A');
?>
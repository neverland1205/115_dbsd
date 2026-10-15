<?php

function printHeader() {
    echo "<h3>SID: C113181108</h3>";
    echo "<h3>NAME:林宥任</h3>";
    echo "<h3>EX02</h3>";
}
function rateExchange($amount, $rate) 
{
    $result = $amount * $rate;
    return $result;
}

$rate = rateExchange(100,32);
echo"Money: " . $rate;

printHeader();
echo "Money: " . $rate;
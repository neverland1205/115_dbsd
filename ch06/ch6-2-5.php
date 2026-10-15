<?php

function printHeader() {
    echo "<h3>SID: C113181108</h3>";
    echo "<h3>NAME:林宥任</h3>";
    echo "<h3>EX04</h3>";
}
printHeader();
$test = 15;
var_dump($test);
unset($test);
var_dump(isset($test) ? $test : null);
#NAME: 林宥任<BR>
#SID: C113181108<BR>
EX03<HR>
<BR>
<?php
$result = 0;
$n = 0;
while ($result <= 10) {
    $result = $result * $n;
    echo "|" . $result;
    $n = $n + 1;
    echo "|" . $n;
    $result++;
}
$n = $n - 1;
echo "result: " . $result;
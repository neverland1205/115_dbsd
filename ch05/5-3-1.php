#NAME: 林宥任<BR>
#SID: C113181108<BR>
EX02<HR>
<BR>
<?php
$total = 0;
for ( $i = 1; $i <= 10; $i++ ) {
print "|". $i;
$total += $i;
}
echo "<HR>";
echo "Total: ". $total;
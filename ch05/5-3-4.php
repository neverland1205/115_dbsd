#NAME: 林宥任<BR>
#SID: C113181108<BR>
EX04<HR>
<BR>
<?php
$total = 0;
for ( $i = 1; $i <= 15; $i++ ) {
if ( ($i % 2) == 1 ) continue;
print "|" . $i;
$total += $i;
}
<?php
$m=5;
$n=6;

$value=1;
for($i=1;$i<=$n;$i++)

{
for($j=0;$j<$m;$j++)
{

echo "$value";
$value=$value+$n;
}
$value=$i+1;
echo"<br>";
}
?>

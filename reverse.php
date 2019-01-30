
<html>
<body>
<?php
echo "program for reverse number<br>";
$num=2386;
$revnum=0;
while($num>1)
{
$rem=$num%10;
$revnum=($revnum*10)+$rem;
$num=$num/10;
}
echo"\n\rReverse number for 2342 is :$revnum<br>";
?></body>
</html>
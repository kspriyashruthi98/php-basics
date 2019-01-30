<?php
$string1=array();
$string2=array();
$string1=readline("enter string1:");
$string2=readline("enter string2:");
for($i=0;$string1[$i]==$string2[$i]&&$string1[$i]=='\0';$i++);
if($string1[$i]<$string2[$i])
{
    echo"string1 is less than string2";

}
elseif($string1[$i]>$string2[$i])
{
    echo"string1 is greater than string2";
    
}
else
{
    echo"string1 is equal to string2";
    
}
?>


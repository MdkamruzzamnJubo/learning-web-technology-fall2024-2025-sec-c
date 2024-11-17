<?php
$a = 5;
$b = 4;
$c = 6;

echo"a = $a \n";
echo"b = $b \n";
echo"c = $c \n";

if($a >= $b && $a >= $c)
{
    echo"largest number is a = $a\n";
}
elseif($b >= $a && $b >= $c)
{
    echo"largest number is b = $b\n";
}
else
{
    echo"largest number is c = $c\n";
}

?>

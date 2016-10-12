<?php

/*
$val = "Hello its me";
echo strtoupper($val);
echo "\n";
echo strtolower($val);
echo "\n";
echo ucfirst($val);
echo "\n";
echo lcfirst($val);

$val2 = "123456789";
echo substr($val2, -1);echo "\n";
echo substr($val2, -2);echo "\n";
echo substr($val2, -3);echo "\n";
echo substr($val2, 3, -2);echo "\n";
echo substr($val2, -3, 1);

$v = "Hello World";
echo ucfirst(substr($v, 2, -5));
echo substr($v, 6, -2);

$r = "Hello World";
$r2 = substr ($r, -5);
echo lcfirst(strtoupper($r2));
*/
$val="Saya punya anjing 1 dan kucing 2";
$a=substr($val, 18, -12);

$k=substr($val, 31);

$jml=$a+$k;

$an=ucfirst(substr($val, 11, -8));

$kn=ucfirst(substr($val, -8));

$hsl=substr($val, 11);

echo $an.$kn." jumlahnya = ".$jml;

?>
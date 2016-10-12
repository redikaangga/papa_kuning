<?php
// Nomer 1.
echo "No. 1 \n";
for($s=1; $s<=10; $s++)
{
	if($s<=5)
	{
		echo "Bilangan ke - ".$s."\n\n";
	}
}
echo "\n\n";
//Nomer 2.
echo "No. 2\n";
for($d=1; $d<=10; $d++)
{
	if($d>=6)
	{
		echo "Bilangan ke - ".$d."\n\n";
	}
}
echo "\n\n";
//Nomer 3.
echo "No.3\n";
for($t=1; $t<=10; $t++)
{
	if($t%2==1)
	{
		echo $t." - Bilangan Ganjil\n";
	}else
	{
		echo $t."\n";
	}
}
echo "\n\n";
//Nomer 4.
echo "No.4\n";
for($e=1; $e<=10; $e++)
{
	if($e%2==0)
	{
		echo $e." - Bilangan Genap\n";
	}else
	{
		echo $e."\n";
	}
}
echo "\n\n";
//Nomer 5.
echo "No.5\n";
for($l=1; $l<=50; $l++)
{
	if($l%4==0)
	{
		echo $l." - Bilangan kelipatan 4\n\n";
	}
}
echo "\n\n";
?>